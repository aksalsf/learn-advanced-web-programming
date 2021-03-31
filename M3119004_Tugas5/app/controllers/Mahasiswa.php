<?php 

class Mahasiswa extends Controller {
    public function index()
    {
        $data['title'] = "Data Mahasiswa";
        $data['mhs'] = $this -> model('MahasiswaModel') -> getAllMahasiswa();
        $this -> view('templates/header', $data);
        $this -> view('mahasiswa/index', $data);
        $this -> view('templates/footer');
    }
    public function detail($nim)
    {
        $data['title'] = "Detail Mahasiswa";
        $data['mhs'] = $this -> model('MahasiswaModel') -> getMahasiswa($nim);
        $this -> view('templates/header', $data);
        $this -> view('mahasiswa/detail', $data);
        $this -> view('templates/footer');
    }
    public function new()
    {
        if ( $this -> model('MahasiswaModel') -> newMahasiswa($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
    public function hapus()
    {
        if ( $this -> model('MahasiswaModel') -> deleteMahasiswa($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
    public function ubah()
    {
        $data['title'] = "Ubah Data Mahasiswa";
        $data['mhs'] = $this -> model('MahasiswaModel') -> getAllMahasiswa();
        $this -> view('templates/header', $data);
        $this -> view('mahasiswa/ubah', $data);
        $this -> view('templates/footer');
    }
    public function update()
    {
        if ( $this -> model('MahasiswaModel') -> updateMahasiswa($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
}