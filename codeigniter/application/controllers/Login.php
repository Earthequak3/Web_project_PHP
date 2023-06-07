<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model('user_model');
	}

	function index()
	{
		if ($_POST) {
			$this->form_validation->set_rules('user_email','Email Adress', 'required|trim|valid_email');
			$this->form_validation->set_rules('user_password', 'Password', 'required');
			if ($this->form_validation->run()) {
				$logged = $this->user_model->login($this->input->post());
				if ($logged) {
					redirect(site_url(''));
				} else {
					redirect(site_url('login'));
				}
			} else {
				redirect(site_url('login'));
			}
		}
		$this->load->view('login/login');

	}

	public function logout()
	{
		$logged = $this->user_model->logout();
		redirect(site_url('login'));
	}


}
