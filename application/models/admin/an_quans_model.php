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
	
/**
 * 
 * 设置密保和更新
 * 接收传来的数据
 * 
 * 
 */
	
	function sure_pwd_question($data){
		//print_r($data);die();
		//问题类型
		
		//问题答案
		
		//问题关联管理员id  session中存储的管理员ID
		
		//问题关联问题id是$_post['数据问题值id'] an_quans表   an_quan_id 
		$an_quans_admin_id=$this->db->get_where('an_quans_daan',array('an_quans_admin_id'=>$data['session_admin_id']));
		
		
		if ($an_quans_admin_id == false){//如不存在进心如下操作
		$this->db->set('dna_ques_1',$data['dna_ques_1']);
		$this->db->set('na_ques_1',$data['na_ques_1']);
		
		$this->db->set('dna_ques_2',$data['dna_ques_2']);
		$this->db->set('na_ques_2',$data['na_ques_2']);
		
		$this->db->set('dna_ques_3',$data['dna_ques_3']);
		$this->db->set('na_ques_3',$data['na_ques_3']);
		
		$this->db->set('an_quans_admin_id',$data['session_admin_id']);
		//$this->db->set('an_quan_daan_id',$data['dna_ques_1']);
		return $query = $this->db->insert('an_quans_daan');
		}else{
			$this->db->set('dna_ques_1',$data['dna_ques_1']);
		$this->db->set('na_ques_1',$data['na_ques_1']);
		
		$this->db->set('dna_ques_2',$data['dna_ques_2']);
		$this->db->set('na_ques_2',$data['na_ques_2']);
		
		$this->db->set('dna_ques_3',$data['dna_ques_3']);
		$this->db->set('na_ques_3',$data['na_ques_3']);
		
		$this->db->where('an_quans_admin_id',$data['session_admin_id']);
		
		return $query = $this->db->update('an_quans_daan');
		}
		
		
	}

	

	/**
	 * 查询当前登陆的会员和管理员的安全密保问题和答案
	 *
	 *传入变量数据，职为1/2/3
	 *问题一
	 *问题二
	 *问题三
	 *
	 *
	 */
	function select_dna_ques($data)
	{
	
		$this->db->select('*');
		$this->db->from('an_quans_daan');
		$this->db->where('an_quans_admin_id', $data['session_admin_id']);
		$query = $this->db->get();
		return $query=$query->result_array();
	
	}
	
	function  select_dna_quess($data){
		$this->db->select('*');
		$this->db->from('an_quans');
		$this->db->where('an_quan_id', $data);
		$query = $this->db->get();
		return $query=$query->result_array();
	}

}
