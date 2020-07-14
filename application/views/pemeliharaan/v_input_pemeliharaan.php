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
    <h1>Input Data Pemeliharaan</h1>
    </center>
    <br>
    <?php if($this->session->flashdata('berhasil') == TRUE):?>
	<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
  <strong>Sukses !</strong> Penambahan Data Pemeliharaan Berhasil
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
          <div class="col-md-6">
            <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-wrench"></i> Tambah Pemeliharaan</h3>
              </div>
              <form method="post" class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url().'aset/simpan_pemeliharaan' ?>">
                <div class="box-body">

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Deskripsi</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                      <input type="text" class="form-control" name="Deskripsi" placeholder="Cth: Penggantian Oli Genset">
                      <div class="input-group-addon">
                          <i class="fa fa-sticky-note"></i>
                        </div>
                    </div>
                  </div>
</div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Aset</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                    <select name="nama_aset" id="nama_aset" class="form-control select2" style="width: 100%;">
                      <?php foreach ($tampil_aset->result_array() as $data):?>
                        
                        <option value="<?php echo $data['nama_aset'].' ('.$data['zona'].')'; ?>"><?php echo $data['nama_aset'].' ('.$data['zona'].')'; ?></option>
                        <?php endforeach;   ?>
                      </select>
                      <div class="input-group-addon">
                          <i class="fa fa-car"></i>
                        </div>
                    </div>
                  </div>
</div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Awal Pemeliharaan</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                      <input type="date" class="form-control" name="tgl_awal">
                      <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                    </div>
                  </div>
</div>


<div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Akhir Pemeliharaan</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                      <input type="date" class="form-control" name="tgl_akhir">
                      <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                    </div>
                  </div>
</div>
<div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Biaya</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                      <input type="text" class="form-control" name="biaya">
                      <div class="input-group-addon">
                          <i class="fa fa-money"></i>
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
                    <p>*Pastikan Zona Sesuai Dengan Tempat ASET</p>
                  </div>
</div>
<div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Teknisi</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                    <select name="zona" id="zona" class="form-control select2" style="width: 100%;">
                      <?php foreach ($tampil_teknisi->result_array() as $teknisi):?>
                        
                        <option value="<?php echo $teknisi['nama_teknisi']; ?>"><?php echo $teknisi['nama_teknisi']; ?></option>
                        <?php endforeach;   ?>
                      </select>
                      <div class="input-group-addon">
                          <i class="fa fa-handshake-o"></i>
                        </div>
                    </div>
                  </div>
</div>



      

                  <div id="pilihan_metode" class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Status Pemeliharaan</label>
                    <div class="col-sm-10">
                      <div class="input-group">
                  
                      <div class="radio" id="radio" name="radio" required>
      <h4>
			<label>
				<input type="radio" name="metode" id="status" value="SELESAI" >SELESAI
			</label>
      &nbsp;
      <label>
				<input type="radio" name="metode" id="status" value="PROSES">PROSES
      </label>
      &nbsp;
     
      </h4>
      
    </div>
   
                      </div>
                    </div>
                  </div>

                        </div>
                        </div>
                        
                 
                        </br>
                
                       
            
            </div>
            <div class="col-md-6">
            <div class="box box-warning">
              <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-camera"></i> Dokumentasi Kegiatan Pemeliharaan</h3>
              </div>
                <div class="form-horizontal">
                <div class="box-body">
                <div class="form-group">  
                  
                <label for="inputEmail3" class="col-sm-2 control-label">Foto 1</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                      <input type="file" class="form-control" name="foto1">
                      <div class="input-group-addon">
                          <i class="fa fa-image"></i>
                        </div>
                    </div>
                  </div>  
                      </div>
                     

                      <div class="form-group">     
                <label for="inputEmail3" class="col-sm-2 control-label">Foto 2</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                      <input type="file" class="form-control" name="foto2">
                      <div class="input-group-addon">
                          <i class="fa fa-image"></i>
                        </div>
                    </div>
                  </div> 
                  </div> 

                  <div class="form-group">  
                <label for="inputEmail3" class="col-sm-2 control-label">Foto 3</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                      <input type="file" class="form-control" name="foto3">
                      <div class="input-group-addon">
                          <i class="fa fa-image"></i>
                        </div>
                    </div>
                  </div>  
</div>
                  <div class="form-group">  
                <label for="inputEmail3" class="col-sm-2 control-label">Foto 4</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                      <input type="file" class="form-control" name="foto5">
                      <div class="input-group-addon">
                          <i class="fa fa-image"></i>
                        </div>
                    </div>
                  </div>  
</div>
                  <div class="form-group">  
                <label for="inputEmail3" class="col-sm-2 control-label">Foto 5</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                      <input type="file" class="form-control" name="biaya">
                      <div class="input-group-addon">
                          <i class="fa fa-image"></i>
                        </div>
                    </div>
                  </div>  
                 </div>
                </div>  
                </div>
                </div>
          </div>
          
          <!-- Tutup Informasi Barang -->
        </div>
        
         
          
          <!-- Tutup Lembaran pengirim -->
          

          <center><input type="submit" class="btn btn-primary" value="Simpan" /></center>
          </form>
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
