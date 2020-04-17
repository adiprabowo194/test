<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'PPS | About Us';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/menubar');
        $this->load->view('order/index');
        $this->load->view('templates/footer');
    }
}
