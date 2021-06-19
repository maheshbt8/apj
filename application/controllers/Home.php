<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class home extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->template = 'home/index';
        $this->is_homepage=false;
    }
    public function index(){
        $this->data['page_title'] = 'Home';
        $this->data['page_content'] = 'home';
        $this->is_homepage=true;
        $this->load->view($this->template, $this->data);
    }
    public function about_us(){
        //$this->load->view('home/about_us');
        $this->data['page_title'] = 'About-Us';
        $this->data['page_content'] = 'about_us';
        $this->load->view($this->template, $this->data);
    }
    public function contact_us(){
        $this->data['page_title'] = 'Contact-Us';
        $this->data['page_content'] = 'contact_us';
        $this->load->view($this->template, $this->data);
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