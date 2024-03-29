<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/login
	 *	- or -  
	 * 		http://example.com/login/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 public function __construct(){
    	parent::__construct();
    	$this->load->helper('url');
    	$this->load->model('login_model');
    	$this->load->library('session');
  	}
  	
	public function index()
	{
		$title="title";
		$data['title'] = $this->login_model->example($title);
		$this->load->view('login',$data);
	}
	
	//http://example.com/login/auth
	public function auth(){
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		//$this->input->get('name'); see ->user_guide/libraries/input.html
		if($this->login_model->login($user,$pass)){
			//how to record session ->user_guide/libraries/sessions.html
			//redirect('location','reload');
		}else{
			//redirect('location','reload');
		}
	}
	
	//http://example.com/login/logout
	public function logout(){
		//remove session
		//redirect('location','reload');
	}
	
	//http://example.com/login/forget
	public function forget(){
		
	}
}