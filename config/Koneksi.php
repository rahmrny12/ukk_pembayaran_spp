<?php

class Koneksi
{
  var $koneksi;
  var $host = "localhost";
  var $username = "root";
  var $pass = "";
  var $db_name = "ukk_pembayaran_spp";

  public function __construct()
  {
    $this->koneksi = mysqli_connect($this->host, $this->username, $this->pass, $this->db_name);

    // if ($this->koneksi) {
    //   echo "Koneksi berhasil";
    // } else {
    //   echo "Koneksi gagal...";
    // }
  }
}

$koneksi = new Koneksi;