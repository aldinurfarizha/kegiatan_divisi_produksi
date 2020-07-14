<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Aset extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('upload');
    } 
 
    public function data_aset()
    {
    $data['data']=$this->m_aset->tampil_aset();
    $data['tampil_zona']=$this->m_zona->tampil_zona();
    $this->load->view('aset/v_data_aset',$data);
    }
    
    public function edit_aset(){
        $config['upload_path'] = './assets/images/aset/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
        $config['encrypt_name'] = TRUE; 
        $id_aset=$this->input->post('id_aset');
        $nama_aset=$this->input->post('nama_aset');
        $deskripsi=$this->input->post('deskripsi');
        $tgl_aset=$this->input->post('tgl_aset');
        $zona=$this->input->post('zona');
        $keterangan=$this->input->post('keterangan');
        $status=$this->input->post('status');
        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name'])){
 
            if ($this->upload->do_upload('filefoto')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/images/aset/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assets/images/aset/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                $foto=$gbr['file_name'];
                $this->m_aset->edit_aset_dengan_foto($id_aset,$nama_aset,$deskripsi,$tgl_aset,$zona,$foto,$status,$keterangan);
                $this->session->set_flashdata('edit', 'Aset Berhasil Di Edit');
                $data['data']=$this->m_aset->tampil_aset();
                $data['tampil_zona']=$this->m_zona->tampil_zona();
                $this->load->view('aset/v_data_aset',$data);
            }
            echo "Gambar gagal di upload Check permission server";
        }else{
            $this->m_aset->edit_aset($id_aset,$nama_aset,$deskripsi,$tgl_aset,$zona,$status,$keterangan);
            $this->session->set_flashdata('edit', 'Aset Berhasil Di Edit');
            $data['data']=$this->m_aset->tampil_aset();
            $data['tampil_zona']=$this->m_zona->tampil_zona();
            $this->load->view('aset/v_data_aset',$data);
        }
    
      
      
    }

    public function hapus_aset(){
        $id_aset=$this->input->post('id_aset');
        $this->m_aset->hapus_aset($id_aset);
        $this->session->set_flashdata('hapus', 'Aset berhasil di Hapus');
        $data['data']=$this->m_aset->tampil_aset();
        $data['tampil_zona']=$this->m_zona->tampil_zona();
        $this->load->view('aset/v_data_aset',$data);
    }
    public function tambah_data_aset(){
        $data['tampil_zona']=$this->m_zona->tampil_zona();
        $this->load->view('aset/v_tambah_data_aset',$data);
    }

    function simpan_aset(){
        $config['upload_path'] = './assets/images/aset/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
        $config['encrypt_name'] = TRUE; 
        $nama_aset=$this->input->post('nama_aset');
        $deskripsi=$this->input->post('deskripsi');
        $tgl_aset=$this->input->post('tgl_aset');
        $zona=$this->input->post('zona');
        $keterangan=$this->input->post('keterangan');
        $status=$this->input->post('status');
        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name'])){
 
            if ($this->upload->do_upload('filefoto')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/images/aset/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assets/images/aset/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                $foto=$gbr['file_name'];
                $this->m_aset->simpan_aset($nama_aset,$deskripsi,$tgl_aset,$zona,$foto,$status,$keterangan);
                $this->session->set_flashdata('berhasil', 'Aset berhasil di Hapus');
                $data['tampil_zona']=$this->m_zona->tampil_zona();
                $this->load->view('aset/v_tambah_data_aset',$data);
            }
            echo "Gambar gagal di upload Check permission server";
        }else{
            $foto="Kosong";
            $this->m_aset->simpan_aset_tanpa_foto($nama_aset,$deskripsi,$tgl_aset,$zona,$foto,$status,$keterangan);
            $this->session->set_flashdata('berhasil', 'Aset berhasil di Hapus');
            $data['tampil_zona']=$this->m_zona->tampil_zona();
            $this->load->view('aset/v_tambah_data_aset',$data);
        }
                 
    }
}
