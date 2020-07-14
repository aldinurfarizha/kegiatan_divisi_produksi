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
      <br>
      <!-- Main content -->
     
      <section class="content">
      <br>
    <?php if($this->session->flashdata('berhasil') == TRUE):?>
	<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
  <strong>Sukses !</strong> Penambahan User Berhasil
</div> 
<?php endif; ?>
<br>
        <div class="row">
     
          <!-- Informasi Barang -->
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <div class="box box-danger">
              <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-user-plus"></i> Tambah User</h3>
              </div>
          
              <form class="form-horizontal" method="post" action="<?php echo base_url().'kelola_akun/insert_akun' ?>">
                <div class="box-body">

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_user" placeholder="Cth: Budi Setiawan">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="password" placeholder="Password">
                    </div>
                  </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Hak Akses</label>
                    <div class="col-sm-10">
                      <select class="form-control select2" name="hak_akses" style="width: 100%;">
                        <option selected="selected">Pilih</option>
                        <option value="0">Manager</option>
                        <option value="1">Personalia</option>
                        <option value="2">Admin</option>
                        <option value="3">Agen</option>
                        
                      </select>
                    </div>
                  </div>

                </div>
            </div>
            </div>
        <center>  <button type="submit" name="submit" id="submit" class="btn btn-lg btn-info "><i class="fa fa-plus "></i> Tambah User</button>  </center>
        </div>
            </form>
          </div>
          <!-- tutup Informasi Barang -->

         
       
  </section>

  <?php $this->load->view('admin/footer') ?>
</body>
</html>

   