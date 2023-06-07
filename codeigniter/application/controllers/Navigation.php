<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Navigation extends CI_Controller
{
	public function index()
	{
		// Load the view to display the navigation menu
		$this->load->view('menu/navigation');
	}
}
