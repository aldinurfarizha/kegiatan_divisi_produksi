<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pengaturan extends CI_Controller{

 

    public function struktur(){
        $id_user=$this->session->userdata('id_user');
        $data['data']=$this->m_pengaturan->struktur($id_user);
        $this->load->view('pengaturan/v_struktur',$data);
    }

   
    public function tambah_edit_struktur(){
        $id_user=$this->session->userdata('id_user');
        if($id_user==0){
            redirect('login');
        }
        else{
            $id_user=$this->session->userdata('id_user');
            $nama_kadiv=$this->input->post('nama_kadiv');
            $nama_kasubdiv=$this->input->post('nama_kasubdiv');
            $nama_pelaksana=$this->input->post('nama_pelaksana');
            $nik_pelaksana=$this->input->post('nik_pelaksana');
            $nik_kadiv=$this->input->post('nik_kadiv');
            $nik_kasubdiv=$this->input->post('nik_kasubdiv');

            $this->m_pengaturan->tambah_edit_struktur($id_user, $nama_kadiv, $nama_kasubdiv, $nik_kadiv, $nik_kasubdiv, $nama_pelaksana, $nik_pelaksana);
            $this->session->set_flashdata('berhasil', 'Data Berhasil Di Input');
            redirect('pengaturan/struktur');
        }
            
    }
}
