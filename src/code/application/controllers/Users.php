<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->data['status'] = "";
        $this->data['message_display'] = "";
        $this->load->model('users_model');
        $this->load->helper('url');
        $this->load->library('session');
        $vkey='';
        
    }

    public function index() {
        $this->load->view('signin', $this->data);
    }

    public function registration_show() {
        $this->load->view('signup',$this->data);
        }

    public function login() {
         // add
        //https://stackoverflow.com/questions/9108376/best-way-to-secure-user-passwords-in-a-mysql-database
        $salt = "hahaha";
        $email = $this->input->post('email',true);
        $password1 = $this->input->post('password',true);
        $email = $this->db->escape_str($email);
        $password = sha1($salt.$password1);
        $password1 = $this->db->escape_str($password);
        $remember = $this->input->post('remember');
        if ($this->users_model->authenticate($email, $password)) {
            $_SESSION['email'] = $email;
            if ($remember) {
                setcookie("email", $_POST["email"], time() + 60*60*24, "/");            
            } else {
                delete_cookie('email');
            }
            
            $this->load->view('project1');  
        } else {
            $this->data['status'] = "Your email or password is incorrect!";
            $this->index();
        }
    }

    public function registration(){
        // add
        $salt = "hahaha";
        $password = $this->input->post('password');
        $password = sha1($salt.$password);
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');

        $data = array(
        'username' => $this->db->escape_str($username),
        'email' => $this->db->escape_str($email),
        'password' => $this->db->escape_str($password),
        'firstname'=> $this->db->escape_str($firstname),
        'lastname' => $this->db->escape_str($lastname),
        'vkey' => md5(time().'username')
    );
    $this->vkey = $data['vkey'];
    $result = $this->users_model->register_user($data);
    if ($result == TRUE) {
        $config = array(
            'protocol'  => 'smtp',
            'smtp_host' => 'mailhub.eait.uq.edu.au',
            'smtp_port' => 25,
            'smtp_user'  => '', 
            'smtp_pass'  => '', 
            'smtp_crypto' => 'tls',
            'mailtype'  => 'html',
            'charset'    => 'iso-8859-1',
            'wordwrap'   => TRUE
            );
            $mailContent = '<p> confirm mail sharply <a href="https://infs3202-4d8d4229.uqcloud.net/code/users/veri/'.$data['email'].'/'.$data['vkey'].'">click here</a></p>';
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from('infs3202ggclub@nmsl.info');
            $this->email->to($this->input->post('email'));
            $this->email->subject("Email Verification");
            $this->email->message($mailContent);
            if($this->email->send())
            {
                $this->load->view('thankyou');
            }
        
        // Send email
    
    
    } else {
    $data['message_display'] = 'Username or Email already exist!';
    $this->load->view('signup', $data);
    }


    }

    public function logout() {
        session_destroy();
        // $this->load->view('project1'); 
        redirect('home');
    }

    public function veri($email,$vkey){
        if($this->users_model->verifyemail($email, $vkey)){
            $this->load->view('verify');
            }else{
                $this->load->view('project1');
            }
        
    }

    public function profile(){
        $this->load->view('profile');
    }
    
    public function profile_detail(){
        $key =''; 
		if(isset($_SESSION['email'])){
            
			$email = $_SESSION['email'];
			$query = $this->db->query("SELECT * FROM users WHERE email = '" . $email . "'");
            $row = $query->row_array();
            $key = $row['verified'];
            if($row['verified']==0){
                $this->load->view('project1');
            }else{
                $_SESSION['firstname'] = $row['firstname'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['lastname'] = $row['lastname'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['img1'] = $row['img'];
                $this->load->view('profile');
            }
			
		}
		

    } 

    public function checkUsername()
 {
  $this->load->model('users_model');
  if($this->users_model->getUsername($_POST['username'])){
   echo '<label class="text-danger"><span><i class="fa fa-times" aria-hidden="true">
   </i> This user is already registered</span></label>';
  }
  else {
   echo '<label class="text-success"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i> Username is available</span></label>';
  }
 }
    
 public function upload(){
    $this->load->view('upload');
 }

 public function sell(){
    $this->load->view('sell');
 }
     
}