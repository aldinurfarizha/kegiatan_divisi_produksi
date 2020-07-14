<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Test extends CI_Controller{


    public function input_hasil_test()
    {

        $id_user=$this->session->userdata('id_user');
        if($id_user==0){
            redirect('login');
        }
        else{
           
        }

    $data['tampil_lokasi']=$this->m_zona->tampil_zona();
    $data['data']=$this->m_test->tampil_test();
    $this->load->view('test/v_data_test',$data);
    }

    public function input_hasil_test2()
    {

        $id_user=$this->session->userdata('id_user');
        if($id_user==0){
            redirect('login');
        }
        else{
           
        }
    $this->load->view('test/v_pilih');
    }
    public function pilih(){
        $bulan=$this->input->post('bulan');
        $tahun=$this->input->post('tahun');
        redirect ('test/input_hasil/'.$bulan.'/'.$tahun);
    }
    public function input_hasil($bulan,$tahun)
    {

        $id_user=$this->session->userdata('id_user');
        if($id_user==0){
            redirect('login');
        }
        else{
           
        }
   
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
    $data['tampil_lokasi']=$this->m_zona->tampil_zona();
    $data['data']=$this->m_test->tampil_test_parameter($bulan,$tahun);
    $this->load->view('test/v_input_test',$data);
    }

    public function tampil_data_test()
    {
        $id_user=$this->session->userdata('id_user');
        if($id_user==0){
            redirect('login');
        }
        else{
            $data['tampil_lokasi']=$this->m_zona->tampil_zona();
    $data['data']=$this->m_test->tampil_semua_test();
    $this->load->view('test/v_tampil_data_test',$data);
        }
   
    }

    public function tambah_hasil_test(){
        $id_user=$this->session->userdata('id_user');
        if($id_user==0){
            redirect('login');
        }
        else{
            $bulan=$this->input->post('bulan');
            $tahun=$this->input->post('tahun');
            $tanggal=$tahun."-".$bulan."-"."01";
            $lokasi=$this->input->post('lokasi');
            $ms=$this->input->post('ms');
            $tms=$this->input->post('tms');
            $jumlah_sample=$this->input->post('jumlah_sample');
            $persentase=$this->input->post('persentase');
            $keterangan=$this->input->post('keterangan');
            $this->m_test->tambah_hasil_test($tanggal, $lokasi, $ms, $tms, $jumlah_sample, $persentase,$keterangan);
            $this->session->set_flashdata('berhasil', 'Data Berhasil Di Input');
            redirect('test/input_hasil_test');
        }
      
    }

    public function tambah_hasil_test_param(){
        $id_user=$this->session->userdata('id_user');
        if($id_user==0){
            redirect('login');
        }
        else{
            $bulan=$this->input->post('bulan');
            $tahun=$this->input->post('tahun');
            $tanggal=$tahun."-".$bulan."-"."01";
            $lokasi=$this->input->post('lokasi');
            $ms=$this->input->post('ms');
            $tms=$this->input->post('tms');
            $jumlah_sample=$this->input->post('jumlah_sample');
            $persentase=$this->input->post('persentase');
            $keterangan=$this->input->post('keterangan');
            $this->m_test->tambah_hasil_test($tanggal, $lokasi, $ms, $tms, $jumlah_sample, $persentase,$keterangan);
            $this->session->set_flashdata('berhasil', 'Data Berhasil Di Input');
            redirect ('test/input_hasil/'.$bulan.'/'.$tahun);
        }
      
    }

    public function edit_hasil_test(){
        $id_user=$this->session->userdata('id_user');
        if($id_user==0){
            redirect('login');
        }
        else{
            $id_hasil=$this->input->post('id_hasil');
            $tanggal=$this->input->post('tanggal');
            $lokasi=$this->input->post('lokasi');
            $ms=$this->input->post('ms');
            $tms=$this->input->post('tms');
            $jumlah_sample=$this->input->post('jumlah_sample');
            $persentase=$this->input->post('persentase');
            $keterangan=$this->input->post('keterangan');
            $this->m_test->edit_hasil_test($id_hasil,$tanggal, $lokasi, $ms, $tms, $jumlah_sample, $persentase,$keterangan);
            $this->session->set_flashdata('edit', 'Data Berhasil Di Input');
            redirect('test/input_hasil_test');
        }
    

    }

    public function hapus_hasil_test(){
        $id_user=$this->session->userdata('id_user');
        if($id_user==0){
            redirect('login');
        }
        else{
            $id_hasil=$this->input->post('id_hasil');
            $this->m_test->hapus_hasil_test($id_hasil);
            $this->session->set_flashdata('hapus', 'Data Berhasil Di Input');
            redirect('test/input_hasil_test');
        }
    
    }

    public function edit_hasil_test_param(){
        $id_user=$this->session->userdata('id_user');
        if($id_user==0){
            redirect('login');
        }
        else{
            $bulan=$this->input->post('bulan');
            $tahun=$this->input->post('tahun');
            $id_hasil=$this->input->post('id_hasil');
            $tanggal=$this->input->post('tanggal');
            $lokasi=$this->input->post('lokasi');
            $ms=$this->input->post('ms');
            $tms=$this->input->post('tms');
            $jumlah_sample=$this->input->post('jumlah_sample');
            $persentase=$this->input->post('persentase');
            $keterangan=$this->input->post('keterangan');
            $this->m_test->edit_hasil_test($id_hasil,$tanggal, $lokasi, $ms, $tms, $jumlah_sample, $persentase,$keterangan);
            $this->session->set_flashdata('edit', 'Data Berhasil Di Input');
            redirect ('test/input_hasil/'.$bulan.'/'.$tahun);
        }
    

    }

    public function hapus_hasil_test_param(){
        $id_user=$this->session->userdata('id_user');
        if($id_user==0){
            redirect('login');
        }
        else{
            $bulan=$this->input->post('bulan');
            $tahun=$this->input->post('tahun');
            $id_hasil=$this->input->post('id_hasil');
            $this->m_test->hapus_hasil_test($id_hasil);
            $this->session->set_flashdata('hapus', 'Data Berhasil Di Input');
            redirect ('test/input_hasil/'.$bulan.'/'.$tahun);
        }
    
    }



    public function edit_hasil_testv(){
        $id_user=$this->session->userdata('id_user');
        if($id_user==0){
            redirect('login');
        }
        else{
            $id_hasil=$this->input->post('id_hasil');
            $tanggal=$this->input->post('tanggal');
            $lokasi=$this->input->post('lokasi');
            $ms=$this->input->post('ms');
            $tms=$this->input->post('tms');
            $jumlah_sample=$this->input->post('jumlah_sample');
            $persentase=$this->input->post('persentase');
            $this->m_test->edit_hasil_test($id_hasil,$tanggal, $lokasi, $ms, $tms, $jumlah_sample, $persentase);
            $this->session->set_flashdata('edit', 'Data Berhasil Di Input');
            redirect('test/tampil_data_test');
        }
  

    }

    public function hapus_hasil_testv(){
        $id_user=$this->session->userdata('id_user');
        if($id_user==0){
            redirect('login');
        }
        else{
            $id_hasil=$this->input->post('id_hasil');
        $this->m_test->hapus_hasil_test($id_hasil);
        $this->session->set_flashdata('hapus', 'Data Berhasil Di Input');
        redirect('test/tampil_data_test');
        }
       
    }
    

}
