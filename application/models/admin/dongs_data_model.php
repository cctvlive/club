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
class Dongs_data_model extends CI_Model
{

	var $dongs_name;//活动名称

	var $dongs_img;//活动图片id

	var $dongs_seotitle;//活动seo标题

	var $dongs_seokey; //活动seo关键词
	
	var $dongs_miaoshu;//活动描述
	
	var $dongs_content;//活动内容


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

		
	
			$query = $this->db->get_where('dongs',array());
		//if ($row = $query->result_array()){
			return $query;
		//}
		//return array();
		
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * 查询活动名称是否存在
	 *
	 *
	 */
	function select_dongs_name($data)
	{
	
		
	
		$query = $this->db->get_where('dongs',array('dongs_name' => $data['dongs_name']));
		if ($row = $query->row_array()){
			return TRUE;
		}
		return false;
	
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * 依据id进行查询
	 *
	 *
	 */
	function select_dongs_id($dongs_id)
	{
	
	
	
		$query = $this->db->get_where('dongs',array('dongs_id' => $dongs_id));
		if ($query=$query->row_array() ){
			return $query;
		}
		return false;
	
	}
	

	// --------------------------------------------------------------------
	
	/**
	 * 依据id进行删除
	 *
	 *
	 */
	function del_dongs_id($dongs_id)
	{
	
	
	
		$query = $this->db->delete('dongs',array('dongs_id' => $dongs_id));
		if ($query){
			return TRUE;
		}
		return false;
	
	}
	// --------------------------------------------------------------------
	
	/**
	 * 添加活动信息
	 *
	 *
	 */
	function install($data)
	{
		//print_r($data);die();
		
		$this->db->set('dongs_name', $data['dongs_name']);
	//	$this->db->set('dongs_img', $data['dongs_img']); 图片关联ID img表里的id
	
		$this->db->set('dongs_seotitle', $data['dongs_seotitle']);
		$this->db->set('dongs_seokey', $data['dongs_seokey']);
	
		$this->db->set('dongs_miaoshu', $data['dongs_miaoshu']);
		$this->db->set('dongs_content', $data['dongs_content']);
		
		$this->db->set('dongs_time', $data['dongs_time']);
		$this->db->set('dongs_user', $data['dongs_user']);
		$this->db->set('dongs_status', $data['dongs_status']);
	
	

		$install=$this->db->insert('dongs');
		if ($install){return TRUE;}return FALSE;
		
	}
	
	
	
	// --------------------------------------------------------------------

	/**
	 * 更新活动信息
	 *
	 *
	 */
	function updata_dongs_id($data)
	{
		
		
		$this->db->set('dongs_name', $data['dongs_name']);
	//	$this->db->set('dongs_img', $data['dongs_img']); 图片关联ID img表里的id
	
		$this->db->set('dongs_seotitle', $data['dongs_seotitle']);
		$this->db->set('dongs_seokey', $data['dongs_seokey']);
	
		$this->db->set('dongs_miaoshu', $data['dongs_miaoshu']);
		$this->db->set('dongs_content', $data['dongs_content']);
		
		$this->db->where('dongs_id', $data['dongs_id']);
		
		$query=$this->db->update('dongs');
		if($query){
			return TRUE;
		}
		return  FALSE;
	}

	// --------------------------------------------------------------------
	
	/**
	 * 依据id更新审核状态
	 *
	 *
	 */
	function status_check($data)
	{
	
	
		$this->db->set('dongs_check_time', $data['dongs_check_time']);
		$this->db->set('dongs_check_user', $data['dongs_check_user']);
		$this->db->set('dongs_status', $data['status']);
	
		$this->db->where('dongs_id', $data['dongs_id']);
	
		$query=$this->db->update('dongs');
		if($query){
			return TRUE;
		}
		return  FALSE;
	}


}
