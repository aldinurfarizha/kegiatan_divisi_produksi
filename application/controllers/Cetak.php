<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Cetak extends CI_Controller {
  public function __construct()
  {   
      parent::__construct();
      $this->load->library('Pdf');
      $this->load->model('m_laporan');
  }

    

public function cetak_bulanan(){

        $bulan=$this->input->post('bulan');
        $tahun=$this->input->post('tahun');
        $nama_kadiv=$this->input->post('nama_kadiv');
        $nama_kasubdiv=$this->input->post('nama_kasubdiv');
        $nama_pelaksana=$this->input->post('nama_pelaksana');
        $nik_kadiv=$this->input->post('nik_kadiv');
        $nik_kasubdiv=$this->input->post('nik_kasubdiv');
        $nik_pelaksana=$this->input->post('nik_pelaksana');
        $bulan_nama="";
        switch($bulan){
            case "01":
                $bulan_nama="JANUARI";
                  break;
                  case "02":
                    $bulan_nama="FEBRUARI";
                      break;
                      case "03":
                        $bulan_nama="MARET";
                          break;
                          case "04":
                            $bulan_nama="APRIL";
                              break;
                              case "05":
                                $bulan_nama="MEI";
                                  break;
                                  case "06":
                                    $bulan_nama="JUNI";
                                      break;
                                      case "07":
                                        $bulan_nama="JULY";
                                          break;
                                          case "08":
                                            $bulan_nama="AGUSTUS";
                                              break;
                                              case "09":
                                                $bulan_nama="SEPTEMBER";
                                                  break;
                                                  case "10":
                                                    $bulan_nama="OKTOBER";
                                                      break;
                                                      case "11":
                                                        $bulan_nama="NOVEMBER";
                                                          break;
                                                          case "12":
                                                            $bulan_nama="DESEMBER";
                                                              break;
                                                            }
    $data['bulan']=$bulan;
        $data['tahun'] = $tahun;
        $data['nama_kadiv'] = $nama_kadiv;
        $data['nama_kasubdiv'] = $nama_kasubdiv;
        $data['nama_pelaksana'] = $nama_pelaksana;
        $data['nik_kadiv'] = $nik_kadiv;
        $data['nik_kasubdiv'] = $nik_kasubdiv;
        $data['nik_pelaksana'] = $nik_pelaksana;
        if($this->m_laporan->ambil_kegiatan_bulan($bulan,$tahun)->num_rows() > 0){
           $data['kegiatan'] = $this->m_laporan->ambil_kegiatan_bulan($bulan,$tahun);
            $data['detail'] = $this->m_laporan->ambil_detail_kegiatan_bulan($bulan,$tahun);
            //$data['hasil'] = $this->m_laporan->report_custom();
            //$this->load->view('cetak/cetak_bulanan',$data);
            $this->load->view('cetak/cetak_bulanan',$data);
        }
        else{
          echo "<center><h2>Data Tidak di temukan/ Tidak Ada</h2></center>";
        }
       
    
}
public function cetak_bulanan_excel(){

  $bulan=$this->input->post('bulan');
        $tahun=$this->input->post('tahun');
        $nama_kadiv=$this->input->post('nama_kadiv');
        $nama_kasubdiv=$this->input->post('nama_kasubdiv');
        $nama_pelaksana=$this->input->post('nama_pelaksana');
        $nik_kadiv=$this->input->post('nik_kadiv');
        $nik_kasubdiv=$this->input->post('nik_kasubdiv');
        $nik_pelaksana=$this->input->post('nik_pelaksana');
        $bulan_nama="";
        switch($bulan){
            case "01":
                $bulan_nama="JANUARI";
                  break;
                  case "02":
                    $bulan_nama="FEBRUARI";
                      break;
                      case "03":
                        $bulan_nama="MARET";
                          break;
                          case "04":
                            $bulan_nama="APRIL";
                              break;
                              case "05":
                                $bulan_nama="MEI";
                                  break;
                                  case "06":
                                    $bulan_nama="JUNI";
                                      break;
                                      case "07":
                                        $bulan_nama="JULY";
                                          break;
                                          case "08":
                                            $bulan_nama="AGUSTUS";
                                              break;
                                              case "09":
                                                $bulan_nama="SEPTEMBER";
                                                  break;
                                                  case "10":
                                                    $bulan_nama="OKTOBER";
                                                      break;
                                                      case "11":
                                                        $bulan_nama="NOVEMBER";
                                                          break;
                                                          case "12":
                                                            $bulan_nama="DESEMBER";
                                                              break;
                                                            }
    $data['bulan']=$bulan;
        $data['tahun'] = $tahun;
        $data['nama_kadiv'] = $nama_kadiv;
        $data['nama_kasubdiv'] = $nama_kasubdiv;
        $data['nama_pelaksana'] = $nama_pelaksana;
        $data['nik_kadiv'] = $nik_kadiv;
        $data['nik_kasubdiv'] = $nik_kasubdiv;
        $data['nik_pelaksana'] = $nik_pelaksana;
        if($this->m_laporan->ambil_kegiatan_bulan($bulan,$tahun)->num_rows() > 0){
           //$data['kegiatan'] = $this->m_laporan->ambil_kegiatan_bulan($bulan,$tahun);
           // $data['detail'] = $this->m_laporan->ambil_detail_kegiatan_bulan($bulan,$tahun);
            $data['hasil'] = $this->m_laporan->report_custom($bulan);
            //$this->load->view('cetak/cetak_bulanan',$data);
            $this->load->view('cetak/cetak_bulanan_excel',$data);
        }
        else{
          echo "<center><h2>Data Tidak di temukan/ Tidak Ada</h2></center>";
        }
       

}
public function cetak_bulanan_foto(){

        $bulan=$this->input->post('bulan');
        $tahun=$this->input->post('tahun');
        $nama_kadiv=$this->input->post('nama_kadiv');
        $nama_kasubdiv=$this->input->post('nama_kasubdiv');
        $nama_pelaksana=$this->input->post('nama_pelaksana');
        $nik_kadiv=$this->input->post('nik_kadiv');
        $nik_kasubdiv=$this->input->post('nik_kasubdiv');
        $nik_pelaksana=$this->input->post('nik_pelaksana');
        $bulan_nama="";
        switch($bulan){
            case "01":
                $bulan_nama="JANUARI";
                  break;
                  case "02":
                    $bulan_nama="FEBRUARI";
                      break;
                      case "03":
                        $bulan_nama="MARET";
                          break;
                          case "04":
                            $bulan_nama="APRIL";
                              break;
                              case "05":
                                $bulan_nama="MEI";
                                  break;
                                  case "06":
                                    $bulan_nama="JUNI";
                                      break;
                                      case "07":
                                        $bulan_nama="JULY";
                                          break;
                                          case "08":
                                            $bulan_nama="AGUSTUS";
                                              break;
                                              case "09":
                                                $bulan_nama="SEPTEMBER";
                                                  break;
                                                  case "10":
                                                    $bulan_nama="OKTOBER";
                                                      break;
                                                      case "11":
                                                        $bulan_nama="NOVEMBER";
                                                          break;
                                                          case "12":
                                                            $bulan_nama="DESEMBER";
                                                              break;
                                                            }
    $data['bulan']=$bulan;
        $data['tahun'] = $tahun;
        $data['nama_kadiv'] = $nama_kadiv;
        $data['nama_kasubdiv'] = $nama_kasubdiv;
        $data['nama_pelaksana'] = $nama_pelaksana;
        $data['nik_kadiv'] = $nik_kadiv;
        $data['nik_kasubdiv'] = $nik_kasubdiv;
        $data['nik_pelaksana'] = $nik_pelaksana;
        if($this->m_laporan->cetak_foto($bulan,$tahun)->num_rows() > 0){
           //$data['kegiatan'] = $this->m_laporan->ambil_kegiatan_bulan($bulan,$tahun);
           // $data['detail'] = $this->m_laporan->ambil_detail_kegiatan_bulan($bulan,$tahun);
            $data['data'] = $this->m_laporan->cetak_foto($bulan,$tahun);
            //$this->load->view('cetak/cetak_bulanan',$data);
            $this->load->view('cetak/cetak_foto_mentah',$data);
        }
        else{
          echo "<center><h2>Data Tidak di temukan/ Tidak Ada</h2></center>";
        }
       

}
    }    