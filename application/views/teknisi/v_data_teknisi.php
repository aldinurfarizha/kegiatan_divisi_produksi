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
    <h1>Data Teknisi</h1>
    *Hanya Teknisi berstatus "aktif" yang akan tampil di Form Perbaikan dan Pemeliharaan
    </center>
    
    <div class="row">
    <div class="col-md-10">
    </div>
    <div class="box-tools">
 
    
  </section>

</form>
<?php if($this->session->flashdata('tambah') == TRUE):?>
	<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
  <strong>Sukses !</strong> Penambahan Data Teknisi Berhasil !
</div> 
<?php endif; ?>
<?php if($this->session->flashdata('aktif') == TRUE):?>
	<div class="alert alert-primary alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
  <strong>Sukses !</strong> Pengaktifan Teknisi Berhasil !
</div> 
<?php endif; ?>
<?php if($this->session->flashdata('nonaktif') == TRUE):?>
	<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
  <strong>Sukses !</strong> Nonaktifkan Data Teknisi Berhasil !
</div> 
<?php endif; ?>


	<br>
    <div class="col-md-12">
    <div class="box box-success">
    <div class="box-header with-border">
    <p align="right">

<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-user-plus"></i> Tambah Teknisi</button>
</p>


    </div>
    <form class="form-horizontal">
    <div class="box-body">
	  <table class="table table-striped table-bordered data">
    <thead>
    
<tr>
  <th width="5%">NO.</th>
  <th><i class="fa fa-user"></i> Nama Teknisi</th>
  <th><i class="fa fa-home"></i> Alamat</th>
  <th><i class="fa fa-phone"></i> Telepon</th>
  <th><i class="fa fa-clock-o"></i> Total Handle</th>
	<th><center>Status</center></th>
  <th><i class="fa fa-gears"></i> Aksi</th>
</tr>
</thead>
<?php 
                  $no=0;
                    foreach ($tampil_teknisi->result_array() as $sws):
                        $no++;
                        $id_teknisi=$sws['id_teknisi'];
                        $nama_teknisi=$sws['nama_teknisi'];
                        $alamat=$sws['alamat'];
                        $telepon=$sws['telp'];
                        $status=$sws['status'];
                        $total_handle=$sws['total_handle'];
                        
						
            
                ?>
<tr>
  <td><?php echo $no;?></td>
 <td><?php echo $nama_teknisi;?></td>
 <td><?php echo $alamat;?></td>
 <td><?php echo $telepon;?></td>
 <td><?php echo $total_handle;?></td>
  <td><?php 
  if($status=='NON-AKTIF'){
    echo '<center><a class="btn btn-sm btn-warning"><i class="fa fa-times">  NON-AKTIF</i></a></center>';
  }
  else{
    echo '<center><a class="btn btn-sm btn-success"><i class="fa fa-check">  AKTIF</i></a></center>';
   
  }
  ?></td>
   <td><?php 
  if($status=='AKTIF'){
    echo '<center><a class="btn btn-sm btn-danger" href="#nonaktif'.$id_teknisi.'" data-toggle="modal" title="Edit"><span class="fa fa-recycle"></span> Non-Aktifkan</a></center>';
  }
  else{
    echo '<center><a class="btn btn-sm btn-primary" href="#aktif'.$id_teknisi.'" data-toggle="modal" title="Edit"><span class="fa fa-check"></span> AKTIFKAN</a></center>';
   
  }
  ?></td>
</tr>
<?php endforeach; ?>
  </table>
</form>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel"><i class="fa fa-user-plus"></i> Tambah Teknisi</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="<?php echo base_url().'teknisi/tambah_teknisi'; ?>">
	
		<label>Nama Teknisi</label>
		<input type="text" name="nama_teknisi" class="form-control" required>
		<label>Alamat</label>
		<input type="text" name="alamat" class="form-control" required>
		<label>Telepon</label>
		<input type="text" name="telepon" class="form-control"required>
   
		
	

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php 
                  
                  foreach ($tampil_teknisi->result_array() as $sws){
                      
             
                    $id_teknisi=$sws['id_teknisi'];
                    $nama_teknisi=$sws['nama_teknisi'];
                    $alamat=$sws['alamat'];
                    $telepon=$sws['telp'];
                    $status=$sws['status'];
                    $total_handle=$sws['total_handle'];
              ?>
               <div id="nonaktif<?php echo $id_teknisi?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel"><i class="fa fa-recycle"></i> Non Aktifkan Teknisi Ini ?</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'teknisi/nonaktif_teknisi'?>">
                        <div class="modal-body">
                           
                            <br>
                                   <input name="id_teknisi" type="hidden" value="<?php echo $id_teknisi; ?>"> 
                                    <input class="form-control" name="nama"value="Nama Teknisi : <?php echo $nama_teknisi; ?>" readonly>
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
                  
                  foreach ($tampil_teknisi->result_array() as $sws){
                      
             
                    $id_teknisi=$sws['id_teknisi'];
                    $nama_teknisi=$sws['nama_teknisi'];
                    $alamat=$sws['alamat'];
                    $telepon=$sws['telp'];
                    $status=$sws['status'];
                    $total_handle=$sws['total_handle'];
              ?>
               <div id="aktif<?php echo $id_teknisi?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel"><i class="fa fa-check"></i> Aktifkan Teknisi Ini ?</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'teknisi/aktif_teknisi'?>">
                        <div class="modal-body">
                           
                            <br>
                                   <input name="id_teknisi" type="hidden" value="<?php echo $id_teknisi; ?>"> 
                                    <input class="form-control" name="nama"value="Nama Teknisi : <?php echo $nama_teknisi; ?>" readonly>
                                    <br>
                                    <input class="form-control" name="nama"value="Alamat: <?php echo $alamat; ?>" readonly>
                                    <br>
                                
                                   
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
                            <button type="submit" class="btn btn-primary">Aktif</button>
                        </div>
                    </form>
                </div>
                </div>
                </div>
            <?php
        }
        ?>


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