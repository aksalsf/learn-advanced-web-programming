<?php 

class Flasher {
    public static function setFlash($pesan, $aksi, $alert)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'alert' => $alert
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo
            '
                <div class="p-3 fixed-top">
                    <div class="alert alert-'. $_SESSION['flash']['alert'] .'" role="alert">' 
                        . $_SESSION['flash']['pesan'] . ' '. $_SESSION['flash']['aksi'] .'
                    </div>
                </div>
            ';
            unset($_SESSION['flash']);
        }
    }
}