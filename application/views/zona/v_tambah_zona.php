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
    <h1>Data Zona</h1>
    </center>
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
         
        <div class="row">
        <div class="col-md-3"></div>
          <div class="col-md-6">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-home"></i> Tambah Zona Baru</h3>
              </div>
              <form method="post" class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url().'zona/simpan_zona' ?>">
                <div class="box-body">

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Zona</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                      <input type="text" class="form-control" name="nama_zona" placeholder="Cth: CABANG KUNINGAN">
                      <div class="input-group-addon">
                          <i class="fa fa-home"></i>
                        </div>
                    </div>
                  </div>
</div>

                

                


               

                        </div>
                  <center><input type="submit" class="btn btn-primary" value="Simpan" /></center>
                        </br>
                </div>
                       
              </form>
            </div>
          </div>
          <!-- Tutup Lembaran pengirim -->
          

        
        </div>
        
        
  </section>
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
