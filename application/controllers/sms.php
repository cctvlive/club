<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sms extends CI_Controller {

	public $app_id = '331659090000040090';// 应用ID
	public $app_secret = '007d4e080f03a68fe777a9426c5cd9c0';// 应用的密钥
	public $timestamp=''; //时间戳，格式为：yyyy-MM-dd hh:mm:ss
	public $iphone='';
	public $code; //验证码
	public $codelen = 6; //验证码长度
	public $charset = "0123456789"; //验证码的随机因子
	public $exp_time=''; //验证码有效期长度，单位是分钟，可以为空，默认有效2分钟
	public $grant_type='client_credentials'; //Client Credentials授权模式
	public $access_token_url = 'https://oauth.api.189.cn/emp/oauth2/v2/access_token';// 获取access_token的URL
	public $send_url = 'http://api.189.cn/v2/dm/randcode/sendSms';// 自定义短信发送信息的URL
	public $token_url = 'http://api.189.cn/v2/dm/randcode/token';// 获取token的URL
	
	public function __construct(){
		parent::__construct();
		$iphone='13065735552'; //设置发送的手机号码
		$this->checkPhone($iphone);

	}
	public function index()
	{
		header("Content-Type: text/html; charset=utf-8"); //设置字符编码
		$sms=$this->createCode();
		if (!$sms['res_code']){ //从发送短信的方法中返回的obj中读取发送成功与否的标识
			echo "尊敬的用户，您的验证码为:".$this->getCode()."本验证码2分钟内有效，感谢您使用[车柚信息公司]";
		}else{
			echo '短信发送失败！';
		}
	}
	
//------------------------------
	//检查参数
	public function checkPhone($iphone){
		if (preg_match('/^(1[0-9]{10})$/',$iphone)){
			$this->iphone=$iphone;
		}else{
			echo '手机号码格式不正确。';
			exit;
		}
	}
	//生成随机码
	public function createCode() {
		$_len = strlen($this->charset)-1;
		for ($i=0;$i<$this->codelen;$i++) {
			$this->code .= $this->charset[mt_rand(0,$_len)];
		}
	}
	//获取access_token
	public function getAccessKey() {
		$param['grant_type']= "grant_type=".$this->grant_type;
		$param['app_id'] = "app_id=".$this->app_id;
		$param['app_secret'] = "app_secret=".$this->app_secret;
		$plaintext = implode("&",$param);
		$result = $this->curl_post($this->access_token_url,$plaintext);
		$obj = json_decode($result);
		return $obj->access_token;
	}
	//获取Token
	public function getToken($access_token) {
		$param['app_id']= "app_id=".$this->app_id;
		$param['access_token'] = "access_token=".$access_token;
		$param['timestamp'] = "timestamp=".$this->timestamp;
		ksort($param);
		$plaintext = implode("&",$param);
		$param['sign'] = "sign=".rawurlencode(base64_encode(hash_hmac("sha1", $plaintext, $this->app_secret, $raw_output=True)));
		ksort($param);
		$this->token_url .= '?'.implode("&",$param);
		$result = $this->curl_get($this->token_url);
		$obj = json_decode($result);
		return $obj->token;
	}
	//cURL库抓网页,从一个链接上取数据(get方式)
	public function curl_get($url=''){
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}
	//cURL库抓网页,从一个链接上取数据(post方式)
	public function curl_post($url='', $postdata=''){
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}
	//获取验证码
	public function getCode() {
		return $this->code;
	}
	public function send() {
		$access_token=$this->getAccessKey();
		$token=$this->getToken($access_token);
		$dataurl = $_POST['url'];
		$param['app_id']= "app_id=".$this->app_id;
		$param['access_token'] = "access_token=".$access_token;
		$param['timestamp'] = "timestamp=".$this->timestamp;
		$param['token'] = "token=".$token;
		$param['iphone'] = "phone=".$this->iphone;
		$param['randcode'] = "randcode=".$this->code;
		if(!empty($this->exp_time)) $param['exp_time'] = "exp_time=".$this->exp_time;
		ksort($param);
		$plaintext = implode("&",$param);
		$param['sign'] = "sign=".rawurlencode(base64_encode(hash_hmac("sha1", $plaintext, $this->app_secret, $raw_output=True)));
		ksort($param);
		$str = implode("&",$param);
		$result = $this->curl_post($this->send_url,$str);
		$obj = json_decode($result);
		return $obj;
	}
	
	
	  

	

	

}

/* End of file sms.php */
/* Location: ./application/controllers/sms.php */