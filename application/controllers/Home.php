<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('home');
	}

    

    function registration(){
        
        

        if($this->input->post('register_submit')){
        $data['name'] = $this->input->post('name');
        $data['email'] = $this->input->post('email');
        $data['phone'] = $this->input->post('phone');
        $data['password'] = $this->input->post('password');

        $this->load->model('Home_model');

       $status = $this->Home_model->insert($data);

       if($status == true){
        echo "Success";
       }else{
        echo "failed";
       }
     }

     else{
        $this->load->view('registration');
     }

        
    }

    function login(){
        $this->load->view('login');
    }

    function login_process(){
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->input->post('password');

        $this->load->model('Home_model');

        $status = $this->Home_model->get($data);

        if($status == true){
            echo "Success";
        }
        else{
            echo "Incorrect";
        }


    }
}
