<?php 

class Home extends Controller {

    private $form;

    public function __construct()
    {
        $this -> form = new Form(BASEURL.'/mahasiswa/new', "Daftar");
    }

    public function index()
    {
        $data['title'] = "Home";
        $this -> view('templates/header', $data);
        $this -> view('home/index');
        $this -> view('templates/footer');
    }

    public function form()
    {
        $data['title'] = "Form";
        $this -> view('templates/header', $data);
        $this -> form -> addField('NIM', 'nim', 'text');
        $this -> form -> addField('Nama', 'nama', 'text');
        $this -> form -> addField('Password', 'password', 'password');
        $this -> form -> addField('Tanggal Lahir', 'tanggal_lahir', 'date');
        $this -> form -> addField('Program Studi', 'prodi', 'select',
                            [
                                'D3 Teknik Informatika',
                                'S1 Teknik Informatika',
                                'S1 Sistem Informasi'
                            ],
                            [
                                'D3 Teknik Informatika',
                                'S1 Teknik Informatika',
                                'S1 Sistem Informasi'
                            ]);
        $this -> form -> addField('Jenis Kelamin', 'jenis_kelamin', 'radio', ['L', 'P'], ['Laki-laki', 'Perempuan']);
        $this -> form -> addField(null, 'kewarganegaraan', 'checkbox', [1], ['Saya warga negara Indonesia.']);
        $this -> form -> addField('Keterangan', 'keterangan', 'textarea');
        $this -> form -> addField(null, 'status', 'hidden', [1]);
        // Mengembalikan Form
        $data['form'] = $this -> form;
        $this -> view('home/form', $data);
        $this -> view('templates/footer');
    }
}