<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Teknisi extends CI_Controller{

 
    public function data_teknisi()
    {
    $data['tampil_teknisi']=$this->m_teknisi->tampil_teknisi();
    $this->load->view('teknisi/v_data_teknisi',$data);
    }
    public function nonaktif_teknisi(){
        $id_teknisi=$this->input->post('id_teknisi');
        $this->m_teknisi->nonaktif_teknisi($id_teknisi);
        $this->session->set_flashdata('nonaktif', 'Zona Berhasil di tambahkan');
        $data['tampil_teknisi']=$this->m_teknisi->tampil_teknisi();
        $this->load->view('teknisi/v_data_teknisi',$data);

    }
    
    public function aktif_teknisi(){
        $id_teknisi=$this->input->post('id_teknisi');
        $this->m_teknisi->aktif_teknisi($id_teknisi);
        $this->session->set_flashdata('aktif', 'Zona Berhasil di tambahkan');
        $data['tampil_teknisi']=$this->m_teknisi->tampil_teknisi();
        $this->load->view('teknisi/v_data_teknisi',$data);

    }
    public function tambah_teknisi(){
        $nama_teknisi=$this->input->post('nama_teknisi');
        $telepon=$this->input->post('telepon');
        $alamat=$this->input->post('alamat');
        $this->m_teknisi->tambah_teknisi($nama_teknisi,$telepon,$alamat);
        $this->session->set_flashdata('tambah','data Berhasil di tambahkan');
        $data['tampil_teknisi']=$this->m_teknisi->tampil_teknisi();
        $this->load->view('teknisi/v_data_teknisi',$data);
    }

}
