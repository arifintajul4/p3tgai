<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }
	public function index()
	{
		$data['title'] = "Home";
        $data['jml_daftar'] = $this->db->get('pendaftar')->num_rows();
        $data['jml_admin'] = $this->db->get('user')->num_rows();
        $data['status'] = $this->db->get('config')->row_array()['status_daftar'];
		return $this->template->load('admin/template','admin/index', $data);
	}

    public function update()
    {
        if(isset($_POST)){
            $data['status_daftar'] = $this->input->post('status');
            if($this->db->update('config', $data, ['id'=>1])){
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Ubah Status!</div>');
                redirect('admin');
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Ubah Status!</div>');
                redirect('admin');
            }
        }else{
            redirect('admin');
        }
    }

    public function info()
    {
        if(isset($_POST['info'])){
            $data['info'] = $this->input->post('info');
            if($this->db->update('config', $data, ['id'=>1])){
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Ubah Info!</div>');
                redirect('admin/info');
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Ubah Info!</div>');
                redirect('admin/info');
            }
        }else{
            $data['title'] = 'Info';
            $data['info'] = $this->db->get('config')->row_array()['info'];
            return $this->template->load('admin/template', 'admin/info', $data);
        }
    }

    public function pengumuman()
    {

        if(!empty($_FILES)){

            $pengumuman = $this->db->get('config')->row_array();

            if($_FILES['sampul']['name'] !== ''){
                $config['upload_path']          = './assets/img';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 2000;
                $config['encrypt_name']         = true;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('sampul'))
                {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">'.$this->upload->display_errors().'</div>');
                    redirect('admin/pengumuman');
                }
                $data['sampul'] = $this->upload->data('file_name');
                if(file_exists('assets/img/'.$pengumuman['sampul'])){
                    unlink('assets/img/'.$pengumuman['sampul']);
                }
            }

            if($_FILES['file']['name'] !== ''){
                $config2['upload_path']          = './assets/file';
                $config2['allowed_types']        = 'pdf';
                $config2['max_size']             = 10000;
                $config2['encrypt_name']         = true;

                $this->upload->initialize($config2);

                if ( ! $this->upload->do_upload('file'))
                {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">'.$this->upload->display_errors().'</div>');
                    redirect('admin/pengumuman');
                }
                $data['berkas'] = $this->upload->data('file_name');
                if(file_exists('assets/file/'.$pengumuman['berkas'])){
                    unlink('assets/file/'.$pengumuman['berkas']);
                }
            }
            if($_FILES['file']['name'] !== '' || $_FILES['sampul']['name'] !== ''){
                if($this->db->update('config', $data, ['id'=>1])){
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Ubah Pengumuman!</div>');
                    redirect('admin/pengumuman');
                }else{
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Ubah Pengumuman!</div>');
                    redirect('admin/pengumuman');
                }
            }else{
                redirect('admin/pengumuman');
            }
            
        }else{
            $data['title'] = 'Pengumuman';
            $data['pengumuman'] = $this->db->get('config')->row_array();
            return $this->template->load('admin/template', 'admin/pengumuman', $data);
        }
    }

}
