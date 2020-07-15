<?php

class m_pengaturan extends CI_Model{
      public function struktur($id_user){
        $hsl=$this->db->query("SELECT * FROM struktur where id_struktur='$id_user'");
        return $hsl;
      }

      public function tambah_edit_struktur($id_user, $nama_kadiv, $nama_kasubdiv, $nik_kadiv, $nik_kasubdiv, $nama_pelaksana, $nik_pelaksana){
        $hsl=$this->db->query("INSERT INTO struktur (id_struktur, nama_kadiv, nama_kasubdiv, nama_pelaksana, nik_kadiv, nik_kasubdiv, nik_pelaksana) VALUES ('$id_user', '$nama_kadiv', '$nama_kasubdiv','$nama_pelaksana', '$nik_kadiv', '$nik_kasubdiv', '$nik_pelaksana') ON DUPLICATE KEY UPDATE nama_kadiv='$nama_kadiv', nama_kasubdiv='$nama_kasubdiv',nama_pelaksana='$nama_pelaksana', nik_kadiv='$nik_kadiv', nik_kasubdiv='$nik_kasubdiv', nik_pelaksana='$nik_pelaksana'");
        return $hsl;
      }

     

    }
?>