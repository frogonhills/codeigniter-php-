<?php
class MainController extends CI_Controller{

	function index(){

		$this->load->model('MainModel');		
		$this->MainModel->createUsersTable();
		$this->load->view('home');
		
	}

	function login(){
		$this->load->view('homebar');
		$this->load->view('login');
	}

	function signup(){
		$this->load->view('homebar');
		$this->load->view('signup');
	}

	function signupprocess(){
		$this->load->model('MainModel');
		$this->MainModel->storeDataToDB();
		$this->load->view('homebar');
		

		
	}

	function loginprocess(){
		$this->load->model('MainModel');
		if($this->MainModel->checkLogin()){
	        $this->load->model('MainModel');
	        $data['userdata']=$this->MainModel->retriveData($this->input->post('userid'));
            $this->load->view('homebar');
	        $this->load->view('profile',$data);
	        $this->load->view('eandbar');

		}else{
			$this->load->view('login');
		}
		}
	
	function gallery(){
		$this->load->view('homebar');
		$this->load->view('gallery');
	}
	function homebar(){
	$this->load->view('homebar');
	}
	function adminlog(){
		$this->load->view('homebar');
		$this->load->view('adminlog');
		$this->load->view('eandbar');
	}
	function adminLogingProcess(){
		$this->load->model('MainModel');
		if($this->MainModel->checkAdminLogin()){
			$this->load->model('MainModel');
			$data['userdata']=$this->MainModel->adminData($this->input->post('userid'));
            $this->load->view('homebar');
	        $this->load->view('adminProfile',$data);
	        $this->load->view('eandbar');
		}
	}
	function workingEmployee(){
		$this->load->model('MainModel');
		$data["fetch_data"]=$this->MainModel->fetch_data();
		$this->load->view('homebar');
		$this->load->view('workingEmployee',$data);
		$this->load->view('eandbar');
	}
	function customerSttaus(){
		$this->load->model('MainModel');
		$data["fetch_customer_data"]=$this->MainModel->fetch_customer_data();
		$this->load->view('homebar');
		$this->load->view('customerSttaus',$data);
		$this->load->view('eandbar');
	}
	function bycatagory(){
		$this->load->model('MainModel');
		$data["fetch_customer_data"]=$this->MainModel->Mbycatagory();
		$this->load->view('homebar');
		$this->load->view('customerSttaus',$data);
		$this->load->view('eandbar');
	}
	function bycid(){
		$this->load->model('MainModel');
		$data["fetch_customer_data"]=$this->MainModel->Bycid();
		$this->load->view('homebar');
		$this->load->view('customerSttaus',$data);
		$this->load->view('eandbar');
	}

	


	
}


?>

