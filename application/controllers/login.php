<?php

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('blogModels');
		// $this->load->library('encrypt');
	}



	public function index()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$info = array(
			'email'=>$email,
			'password'=>$password
		);

		$data['info'] = $info;
		$data['blog'] = $this->blogModels->get_blog();
		$this->load->view('admin/index',$data);
	}
}
