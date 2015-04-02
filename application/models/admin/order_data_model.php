<?php
/*  @订单表数据处理模块
 * 
 *  @邮件：cctv_382975370@qq.com
 *  
 *  @作者：sh
 * 
 * */

/**
* 订单表数据处理模块
*表名：order_Form
*/
class order_data_model extends CI_Model
{

	var $oid;//订单id

	var $Type;//类型,1充值2商城3积分

	var $Record_Number;//订单流水号，下单日期＋下单进度更新最新时间＋用户名＋6位随机数字＋6位随机小写字母
	
	var $Orders_Username;//订单用户名 ,可用于查找订单

	var $Record_status;//订单状态，Record_status1未付款2已付款3未发货4已发货5已签收6订单完成7订单关闭

	var $Record_Time;//下单时间
	
	var $buypay;//buypay在线支付货到付款
	
	var $iphone;//下单者手机号，可用于查询订单
	
	var $buyadds;//订单收货地址
	
	var $ems;//运费：1，包运费 2，不包运费
	
	var $id_number;//身份证可用于查询订单

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
		$query = $this->db->get('order_Form');
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
