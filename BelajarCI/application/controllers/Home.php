<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  // Constructor
  function __construct() {
    parent::__construct();

    // Cek apakah ada session username
    $username = $this->session->userdata('username');

    // Jika tidak ada atau kosong, arahkan ke halaman login
    if(empty($username)) redirect("login");
  }

	public function index(){
    $data['view'] = "v_dashboard";
    $this->load->view("index", $data);

    $data['level'] = $this->session->userdata('level');
  }
}
