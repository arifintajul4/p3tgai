<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }

	public function index()
	{
		$data['title'] = "Download";
        $data['download'] = $this->db->order_by('id','desc')->get('download')->result_array();
		return $this->template->load('admin/template','admin/download', $data);
	}

	public function add()
	{
		if(isset($_POST)){
			$data = [
				'judul' => $this->input->post('judul'),
			];

            $config['allowed_types']        = 'gif|jpg|png|zip|rar|pdf|docx|doc|xlsx|xls';
			$config['upload_path']          = './assets/file';
			$config['max_size']             = 10000;
			$config['encrypt_name']         = true;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('file'))
			{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">'.$this->upload->display_errors().'</div>');
				redirect('download');
			}
			$data['file'] = $this->upload->data('file_name');
			if($this->db->insert('download', $data)){
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tambah Data Berhasil</div>');
				redirect('download');
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf, terjadi kesalahan saat tambah data</div>');
				redirect('download');
			}

		}else{
			redirect('download');
		}
	}

	public function delete($id=''){
		if (!$this->session->userdata('username')) {
            redirect('auth');
        }
		$data = $this->db->get_where('download', ['id'=>$id])->row_array();
		if(file_exists('assets/file/'.$data['file'])){
			unlink('assets/file/'.$data['file']);
		}

		if($this->db->delete('download', ['id'=>$id])){
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil dihapus</div>');
			redirect('download');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Terjadi kesalahan, data gagal dihapus</div>');
			redirect('download');
		}
	}
}
