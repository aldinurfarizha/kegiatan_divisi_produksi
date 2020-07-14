<?php

class m_perbaikan extends CI_Model{

public function tampil_perbaikan(){
    $hsl=$this->db->query("SELECT * FROM perbaikan");
    return $hsl;
}
public function edit_perbaikan($id_perbaikan,$nama_aset,$deskripsi,$tgl_awal,$tgl_akhir,$zona,$status){
    $hsl=$this->db->query("UPDATE perbaikan SET nama_aset='$nama_aset', deskripsi='$deskripsi', tgl_awal='$tgl_awal', tgl_akhir='$tgl_akhir',zona='$zona',status='$status' WHERE id_perbaikan='$id_perbaikan'");
    return $hsl;
}

public function hapus_perbaikan($id_perbaikan){
    $hsl=$this->db->query("DELETE FROM perbaikan where id_perbaikan = '$id_perbaikan'");
    return $hsl;
}
public function total_perbaikan(){
    $hsl=$this->db->query("SELECT count(id_perbaikan) as total_perbaikan from perbaikan");
    return $hsl;
}
}
?>