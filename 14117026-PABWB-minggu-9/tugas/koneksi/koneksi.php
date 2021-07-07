<?php
  class koneksi {
    public $koneksi;
    function __construct(){
      $this-> koneksi = mysqli_connect("localhost", "root","","DB_PABWCC09");
      if($this-> koneksi == false){
        echo "Gagal";
      }
    }
  }

 ?>
