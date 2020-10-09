<?php 
    class Cart extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model('users_model');
            $this->load->helper(array('form','url'));
            $this->load->library('session');
            
        }

        public function index() {
            $data['item'] = $this->users_model->get_item();
            $this->load->view('cart.php',$data);
        }

        public function delete($itemname){

            $this->users_model->delete_item($itemname);
            $data['item'] = $this->users_model->get_item();
            $this->load->view('cart.php',$data);
        }
    }