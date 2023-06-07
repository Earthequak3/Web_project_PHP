<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	public function get($id=false,$where=[]){
		$this->db->where($where);
		if (is_numeric($id)) {
			$this->db->where('user_id',$id);
			return $this->db->get('user')->row();
		}
		return $this->db->get('user')->result_array();
	}
	public function add($data){
		//echo '<pre>';
		//var_dump($data);
		//die;
		$this->db->insert('user', $data);
		$staffid = $this->db->insert_id();
		if ($staffid) {
			return $staffid;
		}
		return false;
	}
	public function update($id,$data){
		$this->db->where('user_id', $id);
		$this->db->update('user', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}
	public function delete($id){
		$this->db->where('user_id',$id);
		$this->db->delete('user');
	}
	public function login($data){
		$this->load->library('session');
		$user = $this->db->get_where('user',['user_email'=>$data['user_email']])->row();
		if($user){
			if($user->user_password === base64_encode($data['user_password'])){
				setcookie('userLoggedIn',true,['path'=>'/']);
				setcookie('userid',$user->user_id,['path'=>'/']);
				return true;
			}else{
				return false;
			}
		}
		return false;
	}
	public function logout(){
		setcookie('userLoggedIn', 0,['path'=>'/']);
		setcookie('userid', 0,['path'=>'/']);
		redirect(site_url());
	}
}
