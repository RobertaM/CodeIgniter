<?php

class Infscroll extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }


  public function index() {
    redirect('modules/infscroll/controllers/infscroll/dashboard');
  }

 
  public function dashboard() {
    // loading the required files
    $this->load->model('site_model', 'site');
    // view data
    $data['header']['title'] = 'post list';
    $data['footer']['scripts']['infscroll.js'] = 'infscroll';
    $data['view_name'] = 'infscroll/infview';
    $data['view_data']['pos'] = $this->site->getAll();

    $this->load->view('home', $data);
  }

  /**
   * This page will return the html of the list of customers
   * which will be appended to the table
   * @param null $offset
   */
  public function ajaxlist($offset = null) {
    $this->load->model('site_model', 'site');
    if ($this->site->getAll(5,$offset)) {
      $data['pos'] = $this->cust->get_customers(20,$offset);
      $this->load->view('infscroll/ajaxview',$data);
    }
    else {
      echo 'End';
    }
  }
}