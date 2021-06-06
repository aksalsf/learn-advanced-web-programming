<?php 

class Merk extends Controller {

    private $formTambah;
    private $formUbah;

    // construct *insert data merujuk ke method insert
    public function __construct(){
        $this -> formTambah = new Form(BASEURL.'/Merk/insertData', 'Tambah');
        // form Ubah
        $this -> formUbah = new Form(BASEURL.'/Merk/ubahData/', 'Ubah');

    }
    public function index() {
        // nama tab
        $data['title'] = "Dashboard Merk";
        // menampung semua $data
        $this -> view('templates/header', $data);
        $this -> view('templates/nav');
        // Data database
        $data['dataMerk'] = $this -> model('MerkModel') -> ambilDataMerk();
        $this -> view('merk/index', $data);
        $this -> view('templates/footer');
    }

    public function tambah() {
        $data['title'] = "Form Tambah Merk";
        $this -> view('templates/header', $data);
        //tambah field
        $this -> formTambah -> addField('Id Merk', 'id_merk', 'text');
        $this -> formTambah -> addField('Nama', 'nama', 'text');
        // simpan form
        $data['form'] = $this -> formTambah;
        $this -> view('Merk/tambah', $data);
        $this -> view('templates/footer');
    }

    public function insertData(){
        if ($this -> model('MerkModel') -> tambahData($_POST) > 0){
            //notif data berhasil ditambah dan gagal ditambah
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
        }
        header('Location:'.BASEURL.'/Merk');
        exit;
    }

    public function detail($id){
        $data['title'] = "Detail Merk";
        // menampung semua $data
        $this -> view('templates/header', $data);
        // Data database
        $data['detailMerk'] = $this -> model('MerkModel') -> ambilDataID($id);
        $this -> view('Merk/detail', $data);
        $this -> view('templates/footer');
    }

    public function ubah($id){
        $data['title'] = "Form Ubah Data Merk";
        // menampung semua $data
        $this -> view('templates/header', $data);
        // Data database
        $dataMerk = $this -> model('MerkModel') -> ambilDataID($id);
        // buat form
        $this -> formUbah -> addField('id_merk', 'id_merk', 'text', [$dataMerk['id_merk']]);
        $this -> formUbah -> addField('nama', 'nama', 'text', [$dataMerk['nama']]);
        // tangkap nilai $id
        $this -> formUbah -> addField('', 'id', 'hidden', [$id]);
        $data['form'] = $this -> formUbah;
        // cetak form
        $this -> view('Merk/ubah', $data);
        $this -> view('templates/footer');
    }

    public function ubahData(){
        if ($this -> model('MerkModel') -> ubahData($_POST) > 0){
            //notif data berhasil ditambah dan gagal ditambah
            Flasher::setFlash('berhasil', 'diubah', 'success');
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
        }
        header('Location:'.BASEURL.'/Merk');
        exit;
    }

    public function hapus(){
        if ($this -> model('MerkModel') -> hapusData($_POST) > 0){
            //notif data berhasil ditambah dan gagal ditambah
            Flasher::setFlash('berhasil', 'dihapus', 'success');
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
        }
        header('Location:'.BASEURL.'/Merk');
        exit;
    }
}
?>