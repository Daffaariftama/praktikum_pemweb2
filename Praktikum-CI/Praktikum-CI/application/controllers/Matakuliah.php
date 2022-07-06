<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {
	public function index()
	{
		$this->load->model('matakuliah_model','jadwal1');
        $this->jadwal1->semester='Ganjil';
        $this->jadwal1->dosenpengajar= 'Ahmad Bambang';
        $this->jadwal1->matakuliah='Basis Data';
        $this->jadwal1->hari='jumat';
        $this->jadwal1->ruangan='B2';

        $this->load->model('matakuliah_model','jadwal2');
        $this->jadwal2->semester='Ganjil';
        $this->jadwal2->dosenpengajar='Zulkarnain';
        $this->jadwal2->matakuliah='Pemrograman Web';
        $this->jadwal2->hari='kamis';
        $this->jadwal2->ruangan='B1';

        $this->load->model('matakuliah_model','jadwal3');
        $this->jadwal3->semester=$this->input->post('semester');
        $this->jadwal3->dosenpengajar=$this->input->post('dosenpengajar');
        $this->jadwal3->matakuliah=$this->input->post('jadwalmatkul');
        $this->jadwal3->hari=$this->input->post('hari');
        $this->jadwal3->ruangan=$this->input->post('ruangan');

        $list_jadwal = [$this->jadwal1, $this->jadwal2, $this->jadwal3];
        $data['list_jadwal'] = $list_jadwal;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('p6matakuliah/index', $data);
        $this->load->view('layout/footer');
	}
}