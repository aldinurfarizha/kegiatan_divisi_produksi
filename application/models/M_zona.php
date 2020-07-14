
<?php

class m_zona extends CI_Model{

public function tampil_zona(){
    $hsl=$this->db->query("SELECT * from zona");
    return $hsl;
}
public function tambah_zona($nama_zona,$alamat,$telepon,$status){
    $hsl=$this->db->query("INSERT INTO zona (id_zona,nama_zona, alamat, telp, status) VALUES('','$nama_zona','$alamat','$telepon','$status')");
    return $hsl;
}
public function nonaktif_zona($id_zona){
    $hsl=$this->db->query("UPDATE zona set status='NON-AKTIF' where id_zona='$id_zona'");
    return $hsl;
}
public function aktif_zona($id_zona){
    $hsl=$this->db->query("UPDATE zona set status='BEROPRASI' where id_zona='$id_zona'");
    return $hsl;
}

public function tampil_total_zona(){
    $hsl=$this->db->query("SELECT * from zona");
    return $hsl;
}

}

?>