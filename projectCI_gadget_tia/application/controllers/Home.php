<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $data['title'] = "Toekoe Hape";
		// Model
		$this->load->model('model_ponsel');
		$this->load->model('model_merk');
		$data['rekomendasi'] = $this -> model_ponsel -> get_recommended();
		$data['merk'] = $this -> model_merk -> get_merk();
		$data['ponsel'] = $this -> model_ponsel -> get_ponsel();

		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('home/banner');
		$this->load->view('home/rekomendasi', $data);
		$this->load->view('home/merk_based', $data);
		$this->load->view('template/footer');
	}
}
