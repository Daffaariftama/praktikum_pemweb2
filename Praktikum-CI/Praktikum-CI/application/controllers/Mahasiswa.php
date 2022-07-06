<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	public function index()
	{
		$this->load->model('mahasiswa_model','mhs1');
        $this->mhs1->id=1;
        $this->mhs1->nim='010001';
        $this->mhs1->nama='Faiz Fikri';
        $this->mhs1->gender='L';
        $this->mhs1->ipk=3.85;

        $this->load->model('mahasiswa_model','mhs2');
        $this->mhs2->id=2;
        $this->mhs2->nim='020001';
        $this->mhs2->nama='Pandan Wangi';
        $this->mhs2->gender='P';
        $this->mhs2->ipk=3.35;

        $this->load->model('mahasiswa_model', 'mhs3');
        $this->mhs3->nim = $this->input->post('nim');
        $this->mhs3->nama = $this->input->post('nama');
        $this->mhs3->gender = $this->input->post('gender');
        $this->mhs3->ipk = $this->input->post('ipk');

        $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3];
        $data['list_mhs'] = $list_mhs;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('p6mahasiswa/index',$data);
        $this->load->view('layout/footer');
	}

    public function save()
    {
        $this->load->model('mahasiswa_model', 'mhs1');

        $this->mhs1->nim = $this->input->post('nim');
        $this->mhs1->nama = $this->input->post('nama');
        $this->mhs1->gender = $this->input->post('gender');
        $this->mhs1->ipk = $this->input->post('ipk');

        $data['mhs1'] = $this->mhs1;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('praktikum7/savemhs',$data);
        $this->load->view('layout/footer');
        
    }
}