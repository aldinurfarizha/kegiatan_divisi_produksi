<?php

class m_aset extends CI_Model{

 public function tampil_aset(){
$hsl=$this->db->query("SELECT * From aset");
return $hsl;
 }
 public function edit_aset($id_aset,$nama_aset,$deskripsi,$tgl_aset,$zona,$status,$keterangan){
     $hsl=$this->db->query("UPDATE aset set nama_aset='$nama_aset', deskripsi='$deskripsi', tgl_aset='$tgl_aset', zona='$zona',status='$status', keterangan='$keterangan' where id_aset='$id_aset'");
     return $hsl;
 }

 public function edit_aset_dengan_foto($id_aset,$nama_aset,$deskripsi,$tgl_aset,$zona,$foto,$status,$keterangan){
    $hsl=$this->db->query("UPDATE aset set nama_aset='$nama_aset', deskripsi='$deskripsi', tgl_aset='$tgl_aset', zona='$zona', foto='$foto', status='$status', keterangan='$keterangan' where id_aset='$id_aset'");
    return $hsl;
}

public function hapus_aset($id_aset){
    $hsl=$this->db->query("DELETE FROM aset where id_aset = '$id_aset'");
    return $hsl;
}
public function simpan_aset($nama_aset,$deskripsi,$tgl_aset,$zona,$foto,$status,$keterangan){
    $hsl=$this->db->query("INSERT INTO aset (id_aset,nama_aset,deskripsi,tgl_aset,zona,foto,status,keterangan) values ('','$nama_aset','$deskripsi','$tgl_aset','$zona','$foto','$status','$keterangan') ");
    return $hsl;
}

public function simpan_aset_tanpa_foto($nama_aset,$deskripsi,$tgl_aset,$zona,$status,$keterangan){
    $hsl=$this->db->query("INSERT INTO aset (id_aset,nama_aset,deskripsi,tgl_aset,zona,status,keterangan) values ('','$nama_aset','$deskripsi','$tgl_aset','$zona','$status','$keterangan') ");
    return $hsl;
}

public function total_aset(){
    $hsl=$this->db->query("SELECT count(id_aset) as total_aset from aset");
    return $hsl;
}

public function total_aset_rusak(){
    $hsl=$this->db->query("SELECT count(id_aset) as total_aset_rusak from aset where status='RUSAK'");
    return $hsl;
}

}
?>