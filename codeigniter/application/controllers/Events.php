<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		if((int)$_COOKIE['userLoggedIn']!==1){
			redirect('login');
		}else{
			$user = $this->db->get_where('user',['user_id'=>$_COOKIE['userid']])->row();
			if((int)$user->admin !== 1){
				redirect('login');
			}
		}
		$this->load->model('event_model');
		$this->load->helper('url_helper');
		$this->load->helper('form_helper');
	}

	public function index()
	{
		$data['events'] = $this->event_model->get();
		$this->load->view('event/manage',$data);
	}

	public function event($id=false){
		if($id){
			$data['item'] = $this->event_model->get($id);
		}
		if($_POST){
			if($id){
				$this->event_model->update($id,$this->input->post());
			}else{
				$this->event_model->add($this->input->post());
			}
			redirect(site_url("events"));
		}
		$this->load->view('event/form',$data);
	}
	public function delete($id){
		$this->event_model->delete($id);
		redirect($_SERVER['REMOTE_ADDR']);
	}
}
