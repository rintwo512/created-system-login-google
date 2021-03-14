<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()

	{
		$data['user'] = $this->db->get_where('users',$this->session->userdata('user_data'))->row_array();
		
		$this->load->view('home',$data);
	}
}
