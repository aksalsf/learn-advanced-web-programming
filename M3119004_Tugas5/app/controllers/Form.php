<?php 

class Form extends Controller {
    public function index()
    {
        $data['title'] = "Formulir";
        // Inisialisasi Form
        $data['form'] = $this -> model('FormModel');
        $data['form'] -> set(BASEURL.'/mahasiswa/new', "Daftar");
        $data['form'] -> addField('NIM', 'nim', 'text');
        $data['form'] -> addField('Nama', 'nama', 'text');
        $data['form'] -> addField('Password', 'password', 'password');
        $data['form'] -> addField('Tanggal Lahir', 'tanggal_lahir', 'date');
        $data['form'] -> addField('Program Studi', 'prodi', 'select',
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
        $data['form'] -> addField('Jenis Kelamin', 'jenis_kelamin', 'radio', ['L', 'P'], ['Laki-laki', 'Perempuan']);
        $data['form'] -> addField(null, 'kewarganegaraan', 'checkbox', [1], ['Saya warga negara Indonesia.']);
        $data['form'] -> addField('Keterangan', 'keterangan', 'textarea');
        $data['form'] -> addField(null, 'status', 'hidden', [1]);
        // Mengembalikan Form
        $data['formConstruct'] = $data['form'] -> get();
        $data['field'] = $data['form'] -> getFieldNumber();
        
        $this -> view('templates/header', $data);
        $this -> view('form/index', $data);
        $this -> view('templates/footer');
    }
}