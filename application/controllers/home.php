<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		session_start();
		
			if (@$_SESSION['ugroup_id']  <'2' ){
				//redirect('admin/check_login');
				echo "权限不足";
				exit;
			}
			
			//$_SESSION['club_id']；

	}
	public function index()
	{
		
	//	$data['nmae']


		$class['class']='index';
		$this->load->view('admin/_header_index');
		$this->load->view('admin/_list_left_info',$class);
		$this->load->view('admin/index');
		$this->load->view('admin/_list_rigth');
		$this->load->view('admin/_footer_index');
		

	}
	//---系统设置一级进入
	public function seting()
	{
	
		
		$this->load->model('admin/seting_data_model');
		$seting=$this->seting_data_model->select();
		
		$class['class']='seting';
		
		$this->load->view('admin/_header_seting');
		$this->load->view('admin/_list_left_info',$class);
		$this->load->view('admin/content_seting',$seting);
		$this->load->view('admin/_list_rigth');
		$this->load->view('admin/_footer_seting');
	
	}
//用户账号管理
	public function account_number(){
		$this->load->model('admin/admin_login_model');
		$this->load->model('admin/an_quans_model');
		if ($this->uri->rsegment(3)=="changepwd"){

		//获取管理员session名称
			$data['session_admin_name']=$_SESSION['admin_name'];
			$data['session_admin_id']=$_SESSION['admin_id'];

		}elseif ($this->uri->rsegment(3)=="personal_info"){

			//$data['session_admin_name']=$_SESSION['admin_name'];
			$data['session_admin_id']=$_SESSION['admin_id'];
			$data['admin_list']=$this->admin_login_model->load($data['session_admin_id']);

				
		}elseif ($this->uri->rsegment(3)=="pwd_question"){
			$data['number']=$this->an_quans_model->select();
			$data['number2']=$this->an_quans_model->select();
			$data['number3']=$this->an_quans_model->select();
		}elseif ($this->uri->rsegment(3)=="sure_pwd_question"){
			# code... 设置密保提交过来的数据，设置密保
			$_POST['session_admin_id']=$_SESSION['admin_id'];
			$data['status']=$this->an_quans_model->sure_pwd_question($_POST);
			if ($data['status']==true){//进入验证阶段，从数据库提取3个问题数据
				$data['select_dna_ques']=$this->an_quans_model->select_dna_ques($_POST);
				//print_r($data['select_dna_ques']);
				$data['select_dna_quess']=$this->an_quans_model->select_dna_quess($data['select_dna_ques']['0']['dna_ques_1']);
				
				$data['select_dna_ques2']=$this->an_quans_model->select_dna_ques($_POST);
				$data['select_dna_quess2']=$this->an_quans_model->select_dna_quess($data['select_dna_ques']['0']['dna_ques_2']);
				
				$data['select_dna_ques3']=$this->an_quans_model->select_dna_ques($_POST);
				$data['select_dna_quess3']=$this->an_quans_model->select_dna_quess($data['select_dna_ques']['0']['dna_ques_3']);
				
				
				
				
				
			}else{
				$data['url_4']=$this->uri->rsegment(4);
				$data['status_data']="操作失败！";
			}
		}elseif ($this->uri->rsegment(3)=="changepwddata") {
			# code... 修改密码提交过来的数据，更新密码
			$data['status']=$this->admin_login_model->update_npwd($_POST);
			if ($data['status']==true){
			$data['url_4']=$this->uri->rsegment(4);
			$data['status_data']='操作成功！';
			}else{
				$data['url_4']=$this->uri->rsegment(4);
				$data['status_data']="操作失败！";
			}


		}elseif ($this->uri->rsegment(3)=="upadmindata") {
			# code... 修改密码提交过来的数据，更新管理员资料
			$data['status']=$this->admin_login_model->upadmindata($_POST);
			if ($data['status']==true){
			$data['url_4']=$this->uri->rsegment(4);
			$data['status_data']='操作成功！';
			}else{
				$data['url_4']=$this->uri->rsegment(4);
				$data['status_data']="操作失败！";
			}


		}
	
			
		$class['list_dload']='content_club';
	
		$data['url']=$this->uri->segment(3);
	
		$class['class']='account_number';
		$this->load->view('admin/_header_index');
		$this->load->view('admin/_list_left_info',$class);
		$this->load->view('admin/account_number',$data);
		$this->load->view('admin/_list_rigth');
		$this->load->view('admin/_footer_seting');
	
	}
	
	//聚乐部管理－－聚乐部管理
	public function content_club(){
		$this->load->model('admin/club_model');
	
		if ($this->uri->rsegment(3)=="list"){
			//查看全部俱乐部
			$data['club_list']=$this->club_model->select_club_result();
		}elseif ($this->uri->rsegment(3)=="add"){
			$this->load->model('admin/club_model');
			//查询聚乐部等级
			$data['club_f']=$this->club_model->select_club_f();
			//查询职位
			$data['club_j']=$this->club_model->select_club_j();
			
			//查询管理员
			$this->load->model('admin/admin_login_model');
			$data['admin_list']=$this->admin_login_model->select_admin_result();
			
			//查询车型
		}elseif($this->uri->rsegment(3)=="clubadddata"){//添加俱乐部视图页面提交数据写入数据库
				
				if($this->club_model->check_club($_POST)==false){
					$data['status']=$this->club_model->insert($_POST);
					$data['url_4']=$this->uri->rsegment(4);
					$data['status_data']='操作成功！';
				}else{
					$data['status']=false;
					$data['url_4']=$this->uri->rsegment(4);
					$data['status_data']="操作失败！数据已经存在，请勿重复添加！";
				}

		}elseif ($this->uri->rsegment(3)=="del"){//删除俱乐部
			$data['status']=$this->club_model->delete($this->uri->rsegment(5),'club');
			$data['url_4']=$this->uri->rsegment(4);
			$data['status_data']='操作成功！';
		}elseif ($this->uri->rsegment(3)=="details"){
			$this->load->model('admin/club_model');
			//查询聚乐部等级
			$data['club_f']=$this->club_model->select_club_f();
			//查询职位
			$data['club_j']=$this->club_model->select_club_j();
				
			//查询管理员
			$this->load->model('admin/admin_login_model');
			$data['admin_list']=$this->admin_login_model->select_admin_result();
			
				$data['club_list']=$this->club_model->load($this->uri->rsegment(4));
				
				
		}elseif($this->uri->rsegment(3)=='clubeidt'){
			
			$data['status']=$this->club_model->update($_POST);
			if ($data['status']==true){
			$data['url_4']=$this->uri->rsegment(4);
			$data['status_data']='操作成功！';
			}else{
				$data['url_4']=$this->uri->rsegment(4);
				$data['status_data']="操作失败！数据已经存在，请勿重复添加！";
			}
		}
			
			
		$class['list_dload']='content_club';
		
		$data['url']=$this->uri->segment(3);
		
		$class['class']='content_club';
		$this->load->view('admin/_header_index');
		$this->load->view('admin/_list_left_info',$class);
		$this->load->view('admin/content_club',$data);
		$this->load->view('admin/_list_rigth');
		$this->load->view('admin/_footer_seting');
		
	}
	
	//聚乐部管理－－分类管理
	public function content_club_f(){
		$this->load->model('admin/club_model');
	
		if ($this->uri->rsegment(3)=="list"){
			//查看全部俱乐部等级
				$data['clubf']=$this->club_model->select_clubf();
				
		}elseif($this->uri->rsegment(3)=="del"){//删除俱乐部分类
				
				$data['status']=$this->club_model->delete_club_f($this->uri->rsegment(5),'club_f');
				if ($data['status']==true){
					$data['url_4']=$this->uri->rsegment(4);
					$data['status_data']='操作成功！';
				}else{
					$data['url_4']=$this->uri->rsegment(4);
					$data['status_data']="操作失败！";
				}
			
		}elseif($this->uri->segment('3')=='clubaddtype'){//club_model数据模型add_club_type方法
			$data['status']=$this->club_model->add_club_type($_POST);
			if ($data['status']==true){
			$data['url_4']=$this->uri->rsegment(4);
			$data['status_data']='操作成功！';
			}else{
				$data['url_4']=$this->uri->rsegment(4);
				$data['status_data']="操作失败！";
			}
		}
		
		$class['list_dload']='content_club';
	
		$data['url']=$this->uri->segment(3);
	
		$class['class']='content_club';
		$this->load->view('admin/_header_index');
		$this->load->view('admin/_list_left_info',$class);
		$this->load->view('admin/content_club_f',$data);
		$this->load->view('admin/_list_rigth');
		$this->load->view('admin/_footer_seting');
	
	}
	
	
	
	//---会员一级进入
	public function content_member()
	{
		$this->load->model('admin/user_model'); 
		$this->load->model('admin/admin_login_model');
	
		$this->load->model('admin/group_model');
		if ($this->uri->rsegment(3)=="list"){
			if ($this->uri->rsegment(4)=="member"){
				//查看用户组是1的会员
					
				$data['user_list']=$this->user_model->select_user_result();
				
			}elseif($this->uri->rsegment(4)=="admin"){
				//查看用户组是5的管理员
				
				$data['user_list']=$this->admin_login_model->select_admin_result();
				
			}elseif ($this->uri->rsegment(4)=="ugroup"){
				//查看全部用户组
				$data['user_list']=$this->group_model->select_ugroup_result();
			
			}
			//依据$this->uri->rsegment(3)判断目录，$this->uri->rsegment(4)判断操作方法，$this->uri->rsegment(5)为传入值。
		}elseif ($this->uri->rsegment(3)=="member"){//会员个人详情
			
			
			if ($this->uri->rsegment(4)=="details"){
			
				$data['user_list']=$this->user_model->load($this->uri->rsegment(5));
				$data['url_3']=$this->uri->rsegment(3);
				
			}elseif($this->uri->rsegment(4)=="del"){//会员个人删除
				
				$data['status']=$this->user_model->delete($this->uri->rsegment(5),'user');
				$data['url_3']=$this->uri->rsegment(3);
				
			}elseif($this->uri->rsegment(4)=="eidt"){
			
			$data['user_list']=$this->user_model->load($this->uri->rsegment(5));
			
			}elseif($this->uri->rsegment(4)=="eidtdata"){
			//print_r($_POST);
			
			$data['status']=$this->user_model->eidt_update($_POST);
			$data['url_3']=$this->uri->rsegment(3);
			
			}
		}elseif ($this->uri->rsegment(3)=="admin"){//管理员个人详情
			if ($this->uri->rsegment(4)=="admindetails"){
			
				$data['user_list']=$this->admin_login_model->load($this->uri->rsegment(5));
				$data['url_3']=$this->uri->rsegment(3);
				
			}elseif($this->uri->rsegment(4)=="del"){//删除管理员
				$data['status']=$this->admin_login_model->delete($this->uri->rsegment(5),'admin');
				$data['url_3']=$this->uri->rsegment(3);
				
			}elseif($this->uri->rsegment(4)=="adminadd"){//添加管理员视图页面
				//查看全部俱乐部
				$data['club_data']=$this->club_model->select_club_result();
				//查看全部用户组
				$data['ugroup_data']=$this->group_model->select_ugroup_result_admin();
				
			}elseif($this->uri->rsegment(4)=="adminadddata"){//添加会员视图页面提交数据写入数据库
				if($this->admin_login_model->select_admin($_POST)==false){
					$data['status']=$this->admin_login_model->create($_POST);
					$data['url_3']=$this->uri->rsegment(3);
				}else{
					$data['status']=false;
					$data['url_3']=$this->uri->rsegment(3);
				}
			}elseif($this->uri->rsegment(4)=="admineidt"){
				$data['user_list']=$this->admin_login_model->load($this->uri->rsegment(5));
				$data['url_3']=$this->uri->rsegment(3);
			}elseif($this->uri->rsegment(4)=="eidtdata"){
			//print_r($_POST);
			
			$data['status']=$this->admin_login_model->eidt_update($_POST);
			
			$data['url_3']=$this->uri->rsegment(3);
			
			}
			
			
		}elseif ($this->uri->rsegment(3)=="ugroup"){//用户组详情
			if ($this->uri->rsegment(4)=="details"){
			
				$data['user_list']=$this->group_model->load($this->uri->rsegment(5));
				$data['url_3']=$this->uri->rsegment(3);
				
			}elseif($this->uri->rsegment(4)=="del"){//删除用户组
				
				$data['status']=$this->group_model->delete($this->uri->rsegment(5),'ugroup');
				$data['url_3']=$this->uri->rsegment(3);
				
			}elseif($this->uri->rsegment(4)=="ugroupadd"){//添加用户组视图页面
				
				
			}elseif($this->uri->rsegment(4)=="ugroupadddata"){//添加用户组视图页面提交数据写入数据库
				if($this->group_model->check_group($_POST)==false){
					$data['status']=$this->group_model->insert($_POST);
					$data['url_3']=$this->uri->rsegment(3);
				}else{
					$data['status']=false;
					$data['url_3']=$this->uri->rsegment(3);
				}
				
			}elseif($this->uri->rsegment(4)=="ugroupeidt"){//修改用户组视图页面	
				
			}
			
		}
		
		
		$class['list_dload']='content';
		
		$data['url']=$this->uri->segment(4);
		
		$class['class']='content_member';
		$this->load->view('admin/_header_index');
		$this->load->view('admin/_list_left_info',$class);
		$this->load->view('admin/content_member',$data);
		$this->load->view('admin/_list_rigth');
		$this->load->view('admin/_footer_seting');
	
	}
	
	//--－留言一级进入
	public function content_leave()
	{
	
		$class['list_dload']='content';
		$data['url']=$this->uri->segment('3');
		$class['class']='content_leave';
		$this->load->view('admin/_header_index');
		$this->load->view('admin/_list_left_info',$class);
		$this->load->view('admin/content_leave',$data);
		$this->load->view('admin/_list_rigth');
		$this->load->view('admin/_footer_seting');
	
	}
	
	//---活动一级进入
	public function content_dongs()
	{
		
		$this->load->model('admin/dongs_data_model');
		
		if($this->uri->rsegment(3)=='add'){//----添加活动
			
		}elseif ($this->uri->rsegment(3)=='list') {//----活动列表
			
			$data['dongs_list']=$this->dongs_data_model->select();
			
		}elseif ($this->uri->rsegment(3)=='edit'){//----活动依据id修改的方法
			$data['select_dongs_id']=$this->dongs_data_model->select_dongs_id($this->uri->rsegment(4));
			
		}elseif($this->uri->rsegment(3)=='details'){//----活动依据id查看的方法
			
			$data['select_dongs_id']=$this->dongs_data_model->select_dongs_id($this->uri->rsegment(4));
			
		}elseif($this->uri->rsegment(3)=='del'){//----活动依据id删除的方法
			
			 $data['delstatus']=$this->dongs_data_model->del_dongs_id($this->uri->rsegment(4));
			 
		}elseif($this->uri->rsegment(3)=='updata'){//----活动修改的方法
			
			 $data['updatastatus']=$this->dongs_id();
			 
		}elseif($this->uri->rsegment(3)=='dongs_data'){//----活动添加的方法
			
			 $data['status']=$this->dongs_data();
			 
		}elseif($this->uri->rsegment(3)=='check'){//----活动依据id审核的方法
			$data['check_id']=$this->dongs_data_model->select_dongs_id($this->uri->rsegment(4));
		
		}elseif($this->uri->rsegment(3)=='status'){//----活动依据id审核的具体操作方法
			 $data['status']=$this->status_check();

		}
		$class['list_dload']='content';
		$data['url']=$this->uri->segment('3');
		$class['class']='content_dongs';
		$this->load->view('admin/_header_index');
		$this->load->view('admin/_list_left_info',$class);
		$this->load->view('admin/content_dongs',$data);
		$this->load->view('admin/_list_rigth');
		$this->load->view('admin/_footer_seting');
	
	}
	//---友情链接一级进入
	public function content_column()
	{
		$this->load->model('admin/column_data_model');

	if($this->uri->segment('3')=='adddata'){
		$session['link_club_id']=$_SESSION['club_id'];
		$session['link_username']=$_SESSION['admin_name'];
		$status=$this->column_data_model->select_link_title($_POST);

	if ($status == TRUE) {
	# code...
			$data['status']=FALSE;

			$data['url_4']=$this->uri->segment('4');

		}else{
			
			$data['status']=$this->column_data_model->insert($_POST,$session);

			$data['url_4']=$this->uri->segment('4');
		}
		

	}elseif($this->uri->segment('3')=='list'){
		
		if ($_SESSION['ugroup_id'] == '5'){//平台超级管理员

			$data['link_data']=$this->column_data_model->select();
			
		}elseif($_SESSION['ugroup_id']<'5' and $_SESSION['ugroup_id']>'2'){//俱乐部管理员和俱乐部子管理员

			$link_club_id=$_SESSION['club_id'];
			$data['link_data']=$this->column_data_model->select_link_club_id($link_club_id);
		}
		
	}elseif($this->uri->segment('3')=='del'){
		$data['status']=$this->column_data_model->del_link_id($this->uri->segment('4'));
		$data['url_4']='status';
	}elseif($this->uri->segment('3')=='check'){
		$data['link_data']=$this->column_data_model->selectlinkid($this->uri->segment('4'));
	}elseif($this->uri->segment('3')=='status'){
		
		if(@$_POST['status']){$data['status']='1';$data['statuss']='已通过';}else{$data['status']='2';$data['statuss']='未通过';}
		$data['link_id']=$_POST['link_id'];
		$data['link_username']=$_SESSION['admin_name'];
		$data['status']=$this->column_data_model->status_check($data);
		$data['url_4']='status';
	}
		$class['list_dload']='content';
		$data['url']=$this->uri->segment('3');
		
		$class['class']='content_column';
		$this->load->view('admin/_header_index');
		$this->load->view('admin/_list_left_info',$class);
		$this->load->view('admin/content_column',$data);
		$this->load->view('admin/_list_rigth');
		$this->load->view('admin/_footer_seting');
		
	
	}
	
	//---订单一级进入
	public function content_order()
	{
		$this->load->model('admin/order_data_model');
		if($this->uri->segment('3')=='list'){
		
			if ($_SESSION['ugroup_id'] == '5'){//平台超级管理员
		
				$data['order_data']=$this->order_data_model->select();
					
			}elseif($_SESSION['ugroup_id']<'5' and $_SESSION['ugroup_id']>'2'){//俱乐部管理员和俱乐部子管理员
		
				$data['order_data']=$this->order_data_model->select_club_id($order_club_id);
			}
		
		}
	
		$class['list_dload']='content';
		$data['url']=$this->uri->segment('3');
		$class['class']='content_order';
		$this->load->view('admin/_header_index');
		$this->load->view('admin/_list_left_info',$class);
		$this->load->view('admin/content_order',$data);
		$this->load->view('admin/_list_rigth');
		$this->load->view('admin/_footer_seting');
	
	}
	
	//广告管理
	
	public function content_ad()
	{
		
	
		$class['list_dload']='content';
		$data['url']=$this->uri->segment('3');
		$class['class']='content_ad';
		$this->load->view('admin/_header_index');
		$this->load->view('admin/_list_left_info',$class);
		$this->load->view('admin/content_ad',$data);
		$this->load->view('admin/_list_rigth');
		$this->load->view('admin/_footer_seting');
	
	}
	
	
	//---目录一级进入
	public function content_mulu()
	{
	
		$class['list_dload']='content';
		$data['url']=$this->uri->segment('3');
		$class['class']='content_mulu';
		$this->load->view('admin/_header_index');
		$this->load->view('admin/_list_left_info',$class);
		$this->load->view('admin/content_mulu',$data);
		$this->load->view('admin/_list_rigth');
		$this->load->view('admin/_footer_seting');
	
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

		 $this->load->model('admin/seting_data_model');
		
		 
		 
		 $this->seting_data_model->updata($data);
		 
	
	}
	
	//----添加活动方法 状态1:未审核发布 2:已审核发布
	public function dongs_data(){
		
		$data['dongs_name']=$this->input->post('dongs_name');
		$data['dongs_img']=$this->input->post('dongs_img');
		
		$data['dongs_seotitle']=$this->input->post('dongs_seotitle');
		$data['dongs_seokey']=$this->input->post('dongs_seokey');
		
		$data['dongs_miaoshu']=$this->input->post('dongs_miaoshu');
		$data['dongs_content']=$this->input->post('dongs_content');
		
		$data['dongs_status']="1";
		$data['dongs_time']=date('Y-m-d h:i:s',mktime());
		$data['dongs_user']=$_SESSION['admin_name'];
		
		
		
		$this->load->model('admin/dongs_data_model');
		
		$select_dongs_name=$this->dongs_data_model->select_dongs_name($data);
		if($select_dongs_name!=TRUE){
		
			return $data['status']=$this->dongs_data_model->install($data);
			
		}else{return $data['status']=FALSE;}
		
		
		
	}
	
	//---------修改活动方法－－－－－－
	public function dongs_id(){
		$data['dongs_id']=$this->input->post('dongs_id');
		$data['dongs_name']=$this->input->post('dongs_name');
		$data['dongs_img']=$this->input->post('dongs_img');
		
		$data['dongs_seotitle']=$this->input->post('dongs_seotitle');
		$data['dongs_seokey']=$this->input->post('dongs_seokey');
		
		$data['dongs_miaoshu']=$this->input->post('dongs_miaoshu');
		$data['dongs_content']=$this->input->post('dongs_content');
		
		$this->load->model('admin/dongs_data_model');
		
		return  $this->dongs_data_model->updata_dongs_id($data);
	}
	
	
	public  function status_check(){
		if($this->input->post('status')=="on"){
			 $data['status']="2";
		}else{
			  $data['status']="1";
		}
		$data['dongs_check_user']=$_SESSION['admin_name'];
		
		$data['dongs_check_time']=date('Y-h-s H:i:s',mktime());

		 $data['dongs_id']=$this->input->post('dongs_id');
		
		 $this->load->model('admin/dongs_data_model');
		 
		 return  $this->dongs_data_model->status_check($data);
		
		
	}
	
	//俱乐部超级管理员
	public function supermanager()
	{
		
	//	$data['nmae']
		$class['class']='supermanager';
		$this->load->view('admin/_header_index');
		//$this->load->view('admin/_list_left_info',$class);
		$this->load->view('admin/supermanager');
		//$this->load->view('admin/_list_rigth');
		$this->load->view('admin/_footer_index');
		

	}
	
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */