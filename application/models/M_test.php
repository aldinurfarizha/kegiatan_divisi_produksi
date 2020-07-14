<?php

class m_test extends CI_Model{

public function tampil_test(){
$hsl=$this->db->query("SELECT * FROM hasil ORDER BY id_hasil DESC limit 30");
return $hsl;
 }
 public function tampil_test_parameter($bulan,$tahun){
    $hsl=$this->db->query("SELECT * FROM hasil where MONTH(tgl)='$bulan' AND YEAR(tgl)='$tahun'");
    return $hsl;
     }

 public function tampil_semua_test(){
    $hsl=$this->db->query("SELECT * From hasil ");
    return $hsl;
     }

 public function tambah_hasil_test($tanggal, $lokasi, $ms, $tms, $jumlah_sample, $persentase,$keterangan){
     $hsl=$this->db->query("INSERT INTO hasil (id_hasil,tgl, zona, ms, tms, jumlah_sample, persentase, keterangan) values('','$tanggal', '$lokasi', '$ms', '$tms', '$jumlah_sample', '$persentase','$keterangan')");
     return $hsl;
 }

 public function edit_hasil_test($id_hasil,$tanggal, $lokasi, $ms, $tms, $jumlah_sample, $persentase,$keterangan){
    $hsl=$this->db->query("UPDATE hasil SET tgl='$tanggal', zona='$lokasi', ms='$ms', tms='$tms', jumlah_sample='$jumlah_sample', persentase='$persentase', keterangan='$keterangan' where id_hasil='$id_hasil'");
    return $hsl;
}

public function hapus_hasil_test($id_hasil){
    $hsl=$this->db->query("DELETE FROM hasil where id_hasil='$id_hasil'");
    return $hsl;
}

public function tampil_total(){
    $hsl=$this->db->query("SELECT sum(ms), sum(tms), sum(jumlah_sample) from hasil");
    return $hsl;
}
public function tampil_total_atas($bulan,$tahun){
    $hsl=$this->db->query("SELECT sum(ms), sum(tms), sum(jumlah_sample) from hasil where MONTH(tgl) = '$bulan' and YEAR(tgl) = '$tahun'");
    return $hsl;
}

public function tampil_grafik(){
    $hsl=$this->db->query("SELECT AVG(persentase), zona from hasil GROUP by zona");
    return $hsl;
}
public function tampil_grafik_filter($bulan,$tahun){
    $hsl=$this->db->query("SELECT persentase, zona from hasil where MONTH(tgl) = '$bulan' and YEAR(tgl) = '$tahun' GROUP by zona");
    return $hsl;
}


public function tampil_struktur(){
    $hsl=$this->db->query("SELECT * FROM struktur");
    return $hsl;
  }

  public function tampil_data_dashboard($bulan,$tahun){
      $hsl=$this->db->query("SELECT * FROM hasil where MONTH(tgl) = '$bulan' and YEAR(tgl) = '$tahun'");
      return $hsl;
  }

}
?>