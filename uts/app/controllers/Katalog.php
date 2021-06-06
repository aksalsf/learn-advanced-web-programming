<?php 

class Katalog extends Controller {

    private $formBeli;

    public function __construct()
    {
        $this -> formBeli = new Form(BASEURL.'/katalog/beli', "Beli");
    }

    public function index()
    {
        $data['title'] = "Martphone - Belanja aman dan senang!";
        $data['produk'] = $this -> model('KatalogModel') -> ambilSemuaDataProduk();
        $this -> view('templates/header', $data);
        // Konten produk
        $this -> view('templates/nav');
        $this -> view('katalog/index', $data);
        $this -> view('templates/produk-footer');
        $this -> view('templates/footer');
    }

    public function detail($id)
    {
        $data['title'] = "Martphone - Belanja aman dan senang!";
        $this -> view('templates/header', $data);
        // Konten produk
        $this -> view('templates/nav');
        // Memanggil data untuk ditampilkan di halaman detail
        $data['produk'] = $this -> model('KatalogModel') -> 
        detailDataProduk($id);
        $data['merk'] = $this -> model('KatalogModel') -> 
        ambilDataMerkFromID($data['produk']['id_merk']);
        $IDTransaksi = 'ORD' . sprintf('%05d', (count($this -> model('KatalogModel') -> ambilDataTransaksi())+1));
        // Membuat Form
        $this -> formBeli -> addField('','id_transaksi','hidden',[$IDTransaksi]);
        $this -> formBeli -> addField('','id_ponsel','hidden',[$id]);
        $this -> formBeli -> addField('Nama Lengkap', 
        'nama_pembeli', 'text');
        $this -> formBeli -> addField('Alamat', 'alamat_pembeli', 'textarea');
        $this -> formBeli -> addField('Nomor WhatsApp', 'wa_pembeli', 'text');
        $this -> formBeli -> addField('Jumlah Pembelian', 'kuantitas', 'number');
        $this -> formBeli -> addField('','harga','hidden',[$data['produk']['harga']]);
        $this -> formBeli -> addField('','nama_ponsel','hidden',[$data['produk']['nama']]);
        $this -> formBeli -> addField('','status','hidden',['Pesanan Diterima']);
        $data['form'] = $this -> formBeli;
        $this -> view('katalog/detail', $data);
        $this -> view('templates/produk-footer');
        $this -> view('templates/footer');
    }

    public function beli()
    {
        $this -> view('templates/header');
        if ($this -> model('KatalogModel') -> tambahDataTransaksi($_POST) > 0) {
            $linkWA = 'https://wa.me/';
            $pesan = 'Halo! Saya '. $_POST['nama_pembeli'] .'. Saya ingin memesan '.$_POST['nama_ponsel'].' sejumlah ' . $_POST['kuantitas'] . '. Berikut kode pemesanan saya = '.$_POST['id_transaksi'].'. Terima kasih!';
            $tautanLengkap = $linkWA.WhatsApp.'?text='.rawurlencode($pesan);
            header('Location: '.$tautanLengkap);
        } else {
            Flasher::setFlash('Transaksi', 'gagal!', 'danger');
        }
    }
    
}