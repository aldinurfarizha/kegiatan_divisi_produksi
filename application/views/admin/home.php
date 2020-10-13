<?php $hakakses=$this->session->userdata('hakakses'); ?>
        <?php  if($this->session->userdata('hakakses')=='0'){?>
          <!DOCTYPE html>
<html>
  <?php $this->load->view('admin/head') ?>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
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
      <center><h2>Grafik Jumlah Kegiatan Per Bulan (12 Bulan Ke belakang)</h2></center>
      <div class="col-md-12">
     <div class="info-box">
              <canvas id="perbaikan" height="75"></canvas>
          </div>
     </div>
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
<script>
		var ctx = document.getElementById("perbaikan").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: [ 
          <?php foreach ($grafik-> result_array() as $sws):
              $bulan=$sws['bulan'];
              $tahun=$sws['tahun'];
              ?>
          <?php   echo '"'.$bulan.' '.$tahun.'",';?>
          <?php endforeach?>
       ],
				datasets: [{
					label: 'Jumlah Kegiatan',
					data: [<?php foreach ($grafik-> result_array() as $sws):
                    $total=$sws['jumlah_kegiatan'];?>
          <?php echo "'" .$total ."',";?>
          <?php endforeach?>],
          borderColor: "#80b6f4",
            pointBorderColor: "#80b6f4",
            pointBackgroundColor: "#80b6f4",
            pointHoverBackgroundColor: "#80b6f4",
            pointHoverBorderColor: "#80b6f4",
            pointBorderWidth: 10,
            pointHoverRadius: 10,
            pointHoverBorderWidth: 1,
            pointRadius: 3,
            fill: false,
            borderWidth: 4,
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
  </script>
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
      <div class="row">
        
        <!-- /.col -->
     
         
          <!-- /.info-box -->
     

        <!-- /.col -->
        

    
        <!-- /.col -->


</div>
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

<script type="text/javascript">
	$(document).ready(function(){
		$('.data').DataTable();
	});
</script>
</html>
          <?php } ?>