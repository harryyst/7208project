<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('users_model');
        $this->load->helper(array('form','url'));
        $this->load->library('session');
    }

    public function index(){
        $this->load->view('upload',array('error'=>''));
    }

    public function do_upload(){
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 1000000;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('userfile')){
            $error = array('error'=>$this->upload->display_error());
            $this->load->view('upload',$error);
        }else{
            $data = array('upload_data'=>$this->upload->data());
            $_SESSION['img']= $this->upload->data('file_name'); 
            $this->users_model->img($_SESSION['img']);
            $this->load->view('profile',$data);
        }
    }

    
}