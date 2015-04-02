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
class Seting_data_model extends CI_Model
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
	 * 更新设置信息
	 *
	 *
	 */
	function select()
	{

		$data['id']='1';
	
			$query = $this->db->get_where('Basic_Settings_Table',array('id' => $data['id']));
		if ($row = $query->row_array()){
			return $row;
		}
		return array();
		
	}
	
	
	// --------------------------------------------------------------------

	/**
	 * 更新设置信息
	 *
	 *
	 */
	function updata($data)
	{
		//print_r($data);
		$data['id']='1';
		$this->db->set('Website_full_name', $data['Website_Keyword']);
		$this->db->set('Website_referred', $data['Website_Keyword']);
		
		$this->db->set('Website_Keyword', $data['Website_Keyword']);
		$this->db->set('Copyright_settings', $data['Copyright_settings']);
		
		$this->db->set('Push_all_stations', $data['Push_all_stations']);
		$this->db->set('ICP_record_number', $data['ICP_record_number']);

		$this->db->set('Custom_Size', $data['Custom_Size']);
		$this->db->set('default_size', $data['default_size']);
		
		$this->db->set('Description', $data['Description']);
		$this->db->set('Rewrite', $data['Rewrite']);
		
		$this->db->where('id', $data['id']);
		
		return $this->db->update('Basic_Settings_Table');
	}




}
