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
    <h1>Pengaturan Zona</h1>
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
  <strong>Sukses !</strong> Perubahan Data Berhasil !
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
  <th><i class="fa fa-user"></i> Nama Zona</th>
  <th><i class="fa fa-home"></i> Alamat</th>
  <th><i class="fa fa-phone"></i> Telepon</th>
	<th><center>Status</center></th>
  <th><center>Aksi</center></th>
</tr>
</thead>
<?php 
                  $no=0;
                    foreach ($tampil_zona->result_array() as $sws):
                        $no++;
                        $id_zona=$sws['id_zona'];
                        $nama_zona=$sws['nama_zona'];
                        $alamat=$sws['alamat'];
                        $telepon=$sws['telp'];
                        $status=$sws['status'];
                        
						
            
                ?>
<tr>
  <td><?php echo $no;?></td>
 <td><?php echo $nama_zona;?></td>
 <td><?php echo $alamat;?></td>
 <td><?php echo $telepon;?></td>
  <td><?php 
  if($status=='BEROPRASI'){
    echo '<center><a class="btn btn-sm btn-success"><i class="fa fa-check">  BEROPRASI</i></a></center>';
  }
  else{
    echo '<center><a class="btn btn-sm btn-warning"><i class="fa fa-times">  NON-AKTIF</i></a></center>';
   
  }
  ?></td>
   <td><?php 
  if($status=='BEROPRASI'){
    echo '<center><a class="btn btn-sm btn-danger" href="#nonaktif'.$id_zona.'" data-toggle="modal" title="Edit"><span class="fa fa-trash"></span> Non-Aktifkan</a></center>';
  }
  else{
    echo '<center><a class="btn btn-sm btn-primary" href="#aktif'.$id_zona.'" data-toggle="modal" title="Edit"><span class="fa fa-check"></span> AKTIFKAN</a></center>';
   
  }
  ?></td>
    
</tr>
<?php endforeach; ?>
  </table>
</form>
</div>
  </div>
  </div>
  </div>
  <?php 
                  
                  foreach ($tampil_zona->result_array() as $sws){
                      
             
                    $id_zona=$sws['id_zona'];
                    $nama_zona=$sws['nama_zona'];
                    $alamat=$sws['alamat'];
                    $telepon=$sws['telp'];
                    $status=$sws['status'];
              ?>
               <div id="nonaktif<?php echo $id_zona?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel"><i class="fa fa-trash"></i> Non Aktifkan Zona Ini ?</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'zona/nonaktif_zona'?>">
                        <div class="modal-body">
                           
                            <br>
                                   <input name="id_zona" type="hidden" value="<?php echo $id_zona; ?>"> 
                                    <input class="form-control" name="nama"value="Nama Zona : <?php echo $nama_zona; ?>" readonly>
                                    <br>
                                    <input class="form-control" name="nama"value="Alamat: <?php echo $alamat; ?>" readonly>
                                    <br>
                                
                                   
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
                            <button type="submit" class="btn btn-danger">Non-Aktif</button>
                        </div>
                    </form>
                </div>
                </div>
                </div>
            <?php
        }
        ?>

<?php 
                  
                  foreach ($tampil_zona->result_array() as $sws){
                      
             
                    $id_zona=$sws['id_zona'];
                    $nama_zona=$sws['nama_zona'];
                    $alamat=$sws['alamat'];
                    $telepon=$sws['telp'];
                    $status=$sws['status'];
              ?>
               <div id="aktif<?php echo $id_zona?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel"><i class="fa fa-check"></i> Aktifkan Zona Ini ?</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'zona/aktif_zona'?>">
                        <div class="modal-body">
                           
                            <br>
                                   <input name="id_zona" type="hidden" value="<?php echo $id_zona; ?>"> 
                                    <input class="form-control" name="nama"value="Nama Zona : <?php echo $nama_zona; ?>" readonly>
                                    <br>
                                    <input class="form-control" name="nama"value="Alamat: <?php echo $alamat; ?>" readonly>
                                    <br>
                                
                                   
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
                            <button type="submit" class="btn btn-primary">Aktifkan</button>
                        </div>
                    </form>
                </div>
                </div>
                </div>
            <?php
        }
        ?>
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