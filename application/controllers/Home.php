<?php

class Home extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
        $this->AuthModel->cek_login();
    }
    
    public function index()
    {
        $data['count_user'] = $this->HomeModel->getCountUser();
        $data['count_product'] = $this->HomeModel->getCountProduct();
        $data['count_category'] = $this->HomeModel->getCountCategory();
        $this->load->view('extended/header');
        $this->load->view('home/index', $data);
        $this->load->view('extended/footer');
    }
}
