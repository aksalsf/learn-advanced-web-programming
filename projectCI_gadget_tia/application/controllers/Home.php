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
		// Template
		$this->template->load('template', 'home', $data);
	}
}
