<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function  __construct(){
		parent::__construct();
		session_start();
	}
	public function index()
	{
		 $data = array();
		$data['css'][0] = "<link type='text/css' rel='stylesheet' href='".base_url()."assets/css/bootstrap.min.css'>";
		$data['css'][1] = "<link type='text/css' rel='stylesheet' href='".base_url()."assets/css/font-awesome.min.css'>";
		$data['css'][2] = '<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />';
		$data['css'][3] = "<link type='text/css' rel='stylesheet' href='".base_url()."assets/css/ace.min.css'>";
		$data['css'][4] = "<link type='text/css' rel='stylesheet' href='".base_url()."assets/css/ace-rtl.min.css'>";
		$data['title'] = '<title>登录页面 -杭州车柚信息科技公司</title>';
		
		$data['admin_1'] = '杭州车柚信息科技公司';
		$data['admin_2'] = '管理系统';
		$data['admin_3'] = '2015';
		
		$data['user_please'] = '请您使用您的账号进行登录';
		$data['your_data'] = '填写您的登陆数据:';
		$data['user_remember'] = '记住我';
		$data['login_using'] = '其他服务';
		$data['forgot_my_password'] = '忘记密码';
		$data['register'] = '注册';
		$data['login'] = '登陆';
		
		$data['user_new'] = '注册新的账号';
		$data['input_name'] = '用户名';
		$data['input_password'] = '密码';
		$data['input_password2'] = '再次输入密码';
		$data['refresh'] = '重置';
		$data['submit'] = '注册';

		$data['i_accept'] = '我接受';
		$data['user_agreement'] = '用户协议';
		
		
		$data['to_login'] = '前往登陆';
		$data['refresh_password'] = '重置密码';
		$data['user_email'] = '请填写您的邮件信息';
		$data['send_me'] = '通知我';

		$data['province'] = '省份';
		$data['sex'] = '性别';
		$data['QQ'] = 'QQ';
		$data['birthday'] = '生日';
		$data['wechat'] = '微信';
		$data['next'] = '继续';

		
		
		
		
		//$data['error_msg'] = $this->uri->segment(3, 0);
		$this->load->view('admin/_header_login',$data);
	    $this->load->view('admin/login',$data);
	    $this->load->view('admin/_footer_login');
	}
	/*依据条件查询所在组用户信息 ugroup_id*/
	public function user()
	{
		$this->load->model('admin/user_model');
		$select_user_result=$this->user_model->select_user_result();
		if($select_user_result){
			print_r($select_user_result);
			echo "测试通过";
			//测试通过
		}else{
			echo "oooo";
		}
		
		//$this->load->view('login');
	}
	/**
	 * 登陆
	 *
	 *
	 */
	function check_login()
	{
		//$data=$this->input->post();
		//print_r($data);
	
	
	
		$name = $this->input->post('name');
		$password = $this->input->post('password');
	
		$this->load->model('admin/admin_login_model');
		
		$_admin = $this->admin_login_model->check_admin($name);

	
		if ($_admin){
			//print_r($_user);
				
			$_SESSION['admin_name']=$_admin['name'];//写入session
			$_SESSION['ugroup_id']=$_admin['ugroup_id'];//写入session
			$_SESSION['admin_id']=$_admin['admin_id'];//写入session
			$_SESSION['club_id']=$_admin['club_id'];//写入session
			$_SESSION['admin_in']=TRUE;//写入session
			$_SESSION['admin_login_at']=$_admin['last_login_at'];//写入session
	
			$this->admin_login_model->update_last_login($_admin['admin_id']);//更新登陆信息
	
			redirect('home');//跳转到首页
		}else{
			echo "用户不存在或者密码错误";
			//redirect('login/index/');//跳转到登陆页面
		}
	
	
	}
	


	// ----------创建管理员----------------------------------------------------------
	
	function create()
	{
		$name=$data['name']=$this->input->post('name');
		$data['password']=$this->input->post('password');
		
		$data['email']=$this->input->post('email');

		 
		$this->load->model('admin/admin_login_model');
		 
		$admin_status=$this->admin_login_model->check_admin($data['name']);
		 
		if($admin_status != 1){/*echo "用户不存在";*/
	
			$create = $this->admin_login_model->create($data);
			if($create > 0){//echo "成功写入数据库, 跳转到成功页面或者跳转到个人中心";
			$_admin = $this->admin_login_model->check_admin($name);
	
	
		
				
			$_SESSION['admin_name']=$_admin['name'];//写入session
			$_SESSION['ugroup_id']=$_admin['ugroup_id'];//写入session
			$_SESSION['admin_id']=$_admin['admin_id'];//写入session
			$_SESSION['admin_in']=TRUE;//写入session
			$_SESSION['admin_login_at']=$_admin['last_login_at'];//写入session
	
			$this->admin_login_model->update_last_login($_admin['admin_id']);//更新登陆信息
			redirect('home/index');exit();
			}else {
				echo "注册失败!";
			}
	
		}else{echo "用户已存在";/*跳转到注册页面*/}
	
		
	}
		// --------------------------------------------------------------------
	
	/**
	 * 登出
	 *
	 *
	 */
	function logout()
	{
		$session=session_destroy();
		if ($session == TRUE){
		//	echo "注销成功！";
			redirect('admin/index');exit();
		}else {
			echo "退出失败";
		}
		
		//redirect('home');
	}
	
	
	
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */