<?php

class m_pemeliharaan extends CI_Model{

public function tampil_pemeliharaan(){
    $hsl=$this->db->query("SELECT * FROM pemeliharaan");
    return $hsl;
}
public function edit_pemeliharaan($id_pemeliharaan,$nama_aset,$deskripsi,$tgl_awal,$tgl_akhir,$zona,$status){
    $hsl=$this->db->query("UPDATE pemeliharaan SET nama_aset='$nama_aset', deskripsi='$deskripsi', tgl_awal='$tgl_awal', tgl_akhir='$tgl_akhir',zona='$zona',status='$status' WHERE id_pemeliharaan='$id_pemeliharaan'");
    return $hsl;
}

public function hapus_pemeliharaan($id_pemeliharaan){
    $hsl=$this->db->query("DELETE FROM pemeliharaan where id_pemeliharaan = '$id_pemeliharaan'");
    return $hsl;
}

public function total_pemeliharaan(){
    $hsl=$this->db->query("SELECT count(id_pemeliharaan) as total_pemeliharaan from pemeliharaan");
    return $hsl;
}

}
?>