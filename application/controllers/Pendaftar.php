<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftar extends CI_Controller {

	public function index()
	{
		if (!$this->session->userdata('username')) {
            redirect('auth');
        }
		$data['title'] = "Home";
        $data['pendaftar'] = $this->db->order_by('id','desc')->get('pendaftar')->result_array();
		return $this->template->load('admin/template','admin/pendaftar/index', $data);
	}

	public function daftar()
	{
		if(isset($_POST)){
			$data = [
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'no_hp' => $this->input->post('no_hp'),
				'jk' => $this->input->post('jk'),
				'alamat' => $this->input->post('alamat'),
				'email' => $this->input->post('email'),
			];

			$config['upload_path']          = './assets/file';
			$config['allowed_types']        = 'zip|rar';
			$config['max_size']             = 10000;
			$config['encrypt_name']         = true;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('berkas'))
			{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">'.$this->upload->display_errors().'</div>');
				redirect('home/daftar');
			}
			$data['berkas'] = $this->upload->data('file_name');
			if($this->db->insert('pendaftar', $data)){
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pendaftaran Berhasil</div>');
				redirect('home/daftar');
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf, terjadi kesalahan saat pendaftaran</div>');
				redirect('home/daftar');
			}

		}else{
			redirect('home');
		}
	}

	public function delete($id=''){
		if (!$this->session->userdata('username')) {
            redirect('auth');
        }
		$data = $this->db->get_where('pendaftar', ['id'=>$id])->row_array();
		if(file_exists('assets/file/'.$data['berkas'])){
			unlink('assets/file/'.$data['berkas']);
		}

		if($this->db->delete('pendaftar', ['id'=>$id])){
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil dihapus</div>');
			redirect('pendaftar');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Terjadi kesalahan, data gagal dihapus</div>');
			redirect('pendaftar');
		}
	}
}
