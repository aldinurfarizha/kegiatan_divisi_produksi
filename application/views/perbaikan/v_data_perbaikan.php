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
    <h1>Data Perbaikan Aset</h1>
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
  <strong>Sukses !</strong> Edit Perbaikan Berhasil
</div> 
<?php endif; ?>
        
<?php if($this->session->flashdata('hapus') == TRUE):?>
	<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
  <strong>Sukses !</strong> Hapus Perbaikan berhasil
</div> 
<?php endif; ?>
  </section>

</form>
	
	
	<br>
    <div class="col-md-12">
    <div class="box box-danger">
    <div class="box-header with-border">


    </div>
    <form action="<?=site_url('print_laporan/cetak_pelanggan')?>" class="form-horizontal" method="post">
    <div class="box-body">
    <table class="table table-striped table-bordered data">
    <thead>
	
<tr>
	<th width="1%">NO.</th>
	<th><i class="fa fa-address-book"></i> Deskripsi</th>
	<th><i class="fa fa-car"></i> Nama Aset</th>
  <th><i class="fa fa-home"></i> Zona</th>
  <th><i class="fa fa-calendar"></i> Tgl Awal</th>
  <th><i class="fa fa-calendar-check-o"></i> TGL Akhir</th>
	<th><i class="fa fa-money"></i> Biaya</th>
  <th><i class="fa fa-handshake-o"></i> Teknisi</th>
  <th><i class="fa fa-check"></i> Status</th>
  <th><i class="fa fa-gears"></i> Aksi</th>
 
  
</tr>
</thead>
<?php 
                  $no=0;
                    foreach ($data->result_array() as $sws):
                        $no++;
                        $id_perbaikan=$sws['id_perbaikan'];
                        $deskripsi=$sws['deskripsi'];
                        $nama_aset=$sws['nama_aset'];
                        $zona=$sws['zona'];
                        $tgl_awal=$sws['tgl_awal'];
                        $tgl_akhir=$sws['tgl_akhir'];
                        $biaya=$sws['biaya'];
                        $teknisi=$sws['teknisi'];
                        $status=$sws['status'];
            
                ?>
<tr>
	<td><?php echo $no;?></td>
	<td><?php echo $deskripsi;?></td>
	<td><?php echo $nama_aset;?></td>
  <td><?php echo $zona;?></td>
	<td><?php echo $tgl_awal;?></td>
  <td><?php echo $tgl_akhir;?></td>
  <td><?php echo "Rp. ".number_format($biaya, 0, ".", ".");?></td>
  <td><?php echo $teknisi;?></td>
  <td><?php if($status=="SELESAI"){
    echo '<span class="btn-sm btn-success"><i class="fa fa-check"></i> SELESAI</span>';
  }
  else {
 if($status=="GAGAL"){
  echo '<span class="btn-sm btn-danger"><i class="fa fa-close"></i> GAGAL</span>';
 }
 else{
  echo '<span class="btn-sm btn-primary"><i class="fa fa-clock-o"></i> PROSES</span>';
 }
  }
  ?></td>
 
    
    <td><center><a class="btn btn-sm btn-warning" href="#editpelanggan<?php echo $id_perbaikan?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span> Edit</a>
    <a class="btn btn-sm btn-danger" href="#hapus<?php echo $id_perbaikan?>" data-toggle="modal" title="Edit"><span class="fa fa-trash"></span> Hapus</a>
    <?php echo anchor ('piutang/detail_piutang_agen/'.$id_perbaikan, ' <div class="btn bg-blue btn-sm"><i class ="fa fa-search"> Detail</i></div>')?></td>
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
                      
                    $id_perbaikan=$sws['id_perbaikan'];
    
              ?>
               <div id="hapus<?php echo $id_perbaikan?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel"><i class="fa fa-trash"></i> Hapus Data Perbaikan Ini ?</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'perbaikan/hapus_perbaikan'?>">
                        <div class="modal-body">
                           
                            <br>
                                   <input name="id_perbaikan" type="hidden" value="<?php echo $id_perbaikan; ?>"> 
                                    <input class="form-control" name="nama"value="Nama Aset : <?php echo $nama_aset; ?>" readonly>
                                    <br>
                                    <input class="form-control" name="nama"value="Deskripsi : <?php echo $deskripsi; ?>" readonly>
                                    <br>
                                
                                   
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
                      $id_perbaikan=$sws['id_perbaikan'];
                      $deskripsi=$sws['deskripsi'];
                      $nama_aset=$sws['nama_aset'];
                      $zona=$sws['zona'];
                      $tgl_awal=$sws['tgl_awal'];
                      $tgl_akhir=$sws['tgl_akhir'];
                      $biaya=$sws['biaya'];
                      $teknisi=$sws['teknisi'];
                      $status=$sws['status'];
						
                ?>

<div class="modal fade" id="editpelanggan<?php echo $id_perbaikan;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel"><i class="fa fa-key"></i> Ubah Data Perbaikan</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="<?php echo base_url().'perbaikan/edit_perbaikan'; ?>">
      <div class="modal-body">
      
    
		<div class="form-group">
        
    <input type="text" value="<?php echo $id_perbaikan?>" name="id_perbaikan" hidden>
		<label>Nama Aset</label>
		<input type="text" value="<?php echo $nama_aset?>" name="nama_aset" class="form-control" required>
		<label>Deskripsi</label>
		<input type="text" value="<?php echo $deskripsi?>" name="deskripsi" class="form-control" required>
		<label>Tanggal Awal</label>
		<input type="date" value="<?php echo $tgl_awal?>" name="tgl_awal" class="form-control"required>
    <label>Tanggal Akhir</label>
		<input type="date" value="<?php echo $tgl_akhir?>" name="tgl_akhir" class="form-control"required>
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
                    <option value="SELESAI">SELESAI</option>
                    <option value="PROSES">PROSES</option>
                      </select>

               
	
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
