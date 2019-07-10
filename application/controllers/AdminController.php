<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	public function home()
	{
        $data= array();
        $data['dashboard']= $this->load->view('pages/dashboard','',true);
		$this->load->view('index',$data);
	}
	
}
