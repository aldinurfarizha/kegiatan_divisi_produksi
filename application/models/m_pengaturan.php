<?php

class m_pengaturan extends CI_Model{
      public function struktur($id_user){
        $hsl=$this->db->query("SELECT * FROM struktur where id_struktur='$id_user'");
        return $hsl;
      }

      public function tambah_edit_struktur($id_user, $nama_kadiv, $nama_kasubdiv, $nik_kadiv, $nik_kasubdiv){
        $hsl=$this->db->query("INSERT INTO struktur (id_struktur, nama_kadiv, nama_kasubdiv, nik_kadiv, nik_kasubdiv) VALUES ('$id_user', '$nama_kadiv', '$nama_kasubdiv', '$nik_kadiv', '$nik_kasubdiv') ON DUPLICATE KEY UPDATE nama_kadiv='$nama_kadiv', nama_kasubdiv='$nama_kasubdiv', nik_kadiv='$nik_kadiv', nik_kasubdiv='$nik_kasubdiv'");
        return $hsl;
      }

     

    }
?>