<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if((int)$_COOKIE['userLoggedIn']!==1){
			redirect('login');
		}else{
			$user = $this->db->get_where('user',['user_id'=>$_COOKIE['userid']])->row();
			if((int)$user->admin !== 1){
				redirect('login');
			}
		}
		$this->load->model('user_model');
		$this->load->helper('url_helper');
		$this->load->helper('form_helper');
	}

	public function index()
	{
		$data['users'] = $this->user_model->get();
		$this->load->view('user/manage',$data);
	}

	public function user($id=false){
		if($id){
			$data['user'] = $this->user_model->get($id);
		}
		if($_POST){
			if($id){
				$this->user_model->update($id,$this->input->post());
			}else{
				$this->user_model->add($this->input->post());
			}
			redirect(site_url("users"));
		}
		$this->load->view('user/form',$data);
	}
	public function delete($id){
		$this->user_model->delete($id);
		redirect($_SERVER['REMOTE_ADDR']);
	}
	public function test(){
		if($_POST){
			$test = $this->user_model->get(false,$this->input->post());
			echo '<pre>';
			var_dump($test);
			die;
		}
		$this->load->view('user/test');
	}
}
