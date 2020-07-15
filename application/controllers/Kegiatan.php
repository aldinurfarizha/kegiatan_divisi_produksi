
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kegiatan extends CI_Controller{

 
    public function data_kegiatan()
    {
    $this->load->view('kegiatan/v_kegiatan_filter');
    }

    public function tambah_kegiatan()
    {
    $this->load->view('kegiatan/v_tambah_kegiatan');
    }
    public function insert_kegiatan(){
        $kegiatan=$this->input->post("kegiatan");
        $waktu_kegiatan=$this->input->post("waktu_kegiatan");
        $output=$this->input->post("output");
        $uraian_kegiatan=$this->input->post("uraian_kegiatan");
        $kendala=$this->input->post("kendala");
        $tindak_lanjut=$this->input->post("tindak_lanjut");
        $indikators=$this->input->post("indikator");
        $penanggung_jawab=$this->input->post("penanggung_jawab");
        $penanggung_jawab2=$this->input->post("penanggung_jawab2");
        $penanggung_jawab3=$this->input->post("penanggung_jawab3");
        $penanggung_jawab4=$this->input->post("penanggung_jawab4");
        $penanggung_jawab5=$this->input->post("penanggung_jawab5");
        $penanggung_jawab6=$this->input->post("penanggung_jawab6");
        $keterangan=$this->input->post("keterangan");
        $this->m_kegiatan->tambah_kegiatan($kegiatan, $waktu_kegiatan, $output, $uraian_kegiatan, $kendala, $tindak_lanjut, $penanggung_jawab, $penanggung_jawab2,$penanggung_jawab3, $penanggung_jawab4, $penanggung_jawab5, $penanggung_jawab6,$indikators, $keterangan);
    }
    public function pilih(){
        $bulan=$this->input->post('bulan');
        $tahun=$this->input->post('tahun');
        redirect ('kegiatan/list_kegiatan/'.$bulan.'/'.$tahun);
    }
    public function hapus_kegiatan(){
        $id_kegiatan=$this->input->post("id_kegiatan");
        $bulan=$this->input->post('bulan');
        $tahun=$this->input->post('tahun');
        $this->m_kegiatan->hapus_kegiatan($id_kegiatan);
        $this->session->set_flashdata('hapus', 'Data Berhasil Di hapus');
        redirect ('kegiatan/list_kegiatan/'.$bulan.'/'.$tahun);
    }

    public function list_kegiatan($bulan,$tahun){
        $bulan_nama;
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
    $data['bulan']=$bulan_nama;
    $data['tahun']=$tahun;
    $data['no_bulan']=$bulan;
        $data['data']=$this->m_kegiatan->ambil_kegiatan($bulan,$tahun);
        $this->load->view('kegiatan/v_list_kegiatan',$data);
    }
}
