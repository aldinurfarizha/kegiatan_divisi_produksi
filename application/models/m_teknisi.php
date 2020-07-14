
<?php

class m_teknisi extends CI_Model{

public function tampil_teknisi(){
    $hsl=$this->db->query("select * from teknisi");
    return $hsl;
}
public function nonaktif_teknisi($id_teknisi){
    $hsl=$this->db->query("UPDATE teknisi set status='NON-AKTIF' where id_teknisi='$id_teknisi'");
    return $hsl;
}
public function aktif_teknisi($id_teknisi){
    $hsl=$this->db->query("UPDATE teknisi set status='AKTIF' where id_teknisi='$id_teknisi'");
    return $hsl;
}
public function tambah_teknisi($nama_teknisi,$telepon,$alamat){
    $hsl=$this->db->query("INSERT INTO teknisi (id_teknisi, nama_teknisi,alamat,telp,status) VALUES('','$nama_teknisi','$alamat','$telepon','AKTIF')");
    return $hsl;
}
}

?>