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
class Group_model extends CI_Model
{

	var $gid;//自增id

	var $ugroupname;//俱乐部简称
	
	var $ugroupuid;//俱乐部用户关联id


	function __construct()
	{
		parent::__construct();
		
	}

// --------------------------------------------------------------------

	/**
	 * 添加/ 创建新俱乐部
	 *
	 *
	 */
	function insert($data)
	{

		$this->db->set('ugroupname', $data['ugroupname']);
		$this->db->set('ugroupuid', $data['ugroupuid']);
		
		return $this->db->insert('ugroup');
		
	}

	// --------------------------------------------------------------------

	/**
	 * 查询该俱乐部是否存在
	 *
	 *
	 */
	function check_group($data)
	{
		$query = $this->db->get_where('ugroup',array('ugroupname' => $data['ugroupname']));
		if ($row = $query->row_array()){
			
			return true;
		}
		return false;
	}
	

	/**
	 * 依据id值查询用户组权限信息
	 *
	 *
	 */
	function load($uid)
	{
	
	}

	// --------------------------------------------------------------------
	
	/**
	 * 查询全部用户组
	 *
	 *
	 */
	function select_ugroup_result()
	{
	/*	$this->db->select('*');
		$this->db->from('admin');
		$this->db->join('ugroup', 'admin.ugroup_id = ugroup.ugroupuid');
		*/
		return $query = $this->db->get("ugroup");
	
		
	}
	// --------------------------------------------------------------------
	
	/**
	 * 查询管理员用户组,适用于管理员添加页面数据读取
	 *
	 *2015年3月19日
	 */
	function select_ugroup_result_admin(){
		
		return $query = $this->db->query("select * from ugroup where ugroupuid > 2 ");
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
	
		return $this->db->delete($table, array('gid' => $id));
	
	}
	
	
}
