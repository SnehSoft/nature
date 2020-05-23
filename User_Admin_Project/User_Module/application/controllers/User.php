<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

     function __construct()
	{
		parent::__construct();

		$this->load->model('User_Model');



	}
	public function index()
	{
		$this->load->view('register');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function home()
	{
		$this->load->view('home');
	}
	public function save_user()
	{
				$this->load->library('form_validation');
				

		$userdata = array('first_name'=>$this->input->post('first_name'),'last_name'=>$this->input->post('last_name'),'emailid'=>$this->input->post('emailid'),'password'=>$this->input->post('password'),'c_pass'=>$this->input->post('c_pass'));
		$this->form_validation->set_rules('first_name','First_name','required');
        $this->form_validation->set_rules('last_name','Last_name','required');
        $this->form_validation->set_rules('emailid','Emailid','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('c_pass','c_pass','required');


		$result = $this->User_Model->saveuserdata('user_register',$userdata);
        
        if($this->form_validation->run() == FALSE)
        {
        	
           redirect(base_url('User'));
		} 
		else if($result)
		{
              redirect(base_url('User/login'));
		}
		
	}

	public function fetchdata()
	{
		

		$fullname = $this->input->post('fullname');
		$password = $this->input->post('password');

        
		$result = $this->User_Model->fetch_data($fullname,$password);
          if($result)
          {	
          	redirect(base_url('Home'));
           
          }
          else 
		  {
			redirect(base_url('User/login'));
		  }
		
	}
}