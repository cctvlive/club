<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

/**
 * @author sh
 * @copyright 2015.3.28
*/

class M_area extends CI_Model {
	//获取省份、城市/地区、县市及乡镇信息
	function post($type,$upid = 0) {
		$data = '';
		switch ($type) {
			//查询所有省份
			case 'province':
				$this->db->select('id,name,level,upid,list');
				$data = $this->db->get_where('area',array('upid'=>0));
				break;
				//查询某一省份下的所有城市/城区
				//或查询某一城市/城区下的所有县市
				//或查询某一县市下的所有乡镇
			case 'city':
				$this->db->select('id,name,level,upid,list');
				$data = $this->db->get_where('area',array('upid'=>$upid));
				break;
		}
		return $data;
	}
}