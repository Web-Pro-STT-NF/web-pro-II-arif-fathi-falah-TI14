<?php
defined('BASEPATH') OR exit('No direct script access allowe
d');
class Mahasiswa extends CI_Controller {
 public function index()
 {
 $this->load->model('mahasiswa_model','mhs1');
 $this->mhs1->id=1;
 $this->mhs1->nim='010001';
 $this->mhs1->nama='Zhafran Rafanizan';
 $this->mhs1->gender='L';
 $this->mhs1->ipk=3.85;
 $this->load->model('mahasiswa_model','mhs2');
 $this->mhs2->id=2;
 $this->mhs2->nim='020001';
 $this->mhs2->nama='Ameli Ardini';
 $this->mhs2->gender='P';
 $this->mhs2->ipk=3.35;

 $list_mhs = [$this->mhs1, $this->mhs2];
 $data['list_mhs']=$list_mhs;

 $this->load->view('header');
 $this->load->view('mahasiswa/index',$data);
 $this->load->view('footer');
 }
}