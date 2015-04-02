<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 * @author sh
 * @copyright 2015.3.28
 */
/**
 * 登陆，注册，注销
 *
 *
 */
class Login extends  CI_Controller
{
	// 初始化
		function __construct() {
			parent::__construct();
			//配置文件获取应用根目录
			$this->base_url = $this->config->item("base_url");
			//加载地区表Model
			$this->load->model('M_area');
		}
    
    // --------------------------------------------------------------------

    /**
	 * 登陆，
	 *
	 *
	
    function index()
    { 
		
	    $data = array();
		//$data['css'][0] = "<link type='text/css' rel='stylesheet' href='".base_url()."css/login.css'>";
		//$data['css'][1] = "<link type='text/css' rel='stylesheet' href='".base_url()."css/jq_login.css'>";
	    $data['title'] = '用户登录';

		$data['error_msg'] = $this->uri->segment(3, 0);
	    $this->load->view('login',$data);
    }
     */	
    // ----------------注册 界面----------------------------------------------------
    function register()
    {
    
    	$data = array();
    	//$data['css'][0] = "<link type='text/css' rel='stylesheet' href='".base_url()."css/login.css'>";
    	//$data['css'][1] = "<link type='text/css' rel='stylesheet' href='".base_url()."css/jq_login.css'>";
    	$data['title'] = '用户注册';
    
    	$data['error_msg'] = $this->uri->segment(3, 0);
    	$this->load->view('register',$data);
    }
    function create()
    {
    	$data['name']=$this->input->post('name');
    	$data['password']=$this->input->post('password');
    	$data['uuid']=$this->input->post('uuid');
    	$data['iphone']=$this->input->post('iphone');
    	$data['email']=$this->input->post('email');
    	$data['add']=$this->input->post('add');
    	$data['qq']=$this->input->post('qq');
    	$data['birthday']=$this->input->post('birthday');
    	$data['weixin']=$this->input->post('weixin');
    	$data['cty']=$this->input->post('cty');
    	$data['sex']=$this->input->post('sex');
    	$data['models_c']=$this->input->post('models_c');
    	$data['source']=$this->input->post('source');
    	$data['buy_time']=$this->input->post('buy_time');
    	$data['First_insurance_k']=$this->input->post('first_insurance_k');
    	$data['Currently_km']=$this->input->post('currently_km');
    	$data['Maintenance_times']=$this->input->post('maintenance_times');
    	$data['Color_c']=$this->input->post('color_c');
    	$data['Interior_colors']=$this->input->post('interior_colors');
    	$data['License_plate_number']=$this->input->post('license_plate_number');
    	$data['Auto_insurance_company']=$this->input->post('auto_insurance_company');
    	$data['Auto_insurance_single_number']=$this->input->post('auto_insurance_single_number');
    	$data['Invitation_code']=$this->input->post('invitation_code');
    	$data['Account_binding']=$this->input->post('account_binding');
    	$data['Shipping_address']=$this->input->post('shipping_address');
    	$data['Alipay']=$this->input->post('alipay');
    	$data['Security_question']=$this->input->post('security_question');
    	$data['Secret_security_answer']=$this->input->post('secret_security_answer');
    	$data['User_Points']='50';// 注册送50积分
    	
    	$this->load->model('user_model');
    	$create = $this->user_model->create($data);
    	//$data['css'][0] = "<link type='text/css' rel='stylesheet' href='".base_url()."css/login.css'>";
    	//$data['css'][1] = "<link type='text/css' rel='stylesheet' href='".base_url()."css/jq_login.css'>";
    	//$data['title'] = '用户注册';
    	echo "用户注册";
    	//		$data['error_msg'] = $this->uri->segment(3, 0);
    	//		$this->load->view('register',$data);
    }
	// --------------------------------------------------------------------

    /**
	 * 登出
	 *
	 *
	 */	
	function logout()
	{
		$this->session->sess_destroy();
		redirect('home');
	}
    
	// --------------------------------------------------------------------

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
		
		$this->load->model('user_model');
		$this->user_model->name = $name;
		$this->user_model->password = md5($password);
		
		$_user = $this->user_model->check_user();
		if ($_user){
			$user = array(
					'user_name'  => $_user['name'],
					'user_id'  => $_user['id'],
					'user_in' => TRUE,
					'user_last_login' => $_user['last_login_at']
			);
			$this->session->set_userdata($user);
		
			$this->user_model->update_last_login($_user['id']);
		
			redirect('home');
		}else{
		echo "用户不存在";
			//redirect('login/index/');
		}
		
		
	}

	// --------------------------------------------------------------------
	

	
		//显示城市选择下拉框页
		function index() {
			$data['base_url'] = $this->base_url;
			//获取所有的省份信息，省份的upid均为0，此时可以不写第二个参数，默认为0
			$data['province'] = $this->M_area->post('province');
			//获取北京所有的城市/地区信息，以便于初始化载入这些信息，北京的ID值为1
			$data['beijing'] = $this->M_area->post('city',1);
			$this->load->view("area_index",$data);
			$this->load->view("admin/_footer_login");
		}
		 
		//获取ajax提交upid值产生的option
		function select() {
			//获取post方式提交来的upid
			//print_r($this->input->post('upid'));die();
			$upid = $this->input->post('upid');
			if ($upid != '')
			{
				$data['city'] = $this->M_area->post('city',$upid);
				$this->load->view("area_select",$data);
				$this->load->view("admin/_footer_login");
				
			}
			
			
		}
	

}
