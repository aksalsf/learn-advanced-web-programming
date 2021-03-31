<?php
include_once('book.php');

class BookModel{
public function getData(){
	return array(
	new Book('judul 1','pengarang 1','penerbit 1','tahun 1'),
	new Book('judul 2','pengarang 2','penerbit 2','tahun 2'),
	new Book('buku 3','pengarang 3','penerbit 3','tahun 3'),
	new Book('buku 4','pengarang 4','penerbit 4','tahun 4'));
	}

	
public function getDataDB()
	{   include_once('koneksi.php');
		$query = "SELECT * FROM book";
		$result = mysqli_query($koneksi, $query);
        return $result;
	}

	
}
?>