<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function registration()
	{
        $this->load->helper('form');
		$this->load->view('Registration');
	}

    //Insert Into the db via the Model called
    public function insert()
	{

$validate=array(
    array(
    'field'=>'email','label'=>'Email Address','rules'=>'required','errors'=>array('required'=>'Whooops, something went wrong, You must provide your %s')),
    array('field'=>'password','label'=>'Password','rules'=>'required','errors'=>array('required'=>'Whooops, something went wrong, You must provide your %s')),
    array('field'=>'username','label'=>'Username','rules'=>'required','errors'=>array('required'=>'Whooops, something went wrong, You must provide your  %s'),
     )
);

$this->load->library('form_validation');
$this->form_validation->set_rules($validate);
$checkvalidation = $this->form_validation->run();
if(!$checkvalidation){
    $this->load->view('Registration');
}

else{
    $this->load->model('Usersmodel');
    $this->Usersmodel->insert();
    
}
       
	}


	//Get Users Controller 
	public function getUsers()
	{
		$this->load->helper('url');
        $this->load->model('Usersmodel');
		$this->Usersmodel->getAll();

	}


	//Delete User  
	public function delete($id)
	{
		$this->load->helper('url');
        $this->load->model('Usersmodel');
		$this->Usersmodel->delete($id);

	}

	//Update User by calling the update view so that the user can now enter and or change
	// his/her password.   
	public function update($id)
	{
		$this->load->helper('url');
		$usersid['id'] = $id;
		//Redirect to the update view and update
        $this->load->view('update',$usersid);

	}


	//Update User in the database  
	public function updateuser($id)
	{
		$this->load->model('Usersmodel');
		$this->Usersmodel->update($id);
	
	}

}


