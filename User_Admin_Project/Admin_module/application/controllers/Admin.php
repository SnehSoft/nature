<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

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

		$this->load->model('Admin_model');
    }
	public function index()
	{
		$this->load->view('login');
	}
	public function admin_home()
	{
		$this->load->view('home');
	}
	public function add_users()
	{
		$this->load->view('add_users');
	}
	public function manage_users()
	{
		$result['userdata'] = $this->Admin_model->fetch_user();

		$this->load->view('manage_users',$result);
	}
	public function update_users($id)
	{
		$result['userdata'] = $this->Admin_model->fetch_userdata($id);
        

		$this->load->view('UpdateUser',$result);
	}
	
	public function fetchdata()
	{
		

		$fullname = $this->input->post('fullname');
		$password = $this->input->post('password');

        
		$result = $this->Admin_model->fetch_data($fullname,$password);
          if($result)
          {	
          	redirect(base_url('Home'));
           
          }
          else 
		  {
			redirect(base_url('Admin'));
		  }
		
	}
	public function saveuser()
	{

	     $saveusers = array('user_name'=>$this->input->post('user_name'),'email'=>$this->input->post('email'),'address'=>$this->input->post('address'),'designation'=>$this->input->post('designation'));


	     $result = $this->Admin_model->adduser('add_user',$saveusers);

	     if($result)
	     {
              redirect(base_url('Add_Users'));
	     }
	     else
	     {
              echo "Not added";
	     }
	}
	public function updateuser()
	{
		$id = $this->input->post('user_id');
      
		$updatedata = array('user_name'=>$this->input->post('user_name'),'email'=>$this->input->post('email'),'address'=>$this->input->post('address'),'designation'=>$this->input->post('designation'));
       
		$result = $this->Admin_model->update_user($id,$updatedata);

		if($result)
		{
		        redirect(base_url('Manage_Users'));	
		}
		else
		{
			echo "Not Updated";
		}
	}
	public function deleteuser($id)
	{
        $result = $this->Admin_model->delete_user($id);
        	if($result)
        	{
                redirect(base_url('Manage_Users'));		
        	}
        	else
        	{
        		echo "Not Deleted";
        	}
	}
	
}