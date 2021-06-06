<?php 

class Transaksi extends Controller {

    private $formTransaksi;

    public function __construct(){
    	$this -> formTransaksi = new Form(BASEURL.'/transaksi/ubahStatus', 'Ubah');
    }

    public function index() {
        $data['title'] = "Data Transaksi";
        $this -> view('templates/header', $data);
        $this -> view('templates/nav');
        // Database
        $data['dataUser'] = $this -> model('TransaksiModels') -> ambilData();
        $this -> view('transaksi/home', $data);
        $this -> view('templates/footer');
    }

    public function status($id){
    	$data['title'] = "Ubah Status";
        $this -> view('templates/header', $data);
        $this -> formTransaksi -> addField('Status', 'status', 'select', 
        	['Pesanan Diterima','Menunggu Pembayaran', 'Proses Pengiriman', 'Transaksi Selesai'], ['Pesanan Diterima','Menunggu Pembayaran', 'Proses Pengiriman', 'Transaksi Selesai']);
        $this -> formTransaksi -> addField('', 'id_transaksi', 'hidden', [$id]);
        $data['form']= $this -> formTransaksi;
        $this -> view('transaksi/tambah', $data);
        $this -> view('templates/footer');
    }

    public function detail($id){
    	$data['title'] = "Detail Transaksi";
        $this -> view('templates/header', $data);
        $data['detailTransaksi'] = $this -> model('TransaksiModels') -> ambilDataId($id);
        $data['detailProduk'] = $this -> model('ProdukModel') -> ambilDataID($data['detailTransaksi']['id_ponsel']);
        $this -> view('transaksi/detail', $data);
        $this -> view('templates/footer');
    }

    public function ubahStatus(){
    	if ($this -> model('TransaksiModels') -> ubahStatus($_POST) > 0) {
    		Flasher::setFlash('berhasil', 'diubah', 'success');
    	}else{
    		Flasher::setFlash('gagal', 'diubah', 'danger');
    	}
    	header('Location:'.BASEURL.'/transaksi');
    	exit;
    }
}

?>