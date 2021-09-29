<?php
defined('BASEPATH') or die('Access Denied');

class LandingPageController extends CI_Controller {

    public function index() {

        $data['title'] = 'Welcome to Brgy. Poblacion';

        $this->load->view('landingpage/landingpage',$data);
    }
}