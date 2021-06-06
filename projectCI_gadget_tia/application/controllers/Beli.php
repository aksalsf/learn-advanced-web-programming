<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beli extends CI_Controller {
    public function lihat($id)
    {
        // Model
        $this->load->model('model_ponsel');
        $this->load->model('model_merk');
        $data['ponsel'] = $this -> model_ponsel -> get_ponsel_single($id);
        $data['merk'] = $this -> model_merk -> get_merk_single($data['ponsel']['id_merk']);

        // Site Title
        $data['title'] = 'Detail Produk ' . $data['ponsel']['nama'];
        // Menampilkan view header
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        if ($this -> model_ponsel -> stok_masih($id)) {
            // Form Validation
            $this->form_validation->set_error_delimiters('<p class="fs-6 text-danger">', '</p>');
            $this->form_validation->set_rules(
                'nama_pembeli', 'Nama Lengkap',
                'trim|required|alpha', 
                [
                    'required' => '%s wajib diisi!',
                    'alpha' => 'Harap isi dengan benar!'
                ]
            );
            $this->form_validation->set_rules(
                'alamat_pembeli','Alamat', 
                'trim|required', 
                [
                    'required' => '%s wajib diisi!'
                ]
            );
            $this->form_validation->set_rules(
                'wa_pembeli', 'Nomor WhatsApp', 
                'trim|required|min_length[12]|numeric', 
                [
                    'required' => '%s wajib diisi!',
                    'min_length' => 'Harap berikan nomor yang valid!',
                    'numeric' => 'Harap berikan nomor yang valid!'
                ]
            );
            $this->form_validation->set_rules(
                'kuantitas', 'Jumlah Pembelian', 
                'trim|required|greater_than[0]', 
                [
                    'required' => '%s wajib diisi!',
                    'greater_than' => 'Minimal pembelian 1 unit!'
                ]
            );
            // Ngecek ada data POST yang masuk nggak
            $submit = $this->input->post('submit');
            if (!empty($submit)) {
                if ($this->form_validation->run() == FALSE)
                {
                    $alert = '<div class="alert alert-danger">Transaksi gagal, harap periksa formulir pesanan Anda!</div>';
                    $this->session->set_flashdata('alert', $alert);
                    $this->load->view('detail_produk/overview', $data);
                    $this->load->view('detail_produk/form', $data);
                }
                else
                {
                    $this->session->set_flashdata('submit',$this->input->post());
                    redirect('beli/proses');
                }
            } else {
                $this->load->view('detail_produk/overview', $data);
                $this->load->view('detail_produk/form', $data);
            }
        } else {
            $this->load->view('detail_produk/overview', $data);
        }
		$this->load->view('template/footer');
    }
    public function proses()
    {
        if ($this->session->flashdata('submit') !== null) {
            $this -> load -> model('model_pembelian');
            // menangkap data dari session
            $submit = $this->session->flashdata('submit');
            // menghapus value submit
            unset($submit['submit']);
            // membuat id_transaksi
            $id_transaksi = 'ORD' . sprintf('%05d', ($this -> model_pembelian -> jumlah_data_transaksi()+1));
            // menambahkan id_transaksi ke aray
            $submit['id_transaksi'] = $id_transaksi;
            // menghitung total pembelian
            $submit['total'] = $submit['harga'] * $submit['kuantitas'];
            // menghapus harga
            unset($submit['harga']);
            // mengatur status
            $submit['status'] = 'Pesanan Diterima';
            if ($this -> model_pembelian -> insert_data_pembelian($submit) > 0) {
                $this -> load -> model('model_ponsel');
                if ($this -> model_ponsel -> kurangi_stok($submit['id_ponsel'], $submit['kuantitas']) > 0) {
                    $alert = '<div class="alert alert-success">Transaksi berhasil!</div>';
                    $this->session->set_flashdata('alert', $alert);
                    redirect($this->agent->referrer(), 'refresh');
                }
            }
            
        } else {
            redirect($this->agent->referrer(), 'refresh');
        }
    }
}