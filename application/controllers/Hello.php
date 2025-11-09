<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller 
{

	public function index()
	{
		echo "Hello, nama saya Dinda Halusti";
	}

    public function hello_nim_kalian()
    {
        $this->load->model('hello_model');
        $data = $this->hello_model->hello_nim();
        echo $data;
    }

    public function hello_view()
    {
        $this->load->view('hello_view');

    }

    public function hello_mvc()
    {
        $this->load->model('hello_model');

        $data['mvc'] = $this->hello_model->hello_mvc();

        $this->load->view('hello_view', $data);
    }
}