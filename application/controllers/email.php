<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email extends CI_Controller {

	public function  __construct(){
		parent::__construct();
		session_start();
		
	}
	public function index()
	{
	
	$email=$this->input->post('email');

	if ($email){
		
		$this->to_http_email($email);
	
	
	}else{
		echo "请填写您注册的邮件地址！";
	}
	
	}
	
	public  function http_eamil(){
		$this->load->model('admin/admin_login_model');
		$email_time=$this->admin_login_model->emailtime($this->input->get('status'));
		if ($email_time){
			$this->to_email($email_time['email']);
		}
		
	}
	
	public function to_email($email){
		
		$this->load->library('email');//加载邮件类
		
		$this->load->model('admin/admin_login_model');
		$email_to=$this->admin_login_model->check_email($email);
		
		
		$config['protocol'] = 'smtp';//邮件发送协议
		
		$config['smtp_host'] = 'smtp.163.com';//SMTP服务器地址
		$config['smtp_user'] = 'z.243028755@163.com';//smtp用户账号
		$config['smtp_pass'] = 'cctv_243028755';//smtp密码
		$this->email->initialize($config);
		
		$this->email->clear();
		$this->email->from('z.243028755@163.com');//来自什么邮箱
		$this->email->to($email);//发到什么邮箱
		$this->email->subject('杭州车柚信息技术有限公司－找回密码');//邮件主题
		$this->email->message("用户名：".$email_to['name']."，密码：".$email_to['passwd']."。请使用你的密码进行登陆");//邮件内容
		$this->email->print_debugger();//返回包含邮件内容的字符串，包括EMAIL正文。用于调试
		if($this->email->send()){//发送email，根据发送结果，成功返回true,失败返回false,就可以用它判断局域
			echo '发送成功，请查看您的邮件';
		}else{
			echo '发送失败';
		}
	}
	
	public function to_http_email($email){
		$this->load->library('email');//加载邮件类
		$config['protocol'] = 'smtp';//邮件发送协议
	
		$config['smtp_host'] = 'smtp.163.com';//SMTP服务器地址
		$config['smtp_user'] = 'z.243028755@163.com';//smtp用户账号
		$config['smtp_pass'] = 'cctv_243028755';//smtp密码
		$this->email->initialize($config);
		$email_time=time();
		
	$http_email='<a href="http://localhost/ci/index.php?/email/http_eamil?status='.$email_time.'">点击验证</a>';
		$this->email->clear();
		$this->email->from('z.243028755@163.com');//来自什么邮箱
		$this->email->to($email);//发到什么邮箱
		$this->email->subject('杭州车柚信息技术有限公司－找回密码验证邮件');//邮件主题
		$this->email->message("您正在找回密码，请您，".$http_email."，如不是本人操作，请忽略本邮件！");//邮件内容
		$this->email->print_debugger();//返回包含邮件内容的字符串，包括EMAIL正文。用于调试
		if($this->email->send()){//发送email，根据发送结果，成功返回true,失败返回false,就可以用它判断局域
			echo '发送成功，请查看您的邮件';
			$this->load->model('admin/admin_login_model');
			$this->admin_login_model->email_time($email,$email_time);
		}else{
			echo '发送失败';
		}
	}
	
	public function ssl_email($email){
		$this->load->model('admin/admin_login_model');
		$email_data=$this->admin_login_model->check_email($email);
		
		// $email_email=$email_data['email'];
		print_r($email_data['email']);
		print_r($email_data['passwd']);
		//$this->to_email($email);
		
	}
}