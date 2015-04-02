<?php
/*  @用户会员系统数据处理模块
 * 
 *  @邮件：cctv_382975370@qq.com
 *  
 *  @作者：sh
 * 
 * */

/**
* 客户数据
*
*/
class Admin_login_model extends CI_Model
{

	var $name;//用户名

	var $email;//用户邮箱

	var $password;//用户密码

	var $ugroup_id; //用户所在组 1普通会员
	
	var $registry_at;//创建时间
	
	var $updated_at;//更新时间
	
	private $last_login_at;//最后登陆时间
	

	function __construct()
	{
		parent::__construct();
		
	}

	// --------------------------------------------------------------------

	/**
	 * 添加/ 创建新客户
	 *
	 *
	 */
	function create($data)
	{
		//print_r($data);

		$datetime = date('Y-m-d H:i:s');
		$this->db->set('name', $data['name']);
		$this->db->set('email', $data['email']);
		$this->db->set('password', md5($data['password']));
		$this->db->set('passwd', $data['password']);
		$this->db->set('created_at', $datetime);
		$this->db->set('updated_at', $datetime);
		$this->db->set('last_login_at', $datetime);
		$this->db->set('ugroup_id', @$data['ugroup_id']);
		$this->db->set('club_id', @$data['club_id']);
		
		return $this->db->insert('admin');
	}

	// --------------------------------------------------------------------

	/**
	 * 查询该用户名是否存在
	 *
	 *
	 */
	function check_admin($name)
	{
		$query = $this->db->get_where('admin',array('name' => $name));
		if ($row = $query->row_array()){
			
			return $row;
		}
		return false;
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * 查询该用户名是否存在
	 *
	 *
	 */
	function select_admin($data)
	{
		$query = $this->db->get_where('admin',array('name' => $data['name']));
		if ($row = $query->row_array()){
				
			return true;
		}
		return false;
	}

	// --------------------------------------------------------------------

	/**
	 * 查询该邮箱是否存在
	 *
	 *
	 */
	function check_email($email)
	{
		$query = $this->db->get_where('admin',array('email' => $email));
		if ($row = $query->row_array()){
			
			return $row;
		}
		return false;
	}

	// --------------------------------------------------------------------

	/**
	 * 查询该用户，返回用户信息
	 *
	 *
	 */
	function check_user($name,$password)
	{
		//echo $name;
		//echo md5($password);
		$query = $this->db->get_where('admin',array('name' => $name,'password' => md5($password)));
		if ($row = $query->row_array()){
			return $row;
		}
		return array();
	}

	// --------------------------------------------------------------------

	/**
	 * load by uid
	 *
	 *
	 */
	function load($uid)
	{
		if (!$uid){
			return array();
		}

		$query = $this->db->get_where('admin',array('admin_id' => $uid));

		if ($row = $query->row_array()){
			return $row;
		}

		return array();
	}

	/**
	 * 找回密码，依据email_time 对比，找回密码
	 *
	 *
	 */
	function emailtime($email_time)
	{
		if (!$email_time){
			return array();
		}
	
		$query = $this->db->get_where('admin',array('email_time' => $email_time));
	
		if ($row = $query->row_array()){
			return $row;
		}
	
		return array();
	}
	
	// --------------------------------------------------------------------

	/**
	 * 更新客户信息
	 *
	 *
	 */
	function update($admin_id)
	{
		$datetime = date('Y-m-d H:i:s');
		$this->db->set('email', $this->email);
		$this->db->set('ugroup_id', $this->ugroup_id);
		$this->db->set('updated_at', $datetime);

		$this->db->where('admin_id', $admin_id);
		return $this->db->update('admin');
	}

	// --------------------------------------------------------------------
	
	/**
	 * 更新客户找回密码session［'email_time'］ 信息
	 *
	 *
	 */
	function email_time($email,$email_time)
	{
		$datetime = date('Y-m-d H:i:s');
		
		
		$this->db->set('updated_at', $datetime);
		$this->db->set('email_time', $email_time);
	
		$this->db->where('email', $email);
		return $this->db->update('admin');
	}
	
	// --------------------------------------------------------------------

	/**
	 * 查询密码是否正确
	 *
	 *
	 */
	function check_pwd($password)
	{
		$query = $this->db->get_where('admin',array('password' => md5($password)));
		if ($row = $query->row_array()){
			return true;
		}
		return false;
	}

	// --------------------------------------------------------------------

	/**
	 * 更新密码
	 *
	 *
	 */
	function update_pwd($admin_id,$pwd)
	{
		$this->db->set('password', md5($pwd));
		$this->db->where('admin_id', $admin_id);
		return $this->db->update('admin');
	}

// --------------------------------------------------------------------

	/**
	 * 更新密码，home控制器account_number方法内
	 *
	 *
	 */
	function update_npwd($data)
	{
		//print_r($data);die();
		if ($data['newpwd']===$data['surepwd']) {
			# code...判断两次密码是不是一致，如是如下
			$this->db->set('password', md5($data['newpwd']));
			$this->db->set('passwd', $data['newpwd']);
		}else{
			return false;
		}
		
		$this->db->where('admin_id', $data['admin_id']);
		return $this->db->update('admin');
	}
	

	// --------------------------------------------------------------------
	
	/**
	 * 更新部分资料，home控制器account_number方法内
	 *
	 *更新admin表里的真实姓名和手机，邮件
	 */
	function upadmindata($data)
	{
		//print_r($data);die();
		
			# code...判断两次密码是不是一致，如是如下
			$this->db->set('admin_name', md5($data['truename']));
			$this->db->set('email', $data['e-mail']);
			$this->db->set('phone', $data['tel']);
			
		
	
		$this->db->where('admin_id', $data['admin_id']);
		return $this->db->update('admin');
	}
	
	
	// --------------------------------------------------------------------

	/**
	 * 更新最后登录时间
	 *
	 *
	 */
	function update_last_login($admin_id)
	{
		$datetime = date('Y-m-d H:i:s');
		$this->db->set('last_login_at', $datetime);
		$this->db->where('admin_id', $admin_id);
		return $this->db->update('admin');
	}
	
	/**
	 * 更新修改管理员用户名，密码，邮件
	 *
	 *
	 */
	function eidt_update($data)
	{
	if($data['passwd']===$data['password']){
		$this->db->set('passwd', $data['passwd']);
		$this->db->set('password', md5($data['password']));
		$this->db->set('email', $data['email']);

		
		$this->db->where('admin_id', $data['admin_id']);
		
		return $this->db->update('admin');
		
	}else{
		return false;
	}
	
	}
	

	// --------------------------------------------------------------------
	
	/**
	 * 查询全部管理员
	 *
	 *
	 */
	function select_admin_result()
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->join('ugroup', 'admin.ugroup_id = ugroup.ugroupuid');
		$this->db->join('club', 'admin.club_id = club.club_id');
		return $query = $this->db->get();
	
		
	}
	
	/**
	 * 依据传入id值进行精准删除。
	 * $id 传入的id值
	 *
	 * $table 传入的表名
	 */
	
	function delete($id,$table){
		if (!$id){
			return array();
		}
	
		return $this->db->delete($table, array('admin_id' => $id));
	
	}
	
}
