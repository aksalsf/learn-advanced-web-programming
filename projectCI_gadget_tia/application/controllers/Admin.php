<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public $dasborData = [];
	public function index()
	{
		if ($this->session->has_userdata('token')) {
			redirect('admin/dasbor');
		}
        $data['title'] = "Dasbor Admin";
		$this->login_form_validation($data);
	}
	private function login_form_validation($data)
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->template->load('template', 'admin/login', $data);
		}
		else
		{
			$this->_login();
		}
	}
	public function dasbor()
	{
		if ($this->_login_check()) {
			$data['title'] = "Dasbor Admin";
			$data['username'] = $this->session->userdata('username');
			$this->_dasbor_data($this->dasborData);
			// data dasbor
			$data['orderan_baru'] = $this->dasborData['orderan_baru'];
			$data['orderan_kemarin'] = $this->dasborData['orderan_kemarin'];
			$data['proses'] = $this->dasborData['proses'];
			$data['tunggu_bayar'] = $this->dasborData['tunggu_bayar'];
			$data['dikirim'] = $this->dasborData['dikirim'];
			$data['pendapatan_bulan_ini'] = $this->dasborData['pendapatan_bulan_ini'];
			$data['pendapatan_bulan_lalu'] = $this->dasborData['pendapatan_bulan_lalu'];
			$data['paling_laris'] = $this->dasborData['paling_laris'];
			$this->template->load('template_admin', 'admin/dasbor', $data);
		}
	}
	private function _dasbor_data()
	{
		$model_pembelian = $this->load->model('model_pembelian');
		$data_pembelian = $this->model_pembelian->lihat_semua_data();
		$orderan_baru = 0;
		$orderan_kemarin = 0;
		$last_month = date('Y') . sprintf("%02d", date('m')-1);
		$proses = $tunggu_bayar = $dikirim = 0;
		$status = ['Pesanan Diterima', 'Menunggu Pembayaran', 'Proses Pengiriman', 'Transaksi Selesai'];
		$pendapatan_bulan_ini = $pendapatan_bulan_lalu = 0;
		$rekap_jml_pembelian = [];
		$paling_laris = '';
		foreach ($data_pembelian as $data) {
			// menghitung jumlah orderan
			// hari ini
			if(date('Ymd') == date('Ymd', strtotime($data['timestamp']))) $orderan_baru++;
			// kemarin
			if(date('Ym').(date('d')-1) == date('Ymd', strtotime($data['timestamp']))) $orderan_kemarin++;
			// audit bulan ini
			if(date('Ym') == date('Ym', strtotime($data['timestamp']))) {
				// hitung pendapatan bulan ini
				if ($data['status'] == $status[3])
					$pendapatan_bulan_ini+=$data['total'];
			}
			// audit bulan lalu
			if($last_month == date('Ym', strtotime($data['timestamp']))) {
				if ($data['status'] == $status[3])
					// hitung pendapatan bulan lalu
					$pendapatan_bulan_lalu+=$data['total'];
			}
			// hitung status
			if ($data['status'] == $status[0]) $proses++;
			if ($data['status'] == $status[1]) $tunggu_bayar++;
			if ($data['status'] == $status[2]) $dikirim++;
			// produk paling laris
			$rekap_jml_pembelian[$data['id_ponsel']] = $data['kuantitas'];
		}
		// mencari produk paling laris
		$paling_banyak = 0;
		foreach ($rekap_jml_pembelian as $id_ponsel => $jml_pembelian) {
			if (max($paling_banyak, $jml_pembelian) == $jml_pembelian) {
				$paling_banyak = $jml_pembelian;
				$paling_laris = $id_ponsel;
			}
		}
		// simpan data
		$this->dasborData['orderan_baru'] = $orderan_baru;
		$this->dasborData['orderan_kemarin'] = $orderan_kemarin;
		$this->dasborData['proses'] = $proses;
		$this->dasborData['tunggu_bayar'] = $tunggu_bayar;
		$this->dasborData['dikirim'] = $dikirim;
		$this->dasborData['pendapatan_bulan_ini'] = $pendapatan_bulan_ini;
		$this->dasborData['pendapatan_bulan_lalu'] = $pendapatan_bulan_lalu;
		// nama hape paling laris
		$model_ponsel = $this->load->model('model_ponsel');
		$paling_laris = $this->model_ponsel->get_nama($paling_laris);
		$this->dasborData['paling_laris'] = $paling_laris;
		return $this->dasborData;
	}
	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$model_user = $this->load->model('model_user');
		$user = $this->model_user->get_user($email);

		if ($user) {
			if (password_verify($password, $user['password'])) {
				$model_login_token = $this->load->model('model_login_token');
				if ($this->model_login_token->add_token($email)) {
					$session_data = [
						'email' => $email,
						'username' => $user['nama'],
						'token' => $this->model_login_token->get_token($email)
					];
					$this->session->set_userdata($session_data);
					redirect('admin/dasbor');
				} else {
					$this->session->set_flashdata('login_message', '<div class="alert alert-danger">Login gagal!</div>');
					redirect('admin');
				}
			} else {
				$this->session->set_flashdata('login_message', '<div class="alert alert-danger">Password salah!</div>');
				redirect('admin');
			}
		} else {
			$this->session->set_flashdata('login_message', '<div class="alert alert-danger">Email salah!</div>');
			redirect('admin');
		}
	}
	private function _login_check()
	{
		if (!$this->session->has_userdata('token')) {
			$this->_force_logout();
		} else {
			$model_login_token = $this->load->model('model_login_token');
			$token = $this->session->userdata('token');
			if ($this->model_login_token->check_token($token) == 0) {
				$this->_force_logout();
			}
			return true;
		}
	}
	private function _unset_login_data()
	{
		$token = $this->session->userdata('token');
		$model_login_token = $this->load->model('model_login_token');
		$this->model_login_token->delete_token($token);
		$this->session->unset_userdata(['token', 'username']);
	}
	private function _force_logout()
	{
		$this->_unset_login_data();
		$this->session->set_flashdata('login_message', '<div class="alert alert-danger">Anda belum login!</div>');
		redirect('admin');
	}
	public function logout()
	{
		$this->_unset_login_data();
		$this->session->set_flashdata('login_message', '<div class="alert alert-success">Berhasil logout!</div>');
		redirect('admin');
	}
	public function pembelian()
	{
		$data['title'] = 'Data Pembelian';
		// Model
		$model_pembelian = $this->load->model('model_pembelian');
		$model_ponsel = $this->load->model('model_ponsel');
		$data['data_pembelian'] = $this->model_pembelian->lihat_semua_data();
		$data['data_ponsel'] = $this->model_ponsel->get_ponsel();
		// View
		$this->template->load('template_admin', 'admin/pembelian', $data);
	}
	public function profil()
	{
		$data['title'] = 'Profil';
		// Model
		$model_user = $this->load->model('model_user');
		$data['profil'] = $this->model_user->get_user($this->session->userdata('email'));
		// View
		$this->template->load('template_admin', 'admin/profil', $data);
	}
	public function ganti_password()
	{
		$email = $this->input->post('email');
		$password = password_hash($this->input->post('password'), PASSWORD_BCRYPT, ['cost' => 12]);
		$model_user = $this->load->model('model_user');
		$this->model_user->ganti_password($email, $password);
	}
}
