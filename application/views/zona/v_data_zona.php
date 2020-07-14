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
    <center>
    <h1>Data Lokasi</h1>
    </center>
    
    <div class="row">
    <div class="col-md-10">
    </div>
    <div class="box-tools">
 
    
  </section>

</form>
<?php if($this->session->flashdata('berhasil') == TRUE):?>
	<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
  <strong>Sukses !</strong> Penambahan Utang Mitra Berhasil !
</div> 
<?php endif; ?>


	<br>
    <div class="col-md-12">
    <div class="box box-success">
    <div class="box-header with-border">
  


    </div>
    <form class="form-horizontal">
    <div class="box-body">
	  <table class="table table-striped table-bordered data">
    <thead>
    
<tr>
  <th width="5%">NO.</th>
  <th><i class="fa fa-home"></i> Nama Lokasi</th>
</tr>
</thead>
<?php 
                  $no=0;
                    foreach ($tampil_zona->result_array() as $sws):
                        $no++;
                        $id_zona=$sws['id_zona'];
                        $nama_zona=$sws['nama_zona'];
                       
                        
						
            
                ?>
<tr>
  <td><?php echo $no;?></td>
 <td><?php echo $nama_zona;?></td>
</tr>
<?php endforeach; ?>
  </table>
</form>
</div>
  </div>
  </div>
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
    "pageLength": 50,
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