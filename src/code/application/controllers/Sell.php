<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    Class Sell extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model('users_model');
            $this->load->helper(array('form','url'));
            $this->load->library('session');
        }

        public function index(){
            $this->load->view('sell');
        }

        public function sell_item(){
            $data = array(
                'itemname' => $this->input->post('itemname'),
                'description' => $this->input->post('description'),
                'type' => $this->input->post('type'),
                'price'=> $this->input->post('price'),
                
            );

            $this->users_model->add_item($data);
            $this->load->view('success');
        }
    }