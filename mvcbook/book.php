<?php
class Book {
public $judul;
public $pengarang;
public $penerbit;
public $tahun;
public function __construct($judul,$pengarang,$penerbit,$tahun){
	$this->judul=$judul;
	$this->pengarang=$pengarang;
	$this->penerbit=$penerbit;
	$this->tahun=$tahun;
	}
}
?>