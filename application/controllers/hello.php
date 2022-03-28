<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {
    public function index(){
        $data['nama'] = 'Andiko';
        $data['nim'] = '069';
        $data['kom'] = 'D';
       $this->load->view('hello_world', $data);
    }

    public function lab5(){
        echo 'Ini Lab 5';
    }

    public function lab6($nama){
        echo 'Lab 6'>$nama;
    }
}