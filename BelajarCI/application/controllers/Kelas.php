<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Kelas extends CI_Controller {
    // Constructor
    function __construct() {
      parent::__construct();

      // Cek apakah ada session username
      $username = $this->session->userdata('username');

      // Jika tidak ada atau kosong, arahkan ke halaman login
      if(empty($username)) redirect("login");
    }

    function index() {
      $data['success'] = $this->session->flashdata("success");
      $data['error'] = $this->session->flashdata("error");

      $this->load->model("kelas_model");
      $data['result'] = $this->kelas_model->read();

      $data['level'] = $this->session->userdata('level');

      $data['view'] = "kelas/v_list";
      $this->load->view("index", $data);
    }

    function tambah() {
      $data['view'] = "kelas/v_form";
      $this->load->view("index", $data);
    }

    function do_add() {
      $post = $this->input->post(NULL, TRUE);
      $this->load->model("kelas_model");
      $this->kelas_model->create($post);

      if(!empty($post)){
        $this->session->set_flashdata("success","Tambah Data Kelas Berhasil");

        redirect("kelas");
      } else {
        $this->session->set_flashdata("error","Tambah Data Kelas Tidak Berhasil");

        redirect("kelas/v_form");
      }
    }

    function edit($id) {
      $this->load->model("kelas_model");

      //mengambil data berdasarkan id (where id = xxx)
      $result = $this->kelas_model->read("id_kelas = '$id'");

      //mengambil data result array pertama,
      //karena dia dipastikan hanya 1 row
      $data['result'] = $result[0];

      $data['form_edit'] = TRUE;
      $data['view'] = "kelas/v_form";
      $this->load->view("index", $data);
    }

    function do_edit($id) {
        $post = $this->input->post(NULL, TRUE);
        $this->load->model("kelas_model");
        $this->kelas_model->update("id_kelas='$id'", $post);

        if(!empty($post)){
          $this->session->set_flashdata("success","Edit Data Kelas Berhasil");

          redirect("kelas");
        } else {
          $this->session->set_flashdata("error","Edit Data Kelas Tidak Berhasil");

          redirect("kelas/v_form");
        }
    }

    function delete($id) {
      $this->load->model("kelas_model");
      $this->kelas_model->delete("id_kelas = '$id'");

      if(!empty($id)){
        $this->session->set_flashdata("success","Hapus Data Kelas Berhasil");

        redirect("kelas");
      } else {
        $this->session->set_flashdata("error","Hapus Data Kelas Tidak Berhasil");

        redirect("kelas/v_form");
      }
    }
  }


?>
