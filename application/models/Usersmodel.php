<?php

 class Usersmodel extends CI_Model {

 protected $table = 'Contacts';
 public function __construct() {
 parent::__construct();
 }
 


public function insert()
{
    $data=array(
"email"=> $this->input->post('email'),
"password" => $this->input->post("password"),
"username" => $this->input->post("username"),
    );

   $this->db->insert('users',$data);
   echo "data inserted successfully";
}

//Retrieve Users 
public function getAll(){
   
   $this->db->select("users.*");
  $users['l'] = $this->db->from('users')->get();
   $this->load->view('retriveusers',$users);
   
}


//Delete Users
public function delete($id){
   $this->db->where("id",$id);
   $this->db->delete('users'); 

   //Show new Users after deleting the old user
    
   $this->db->select("users.*");
   $users['l'] = $this->db->from('users')->get();
    $this->load->view('retriveusers',$users);
 }
 


public function update($id){
   $data = [
      'password' => $this->input->post('password'),
   ];
   $this->db->where('id', $id);
   $this->db->update('users', $data);
   echo 'Your password has been changed successfully ';
   }



}


?>