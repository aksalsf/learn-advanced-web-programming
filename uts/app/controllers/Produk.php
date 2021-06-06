<?php 

class Produk extends Controller {

    private $formProdukTambah;
    private $formProdukUbah;

    public function __construct()
    {
        // Form Tambah
        $this -> formProdukTambah = new Form(BASEURL. '/Produk/insertData', 'Tambah');
        // Form Ubah
        $this -> formProdukUbah = new Form(BASEURL. '/Produk/ubahData', 'Ubah');
    }

    public function index() {
        // nama tab
        $data['title'] = "Produk Ponsel";
        // menampung semua $data
        $this -> view('templates/header', $data);
        $this -> view('templates/nav');
        // Ini konten kita
        $data['dataProduk'] = $this -> model('ProdukModel') -> ambilSemuaDataProduk();
        $this -> view('produk/dashProduk', $data);
        $this -> view('templates/footer');
    }

    public function tambah() {
        $data['title'] = "Form Tambah Produk Ponsel";
        // Untuk menampilkan merk dari tabel merk
        $dataMerk = $this -> model('MerkModel') -> ambilDataMerk();
        $idMerk = [];
        $namaMerk = [];
        foreach ($dataMerk as $key => $merk) {
            array_push($idMerk, $merk['id_merk']);
            array_push($namaMerk, $merk['nama']);
        }
        $this -> view('templates/header', $data);
        //Menambahkan field
        $this -> formProdukTambah -> addField('Id', 'id_ponsel', 'text'); 
        $this -> formProdukTambah -> addField('Nama', 'nama', 'text');
        $this -> formProdukTambah -> addField('Merk', 'id_merk', 'select', $idMerk,$namaMerk);
        $this -> formProdukTambah -> addField('Harga', 'harga', 'number'); 
        $this -> formProdukTambah -> addField('Berat', 'berat', 'number'); 
        $this -> formProdukTambah -> addField('Spesifikasi', 'spesifikasi', 'textarea'); 
        $this -> formProdukTambah -> addField('Gambar', 'gambar', 'file'); 
        $this -> formProdukTambah -> addField('Stok', 'stok', 'number'); 
        //Menyimpan form ke dalam $data['form]
        $data['form'] = $this -> formProdukTambah;
        $this -> view('produk/tambah', $data);
        $this -> view('templates/footer');
    }

    public function insertData() {
        if ($this -> model('ProdukModel') -> tambahData($_POST,$_FILES) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
        }
        header('Location:'.BASEURL.'/produk');
        exit;
    }

    public function detailProduk($id) {
        $data['title'] = "Detail Produk Ponsel";
        // menampung semua $data
        $this -> view('templates/header', $data);
        $data['detailProduk'] = $this -> model('ProdukModel') -> ambilDataID($id);
        $this -> view('produk/detailProduk', $data);
        $this -> view('templates/footer');  
    }

    public function ubahProduk($id){
        $data['title'] = "Ubah Data Produk Ponsel";
        // menampung semua $data
        // Untuk menampilkan merk dari tabel merk
        $dataMerk = $this -> model('MerkModel') -> ambilDataMerk();
        $idMerk = [];
        $namaMerk = [];
        foreach ($dataMerk as $key => $merk) {
            array_push($idMerk, $merk['id_merk']);
            array_push($namaMerk, $merk['nama']);
        }
        $this -> view('templates/header', $data);
        $dataProduk = $this -> model('ProdukModel') -> ambilDataID($id);
        // Membuat Form
        $this -> formProdukUbah -> addField('Id', 'id_ponsel', 'text', [$dataProduk['id_ponsel']]); 
        $this -> formProdukUbah  -> addField('Nama', 'nama', 'text', [$dataProduk['nama']]); 
        $this -> formProdukUbah-> addField('Merk', 'id_merk', 'select', $idMerk,$namaMerk);
        $this -> formProdukUbah -> addField('Harga', 'harga', 'number', [$dataProduk['harga']]); 
        $this -> formProdukUbah -> addField('Berat', 'berat', 'number', [$dataProduk['berat']]); 
        $this -> formProdukUbah -> addField('Spesifikasi', 'spesifikasi', 'textarea', [$dataProduk['spesifikasi']]); 
        $this -> formProdukUbah -> addField('Gambar', 'gambar', 'file', [$dataProduk['gambar']]); 
        $this -> formProdukUbah -> addField('Stok', 'stok', 'number', [$dataProduk['stok']]); 
        // Menangkap nilai $id
        $this -> formProdukUbah -> addField('', 'id', 'hidden' , [$id]);

        $data['formProduk'] = $this -> formProdukUbah;
        // Lokasi cetak Form
        $this -> view('produk/ubahProduk', $data);
        $this -> view('templates/footer');  
    }

    public function UbahData() {
        if ($this -> model('ProdukModel') -> ubahData($_POST, $_FILES) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
        }
        header('Location:'.BASEURL.'/produk');
        exit;
    }
    
    public function hapus() {
        if ($this -> model('ProdukModel') -> hapusData($_POST) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
        }
        header('Location:'.BASEURL.'/produk');
        exit;
    }
}

?>