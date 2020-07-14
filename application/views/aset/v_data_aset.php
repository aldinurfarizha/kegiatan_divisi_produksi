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

</form>
	
	
	<br>
    <div class="col-md-12">
    <div class="box box-primary">
    <div class="box-header with-border">


    </div>
    <form action="<?=site_url('print_laporan/cetak_pelanggan')?>" class="form-horizontal" method="post">
    <div class="box-body">
    <table class="table table-striped table-bordered data">
    <thead>
	
<tr>
	<th width="1%">NO.</th>
    <th><i class="fa fa-wrench"></i> Nama Aset</th>
	<th><i class="fa fa-address-book"></i> Deskripsi Asset</th>
	<th><i class="fa fa-calendar"></i> Tanggal Asset</th>
  <th><i class="fa fa-wrench"></i> Total Perbaikan</th>
  <th><i class="fa fa-globe"></i> Zona</th>
	<th><i class="fa fa-picture"></i> Foto</th>
  <th><i class="fa fa-check"></i> Status</th>
  <th><i class="fa fa-sticky-note"></i> Keterangan</th>
  <th><i class="fa fa-gears"></i> Aksi</th>
 
  
</tr>
</thead>
<?php 
                  $no=0;
                    foreach ($data->result_array() as $sws):
                        $no++;
                        $id_aset=$sws['id_aset'];
                        $nama_aset=$sws['nama_aset'];
                        $deskripsi=$sws['deskripsi'];
                        $tgl_aset=$sws['tgl_aset'];
                        $total_perbaikan=$sws['total_perbaikan'];
                        $zona=$sws['zona'];
                        $foto=$sws['foto'];
                        $status=$sws['status'];
                        $keterangan=$sws['keterangan'];
						
            
                ?>
<tr>
	<td><?php echo $no;?></td>
	<td><?php echo $nama_aset;?></td>
	<td><?php echo $deskripsi;?></td>
	<td><?php echo $tgl_aset;?></td>
  <td><?php echo $total_perbaikan;?></td>
  <td><?php echo $zona;?></td>
  <td><a href="<?php echo base_url('assets/images/aset/').$foto?>"> <img src="<?php echo base_url('assets/images/aset/').$foto?>" alt="<?php echo $foto;?>" height="75" width="100"></a> </td>
  <td><?php if($status=="BEROPRASI"){
    echo '<span class="btn-sm btn-success"><i class="fa fa-check"></i> BEROPRASI</span>';
  }
  else {
 if($status=="RUSAK"){
  echo '<span class="btn-sm btn-danger"><i class="fa fa-close"></i> RUSAK</span>';
 }
 else{
  echo '<span class="btn-sm btn-primary"><i class="fa fa-clock-o"></i> DISIMPAN</span>';
 }
  }
  ?></td>
  <td><?php echo $keterangan?></td>
    
    <td><center><a class="btn btn-sm btn-warning" href="#editpelanggan<?php echo $id_aset?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span> Edit</a>
    <a class="btn btn-sm btn-danger" href="#hapus<?php echo $id_aset?>" data-toggle="modal" title="Edit"><span class="fa fa-trash"></span> Hapus</a></td>
	</center>
	
		
</tr>
<?php endforeach; ?>
  </table>



</div>
  </div>
  </div>
</div>

<!-- ============ MODAL PUPUS =============== -->
<?php 
                  
                  foreach ($data->result_array() as $sws){
                      
                    $no++;
                    $id_aset=$sws['id_aset'];
                    $nama_aset=$sws['nama_aset'];
                    $deskripsi=$sws['deskripsi'];
                    $tgl_aset=$sws['tgl_aset'];
                    $total_perbaikan=$sws['total_perbaikan'];
                    $zona=$sws['zona'];
                    $foto=$sws['foto'];
                    $status=$sws['status'];
              ?>
               <div id="hapus<?php echo $id_aset?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel"><i class="fa fa-trash"></i> Hapus Data ASET Ini ?</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'aset/hapus_aset'?>">
                        <div class="modal-body">
                           
                            <br>
                                   <input name="id_aset" type="hidden" value="<?php echo $id_aset; ?>"> 
                                    <input class="form-control" name="nama"value="Nama Aset : <?php echo $nama_aset; ?>" readonly>
                                    <br>
                                    <input class="form-control" name="nama"value="Deskripsi : <?php echo $deskripsi; ?>" readonly>
                                    <br>
                                    <center><img src="<?php echo base_url('assets/images/aset/').$foto?>" width="150px"></center>
                                   
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </div>
                    </form>
                </div>
                </div>
                </div>
            <?php
        }
        ?>

<!-- Modal -->



<?php 
                 
                    foreach ($data->result_array() as $sws){
                      $no++;
                      $id_aset=$sws['id_aset'];
                      $nama_aset=$sws['nama_aset'];
                      $deskripsi=$sws['deskripsi'];
                      $tgl_aset=$sws['tgl_aset'];
                      $total_perbaikan=$sws['total_perbaikan'];
                      $zona=$sws['zona'];
                      $foto=$sws['foto'];
                      $status=$sws['status'];
						
                ?>

<div class="modal fade" id="editpelanggan<?php echo $id_aset;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel"><i class="fa fa-key"></i> Ubah Data Aset</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" enctype="multipart/form-data" action="<?php echo base_url().'aset/edit_aset'; ?>">
      <div class="modal-body">
      
    
		<div class="form-group">
        
    <input type="text" value="<?php echo $id_aset?>" name="id_aset" hidden>
		<label>Nama Aset</label>
		<input type="text" value="<?php echo $nama_aset?>" name="nama_aset" class="form-control" required>
		<label>Deskripsi</label>
		<input type="text" value="<?php echo $deskripsi?>" name="deskripsi" class="form-control" required>
		<label>Tanggal</label>
		<input type="date" value="<?php echo $tgl_aset?>" name="tgl_aset" class="form-control"required>
    <label>Zona</label>
    <select name="zona" id="zona" class="form-control select2" style="width: 100%;">
    <option selected="<?php echo $zona?>"><?php echo $zona?></option>
                      <?php foreach ($tampil_zona->result_array() as $asd):?>
                        
                        <option value="<?php echo $asd['nama_zona']; ?>"><?php echo $asd['nama_zona']; ?></option>
                        <?php endforeach;   ?>
                      </select>
    <label>Status</label>
    <select name="status" id="status" class="form-control select2" style="width: 100%;">
    <option selected="<?php echo $status?>"><?php echo $status?></option>
                    <option value="BEROPRASI">BEROPRASI</option>
                    <option value="RUSAK">RUSAK</option>
                    <option value="DISIMPAN">DISIMPAN</option>
                      </select>
    <label>Keterangan</label>
    <input type="text" value="<?php echo $keterangan?>" name="keterangan" class="form-control" required>
    <label > Foto </label>
    <input type="file" class="form-control" name="filefoto">
	
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      
                    </form></div>
    </div>
  </div>
</div>
                    <?php } ?>


<!-- Modal Edit Pelanggan -->

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
