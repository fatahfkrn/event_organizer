<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{

      public function index()
      {
            $this->load->model('Kegiatan_model', 'kegiatan');
            $list_kgtn = $this->kegiatan->getAll();


            $data['list_kgtn'] = $list_kgtn;

            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('kegiatan/index', $data);
            $this->load->view('layout/footer');
      }

      public function view()
      {
            $_id = $this->input->get('id');
            $this->load->model('Kegiatan_model', 'kegiatan');
            $data['kgtn'] = $this->kegiatan->findById($_id);

            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('kegiatan/view', $data);
            $this->load->view('layout/footer');
      }

      public function create()
      {
            $data['judul'] =  'Form Kelola Kegiatan';
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('kegiatan/create', $data);
            $this->load->view('layout/footer');
      }

      public function save()
      {
            $this->load->model('Kegiatan_model', 'kegiatan');
            $_judul = $this->input->post('judul');
            $_kapasitas = $this->input->post('kapasitas');
            $_harga = $this->input->post('harga');
            $_tanggal = $this->input->post('tgl');
            $_narasumber = $this->input->post('narsum');
            $_tempat = $this->input->post('tmp');
            $_pic = $this->input->post('pic');
            $_jenis_kgtn = $this->input->post('jenis_id');

            $allowedExtension = ['png', 'jpg', 'jpeg'];
            $filename = $_FILES['upload']['name'];
            $explodedFilename = explode('.', $filename);
            $extension = strtolower(end($explodedFilename));
            $temporaryFile = $_FILES['upload']['tmp_name'];

            if (in_array($extension, $allowedExtension) == true) {
                  move_uploaded_file($temporaryFile, 'foto/' . $filename);
            }

            $data_kgtn = [$_judul, $_kapasitas, $_harga, $_tanggal, $_narasumber, $_tempat, $_pic, $filename, $_jenis_kgtn];

            $this->kegiatan->save($data_kgtn);
            redirect(base_url() . 'index.php/kegiatan');
      }

      public function delete()
      {
            $_id = $this->input->get('id');
            $this->load->model('Kegiatan_model', 'kegiatan');

            $this->kegiatan->delete($_id);
            redirect(base_url() . 'index.php/kegiatan', 'refresh');
      }
}
