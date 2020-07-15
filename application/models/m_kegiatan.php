<?php

class m_kegiatan extends CI_Model{

    public function tambah_kegiatan($kegiatan, $waktu_kegiatan, $output, $uraian_kegiatan, $kendala, $tindak_lanjut, $penanggung_jawab, $penanggung_jawab2,$penanggung_jawab3, $penanggung_jawab4, $penanggung_jawab5, $penanggung_jawab6,$indikators, $keterangan){
      $kode=$this->db->query("SELECT max(id_kegiatan) as no_kegiatan FROM kegiatan");
      foreach ($kode->result() as $row)
      {
          $no_kegiatan=$row->no_kegiatan;
          $no_kegiatan++;
      }
      if (is_null($no_kegiatan))
      {
      $no_kegiatan=1;
      }
      $pertama=$this->db->query("INSERT INTO kegiatan (id_kegiatan, kegiatan, waktu_kegiatan, output) VALUES ('$no_kegiatan', '$kegiatan', '$waktu_kegiatan','$output')");
      $number = count($uraian_kegiatan);
      for($i=0; $i<$number; $i++)  
                 {  
                        $kedua=$this->db->query("INSERT INTO detail_kegiatan(id_detail_kegiatan, id_kegiatan, uraian_kegiatan, kendala, tindakan_lanjut, penanggung_jawab, penanggung_jawab2, penanggung_jawab3, penanggung_jawab4, penanggung_jawab5, penanggung_jawab6,indikator, keterangan) VALUES('','$no_kegiatan','$uraian_kegiatan[$i]','$kendala[$i]','$tindak_lanjut[$i]','$penanggung_jawab[$i]','$penanggung_jawab2[$i]','$penanggung_jawab3[$i]','$penanggung_jawab4[$i]','$penanggung_jawab5[$i]','$penanggung_jawab6[$i]','$indikators[$i]','$keterangan[$i]')");
                        
                 }  
                 return $pertama;
                 return $kedua;
      }
      public function ambil_kegiatan($bulan,$tahun){
        $hsl=$this->db->query("SELECT * FROM kegiatan where MONTH(waktu_kegiatan)='$bulan' AND YEAR(waktu_kegiatan)='$tahun'");
        return $hsl;
      }
    }
?>