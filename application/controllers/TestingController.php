<?php
defined('BASEPATH') OR exit('No direct script access allowed');
function orange_offer($qty){
	//3 for the price of 2 on Oranges
	if ($qty%3==0)  {
		$qty =floor($qty/3)*2;
	}
	else if ($qty%3==1){
		$qty = (floor($qty/3)*2)+1;
	} 
	else{
		$qty = (floor($qty/3)*2)+2;

	} 
	return $qty;
}
function apple_offer($qty){
	if($qty%2==0){
		$qty=$qty/2;
	}
	else{
		$qty=($qty+1)/2;
	}
	return $qty;
}
class TestingController extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('unit_test');
	}
	public function index()
	{
		$this->unit->run(orange_offer(6),4,'3 for the price of 2 on Oranges');
		$this->unit->run(apple_offer(6),3,'Buy 1, get 1 free on Apples');
		$this->load->view('unit-test-report');
	}

}