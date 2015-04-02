<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct(){
		parent::__construct();
		session_start();
		
			if (@$_SESSION['ugroup_id']  <'2' ){
				//redirect('index/check_login');
				echo "权限不足";
				exit;
			}
			
			//$_SESSION['club_id']；

	}
	public function index()
	{
		
	//	$data['nmae']


		$class['class']='index';
		$this->load->view('index/_header_index');
		$this->load->view('index/_list_left',$class);
		$this->load->view('index/index');
		$this->load->view('index/_list_rigth');
		$this->load->view('index/_footer_index');
		

	}
	//---系统设置一级进入
	public function seting()
	{
	
		
		$this->load->model('index/seting_data_model');
		$seting=$this->seting_data_model->select();
		
		$class['class']='seting';
		
		$this->load->view('index/_header_seting');
		$this->load->view('index/_list_left',$class);
		$this->load->view('index/content_seting',$seting);
		$this->load->view('index/_list_rigth');
		$this->load->view('index/_footer_seting');
	
	}
	
	//---会员一级进入
	public function content_member()
	{
		
		
		$class['list_dload']='content';
		
		$data['url']=$this->uri->segment(4);
		
		$class['class']='content_member';
		$this->load->view('index/_header_index');
		$this->load->view('index/_list_left',$class);
		$this->load->view('index/content_member',$data);
		$this->load->view('index/_list_rigth');
		$this->load->view('index/_footer_seting');
	
	}
	
	
	
	
	
	
	//----系统设置数据处理
	public function seting_data(){
		 $data['Website_full_name']=$this->input->post('Website_full_name');
		 $data['Website_referred']=$this->input->post('Website_referred');
		 
		 $data['Website_Keyword']=$this->input->post('Website_Keyword');
		 $data['Copyright_settings']=$this->input->post('Copyright_settings');
		 
		 $data['Push_all_stations']=$this->input->post('Push_all_stations');
		 $data['ICP_record_number']=$this->input->post('ICP_record_number');
		 
		 $data['Custom_Size']=$this->input->post('Custom_Size');
		 $data['default_size']=$this->input->post('default_size');

		 $data['Description']=$this->input->post('Description');
		 $data['Rewrite']=$this->input->post('Rewrite');

		 $this->load->model('index/seting_data_model');
		
		 
		 
		 $this->seting_data_model->updata($data);
		 
	
	}
	
	
	
	//俱乐部超级管理员
	public function supermanager()
	{
		
	//	$data['nmae']
		$class['class']='supermanager';
		$this->load->view('index/_header_index');
		//$this->load->view('index/_list_left',$class);
		$this->load->view('index/supermanager');
		//$this->load->view('index/_list_rigth');
		$this->load->view('index/_footer_index');
		

	}
	
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */