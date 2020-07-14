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
        $nik_kadiv=$this->input->post('nik_kadiv');
        $nik_kasubdiv=$this->input->post('nik_kasubdiv');

        $data['nama_kadiv'] = $nama_kadiv;
        $data['nama_kasubdiv'] = $nama_kasubdiv;
        $data['nik_kadiv'] = $nik_kadiv;
        $data['nik_kasubdiv'] = $nik_kasubdiv;
        if($this->m_laporan->cetak_bulanan($bulan,$tahun)->num_rows() > 0){
            $data['data'] = $this->m_laporan->cetak_bulanan($bulan,$tahun);
            $this->load->view('cetak/cetak_bulanan',$data);
        }
        else{
          echo "<center><h2>Data Tidak di temukan/ Tidak Ada</h2></center>";
        }
       
    
}
public function cetak_bulanan_excel(){

    $bulan=$this->input->post('bulan');
    $tahun=$this->input->post('tahun');
    $data['bulan']=$bulan;
    $data['tahun']=$tahun;
    $nama_kadiv=$this->input->post('nama_kadiv');
    $nama_kasubdiv=$this->input->post('nama_kasubdiv');
    $nik_kadiv=$this->input->post('nik_kadiv');
    $nik_kasubdiv=$this->input->post('nik_kasubdiv');

    $data['nama_kadiv'] = $nama_kadiv;
    $data['nama_kasubdiv'] = $nama_kasubdiv;
    $data['nik_kadiv'] = $nik_kadiv;
    $data['nik_kasubdiv'] = $nik_kasubdiv;
    if($this->m_laporan->cetak_bulanan($bulan,$tahun)->num_rows() > 0){
        $data['data'] = $this->m_laporan->cetak_bulanan_excel($bulan,$tahun);
        $this->load->view('cetak/cetak_bulanan_excel',$data);
    }
    else{
      echo "<center><h2>Data Tidak di temukan/ Tidak Ada</h2></center>";
    }
   

}
public function cetak_rentang_bulanan(){

    $bulan=$this->input->post('bulan');
    $tahun=$this->input->post('tahun');
    $bulanakhir=$this->input->post('bulanakhir');
    $tahunakhir=$this->input->post('tahunakhir');
    $nama_kadiv=$this->input->post('nama_kadiv');
    $nama_kasubdiv=$this->input->post('nama_kasubdiv');
    $nik_kadiv=$this->input->post('nik_kadiv');
    $nik_kasubdiv=$this->input->post('nik_kasubdiv');

    $data['nama_kadiv'] = $nama_kadiv;
    $data['nama_kasubdiv'] = $nama_kasubdiv;
    $data['nik_kadiv'] = $nik_kadiv;
    $data['nik_kasubdiv'] = $nik_kasubdiv;
    $data['data'] = $this->m_laporan->cetak_rentang_bulanan($bulan,$tahun,$bulanakhir,$tahunakhir);
    $this->load->view('cetak/cetak_bulanan',$data);

}

public function cetak_keseluruhan(){
    $nama_kadiv=$this->input->post('nama_kadiv');
    $nama_kasubdiv=$this->input->post('nama_kasubdiv');
    $nik_kadiv=$this->input->post('nik_kadiv');
    $nik_kasubdiv=$this->input->post('nik_kasubdiv');

    $data['nama_kadiv'] = $nama_kadiv;
    $data['nama_kasubdiv'] = $nama_kasubdiv;
    $data['nik_kadiv'] = $nik_kadiv;
    $data['nik_kasubdiv'] = $nik_kasubdiv;
    $data['data'] = $this->m_laporan->cetak_keseluruhan();
    $this->load->view('cetak/cetak_bulanan',$data);

}



    }    