<?php $hakakses=$this->session->userdata('hakakses'); ?>
        <?php  if($this->session->userdata('hakakses')=='0'){?>
          <!DOCTYPE html>
<html>
  <?php $this->load->view('admin/head') ?>
  <script type="text/javascript" src="chartjs/Chart.js"></script>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php $this->load->view('admin/header') ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('admin/leftbar') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Divisi Produksi
        <small>Kegiatan </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
     

    
        <!-- /.col -->

     
        <div class="callout callout-success">
                <h4>Selamat Datang Di aplikasi</h4>

                <p>Laporan Kegiatan Bulanan Divisi Produksi PAM TIRTA KAMUNING KAB. KUNINGAN</p>
              </div>
              <br>
      <br>
             <center><img id="logo" src="<?=base_url("assets/")?>ilustration_home.svg" width="550px" ></center> 
  </div>
    
  
      <!-- /.row -->

      <!-- Main row -->
      
      <!-- /.row -->
    </section>
    <!-- /.content -->
  
  
  <!-- /.content-wrapper -->



 <footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> Prototype
  </div>
  <strong>Copyright &copy; 2019 <a href="https://adminlte.io">Exitus</a>.</strong> All rights
  reserved.
</footer>

<div class="control-sidebar-bg"></div>
</div>
<script src="<?php echo base_url('assets/template/back/bower_components') ?>/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/template/back/bower_components') ?>/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url('assets/template/back/dist') ?>/js/adminlte.min.js"></script>
</body>

</html>

          <?php }else{ ?>
          
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
      <h1>
        Selamat Datang
     
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
       
      <div class="col-md-5">
 
 <div class="box box-primary">
     
             <div class="box-body box-profile">
             
           
               
 
              
               <h3 class="profile-username text-center"><?php $username=$this->session->userdata('username'); 
            echo $username;
           ?></h3>
              
 
             
             </div>
             <!-- /.box-body -->
           
           </div>
 </div>
      </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  
  
  <!-- /.content-wrapper -->


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
          <?php } ?>