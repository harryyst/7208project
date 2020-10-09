<?php 
    class Edit extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model('users_model');
            $this->load->helper(array('form','url'));
            $this->load->library('session');
            
        }

        public function index() {
            $this->load->view('edit.php');
            
        }

        public function update(){
            $data = array(
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname')
            );
            if($this->users_model->new_detail($data)){
                $this->load->view('success1');
            }else{
                $this->load->view('project1');
            }
        }
    }