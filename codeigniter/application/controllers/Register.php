<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('register_model');
		$this->load->model('user_model');
	}

	function index()
	{

		if($_POST){


			$this->form_validation->set_rules('user_name','Name', 'required|trim');
			$this->form_validation->set_rules('user_email','Email Adress', 'required|trim|valid_email|is_unique[user.user_email]');
			$this->form_validation->set_rules('user_password', 'Password', 'required');
			if($this->form_validation->run())
			{
				$encrypted_password = base64_encode($this->input->post('user_password'));
				$data = $this->input->post();
				$data['user_password'] = $encrypted_password;
				$id = $this->user_model->add($data);
				if($id > 0 ){
					redirect(site_url('login'));
				}
			}

			redirect(site_url('register'));
		}

		$this->load->view('login/register');

	}



}
