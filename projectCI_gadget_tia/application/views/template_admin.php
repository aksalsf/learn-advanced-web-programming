<?php 

    $this->load->view('template/header');
    $this->load->view('admin/sidebar');
    $this->load->view('admin/main', $contents);
    $this->load->view('template/footer');

?>