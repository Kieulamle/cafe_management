<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('product_model','product');
		$list = $this->product->get_list();
		
		
		
		$this->load->view('home/index',array('list' => $list));
		
	}

	public function createOrder(){
		// todo create order
		$data = $this->input->post();
		print_r($data);
		echo json_encode( array('success' => true) );exit;
	}
	
}
