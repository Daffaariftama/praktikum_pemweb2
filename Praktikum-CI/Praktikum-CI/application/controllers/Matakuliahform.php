<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliahform extends CI_Controller {
	public function index()
	{
		$this->load->model('matakuliah_model','jadwal1');
        $this->jadwal1->semester='Ganjil';
        $this->jadwal1->nama= 'Ahmad Bambang';
        $this->jadwal1->matakuliah='Basis Data';
        $this->jadwal1->hari='jumat';
        $this->jadwal1->ruangan='B2';

        $this->load->model('matakuliah_model','jadwal2');
        $this->jadwal2->semester='Ganjil';
        $this->jadwal2->nama='Zulkarnain';
        $this->jadwal2->matakuliah='Pemrograman Web';
        $this->jadwal2->hari='kamis';
        $this->jadwal2->ruangan='B1';

        $list_jadwal = [$this->jadwal1, $this->jadwal2];
        $data['list_jadwal'] = $list_jadwal;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('praktikum7/matakuliahform', $data);
        $this->load->view('layout/footer');
	}
}