<?php

class UserModel extends CI_Model
{

    public function create($id, $username, $password, $role)
    {
        $data = array(
            'userid' => $id,
            'username' => $username,
            'password' => $password,
            'role' => $role,
        );
        $username = $this->input->post('username');  
        $password = $this->input->post('password');  
        if ($username == "admin")   
        {  
            //declaring session  
            redirect('student');
            // $this->session->set_userdata(array('username'=>$user));  
            // $this->load->view('student');   
        }  
        else{  
            $data['error'] = 'Your Account is Invalid';  
            $this->load->view('login', $data);  
        }  
    }

    function login($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $result = $this->db->get($this->user);
        $result = $result->num_rows();
       if($result){
           return true;
       }
       else{
           return false;
       }
}

         
