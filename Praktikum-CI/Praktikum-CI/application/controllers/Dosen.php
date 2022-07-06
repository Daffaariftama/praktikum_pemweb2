<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {
	public function index()
	{
		$this->load->model('dosen_model','dsn1');
        $this->dsn1->id=1;
        $this->dsn1->nidn='021001';
        $this->dsn1->dosen='Ahmad Bambang';
        $this->dsn1->pendidikan='S2';

        $this->load->model('dosen_model','dsn2');
        $this->dsn2->id=2;
        $this->dsn2->nidn='021002';
        $this->dsn2->dosen='Zulkarnain';
        $this->dsn2->pendidikan='S1';

        $this->load->model('dosen_model', 'dsn3');
        $this->dsn3->nidn=$this->input->post('nidn');
        $this->dsn3->dosen=$this->input->post('namadosen');
        $this->dsn3->pendidikan=$this->input->post('pendidikan');


        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data['list_dsn'] = $list_dsn;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('p6dosen/index',$data);
        $this->load->view('layout/footer');
	}
}