<?php
/*  @用户会员系统数据处理模块 后台
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
class User_model extends CI_Model
{

	var $name;//用户名

	var $email;//用户邮箱

	var $password;//用户密码

	var $ugroup_uid;//用户组id

	var $registry_at;//创建时间

	var $updated_at;//更新时间
	
	var $uuid;//用户id
	
	var $iphone;//用户手机
	
	var $uadd; //用户地址
	
	var $qq;//用户qq
	
	var $birthday;//用户生日
	
	var $weixin;//用户微信
	
	var $cty; //用户所在城市
	
	var $sex;//用户性别
	
	var $models_c;//用户车型
	
	var $source;//用户 车辆原产地
	
	var $buy_time;//用户车辆购买时间
	
	var $First_insurance_k;//用户车辆首保公里数
	
	var $Currently_km; // 目前已用公里数
	
	var $Maintenance_times;//保养次数
	
	var $Color_c;//车辆颜色
	
	var $Interior_colors;//内饰颜色
	
	var $License_plate_number;//车牌号
	
	var $Auto_insurance_single_number;//车险单号
	
	var $Auto_insurance_company;//车险公司
	
	var $Invitation_code;//邀请码
	
	var $Account_binding;//账号绑定
	
	var $Shipping_address;//收货地址
	
	var $Alipay;//支付宝
	
	var $Friends;//关联好友id
	
	var $ulike;//喜欢收藏关联id
	
	var $Security_question;//密保问题
	
	var $Secret_security_answer;//密保答案
	
	var $User_Points;//用户注册时送50个积分
	
	var $ugroup_id; //用户所在组 1普通会员
	
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
	function insert($data)
	{
		
	
		$datetime = date('Y-m-d H:i:s');
		$this->db->set('name', $data['name']);
		$this->db->set('email', $data['email']);
		$this->db->set('password', md5($data['password']));
		$this->db->set('registry_at', $datetime);
		$this->db->set('updated_at', $datetime);

		$this->db->set('ugroup_id', $data['ugroup_id']);
		$this->db->set('club_id', $data['club_id']);
	
		$query = $this->db->get_where('ugroup',array('ugroupuid' =>  $data['ugroup_id']));
		if ($row = $query->row_array()){
			$group=$row['ugroupname'];
		}
		$this->db->set('ugroup', $group);
	
		return $this->db->insert('user');
		/*
			$this->db->set('club_id', $club_id);
			$this->db->set('club_name', $club_name);
			return $this->db->insert('club');
		*/
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
		$ugroup_id='1';
		$datetime = date('Y-m-d H:i:s');
		$this->db->set('name', $data['name']);
		$this->db->set('email', $data['email']);
		$this->db->set('password', md5($data['password']));
		$this->db->set('registry_at', $datetime);
		$this->db->set('updated_at', $datetime);
		//$this->db->set('uuid', $data['uuid']);
		$this->db->set('iphone', $data['iphone']);
		$this->db->set('uadd', $data['uadd']);
		$this->db->set('qq', $data['qq']);
		$this->db->set('cty', $data['cty']);
		$this->db->set('weixin', $data['weixin']);
		$this->db->set('sex', $data['sex']);
		$this->db->set('models_c', $data['models_c']);
		$this->db->set('source', $data['source']);
		$this->db->set('birthday', $data['birthday']);
		$this->db->set('First_insurance_k', $data['First_insurance_k']);
		$this->db->set('Currently_km', $data['Currently_km']);
		$this->db->set('Maintenance_times', $data['Maintenance_times']);
		$this->db->set('Color_c', $data['Color_c']);
		$this->db->set('Interior_colors', $data['Interior_colors']);
		$this->db->set('License_plate_number', $data['License_plate_number']);
		$this->db->set('Auto_insurance_single_number', $data['Auto_insurance_single_number']);
		$this->db->set('Auto_insurance_company', $data['Auto_insurance_company']);
		$this->db->set('Invitation_code', $data['Invitation_code']);
		$this->db->set('Account_binding', $data['Account_binding']);
		$this->db->set('Shipping_address',$data['Shipping_address']);
		$this->db->set('Alipay', $data['Alipay']);
		//$this->db->set('Friends',$data['Friends']);
		//$this->db->set('ulike', $data['like']);
		
		$this->db->set('Security_question', $data['Security_question']);
		$this->db->set('Secret_security_answer', $data['Secret_security_answer']);
		$this->db->set('User_Points', $data['User_Points']);
		$this->db->set('last_login_at', $datetime);
		$this->db->set('ugroup_id', $data['ugroup_id']);
		$this->db->set('club_id', $data['club_id']);
		
		$query = $this->db->get_where('ugroup',array('ugroupuid' =>  $data['ugroup_id']));
		if ($row = $query->row_array()){
			$group=$row['ugroupname'];
		}
		$this->db->set('ugroup', $group);
		
		return $this->db->insert('user');
		/*
		$this->db->set('club_id', $club_id);
		$this->db->set('club_name', $club_name);
		return $this->db->insert('club');
		*/
	}

	// --------------------------------------------------------------------

	/**
	 * 查询该用户名是否存在
	 *
	 *
	 */
	function check_name($name)
	{
		$query = $this->db->get_where('user',array('name' => $name));
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
		$query = $this->db->get_where('user',array('email' => $email));
		if ($row = $query->row_array()){
			return true;
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
		$query = $this->db->get_where('user',array('name' => $name,'password' => md5($password)));
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

		$query = $this->db->get_where('user',array('uid' => $uid));

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
	function update($uid)
	{
		$datetime = date('Y-m-d H:i:s');
		$this->db->set('email', $this->email);
		$this->db->set('ugroup_uid', $this->ugroup_uid);
		$this->db->set('updated_at', $datetime);

		$this->db->where('uid', $uid);
		return $this->db->update('user');
	}

	// --------------------------------------------------------------------

	/**
	 * 查询密码是否正确
	 *
	 *
	 */
	function check_pwd($password)
	{
		$query = $this->db->get_where('user',array('password' => md5($password)));
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
	function update_pwd($uid,$pwd)
	{
		$this->db->set('password', md5($pwd));
		$this->db->where('uid', $uid);
		return $this->db->update('user');
	}

	// --------------------------------------------------------------------

	/**
	 * 更新最后登录时间
	 *
	 *
	 */
	function update_last_login($uid)
	{
		$datetime = date('Y-m-d H:i:s');
		$this->db->set('last_login_at', $datetime);
		$this->db->where('uid', $uid);
		return $this->db->update('user');
	}

	// --------------------------------------------------------------------
	
	/**
	 * 依据ugroup_id查看所有符合条件的用户
	 *
	 *
	 */
	function select_user_result()
	{
		
		 $this->db->select('*');
		$this->db->from('user');
		$this->db->join('club', 'user.club_id = club.club_id');

		return $query = $this->db->get();
		 //return $query = $this->db->get_where('user',array('ugroup_id' => $ugroup_id,));
		
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
		
		return $this->db->delete($table, array('uid' => $id));
		
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * 添加/ 创建新客户
	 *
	 *
	 */
	function eidt_update($data)
	{
		//print_r($data);die();
		
		$datetime = date('Y-m-d H:i:s');
		$this->db->set('name', $data['name']);
		$this->db->set('email', $data['email']);
	
		
		$this->db->set('updated_at', $datetime);
		
		$this->db->set('iphone', $data['iphone']);
		$this->db->set('uadd', $data['uadd']);
		$this->db->set('qq', $data['qq']);
		$this->db->set('cty', $data['cty']);
		$this->db->set('weixin', $data['weixin']);
		$this->db->set('sex', $data['sex']);
		$this->db->set('models_c', $data['models_c']);
		$this->db->set('source', $data['source']);
		$this->db->set('birthday', $data['birthday']);
		$this->db->set('First_insurance_k', $data['First_insurance_k']);
		$this->db->set('Currently_km', $data['Currently_km']);
		$this->db->set('Maintenance_times', $data['Maintenance_times']);
		$this->db->set('Color_c', $data['Color_c']);
		$this->db->set('Interior_colors', $data['Interior_colors']);
		$this->db->set('License_plate_number', $data['License_plate_number']);
		$this->db->set('Auto_insurance_single_number', $data['Auto_insurance_single_number']);
		$this->db->set('Auto_insurance_company', $data['Auto_insurance_company']);
		$this->db->set('Invitation_code', $data['Invitation_code']);
		$this->db->set('Account_binding', $data['Account_binding']);
		$this->db->set('Shipping_address',$data['Shipping_address']);
		$this->db->set('Alipay', $data['Alipay']);
		//$this->db->set('Friends',$data['Friends']);
		//$this->db->set('ulike', $data['like']);
	
		$this->db->set('Security_question', $data['Security_question']);
		$this->db->set('Secret_security_answer', $data['Secret_security_answer']);
		
		
		$this->db->set('ugroup_id', $data['ugroup_id']);
		$this->db->set('club_id', $data['club_id']);
	
		$query = $this->db->get_where('ugroup',array('ugroupuid' => $data['ugroup_id']));
		if ($row = $query->row_array()){
			$group=$row['ugroupname'];
		}
		$this->db->set('ugroup', $group);
	
		return $this->db->update('user');
		/*
			$this->db->set('club_id', $club_id);
			$this->db->set('club_name', $club_name);
			return $this->db->insert('club');
		*/
	}
}
