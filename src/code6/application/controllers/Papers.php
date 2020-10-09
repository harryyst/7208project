<?php
    class Papers extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model('papers_model');
            $this->load->helper('url_helper');
            }
            public function index() { 
                $data['papers'] = $this->papers_model->get_paper();
                $data['title'] = 'Papers archive';
                $this->load->view('templates/header', $data);
                $this->load->view('papers/index', $data);
                
            }
            public function read($year = NULL) {
            $data['paper_item'] = $this->papers_model->get_paper($year);
            if (empty($data['paper_item'])) {
                show_404();
                }
                $data['title'] = 'Papers in '.$year;
                $this->load->view('templates/header', $data);
                $this->load->view('papers/read', $data);
                $this->load->view('templates/footer'); 
        } 
    }