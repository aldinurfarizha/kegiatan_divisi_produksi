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
    <h1>Data Aset</h1>
    </center>
    <br>
    <?php if($this->session->flashdata('berhasil') == TRUE):?>
	<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
  <strong>Sukses !</strong> Penambahan Aset Berhasil
</div> 
<?php endif; ?>

<?php if($this->session->flashdata('edit') == TRUE):?>
	<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
  <strong>Sukses !</strong> Edit Aset Berhasil
</div> 
<?php endif; ?>
        
<?php if($this->session->flashdata('hapus') == TRUE):?>
	<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
  <strong>Sukses !</strong> Hapus Aset berhasil
</div> 
<?php endif; ?>
  </section>
  <section class="content">
         
        <div class="row">
        <div class="col-md-3"></div>
          <div class="col-md-6">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-car"></i> Tambah Aset Baru</h3>
              </div>
              <form method="post" class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url().'aset/simpan_aset' ?>">
                <div class="box-body">

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Aset</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                      <input type="text" class="form-control" name="nama_aset" placeholder="Cth: Mesin Pompa Baru">
                      <div class="input-group-addon">
                          <i class="fa fa-wrench"></i>
                        </div>
                    </div>
                  </div>
</div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Deskripsi</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                      <input type="text" class="form-control" name="deskripsi" placeholder="cth: Pompa dengan Spesifikasi 75KW ...">
                      <div class="input-group-addon">
                          <i class="fa fa-car"></i>
                        </div>
                    </div>
                  </div>
</div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Aset Di tambahkan</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                      <input type="date" class="form-control" name="tgl_aset">
                      <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                    </div>
                  </div>
</div>
<div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Zona</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                    <select name="zona" id="zona" class="form-control select2" style="width: 100%;">
                      <?php foreach ($tampil_zona->result_array() as $asd):?>
                        
                        <option value="<?php echo $asd['nama_zona']; ?>"><?php echo $asd['nama_zona']; ?></option>
                        <?php endforeach;   ?>
                      </select>
                      <div class="input-group-addon">
                          <i class="fa fa-home"></i>
                        </div>
                    </div>
                  </div>
</div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Foto Aset</label>
                    <div class="col-sm-10">
                      <div class="input-group">
                      <input type="file" class="form-control" name="filefoto">
                        <div class="input-group-addon">
                          <i class="fa fa-image"></i>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div id="pilihan_metode" class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Status Aset</label>
                    <div class="col-sm-10">
                      <div class="input-group">
                  
                      <div class="radio" id="radio" name="radio" required>
      <h4>
			<label>
				<input type="radio" name="metode" id="status" value="BEROPRASI" >BEROPRASI
			</label>
      &nbsp;
      <label>
				<input type="radio" name="metode" id="status" value="RUSAK">RUSAK
      </label>
      &nbsp;
      <label>
				<input type="radio" name="metode" id="status" value="DISIMPAN">DISIMPAN
      </label>
     
      </h4>
      
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
