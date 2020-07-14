<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Laporan extends CI_Controller{

 
    public function laporan_bulan()
    {
    $data['data'] = $this->m_test->tampil_struktur();
    $this->load->view('laporan/v_filter_bulan',$data);
    }
    public function laporan_rentang()
    {
    $data['data'] = $this->m_test->tampil_struktur();
    $this->load->view('laporan/v_filter_rentang',$data);
    }
    public function laporan_keseluruhan()
    {
    $data['data'] = $this->m_test->tampil_struktur();
    $this->load->view('laporan/v_filter_keseluruhan',$data);
    }

}
