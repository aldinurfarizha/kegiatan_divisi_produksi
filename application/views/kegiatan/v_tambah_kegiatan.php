<!DOCTYPE html>
<html>
  <?php $this->load->view('admin/head') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php $this->load->view('admin/header') ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('admin/leftbar') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
  
    <br>
    <?php if($this->session->flashdata('berhasil') == TRUE):?>
	<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
  <strong>Sukses !</strong> Penambahan Zona Berhasil
</div> 
<?php endif; ?>

<?php if($this->session->flashdata('edit') == TRUE):?>
	<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
  <strong>Sukses !</strong> Edit Zona Berhasil
</div> 
<?php endif; ?>
        
<?php if($this->session->flashdata('hapus') == TRUE):?>
	<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
  <strong>Sukses !</strong> Hapus Zona berhasil
</div> 
<?php endif; ?>
  </section>
  <section class="content">
  <div class="callout callout-success">
                <h4><i class="fa fa-plus"></i> Halaman Tambah Kegiatan</h4>
              </div>
              <br>
  <form method="post" class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url().'kegiatan/insert_kegiatan' ?>">
  <div class="container">      
  <div class="row">
          <div class="col-md-9">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-calendar"></i> Kegiatan</h3>
              </div>
             
                <div class="box-body">
             
   <label>Kegiatan</label>
   <div class="input-group col-lg-12">
    <div class="input-group-addon">
           <span class="fa fa-wrench"></span>
       </div>
       <input type="text" placeholder="Misal: Koordinasi terkait..." class="form-control" name="kegiatan" id="kegiatanc" autocomplete="off" required>
   </div>

   <label>Waktu Kegiatan</label>
   <div class="input-group col-lg-12">
    <div class="input-group-addon">
           <span class="fa fa-calendar"></span>
       </div>
       <input type="date" class="form-control" name="waktu_kegiatan" id="waktu_kegiatan" autocomplete="off" required>
       <div class="input-group-addon">
           <span>Hingga</span>
       </div>
       <input type="date" class="form-control" name="waktu_kegiatan2" id="waktu_kegiatan2" autocomplete="off">
   </div>

   <label>Sasaran / Output</label>
   <div class="input-group col-lg-12">
    <div class="input-group-addon">
           <span class="fa fa-circle-o"></span>
       </div>
       <input type="text" class="form-control" name="output" id="output" autocomplete="off" required>
   </div>

   <label>Foto Dokumentasi</label>
   <div class="input-group col-lg-12">
    <div class="input-group-addon">
           <span class="fa fa-camera"></span>
       </div>
       <input type="file" class="form-control" name="picture" id="picture" autocomplete="off" required>
   </div>
    <br>
    <p align="center"><button type="submit" class="btn btn-success">Simpan</button></p>
                        </div>
                </div>
            </div>
            </form>
       





       

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

</body>

</html>
