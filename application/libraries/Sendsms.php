<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
Class Sendsms{
	var $CI;
	
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
	
	//构造方法
	
	public function __construct($params = array()){
		$CI =& get_instance();
		//$CI->checkPhone($iphone);
		date_default_timezone_set('Asia/Shanghai'); //设置时区，避免8小时的时间差
		$CI->timestamp = date('Y-m-d H:i:s');
		//$CI->createCode();
	}
	
	//检查参数
	public function checkPhone($iphone){
		if (preg_match('/^(1[0-9]{10})$/',$iphone)){
			$CI->iphone=$iphone;
		}else{
			echo '手机号码格式不正确。';
			exit;
		}
	}
	//生成随机码
	public function createCode() {
		$_len = strlen($CI->charset)-1;
		for ($i=0;$i<$CI->codelen;$i++) {
			$CI->code .= $CI->charset[mt_rand(0,$_len)];
		}
	}
	//获取access_token
	public function getAccessKey() {
		$param['grant_type']= "grant_type=".$CI->grant_type;
		$param['app_id'] = "app_id=".$CI->app_id;
		$param['app_secret'] = "app_secret=".$CI->app_secret;
		$plaintext = implode("&",$param);
		$result = $CI->curl_post($CI->access_token_url,$plaintext);
		$obj = json_decode($result);
		return $obj->access_token;
	}
	//获取Token
	public function getToken($access_token) {
		$param['app_id']= "app_id=".$CI->app_id;
		$param['access_token'] = "access_token=".$access_token;
		$param['timestamp'] = "timestamp=".$CI->timestamp;
		ksort($param);
		$plaintext = implode("&",$param);
		$param['sign'] = "sign=".rawurlencode(base64_encode(hash_hmac("sha1", $plaintext, $CI->app_secret, $raw_output=True)));
		ksort($param);
		$CI->token_url .= '?'.implode("&",$param);
		$result = $CI->curl_get($CI->token_url);
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
		return $CI->code;
	}
	public function send() {
		$access_token=$CI->getAccessKey();
		$token=$CI->getToken($access_token);
		$dataurl = $_POST['url'];
		$param['app_id']= "app_id=".$CI->app_id;
		$param['access_token'] = "access_token=".$access_token;
		$param['timestamp'] = "timestamp=".$CI->timestamp;
		$param['token'] = "token=".$token;
		$param['iphone'] = "phone=".$CI->iphone;
		$param['randcode'] = "randcode=".$CI->code;
		if(!empty($CI->exp_time)) $param['exp_time'] = "exp_time=".$CI->exp_time;
		ksort($param);
		$plaintext = implode("&",$param);
		$param['sign'] = "sign=".rawurlencode(base64_encode(hash_hmac("sha1", $plaintext, $CI->app_secret, $raw_output=True)));
		ksort($param);
		$str = implode("&",$param);
		$result = $CI->curl_post($CI->send_url,$str);
		$obj = json_decode($result);
		return $obj;
	}
}