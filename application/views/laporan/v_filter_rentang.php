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
    <h1>Laporan Bulanan</h1>
    *Laporan Bulanan untuk mencetak laporan dalam hasil rentang bulan sesuai Pilihan
    </center>
  
    <!-- Search --> 
<div class="align-center">
<div class="col-md-5">
    
    <div class="form-group">
    <form action="<?=site_url('cetak/cetak_rentang_bulanan')?>" method="post">
   <label>Bulan</label>
   <div class="input-group date">
    <div class="input-group-addon">
           <span class="glyphicon glyphicon-th"></span>
       </div>
       <select name="bulan" id="zona" class="form-control select2" style="width: 100%;" required>
       <option selected="true" disabled="disabled">--Pilih Bulan--</option>    
                <option value="01">Januari</option>
                <option value="02">Februari</option>
                <option value="03">Maret</option>
                <option value="04">April</option>
                <option value="05">Mei</option>
                <option value="06">Juni</option>
                <option value="07">Juli</option>
                <option value="08">Agustus</option>
                <option value="09">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
                      </select>
   </div>
   
 <br>
  <div class="form-group">
   <label>Tahun</label>
   <div class="input-group date">
    <div class="input-group-addon">
           <span class="glyphicon glyphicon-th"></span>
       </div>
       <input placeholder="2020" type="number" class="form-control" name="tahun" value="<?php echo $tahun=date("Y");?>" autocomplete="off">
   </div>
  </div>
<strong>Hingga</strong>
  <label>Bulan</label>
   <div class="input-group date">
    <div class="input-group-addon">
           <span class="glyphicon glyphicon-th"></span>
       </div>
       <select name="bulanakhir" id="zona" class="form-control select2" style="width: 100%;" required>
       <option selected="true" disabled="disabled">--Pilih Bulan--</option>    
                <option value="01">Januari</option>
                <option value="02">Februari</option>
                <option value="03">Maret</option>
                <option value="04">April</option>
                <option value="05">Mei</option>
                <option value="06">Juni</option>
                <option value="07">Juli</option>
                <option value="08">Agustus</option>
                <option value="09">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
                      </select>
   </div>
   <div class="form-group">
   <label>Hingga Tahun</label>
   <div class="input-group date">
    <div class="input-group-addon">
           <span class="glyphicon glyphicon-th"></span>
       </div>
       <input placeholder="2020" type="number" class="form-control" name="tahunakhir" value="<?php echo $tahun=date("Y");?>" autocomplete="off">
   </div>
  </div>
  <div class="box-body">
            <label for=""><i class="fa fa-sticky-note-o"></i> Kepala Divisi (KADIV)</label>
                <div class="input-group col-lg-12">
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
                <div class="input-group col-lg-12">
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