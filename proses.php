<?php

require_once 'config/Koneksi.php';

class Proses extends Koneksi
{
  public function loginPetugas($username, $pass)
  {
    $query = mysqli_query($this->koneksi, "SELECT * FROM petugas WHERE username='" . $username . "' AND password='" . $pass . "'");

    if ($query->num_rows > 0) {
      return true;
    } else {
      return false;
    }
  }
}

$proses = new Proses;
var_dump($proses->loginPetugas('rendy', sha1('asd')));