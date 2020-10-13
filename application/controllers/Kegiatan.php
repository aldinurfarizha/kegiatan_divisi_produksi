
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
    public function detail_kegiatan($id_kegiatan){
      $data['kegiatan']=$this->m_kegiatan->ambil_kegiatan_param($id_kegiatan);
      $data['detail']=$this->m_kegiatan->ambil_detail_kegiatan_param($id_kegiatan);
      $this->load->view('kegiatan/v_lihat_kegiatan',$data);


    }
    public function edit_kegiatan($id_kegiatan,$bulan,$tahun){
      $data['bulan']=$bulan;
      $data['tahun']=$tahun;
      $data['kegiatan']=$this->m_kegiatan->ambil_kegiatan_param($id_kegiatan);
      $data['detail']=$this->m_kegiatan->ambil_detail_kegiatan_param($id_kegiatan);
      $this->load->view('kegiatan/v_edit_kegiatan',$data);


    }

    public function proses_edit_kegiatan(){
      $config['upload_path'] = './assets/uploads/dokumentasi/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
        $config['encrypt_name'] = TRUE; 
        $this->load->library('upload');
        $this->upload->initialize($config);
      $id_kegiatan=$this->input->post("id_kegiatan");
      $kegiatan=$this->input->post("kegiatan");
      $waktu_kegiatan=$this->input->post("waktu_kegiatan");
      $waktu_kegiatan2=$this->input->post("waktu_kegiatan2");
      $bulan=$this->input->post('bulan');
      $tahun=$this->input->post('tahun');
      $output=$this->input->post("output");
      if(!empty($_FILES['picture']['name'])){
        if ($this->upload->do_upload('picture')){
            $gbr = $this->upload->data();
            $config['image_library']='gd2';
            $config['source_image']='./assets/uploads/dokumentasi/'.$gbr['file_name'];
            $config['create_thumb']= FALSE;
            $config['maintain_ratio']= TRUE;
            $config['quality']= '50%';
            $config['width']= 1280;
            $config['height']= 720;
            $config['new_image']= './assets/uploads/dokumentasi/'.$gbr['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $picture=$gbr['file_name'];
            $this->m_kegiatan->kegiatan_edit_foto($id_kegiatan, $kegiatan, $waktu_kegiatan, $waktu_kegiatan2, $output,$picture);
            redirect ('kegiatan/edit_kegiatan/'.$id_kegiatan.'/'.$bulan.'/'.$tahun);
        }
        else{
          echo "Permission Conflict";
        }
    }
    else{
      $this->m_kegiatan->kegiatan_edit($id_kegiatan, $kegiatan, $waktu_kegiatan, $waktu_kegiatan2, $output);
      redirect ('kegiatan/edit_kegiatan/'.$id_kegiatan.'/'.$bulan.'/'.$tahun);
    }

   
    }
    public function insert_kegiatan(){
       $config['upload_path'] = './assets/uploads/dokumentasi/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
        $config['encrypt_name'] = TRUE; 
        $this->load->library('upload');
        $this->upload->initialize($config);
        $kegiatan=$this->input->post("kegiatan");
        $bulan=$this->input->post('bulan');
        $tahun=$this->input->post('tahun');
        $tanggal_awal=$this->input->post('tanggal_awal');
        $tanggal_akhir=$this->input->post('tanggal_akhir');

        $waktu_kegiatan=$tahun."-".$bulan."-".$tanggal_awal;
        $waktu_kegiatan2=$tahun."-".$bulan."-".$tanggal_akhir;
        $output=$this->input->post("output");
        if(!empty($_FILES['picture']['name'])){
          if ($this->upload->do_upload('picture')){
              $gbr = $this->upload->data();
              //Compress Image
              $config['image_library']='gd2';
              $config['source_image']='./assets/uploads/dokumentasi/'.$gbr['file_name'];
              $config['create_thumb']= FALSE;
              $config['maintain_ratio']= TRUE;
              $config['quality']= '50%';
              $config['width']= 1280;
              $config['height']= 720;
              $config['new_image']= './assets/uploads/dokumentasi/'.$gbr['file_name'];
              $this->load->library('image_lib', $config);
              $this->image_lib->resize();
              $picture=$gbr['file_name'];
              $this->m_kegiatan->tambah_kegiatan($kegiatan, $waktu_kegiatan, $output, $waktu_kegiatan2, $picture);
              $id = $this->db->insert_id();
              redirect ('kegiatan/edit_kegiatan/'.$id.'/'.$bulan.'/'.$tahun);
          }
      }
      else{
        redirect('asd');
      }
        
    }
    public function tambah_detail_kegiatan(){
      $bulan=$this->input->post('bulan');
      $tahun=$this->input->post('tahun');
      $id_kegiatan=$this->input->post("id_kegiatan");
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
        $this->m_kegiatan->tambah_detail_kegiatan($id_kegiatan,$uraian_kegiatan, $kendala, $tindak_lanjut, $penanggung_jawab, $penanggung_jawab2,$penanggung_jawab3, $penanggung_jawab4, $penanggung_jawab5, $penanggung_jawab6,$indikators, $keterangan);
        $this->session->set_flashdata('berhasil', 'Data Berhasil Di tambahkan');
        redirect ('kegiatan/edit_kegiatan/'.$id_kegiatan.'/'.$bulan.'/'.$tahun);
    }
    public function edit_detail_kegiatan(){
      $bulan=$this->input->post('bulan');
      $tahun=$this->input->post('tahun');
      $id_detail_kegiatan=$this->input->post("id_detail_kegiatan");
      $id_kegiatan=$this->input->post("id_kegiatan");
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
        $this->m_kegiatan->edit_detail_kegiatan($id_detail_kegiatan,$uraian_kegiatan, $kendala, $tindak_lanjut, $penanggung_jawab, $penanggung_jawab2,$penanggung_jawab3, $penanggung_jawab4, $penanggung_jawab5, $penanggung_jawab6,$indikators, $keterangan);
        $this->session->set_flashdata('edit', 'Data Berhasil Di tambahkan');
        redirect ('kegiatan/edit_kegiatan/'.$id_kegiatan.'/'.$bulan.'/'.$tahun);

    }

    public function hapus_detail_kegiatan(){
      $id_kegiatan=$this->input->post("id_kegiatan");
      $bulan=$this->input->post('bulan');
      $tahun=$this->input->post('tahun');
      $id_detail_kegiatan=$this->input->post("id_detail_kegiatan");
      $this->m_kegiatan->hapus_detail_kegiatan($id_detail_kegiatan);
      $this->session->set_flashdata('hapus', 'Data Berhasil Di tambahkan');
      redirect ('kegiatan/edit_kegiatan/'.$id_kegiatan.'/'.$bulan.'/'.$tahun);
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
                                        $bulan_nama="JULI";
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
    $data['nama_bulan']=$bulan_nama;
    $data['tahun']=$tahun;
    $data['bulan']=$bulan;
        $data['data']=$this->m_kegiatan->ambil_kegiatan($bulan,$tahun);
        $this->load->view('kegiatan/v_list_kegiatan',$data);
    }
}
