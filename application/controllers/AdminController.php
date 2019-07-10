<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	public function home()
	{
        $data= array();
        $data['dashboard']= $this->load->view('pages/dashboard','',true);
		$this->load->view('index',$data);
	}
    
    public function addStudent()
	{
        $data= array();
        $data['dashboard']= $this->load->view('pages/addStudent','',true);
		$this->load->view('index',$data);
	}
    
    public function manageStudent()
	{
        $data= array();
        $data['dashboard']= $this->load->view('pages/manageStudent','',true);
		$this->load->view('index',$data);
	}
    
    public function editAdmin()
	{
        $data= array();
        $data['dashboard']= $this->load->view('pages/editAdmin','',true);
		$this->load->view('index',$data);
	}
	
}
