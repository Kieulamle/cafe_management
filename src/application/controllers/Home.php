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
		$data = $this->input->post();
		$this->load->model('order_bill_model', 'order');
		$order = $this->order->add_order($data);
		if(empty($order)){
			echo json_encode( array('success' => false) );exit;
		}
		echo json_encode( array('success' => true) );exit;
		
	}
	
}


