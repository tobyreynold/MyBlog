<?php

class Login extends CI_Controller {


	public function index()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$info = array(
			'email'=>$email,
			'password'=>$password
		);

		$data['info'] = $info;
		$this->load->view('admin/index',$data);
	}
}
