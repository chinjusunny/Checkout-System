<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		if (count($_POST) > 0) 
		{
			//print_r($_POST);
			$string=$this->input->post('list_items');
			$array = explode(',', $string);
			$counts = array_count_values($array);
			$a_qty=$counts['Apple']??0;
			$o_qty=$counts['Orange']??0;
			$a_offer=$this->input->post('a_offer');
			$o_offer=$this->input->post('o_offer');

			$totalValue=($a_qty*0.70)+($o_qty*0.35);

			$o_qty_new=$o_qty;
			$a_qty_new=$a_qty;


			if($a_offer==1){
				
				if($a_qty%2==0){
					$a_qty_new=$a_qty/2;
				}
				else{
					$a_qty_new=($a_qty+1)/2;
				}

			}
			if($o_offer==1){
				if ($o_qty%3==0)  {
					$o_qty_new =floor($o_qty/3)*2;
				}
				else if ($o_qty%3==1){
					$o_qty_new = (floor($o_qty/3)*2)+1;
				} 
				else{
					$o_qty_new = (floor($o_qty/3)*2)+2;

				} 

			}
			$a_rate=0.70*$a_qty_new;
			$o_rate=0.35*$o_qty_new;
			$total=$a_rate+$o_rate;
			$data=array("string" =>$string,"a_qty" => $a_qty, "o_qty"=>$o_qty,"total"=>$total,"totalValue"=>number_format($totalValue,2),"o_offer"=>$o_offer,"a_offer"=>$a_offer);
			
			$this->load->view('welcome_message',$data);
		}
		else
		{
			$data['total']=0;
			$this->load->view('welcome_message',$data);
		}
		
	}
	
	
}
