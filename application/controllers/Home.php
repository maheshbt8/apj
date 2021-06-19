<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class home extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->template = 'home/index';
    }
    public function index(){
        $this->data['page_title'] = 'Dashboard';
        $this->data['page_content'] = 'home';
        $this->load->view($this->template, $this->data);
    }
    public function about_us(){
        $this->load->view('home/about_us');
    }
    public function contact_us(){
        $this->load->view('home/contact_us');
    }
    public function feature(){
        $this->load->view('home/feature');
    }
    public function blog(){
        $this->load->view('home/blog');
    }
    public function competitions(){
        $this->load->view('home/competitions');
    }
}
?>