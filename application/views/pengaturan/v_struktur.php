<!DOCTYPE html>
<html>
<?php $this->load->view('admin/head') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php $this->load->view('admin/header') ?>
    <!-- Left side column. contains the logo and sidebar -->
    <?php $this->load->view('admin/leftbar') ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
   
      </section>

      <!-- Main content -->
     
      <section class="content">
   
    <?php if($this->session->flashdata('berhasil') == TRUE):?>
	<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
  <strong>Sukses !</strong> Perubahan/Penambahan Data Berhasil
</div> 
<br>
<?php endif; ?>

        <div class="row">
     
          <!-- Informasi Barang -->
       <div class="col-md-2"></div>
          <div class="col-md-7">
            <div class="box box-primary">
              <div class="box-header with-border">
              <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-info-circle"></i> Data Ini tidak Harus di Update/Perbaharui Setiap Bulannya</h4>
                *Data <strong>Wajib</strong> Di Isi Untuk <strong>Pertama Kali</strong>. <br>
                *Data <strong>Hanya</strong> Perlu di Update Ketika terjadi <strong>Perubahan Struktural</strong>.
              </div>
                <h4><center><i class="fa fa-universal-access"></i>  Struktur & Jabatan </center></h4>
              </div>
          
              <form class="form-horizontal" method="post" action="<?php echo base_url().'pengaturan/tambah_edit_struktur' ?>">
                <div class="box-body">
            <label for=""><i class="fa fa-university"></i>Kepala Divisi (KADIV)</label>
                <div class="input-group col-lg-5">
                <span class="input-group-addon">Nama</span>
                <input type="text" name="nama_kadiv" class="form-control" value="<?php
                   foreach ($data->result_array() as $sws){
                    $nama_kadiv=$sws['nama_kadiv'];
                echo $nama_kadiv; 
                   }?>" >
              </div>
              <br>
              <div class="input-group col-lg-5">
                <span class="input-group-addon">NIK</span>
                <input type="text" name="nik_kadiv" class="form-control" value="<?php
                   foreach ($data->result_array() as $sws){
                    $nama_kadiv=$sws['nik_kadiv'];
                echo $nama_kadiv; 
                   }?>" >
              </div>
              </div>

              <div class="box-body">
            <label for=""><i class="fa fa-sticky-note-o"></i> Kepala Sub Divisi (KASUBDIV)</label>
            <div class="input-group col-lg-5">
                <span class="input-group-addon">Nama</span>
                <input type="text" name="nama_kasubdiv" class="form-control" value="<?php
                   foreach ($data->result_array() as $sws){
                    $nama_kadiv=$sws['nama_kasubdiv'];
                echo $nama_kadiv; 
                   }?>" >
              </div>
              <br>
              <div class="input-group col-lg-5">
                <span class="input-group-addon">NIK</span>
                <input type="text" name="nik_kasubdiv" class="form-control" value="<?php
                   foreach ($data->result_array() as $sws){
                    $nama_kadiv=$sws['nik_kasubdiv'];
                echo $nama_kadiv; 
                   }?>" >
              </div>
              </div>

              <div class="box-body">
            <label for=""><i class="fa fa-user-circle-o"></i> Pelaksana</label>
            <div class="input-group col-lg-5">
                <span class="input-group-addon">Nama</span>
                <input type="text" name="nama_pelaksana" class="form-control" value="<?php
                   foreach ($data->result_array() as $sws){
                    $nama_kadiv=$sws['nama_pelaksana'];
                echo $nama_kadiv; 
                   }?>" >
              </div>
              <br>
              <div class="input-group col-lg-5">
                <span class="input-group-addon">NIK</span>
                <input type="text" name="nik_pelaksana" class="form-control" value="<?php
                   foreach ($data->result_array() as $sws){
                    $nama_kadiv=$sws['nik_pelaksana'];
                echo $nama_kadiv; 
                   }?>" >
              </div>
              </div>

          

             
<br>
              <center><button type="submit" name="submit" id="submit" class="btn btn-lg btn-primary "><i class="fa fa-recycle "></i> Perbaharui</button></center> 
            </form>
<br>
               
            </div>
            </div>
        

    </div>
    </div>
       
  </section>

  <?php $this->load->view('admin/footer') ?>
</body>
</html>

   