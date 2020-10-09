<?php 
    class Home extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model('users_model');
            $this->load->helper(array('form','url'));
            $this->load->library('session');
            
        }

        public function index() {
            $this->load->view('project1.php');
            
        }

        public function search()
        {
            $data =array( 'search' => $this->input->post('search'));
            $itemname = $data['search'];
            $_SESSION['itemname']= $data['search'];
            $result = $this->users_model->find_item($data);
            if($result==true){
                $query = $this->db->query("SELECT * FROM item WHERE itemname = '" . $itemname . "'");
                $row = $query->row_array();
                $_SESSION['description'] = $row['description'];
                $_SESSION['price'] = $row['price'];
                $_SESSION['type'] = $row['type'];
                $this->load->view('item.php');
            }else{
                $this->load->view('project1.php');
            }
        }

    }