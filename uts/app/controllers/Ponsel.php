<?php 

class Ponsel extends Controller {

    public function index() {
        $data['title'] = "Ponsel";
        $this -> view('templates/header', $data);
        // Ini konten kita
        echo 'Hello World';
        $this -> view('templates/footer');
    }

}

?>