<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('order_model');
		$this->load->model('event_model');
		$this->load->helper('url_helper');
		$this->load->helper('form_helper');
	}

	public function index()
	{
		$data['orders'] = $this->order_model->get();
		$this->load->view('event/form_front',$data);
	}

	public function order($id=false){
		if($id){
			$data['item'] = $this->event_model->get($id);
		}
		if($_POST){
			if($id){
				$this->order_model->update($id,$this->input->post());
			}else{
				$this->order_model->add($this->input->post());
			}
			redirect(site_url("orders"));
		}
		$this->load->view('event/form_front',$data);
	}
	public function delete($id){
		$this->order_model->delete($id);
		redirect($_SERVER['REMOTE_ADDR']);
	}
}
