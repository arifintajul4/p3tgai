<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = "Home";
		return $this->template->load('home/template','home/index', $data);
	}

	public function daftar()
	{
		$data['title'] = "Pendaftaran";
		$data['status'] = $this->db->get('config')->row_array()['status_daftar'];
		return $this->template->load('home/template', 'home/daftar', $data);
	}

	public function info()
	{
		$data['title'] = "Info";
		$data['info'] = $this->db->get('config')->row_array()['info'];
		return $this->template->load('home/template', 'home/info', $data);
	}

	public function download()
	{
		$data['title'] = "Download";
		$data['download'] = $this->db->get('download')->result_array();
		return $this->template->load('home/template', 'home/download', $data);
	}

	public function pengumuman()
	{
		$data['title'] = "Pengumuman";
		$data['pengumuman'] = $this->db->get('config')->row_array();
		return $this->template->load('home/template', 'home/pengumuman', $data);
	}
}
