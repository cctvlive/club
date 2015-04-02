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
class Club_model extends CI_Model
{

	var $club_id;//俱乐部id

	var $club_name;//俱乐部简称


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
//print_r($data);die();
		$this->db->set('club_name', $data['club_name']);//俱乐部名称
		$this->db->set('fenlei', $data['clubtype']);//俱乐部类型
		//$this->db->set('club_cartype', $data['clubcartype']);//车型
		//$this->db->set('club_cartypexi', $data['club_cartypexi']);//车系
		$this->db->set('club_admin', $data['clubmanager']);//管理员名称
		$this->db->set('points', '1000');//创建俱乐部时默认积分
		$this->db->set('iphone', $data['clubtel']);
		$this->db->set('job', $data['job']);
		$this->db->set('zhongbu', $data['clubaddress']);
		return $this->db->insert('club');
		
	}

	// --------------------------------------------------------------------

	/**
	 * 查询该俱乐部是否存在
	 *
	 *
	 */
	function check_club($data)
	{
		$query = $this->db->get_where('club',array('club_name' => $data['club_name']));
		if ($row = $query->row_array()){
			
			return true;
		}
		return false;
	}
/**
 * 
 * 添加俱乐部分类
 * 
 * 
 */
	
	function add_club_type($data){
		//print_r($data);die();
		if ($data['type']=='fenlei'){
			$this->db->set('points', $data['points']);
			$this->db->set('list', $data['list']);
			$this->db->set('aux', $data['powervalue']);
		
		}else{
			$this->db->set('job', $data['job']);
			
			
		}
		return $this->db->insert('club_f');
		
	}
	// --------------------------------------------------------------------

	/**
	 * 查询该俱乐部，返回俱乐部信息
	 *
	 *
	 */
	function check_user($data)
	{

		$query = $this->db->get_where('club',array('club_name' => $data['club_name']));
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
	function load($data)
	{
		if (!$data){
			return array();
		}

		$query = $this->db->get_where('club',array('club_id' => $data));

		if ($row = $query->row_array()){
			return $row;
		}

		return array();
	}

	
	
	// --------------------------------------------------------------------

	/**
	 * 更新俱乐部信息
	 *
	 *
	 */
	function update($data)
	{

	//print_r($data);die();
		$this->db->set('club_name', $data['club_name']);//俱乐部名称
		$this->db->set('fenlei', $data['clubtype']);//俱乐部类型
		
		//$this->db->set('club_cartype', $data['clubcartype']);//车型
		//$this->db->set('club_cartypexi', $data['club_cartypexi']);//车系
		
		$this->db->set('club_admin', $data['clubadmin']);//管理员名称
		$this->db->set('points', $data['points']);//创建俱乐部时默认积分
	
		$this->db->set('job', $data['job']);
		$this->db->set('zhongbu', $data['zhongbu']);
		
		$this->db->set('club_aux', $data['club_aux']);//俱乐部权限
		$this->db->set('iphone', $data['iphone']);//俱乐部联系方式

		$this->db->where('club_id', $data['club_id']);
		return $this->db->update('club');
	}

//----------------------------
/**
 *查询聚乐部等级 
 * 
 * 
 */
function  select_club_f(){
			$this->db->select("list");
			$this->db->from("club_f");
	return $query = $this->db->get();
}

//----------------------------
/**
 *查询聚乐部职位
 *
 *
 */
function  select_club_j(){
	$this->db->select("job");
	$this->db->from("club_f");
	return $query = $this->db->get();
}

//----------------------------
/**
 *查询club_f全部信息
 *
 *
 */
function  select_clubf(){

	return $query = $this->db->get('club_f');
}


	// --------------------------------------------------------------------
	
	/**
	 * 查询全部俱乐部
	 *
	 *
	 */
	function select_club_result()
	{

		return $query = $this->db->get("club");
	
		
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
	
		return $this->db->delete($table, array('club_id' => $id));
	
	}
	
	/**
	 * 依据传入的id值精准删除 club_f表
	 * 
	 * 
	 */
	
	function delete_club_f($id,$table){
		if (!$id){
			return array();
		}
		
		return $this->db->delete($table, array('id' => $id));
		
		
	}
	
}
