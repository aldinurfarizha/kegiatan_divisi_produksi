<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	

	public function index()
	{
		$id_user=$this->session->userdata('id_user');
        if($id_user==0){
            redirect('login');
        }
        else{
			$data['data_atas']=$this->m_test->tampil_total();
			$data['data']=$this->m_test->tampil_test();
			$data['grafik']=$this->m_test->tampil_grafik();
			$this->load->view('admin/home',$data);
        }
	}
	public function filter(){
		$bulan=$this->input->post("bulan");
		$tahun=$this->input->post("tahun");
		if($bulan == 0){
			echo"<script>
                     alert('Pilih Bulan Sebelum Filter');
                     window.location='".site_url('dashboard')."';
                     </script>";
		}
		
		$id_user=$this->session->userdata('id_user');
        if($id_user==0){
            redirect('login');
		}
		
        else{
			$nama_bulan;
			switch ($bulan){
			case "01";
				$nama_bulan="JANUARI";
			break;
			case "02";
			$nama_bulan="FEBRUARI";
			break;
			case "03";
			$nama_bulan="MARET";
			break;
			case "04";
			$nama_bulan="APRIL";
			break;
			case "05";
			$nama_bulan="MEI";
			break;
			case "06";
			$nama_bulan="JUNI";
			break;
			case "07";
			$nama_bulan="JULY";
			break;
			case "08";
			$nama_bulan="AGUSTUS";
			break;
			case "09";
			$nama_bulan="SEPTEMBER";
			break;
			case "10";
			$nama_bulan="OKTOBER";
			break;
			case "11";
			$nama_bulan="NOVEMBER";
			break;
			case "12";
			$nama_bulan="DESEMBER";
			break;
			}
			$data['nama_bulan']=$nama_bulan;
			$data['tahun']=$tahun;
			if($data['data']=$this->m_test->tampil_data_dashboard($bulan,$tahun)->num_rows() > 0){
				$data['data_atas']=$this->m_test->tampil_total_atas($bulan,$tahun);
			$data['data']=$this->m_test->tampil_data_dashboard($bulan,$tahun);
			$data['grafik']=$this->m_test->tampil_grafik_filter($bulan,$tahun);
			$this->load->view('admin/home_filter',$data);
			}
			else{
			  echo "<center><h2>Data Tidak di temukan/ Tidak Ada</h2></center>";
			}
			
        }
	}
}
