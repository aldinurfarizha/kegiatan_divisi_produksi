<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Zona extends CI_Controller{

 
    public function data_zona()
    {
    $data['tampil_zona']=$this->m_zona->tampil_zona();
    $this->load->view('zona/v_data_zona',$data);
    }

    public function tambah_zona(){
        $this->load->view('zona/v_tambah_zona');
    }

    public function pengaturan_zona(){
        $data['tampil_zona']=$this->m_zona->tampil_zona();
        $this->load->view('zona/v_pengaturan_zona',$data);
    }

    public function simpan_zona(){
        $nama_zona=$this->input->post('nama_zona');
        $alamat=$this->input->post('alamat');
        $telepon=$this->input->post('telepon');
        $status=$this->input->post('metode');
        $this->m_zona->tambah_zona($nama_zona,$alamat,$telepon,$status);
        $this->session->set_flashdata('berhasil', 'Zona Berhasil di tambahkan');
        $data['tampil_zona']=$this->m_zona->tampil_zona();
        $this->load->view('zona/v_data_zona',$data);
    }
    public function nonaktif_zona(){
        $id_zona=$this->input->post('id_zona');
        $this->m_zona->nonaktif_zona($id_zona);
        $this->session->set_flashdata('berhasil', 'Zona Berhasil di tambahkan');
        $data['tampil_zona']=$this->m_zona->tampil_zona();
        $this->load->view('zona/v_pengaturan_zona',$data);

    }
    public function aktif_zona(){
        $id_zona=$this->input->post('id_zona');
        $this->m_zona->aktif_zona($id_zona);
        $this->session->set_flashdata('berhasil', 'Zona Berhasil di tambahkan');
        $data['tampil_zona']=$this->m_zona->tampil_zona();
        $this->load->view('zona/v_pengaturan_zona',$data);

    }

}
