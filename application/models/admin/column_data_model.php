<?php
/*  @友情链接数据处理模块
 * 
 *  @邮件：cctv_382975370@qq.com
 *  
 *  @作者：sh
 * 
 * */

/**
* 友情链接数据
*
*/
class column_data_model extends CI_Model
{

	var $link_club_id;//关联俱乐部id

	var $link_title;//友情链接标题

	var $link_url;//友情链接地址

	


	function __construct()
	{
		parent::__construct();
		
	}

	// --------------------------------------------------------------------
	
	/**
	 * 依据当前管理员session的ugroup_id=5值查询友情链接信息列表,全部列表
	 *
	 *超级管理员
	 *
	 */
	function select()
	{

		$this->db->select('*');
		$this->db->from('links');
		$this->db->join('club', 'links.link_club_id = club.club_id');
		$query = $this->db->get();
		return $query;
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * 依据当前管理员session的club_id值查询友情链接信息列表。
	 * 
	 * 当前管理员所在的俱乐部
	 *
	 *
	 */
	function select_link_club_id($link_club_id)
	{
		
			$this->db->select('*');
			$this->db->from('links');
			$this->db->join('club', "links.link_club_id = club.club_id");
			$this->db->where('links.link_club_id',$link_club_id);
			$query = $this->db->get();
			return $query;
			
			
			
	}
	

	
	// --------------------------------------------------------------------
	
	/**
	 * 查询友情链接是否存在
	 *
	 *
	 */
	function select_link_title($data)
	{
		$query = $this->db->get_where('links',array('link_title' => $data['link_title']));
		if ($row = $query->row_array()){
			return TRUE;
		}
		return false;
	
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * 依据友情链接俱乐部id进行查询
	 *
	 *
	 */
	function select_link_id($link_club_id)
	{
		$query = $this->db->get_where('links',array('link_club_id' => $link_club_id));
		if ($query=$query->row_array() ){
			return $query;
		}
		return false;
	
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * 依据友情链接id进行查询
	 *
	 *
	 */
	function selectlinkid($link_id)
	{
		$query = $this->db->get_where('links',array('link_id' => $link_id));
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
	function del_link_id($link_id)
	{
		$query = $this->db->delete('links',array('link_id' => $link_id));
		if ($query){
			return TRUE;
		}
		return false;
	
	}
	// --------------------------------------------------------------------
	
	/**
	 * 添加友情链接信息
	 *
	 *
	 */
	function insert($data,$session)
	{
		//print_r($session);die();
		
		$this->db->set('link_club_id', $session['link_club_id']);
		$this->db->set('link_username', $session['link_username']);
		
		$this->db->set('link_title', $data['link_title']);
		$this->db->set('link_url', $data['link_url']);
		
		$this->db->set('link_status', 2);
		$this->db->set('link_statuss', "未通过");
		
		$insert=$this->db->insert('links');
		
		if ($insert){return TRUE;}return FALSE;
		
	}
	
	
	
	// --------------------------------------------------------------------

	/**
	 * 更新友情链接信息
	 *
	 *
	 */
	function updata_link_id($data)
	{
		
		
		$this->db->set('link_title', $data['link_title']);
		$this->db->set('link_url', $data['link_url']);
	
		$this->db->where('link_id', $data['link_id']);
		
		$query=$this->db->update('links');
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
	
//if ($data['status']=='on'){$data['statuss']='已审核';}else{$data['statuss']='未审核';}
		$this->db->set('link_status', $data['status']);
		$this->db->set('link_statuss', $data['statuss']);
		$this->db->set('link_username', $data['link_username']);
	
		$this->db->where('link_id', $data['link_id']);
	
		$query=$this->db->update('links');
		if($query){
			return TRUE;
		}
		return  FALSE;
	}


}
