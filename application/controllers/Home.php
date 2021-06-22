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
        $this->data['page_type'] = 'home';
        $this->is_homepage=true;
        $this->load->view($this->template, $this->data);
    }
    public function about_us(){
        $this->data['page_title'] = 'About-Us';
        $this->data['page_content'] = 'about_us';
        $this->data['page_type'] = 'about_us';
        $this->load->view($this->template, $this->data);
    }
    public function contact_us(){
        $this->data['page_title'] = 'Contact-Us';
        $this->data['page_content'] = 'contact_us';
        $this->data['page_type'] = 'contact_us';
        $this->load->view($this->template, $this->data);
    }
    public function feature(){
        $this->load->view('home/feature');
    }
    public function blog(){
        $this->load->view('home/blog');
    }
    public function competitions(){
        $this->data['page_title'] = 'Competitions';
        $this->data['page_content'] = 'competitions';
        $this->data['page_type'] = 'competitions';
        $this->load->view($this->template, $this->data);
    }
    public function Competition_types(){
        $this->data['page_title'] = 'Competition-Types';
        $this->data['page_content'] = 'competition_types';
        $this->data['page_type'] = 'competition_types';
        $this->load->view($this->template, $this->data);
    }
    public function single_course(){
        $this->data['page_title'] = 'Competition-Single-Page';
        $this->data['page_content'] = 'single_course';
        $this->data['page_type'] = 'single_course';
        $this->load->view($this->template, $this->data);
    }

    public function course_detail(){
        $this->data['page_title'] = 'course-Detail';
        $this->data['page_content'] = 'course_detail';
        $this->data['page_type'] = 'course_detail';
        $this->load->view($this->template, $this->data);
    }
    public function course_list(){
        $this->data['page_title'] = 'Course-List';
        $this->data['page_content'] = 'course_list';
        $this->data['page_type'] = 'course_list';
        $this->load->view($this->template, $this->data);
    }
    public function registration(){
        $this->data['page_title'] = 'registration';
        $this->data['page_content'] = 'registration';
        $this->load->view($this->template, $this->data);
    }
}
?>