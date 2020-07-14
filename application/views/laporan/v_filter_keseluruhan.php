<!DOCTYPE html>
<html>
  <?php $this->load->view('admin/head') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<style>
.datepicker{
  cursor:pointer
}
</style>
  <?php $this->load->view('admin/header') ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('admin/leftbar') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <center>
    <h1>Laporan Keseluruhan</h1>
    *Laporan Keseluruhan <br>
    *Dalam Prosesnya Mungkin akan Membutuhkan Waktu Lama
    </center>
    <br>
    <br>
    <br>
    <!-- Search --> 
<div class="align-center">
<div class="col-md-8">
    
    <div class="form-group">
    <form action="<?=site_url('cetak/cetak_keseluruhan')?>" method="post">
  

  <div class="box-body">
            <label for=""><i class="fa fa-sticky-note-o"></i> Kepala Divisi (KADIV)</label>
                <div class="input-group col-lg-8">
                <span class="input-group-addon">Nama</span>
                <input type="text" name="nama_kadiv" class="form-control" readonly value="<?php 
                 foreach ($data->result_array() as $sws){
                  $nama_kadiv=$sws['nama_kadiv'];
                echo $nama_kadiv;
                 }?>" >
                 <span class="input-group-addon">NIK</span>
                <input type="text" name="nik_kadiv" class="form-control" readonly value="<?php 
                 foreach ($data->result_array() as $sws){
                  $nama_kadiv=$sws['nik_kadiv'];
                echo $nama_kadiv;
                 }?>" >
                 
              </div>
              </div>
              <div class="box-body">
            <label for=""><i class="fa fa-sticky-note-o"></i> Kepala Sub Divisi (KASUBDIV)</label>
                <div class="input-group col-lg-8">
                <span class="input-group-addon">Nama</span>
                <input type="text" name="nama_kasubdiv" class="form-control" readonly value="<?php 
                 foreach ($data->result_array() as $sws){
                  $nama_kadiv=$sws['nama_kasubdiv'];
                echo $nama_kadiv;
                 }?>" >
                 <span class="input-group-addon">NIK</span>
                <input type="text" name="nik_kasubdiv" class="form-control" readonly value="<?php 
                 foreach ($data->result_array() as $sws){
                  $nama_kadiv=$sws['nik_kasubdiv'];
                echo $nama_kadiv;
                 }?>" >
                 
              </div>
              </div>
              <br>
              <div class="col-sm-4"></div>
			<input type="submit" class="btn btn-danger" value="CETAK (PDF)">
     
		</form>
    </div>
    </div>
  
   <br>
 

  <!-- Akhir Search --> 
    
  </section>

		
	




  </div>
  <footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> Prototype
  </div>
  <strong>Copyright &copy; 2019 <a href="https://adminlte.io">Exitus</a>.</strong> All rights
  reserved.
</footer>
<script type="text/javascript">
	$(document).ready(function(){
		$('.data').DataTable();
	});
</script>
<div class="control-sidebar-bg"></div>
</div>
<script src="<?php echo base_url('assets/template/back/bower_components') ?>/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/template/back/bower_components') ?>/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url('assets/template/back/dist') ?>/js/adminlte.min.js"></script>
<script type="text/javascript">
 $(function(){
  $(".datepicker").datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      todayHighlight: true,
      minDate: 0,
  });
 });
</script>
</body>

</html>