<?php
/*  @用户安全问题设置
 * 
 *  @邮件：cctv_382975370@qq.com
 *  
 *  @作者：sh
 * 
 * */

/**
* 
*
*/
class An_quans_model extends CI_Model
{

	var $an_quan_id;//安全问题id

	var $an_quans;//安全问题

	//an_quans;//安全问题表

	


	function __construct()
	{
		parent::__construct();
		
	}

	// --------------------------------------------------------------------
	
	/**
	 * 全部列表
	 *
	 *当前管理员
	 *
	 */
	function select()
	{

		//$this->db->select('*');
		//$this->db->from('links');
		//$this->db->join('an_quans', 'links.link_club_id = club.club_id');
		$query = $this->db->get('an_quans');
		return $query;
	}
	



}
