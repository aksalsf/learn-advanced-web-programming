<?php 

class User extends Controller {

    private $formTambah;
    private $formUbah;

    public function __construct() {
        // Form Tambah
        $this -> formTambah = new Form(BASEURL.'/user/insertData', 'Tambah');
        // Form Ubah
        $this -> formUbah = new Form(BASEURL.'/user/ubahData','Ubah');
    }

    public function index() {
        $data['title'] = "Dasbor Data User";
        $this -> view('templates/header', $data);
        // Data dari Database
        $data['dataUser'] = $this -> model('UserModel') -> ambilSemuaDataUser();
        $this -> view('user/dasbor', $data);
        $this -> view('templates/footer');
    }

    public function tambah() {
        $data['title'] = "Form Tambah User";
        $this -> view('templates/header', $data);
        // Menambahkan field
        $this -> formTambah -> addField('Nama', 
        'jeneng', 'text');
        $this -> formTambah -> addField('Password', 
        'password', 'password');
        $this -> formTambah -> addField('Email', 
        'email', 'email');
        $data['form'] = $this -> formTambah;
        $this -> view('user/tambah', $data);
        $this -> view('templates/footer');
    }

    public function insertData() {
        if ($this -> model('UserModel') -> tambahData($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
        }
        header('Location:'.BASEURL.'/user');
        exit;
    }

    public function detail($id) {
        $data['title'] = "Detail Data User";
        $this -> view('templates/header', $data);
        // Data dari Database
        $data['detailUser'] = $this -> model('UserModel') -> ambilDataDariID($id);
        $this -> view('user/detail', $data);
        $this -> view('templates/footer');
    }

    public function ubah($id) {
        $data['title'] = "Formulir Ubah Data User";
        $this -> view('templates/header', $data);
        // Data dari Database
        $dataUser = $this -> model('UserModel') -> ambilDataDariID($id);
        // Membuat Form
        $this -> formUbah -> addField('Nama', 'nama', 'text', [$dataUser['nama']]);
        $this -> formUbah -> addField('Email', 'email', 'email', [$dataUser['email']]);
        $this -> formUbah -> addField('Password', 'password', 'password', [$dataUser['password']]);
        // Menangkap nilai $id
        $this -> formUbah -> addField('', 'id', 'hidden', [$id]);
        $data['form'] = $this -> formUbah;
        // Lokasi cetak form
        $this -> view('user/ubah', $data);
        $this -> view('templates/footer');
    }

    public function ubahData() {
        if ($this -> model('UserModel') -> ubahData($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
        }
        header('Location:'.BASEURL.'/user');
        exit;
    }

    public function hapus()
    {
        if ($this -> model('UserModel') -> hapusData($_POST) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
        }
        header('Location:'.BASEURL.'/user');
        exit;
    }

}

?>