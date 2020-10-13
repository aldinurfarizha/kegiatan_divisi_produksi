<?php

class m_kegiatan extends CI_Model{

  public function tambah_kegiatan($kegiatan, $waktu_kegiatan, $output, $waktu_kegiatan2, $picture){
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
    $pertama=$this->db->query("INSERT INTO kegiatan (id_kegiatan, kegiatan, waktu_kegiatan, output, waktu_kegiatan2,file) VALUES ('$no_kegiatan', '$kegiatan', '$waktu_kegiatan','$output','$waktu_kegiatan2','$picture')");
    return $pertama;
    return $kode;
    }
    public function get_last_kegiatan(){
      $kode=$this->db->query("SELECT max(id_kegiatan) as no_kegiatan FROM kegiatan");
      return $kode;
    }

    public function tambah_kegiatan2($kegiatan, $waktu_kegiatan, $output, $uraian_kegiatan, $kendala, $tindak_lanjut, $penanggung_jawab, $penanggung_jawab2,$penanggung_jawab3, $penanggung_jawab4, $penanggung_jawab5, $penanggung_jawab6,$indikators, $keterangan,$waktu_kegiatan2,$picture){
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
      $pertama=$this->db->query("INSERT INTO kegiatan (id_kegiatan, kegiatan, waktu_kegiatan, output, waktu_kegiatan2,file) VALUES ('$no_kegiatan', '$kegiatan', '$waktu_kegiatan','$output','$waktu_kegiatan2','$picture')");
      $number = count($uraian_kegiatan);
      for($i=0; $i<$number; $i++)  
                 {  
                        $kedua=$this->db->query("INSsERT INTO detail_kegiatan(id_detail_kegiatan, id_kegiatan, uraian_kegiatan, kendala, tindakan_lanjut, penanggung_jawab, penanggung_jawab2, penanggung_jawab3, penanggung_jawab4, penanggung_jawab5, penanggung_jawab6,indikator, keterangan) VALUES('','$no_kegiatan','$uraian_kegiatan[$i]','$kendala[$i]','$tindak_lanjut[$i]','$penanggung_jawab[$i]','$penanggung_jawab2[$i]','$penanggung_jawab3[$i]','$penanggung_jawab4[$i]','$penanggung_jawab5[$i]','$penanggung_jawab6[$i]','$indikators[$i]','$keterangan[$i]')");
                        
                 }  
                 return $pertama;
                 return $kedua;
      }
      public function edit_kegiatan($kegiatan, $waktu_kegiatan, $output, $uraian_kegiatan, $kendala, $tindak_lanjut, $penanggung_jawab, $penanggung_jawab2,$penanggung_jawab3, $penanggung_jawab4, $penanggung_jawab5, $penanggung_jawab6,$indikators, $keterangan){
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

        public function tambah_detail_kegiatan($id_kegiatan,$uraian_kegiatan, $kendala, $tindak_lanjut, $penanggung_jawab, $penanggung_jawab2,$penanggung_jawab3, $penanggung_jawab4, $penanggung_jawab5, $penanggung_jawab6,$indikators, $keterangan){
          $hsl=$this->db->query("INSERT INTO detail_kegiatan (id_detail_kegiatan, id_kegiatan, uraian_kegiatan, kendala, tindakan_lanjut, penanggung_jawab, penanggung_jawab2, penanggung_jawab3, penanggung_jawab4, penanggung_jawab5, penanggung_jawab6, indikator, keterangan) values('','$id_kegiatan', '$uraian_kegiatan', '$kendala', '$tindak_lanjut', '$penanggung_jawab', '$penanggung_jawab2', '$penanggung_jawab3', '$penanggung_jawab4', '$penanggung_jawab5', '$penanggung_jawab6', '$indikators', '$keterangan' )"); 
          return $hsl;
        }
        public function edit_detail_kegiatan($id_detail_kegiatan,$uraian_kegiatan, $kendala, $tindak_lanjut, $penanggung_jawab, $penanggung_jawab2,$penanggung_jawab3, $penanggung_jawab4, $penanggung_jawab5, $penanggung_jawab6,$indikators, $keterangan){
          $hsl=$this->db->query("UPDATE detail_kegiatan SET uraian_kegiatan='$uraian_kegiatan', kendala='$kendala', tindakan_lanjut='$tindak_lanjut', penanggung_jawab='$penanggung_jawab', penanggung_jawab2='$penanggung_jawab2', penanggung_jawab3='$penanggung_jawab3', penanggung_jawab4='$penanggung_jawab4', penanggung_jawab5='$penanggung_jawab5', penanggung_jawab6='$penanggung_jawab6', indikator='$indikators', keterangan='$keterangan' WHERE id_detail_kegiatan='$id_detail_kegiatan' "); 
          return $hsl;
        }

        public function hapus_detail_kegiatan($id_detail_kegiatan){
          $hsl=$this->db->query("DELETE FROM detail_kegiatan where id_detail_kegiatan='$id_detail_kegiatan'");
          return $hsl;
        }
      public function ambil_kegiatan($bulan,$tahun){
        $hsl=$this->db->query("SELECT * FROM kegiatan where MONTH(waktu_kegiatan)='$bulan' AND YEAR(waktu_kegiatan)='$tahun'");
        return $hsl;
      }
      public function hapus_kegiatan($id_kegiatan){
        $atas=$this->db->query("DELETE FROM kegiatan where id_kegiatan='$id_kegiatan'");
        $bawah=$this->db->query("DELETE FROM detail_kegiatan where id_kegiatan='$id_kegiatan'");
        return $atas;
        return $bawah;
      }

      public function ambil_kegiatan_param($id_kegiatan){
        $hsl=$this->db->query("SELECT * from kegiatan where id_kegiatan='$id_kegiatan'");
        return $hsl;
      }
      public function ambil_detail_kegiatan_param($id_kegiatan){
        $hsl=$this->db->query("SELECT * FROM detail_kegiatan where id_kegiatan='$id_kegiatan'");
        return $hsl;
      }
      public function ambil_dashboard(){
        $hsl=$this->db->query("SELECT YEAR(waktu_kegiatan) as tahun, MONTHNAME(waktu_kegiatan) as bulan, COUNT(kegiatan) AS jumlah_kegiatan FROM kegiatan GROUP BY YEAR(waktu_kegiatan), MONTH(waktu_kegiatan) ORDER BY YEAR(waktu_kegiatan), MONTH(waktu_kegiatan) LIMIT 12");
        return $hsl;
      }
      public function kegiatan_edit($id_kegiatan, $kegiatan, $waktu_kegiatan, $waktu_kegiatan2, $output){
        $hsl=$this->db->query("UPDATE kegiatan set kegiatan='$kegiatan', waktu_kegiatan='$waktu_kegiatan', waktu_kegiatan2='$waktu_kegiatan2', output='$output' WHERE id_kegiatan='$id_kegiatan'");
        return $hsl;
      }
      public function kegiatan_edit_foto($id_kegiatan, $kegiatan, $waktu_kegiatan, $waktu_kegiatan2, $output,$picture){
        $hsl=$this->db->query("UPDATE kegiatan set kegiatan='$kegiatan', waktu_kegiatan='$waktu_kegiatan', waktu_kegiatan2='$waktu_kegiatan2', output='$output', file='$picture' WHERE id_kegiatan='$id_kegiatan'");
        return $hsl;
      }
    }
?>