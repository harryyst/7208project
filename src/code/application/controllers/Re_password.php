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
                    $mailContent = '<p> confirm mail sharply <a href="https://infs3202-4d8d4229.uqcloud.net/code/re_password/veri">click here</a></p>';
                    $this->load->library('email', $config);
                    $this->email->set_newline("\r\n");
                    $this->email->from('infs3202ggclub@nmsl.info');
                    $this->email->to($this->input->post('email'));
                    $this->email->subject("Reset password");
                    $this->email->message($mailContent);
                    if($this->email->send())
                    {
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