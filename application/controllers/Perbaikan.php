<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Perbaikan extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('upload');
    } 
 
    public function data_perbaikan()
    {
    $data['data']=$this->m_perbaikan->tampil_perbaikan();
    $data['tampil_zona']=$this->m_zona->tampil_zona();
    $this->load->view('perbaikan/v_data_perbaikan',$data);
    }
    public function input_perbaikan(){
        $data['tampil_zona']=$this->m_zona->tampil_zona();
        $data['tampil_aset']=$this->m_aset->tampil_aset();
        $data['tampil_teknisi']=$this->m_teknisi->tampil_teknisi();
        $this->load->view('perbaikan/v_input_perbaikan',$data);
    }

    public function edit_perbaikan(){
        $id_perbaikan=$this->input->post('id_perbaikan');
        $nama_aset=$this->input->post('nama_aset');
        $deskripsi=$this->input->post('deskripsi');
        $tgl_awal=$this->input->post('tgl_awal');
        $tgl_akhir=$this->input->post('tgl_akhir');
        $zona=$this->input->post('zona');
        $status=$this->input->post('status');
   
        $this->m_perbaikan->edit_pemeliharaan($id_perbaikan,$nama_aset,$deskripsi,$tgl_awal,$tgl_akhir,$zona,$status);
        $this->session->set_flashdata('edit', 'Aset Berhasil Di Edit');
        $data['data']=$this->m_perbaikan->tampil_perbaikan();
        $data['tampil_zona']=$this->m_zona->tampil_zona();
        $this->load->view('perbaikan/v_data_perbaikan',$data);
    }
    public function hapus_perbaikan(){
        $id_perbaikan=$this->input->post('id_perbaikan');
        $this->m_perbaikan->hapus_perbaikan($id_perbaikan);
        $this->session->set_flashdata('hapus', 'Data Perbaikan berhasil di Hapus');
        $data['data']=$this->m_aset->tampil_aset();
        $data['tampil_zona']=$this->m_zona->tampil_zona();
        $this->load->view('pemeliharaan/v_data_perbaikan',$data);
    }

    function simpan_pemeliharaan(){
        $config['upload_path'] = './assets/images/pemeliharaan/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
        $config['encrypt_name'] = TRUE; 
        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name'])){
 
            if ($this->upload->do_upload('filefoto')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/images/pemeliharaan/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assets/images/pemeliharaan/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                $foto=$gbr['file_name'];
                $id_aset=$this->input->post('id_aset');
                $nama_aset=$this->input->post('nama_aset');
                $deskripsi=$this->input->post('deskripsi');
                $tgl_aset=$this->input->post('tgl_aset');
                $zona=$this->input->post('zona');
                $keterangan=$this->input->post('keterangan');
                $status=$this->input->post('status');
                $this->m_aset->simpan_pemeliharaan($nama_aset,$deskripsi,$tgl_aset,$zona,$foto,$status,$keterangan);
                echo "Image berhasil diupload";
            }
            echo "step 2";
        }else{
            echo "Image yang diupload kosong";
        }
                 
    }
   
}
