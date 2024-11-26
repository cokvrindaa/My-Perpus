<?php
    $koneksi =  mysqli_connect('localhost', 'root', '', 'crudtabel');
    if ($koneksi){
        echo "koneksi berhasil!";
    }
    else{
        echo "koneksi tidak berhasil";
    }
?>