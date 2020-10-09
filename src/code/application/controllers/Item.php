<?php 
    class Item extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model('users_model');
            $this->load->helper(array('form','url'));
            $this->load->library('session');
            
        }

        public function index() {
            $data['comment'] = $this->users_model->get_comment();
            $this->load->view('item.php',$data);
            
        }

        public function comment(){
            $data = array(
                'comment' => $this ->input ->post('comment'),
                'itemname' => $_SESSION['itemname']
            );
            $_SESSION['comment'] = $this ->input->post('comment');
            $result = $this->users_model->comment($data);
            if($result){
                $data['comment'] = $this->users_model->get_comment();
                $this->load->view('item.php',$data);
            }
        }

        public function addcart(){
            $data = array(
                'itemname' => $_SESSION['itemname'],
                'username' => $_SESSION['username']
            );
            $result = $this->users_model->cart($data);
            if($result){
                $data['comment'] = $this->users_model->get_comment();
                $this->load->view('item.php',$data);
            }
        }
        
        
        
    }