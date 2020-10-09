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
        $email = $this->input->post('email');
        $password = $this->input->post('password');
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
        $data = array(
        'username' => $this->input->post('username'),
        'email' => $this->input->post('email'),
        'password' => $this->input->post('password'),
        'firstname'=> $this->input->post('firstname'),
        'lastname' => $this->input->post('lastname'),
        'vkey' => md5(time().'username')
    );
    $this->vkey = $data['vkey'];
    $result = $this->users_model->register_user($data);
    if ($result == TRUE) {
        $this->load->library('phpmailer_lib');
        
        // PHPMailer object
        $mail = $this->phpmailer_lib->load();
        
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'harryyst@gmail.com';
        $mail->Password = 'Yst1997327';
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;
        
        $mail->setFrom('harryyst@gmail.com', 'Xixi');
        $mail->addReplyTo('harryyst@gmail.com', 'Xixi');
        
        // Add a recipient
        // $mail->addAddress();
        
        // Add cc or bcc 
        $mail->addCC($data['email']);
        $mail->addBCC($data['email']);
        
        // Email subject
        $mail->Subject = 'Email Verification';
        
        // Set email format to HTML
        $mail->isHTML(true);
        
        // Email body content
        $mailContent = '<p> confirm mail sharply <a href="http://localhost:8080/code/users/veri/'.$data['email'].'/'.$data['vkey'].'">click here</a></p>';
        $mail->Body = $mailContent;
        
        // Send email
        if(!$mail->send()){
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            $this->load->view('thankyou');
        }
    
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