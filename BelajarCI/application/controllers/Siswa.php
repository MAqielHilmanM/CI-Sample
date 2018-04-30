<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Siswa extends CI_Controller {
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

      $this->load->model("siswa_model");
      $data['result'] = $this->siswa_model->read();

      $data['level'] = $this->session->userdata('level');

      $data['view'] = "Siswa/v_list";
      $this->load->view("index", $data);
    }

    function tambah() {
      $data['view'] = "Siswa/v_form";
      $this->load->model("siswa_model");
      $data['resultkelas'] = $this->siswa_model->readkelas();
      $this->load->view("index", $data);
    }

    function do_add() {
      $post = $this->input->post(NULL, TRUE);
      $this->load->model("siswa_model");
      $this->siswa_model->create($post);

      if(!empty($post)){
        $this->session->set_flashdata("success","Tambah Data Siswa Berhasil");

        redirect("siswa");
      } else {
        $this->session->set_flashdata("error","Tambah Data Siswa Tidak Berhasil");

        redirect("siswa/v_form");
      }
    }

    function edit($id) {
      $this->load->model("siswa_model");
      $data['resultkelas'] = $this->siswa_model->readkelas();
      //mengambil data berdasarkan id (where id = xxx)
      $result = $this->siswa_model->read("id_siswa = '$id'");

      //mengambil data result array pertama,
      //karena dia dipastikan hanya 1 row
      $data['result'] = $result[0];

      $data['form_edit'] = TRUE;
      $data['view'] = "Siswa/v_form";
      $this->load->view("index", $data);
    }

    function do_edit($id) {
        $post = $this->input->post(NULL, TRUE);
        $this->load->model("siswa_model");
        $this->siswa_model->update("id_siswa='$id'", $post);

        if(!empty($post)){
          $this->session->set_flashdata("success","Edit Data Siswa Berhasil");

          redirect("siswa");
        } else {
          $this->session->set_flashdata("error","Edit Data Siswa Tidak Berhasil");

          redirect("siswa/v_form");
        }
    }

    function delete($id) {
      $this->load->model("siswa_model");
      $this->siswa_model->delete("id_siswa = '$id'");

      if(!empty($id)){
        $this->session->set_flashdata("success","Hapus Data Siswa Berhasil");

        redirect("siswa");
      } else {
        $this->session->set_flashdata("error","Hapus Data Siswa Tidak Berhasil");

        redirect("siswa/v_form");
      }
    }
  }
?>
