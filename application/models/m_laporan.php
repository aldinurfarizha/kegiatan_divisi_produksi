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
        $hsl=$this->db->query("SELECT * FROM struktur ");
        return $hsl;
      }

      public function ambil_kegiatan_bulan($bulan,$tahun){
        $hsl=$this->db->query("SELECT * FROM kegiatan where MONTH(waktu_kegiatan)='$bulan' and YEAR(waktu_kegiatan)='$tahun'");
        return $hsl;
      }

      public function ambil_detail_kegiatan_bulan($bulan,$tahun){
        $hsl=$this->db->query("SELECT * FROM detail_kegiatan where MONTH(waktu_kegiatan)='$bulan' and YEAR(waktu_kegiatan)='$tahun'");
        return $hsl;
      }
      public function report_custom($bulan){
        $hsl=$this->db->query("SELECT kegiatan.kegiatan, kegiatan.waktu_kegiatan, kegiatan.output, uraian_kegiatan, kendala, tindakan_lanjut, penanggung_jawab,penanggung_jawab2, penanggung_jawab3, penanggung_jawab4, penanggung_jawab5, indikator, keterangan FROM detail_kegiatan INNER JOIN kegiatan ON detail_kegiatan.id_kegiatan = kegiatan.id_kegiatan where MONTH(kegiatan.waktu_kegiatan)='$bulan'");
        return $hsl;
      }
    }
?>