<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('product_model','product');
		$list = $this->product->get_list();
		
		
		
		$this->load->view('home/index',array('list' => $list));
		
	}

	public function addCart(){
		// todo create order, ham them du lieu bill order vao database
		$data = $this->input->post();
		$this->load->model('product_model','product');
		echo json_encode( array('success' => true) );exit;
	}
	
}


