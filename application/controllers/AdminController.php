<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	public function home()
	{

		$name= $this->input->post('name',true);
		$password= $this->input->post('password',true);
		$this->load->model('Admin');
		$result= $this->Admin->login($name,$password);

		if($result) {
			redirect('dashboard');
		}
		else {
			echo "Wrong Credentials!!!";
		}

	}
    
    public function dashboard()
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
