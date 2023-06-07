<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Event_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	public function get($id=false,$where=[]){
		$this->db->where($where);

		if (is_numeric($id)) {
			$this->db->where('id',$id);
			return $this->db->get('events')->row();
		}
		return $this->db->get('events')->result_array();
	}
	public function add($data){
		$data['date'] = date('Y-m-d',strtotime($data['date']));
		$this->db->insert('events', $data);
		$staffid = $this->db->insert_id();
		if ($staffid) {
			return $staffid;
		}
		return false;
	}
	public function update($id,$data){
		$data['date'] = date('Y-m-d',strtotime($data['date']));
		$this->db->where('id', $id);
		$this->db->update('events', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}
	public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('events');
	}
}
