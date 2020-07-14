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
      <div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
 Data kalkulasi Yang Di tampilkan Merupakan Data <strong>Keseluruhan</strong> Hasil Test
</div> 
<div class="row">
<form action="<?=site_url('dashboard/filter')?>" method="POST">
<div class="col-md-2">
<label>Bulan</label>
          <select class="form-control" name="bulan" id="bulan">
          <option selected value="0"> - Pilih Bulan - </option>
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
<div class="col-sm-1">
<label>Tahun</label>
<input type="number" class="form-control" name="tahun" value="<?php echo $tahun=date("Y");?>">
</div>
<div class="col-sm-1">
<br>
<input type="submit" class="btn-lg btn-success" value="FILTER">
</div>
</form>
</div>
<br>       
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-check-circle-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Memenuhi Syarat (MS)</span>
              <?php foreach ($data_atas-> result_array() as $sws):
              $ms=$sws['sum(ms)'];?>
             <span class="info-box-number">
            <?php echo $ms;?>
            </span>
            <?php endforeach?>  
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-window-close-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Tidak Memenuhi Syarat</span>
              <?php foreach ($data_atas-> result_array() as $sws):
              $tms=$sws['sum(tms)'];?>
             <span class="info-box-number">
            <?php echo $tms;?>
            </span>
            <?php endforeach?> 
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-orange"><i class="fa fa-clock-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah Sample</span>
              <?php foreach ($data_atas-> result_array() as $sws):
              $jumlah_sample=$sws['sum(jumlah_sample)'];?>
             <span class="info-box-number">
            <?php echo $jumlah_sample;?>
            </span>
            <?php endforeach?> 
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-percent"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Persentase </span>
              <?php foreach ($data_atas-> result_array() as $sws):
              $jumlah_sample=$sws['sum(jumlah_sample)'];
              $ms=$sws['sum(ms)'];?>
             <span class="info-box-number">
            <?php 
            $persentase=$ms/$jumlah_sample*100;
            echo round($persentase,0)." %";?>
            </span>
            <?php endforeach?> 
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      
      <div class="col-md-12">
    <div class="box box-primary">
    <div class="box-header with-border">
    <center><h1 class="box-title"><i class="fa fa-calendar-check-o"></i> Data Keseluruhan</h1></center>


    </div>
    <form class="form-horizontal">
    <div class="box-body">
    <table class="table table-striped table-bordered data">
    <thead>
<tr>
<th bgcolor="#e2e2e2" width="1%">NO.</th>
    <th bgcolor="#e2e2e2" width="15%"><i class="fa fa-calendar"></i> TGL Input</th>
	<th bgcolor="#e2e2e2" width="15%"><i class="fa fa-map-marker"></i> Lokasi</th>
	<th bgcolor="#00a65a" style="color:#fff"><i class="fa fa-check"></i> Memenuhi Syarat (MS)</th>
  <th bgcolor="#ff523f" style="color:#fff"><i class="fa fa-close"></i> Tidak Memenuhi Syarat (TMS)</th>
  <th bgcolor="#f0ad4e" style="color:#fff"><i class="fa fa-clock-o"></i> Jumlah Sample</th>
  <th bgcolor="#0073b7" style="color:#fff"><i class="fa fa-percent"></i> Persentase</th>
  <th bgcolor="#0073b7" style="color:#fff"><i class="fa fa-sticky-note"></i> Keterangan</th>
   
</tr>
</thead>


<?php 
                  $no=0;
                    foreach ($data->result_array() as $sws):
                      $no++;
                      $id_hasil=$sws['id_hasil'];
                      $tanggal=$sws['tgl'];
                      $lokasi=$sws['zona'];
                      $ms=$sws['ms'];
                      $tms=$sws['tms'];
                      $persentase=$sws['persentase'];
                      $jumlah_sample=$sws['jumlah_sample'];
                      $keterangan=$sws['keterangan']
                        
						
            
                ?>
<tr>
<td class="count"><?php echo $no;?></td>
	<td><?php echo $tanggal;?></td>
  <td><?php echo $lokasi;?></td>
  <td class="total_ms"><?php echo $ms;?></td>
  <td class="total_tms"><?php echo $tms;?></td>
  <td class="total_jumlah_sample"><?php echo $jumlah_sample;?></td>
  <td class="total_persentase"><?php echo $persentase;?></td>
  <td><?php echo $keterangan;?></td>
 
</tr>
<?php endforeach; ?>
  </table>
</form>
</div>
  </div>
  <div class="row">
        
        <!-- /.col -->
     
          <div class="info-box">
              <canvas id="perbaikan" height="75"></canvas>
          </div>
          <!-- /.info-box -->
     

        <!-- /.col -->
        

    
        <!-- /.col -->


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
<script>
		var ctx = document.getElementById("perbaikan").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: [ 
          <?php foreach ($grafik-> result_array() as $sws):
              $nama_zona=$sws['zona'];
              $persentase=$sws['AVG(persentase)'];
              ?>
          <?php echo "'" .$nama_zona.' ( '.round($persentase,0).' %)'."',";?>
          <?php endforeach?>
       ],
				datasets: [{
          
					label: 'Total Rata Rata Percentage Dari Setiap Lokasi',
					data: [<?php foreach ($grafik-> result_array() as $sws):
              $total_perbaikan_zona=$sws['AVG(persentase)'];?>
          <?php echo "'" .$total_perbaikan_zona ."',";?>
          <?php endforeach?>],
					backgroundColor: [
					'rgba(52, 152, 219,1.0)',
					'rgba(231, 76, 60,1.0)',
					'rgba(39, 174, 96,1.0)',
					'rgba(241, 196, 15,1.0)',
					'rgba(26, 188, 156,1.0)',
          'rgba(155, 89, 182,1.0)',
          'rgba(39, 60, 117,1.0)',
          'rgba(0, 168, 255,1.0)',
          'rgba(194, 54, 22,1.0)',
          'rgba(156, 136, 255,1.0)',
          'rgba(253, 114, 114,1.0)',
          'rgba(248, 239, 186,1.0)',
          'rgba(249, 127, 81,1.0)'
					],
					borderColor: [
					'rgba(52, 152, 219,1.0)',
					'rgba(231, 76, 60,1.0)',
					'rgba(39, 174, 96,1.0)',
					'rgba(241, 196, 15,1.0)',
					'rgba(26, 188, 156,1.0)',
          'rgba(155, 89, 182,1.0)',
          'rgba(39, 60, 117,1.0)',
          'rgba(0, 168, 255,1.0)',
          'rgba(194, 54, 22,1.0)',
          'rgba(156, 136, 255,1.0)',
          'rgba(253, 114, 114,1.0)',
          'rgba(248, 239, 186,1.0)',
          'rgba(249, 127, 81,1.0)'
					],
					borderWidth: 0.5
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