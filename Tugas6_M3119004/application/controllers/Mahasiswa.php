<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public $greeting;

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $timeOfDay = date('a');
        if($timeOfDay == 'am'){
            return $this->greeting = 'Good morning, ';
        }else{
            return $this->greeting = 'Good afternoon, ';
        }
    }

	public function index()
	{
        $data['title'] = "Halaman Mahasiswa";
        $this -> load -> view('templates/header', $data);
		$this -> load -> view('mahasiswa/home');
        $this -> load -> view('templates/footer');
	}

    public function cetak($nama)
    {
        echo '<h1>Hello ' . $nama . '</h1>';
    }

    /*

    public function process_cetak($nama)
    {
        echo '<h1>Hello ' . $nama . '</h1>';
    }

    // Menambahkan prefix di function
    public function _remap($method, $params = array())
    {
        $method = 'process_'.$method;
        if (method_exists($this, $method))
        {
            return call_user_func_array(array($this, $method), $params);
        }
        show_404();
    }

    */

    public function detail($nim = 'TIA20001', $nama = 'Solus Nightshade')
    {
        $data['greeting'] = $this->greeting;
        $data['nim'] = $nim;
        $data['nama'] = $nama;
        $this->load->view('mahasiswa/detail', $data);
    }
    
    public function form()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username',  'required|min_length[5]|max_length[12]|is_unique[users.username]',
        array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
        ));
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('mahasiswa/form');
        }
        else
        {
            $this->load->view('mahasiswa/formsuccess');
        }
    }

    public function formHelper()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        // Form Validation
        $formValidationRules = [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required|min_length[3]'
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|min_length[8]'
            ],
            [
                'field' => 'jenis_kelamin',
                'label' => 'Jenis Kelamin',
                'rules' => 'required'
            ],
            [
                'field' => 'prodi',
                'label' => 'Program Studi',
                'rules' => 'required'
            ],
            [
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'required'
            ],
            // [
            //     'field' => 'kewarganegaraan',
            //     'label' => 'Kewarganegaraan',
            //     'rules' => ''
            // ],
        ];

        $this->form_validation->set_rules($formValidationRules);


        $data['title'] = "Form Helper";
        $this -> load -> view('templates/header', $data);
        if ($this->form_validation->run() == FALSE)
        {
            $this -> load -> view('mahasiswa/formHelper', $data);
        }
        else
        {
            $this->load->view('mahasiswa/formHelperSubmit');
        }
        $this -> load -> view('templates/footer');

    }

}
