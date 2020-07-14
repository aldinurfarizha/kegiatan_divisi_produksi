<?php

class m_laporan extends CI_Model{

    public function cetak_bulanan($bulan,$tahun){
        $hsl=$this->db->query("SELECT *
          FROM hasil
          WHERE MONTH(tgl)='$bulan' and YEAR(tgl)='$tahun'");
        return $hsl;
      }
      public function cetak_bulanan_excel($bulan,$tahun){
        $hsl=$this->db->query("SELECT *
          FROM hasil
          WHERE MONTH(tgl)='$bulan' and YEAR(tgl)='$tahun'")->result();
        return $hsl;
      }

      public function cetak_rentang_bulanan($bulan,$tahun,$bulanakhir,$tahunakhir){
        $awal=$tahun.$bulan."01";
        $akhir=$tahunakhir.$bulanakhir."01";
        echo $awal;
        $hsl=$this->db->query("SELECT *
          FROM hasil where tgl
          BETWEEN '$awal' and '$akhir' ");
        return $hsl;
      }

      public function cetak_keseluruhan(){
        $hsl=$this->db->query("SELECT * FROM hasil");
        return $hsl;
      }
      public function tampil_struktur(){
        $hsl=$this->db->query("SELECT * FORM struktur ");
        return $hsl;
      }
    }
?>