<?php 
    class Re_password extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model('users_model');
            $this->load->helper(array('form','url'));
            $this->load->library('session');
            
        }

        public function index() {
            $this->load->view('forgot.php');
        }

        public function verify(){
            $email = $this->input->post('email');
            if ($this->users_model->find_users($email)){
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
        $mail->addCC($email);
        $mail->addBCC($email);
        
        // Email subject
        $mail->Subject = 'Email Verification';
        
        // Set email format to HTML
        $mail->isHTML(true);
        
        // Email body content
        $mailContent = '<p> confirm mail sharply <a href="http://localhost:8080/code/re_password/veri">click here</a></p>';
        $mail->Body = $mailContent;
        
        // Send email
        if(!$mail->send()){
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            $this->load->view('thank1');
        }
            }
        }

        public function veri(){
            $this->load->view('reset');
        }


        public function reset(){
            $data = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );
            if($this->users_model->new_password($data['email'],$data['password'])){
                $this->load->view('success1');
            }else{
                $this->load->view('project1');
            }
        }
    }