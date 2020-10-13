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
  
    <br>
  <?php
  $id_kegiatan;
  $kegiatan;
  $waktu_kegiatan;
  $output;
  $waktu_kegiatan2;
  $file;
                   foreach ($kegiatan->result_array() as $sws){
                    $id_kegiatan=$sws['id_kegiatan'];
                    $kegiatan=$sws['kegiatan'];
                    $waktu_kegiatan=$sws['waktu_kegiatan'];
                    $output=$sws['output'];
                    $waktu_kegiatan2=$sws['waktu_kegiatan2'];
                    $file=$sws['FILE'];
                   }?>
    <?php if($this->session->flashdata('berhasil') == TRUE):?>
	<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
  <strong>Sukses !</strong> Detail Kegiatan Berhasil di tambahkan
</div> 
<?php endif; ?>

<?php if($this->session->flashdata('edit') == TRUE):?>
	<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
  <strong>Sukses !</strong> Edit Detail Kegiatan berhasil di edit
</div> 
<?php endif; ?>
        
<?php if($this->session->flashdata('hapus') == TRUE):?>
	<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
  <strong>Sukses !</strong> Hapus Detail Kegiatan
</div> 
<?php endif; ?>
  </section>
  <section class="content">
  <div class="callout callout-info">
                <h4><i class="fa fa-edit"></i> Halaman Tambah, Edit Uraian Kegiatan</h4>
              </div>
              <br>
              <a href="<?php echo base_url()."kegiatan/list_kegiatan/".$bulan."/".$tahun?>"><div class="btn btn-lg btn-success">< Kembali</div></a>
             
              <form method="post" enctype="multipart/form-data" action="<?php echo base_url().'kegiatan/proses_edit_kegiatan'?>">
<br>
<input type="hidden" name="bulan" value="<?php echo $bulan?>">
        <input type="hidden" name="tahun" value="<?php echo $tahun?>">
  <div class="row">
          <div class="col-md-9">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-calendar"></i> Kegiatan</h3>
              </div>
             
                <div class="box-body">
             <input type="hidden" name="id_kegiatan" value="<?php echo $id_kegiatan;?>">
   <label>Kegiatan</label>
   <div class="input-group col-lg-12">
    <div class="input-group-addon">
           <span class="fa fa-wrench"></span>
       </div>
       <input type="text" placeholder="Misal: Koordinasi terkait..." class="form-control" name="kegiatan" id="kegiatanc" autocomplete="off"   value="<?php   
                echo $kegiatan; 
                  ?>">
   </div>

   <label>Waktu Kegiatan</label>
   <div class="input-group col-lg-12">
    <div class="input-group-addon">
           <span class="fa fa-calendar"></span>
       </div>
       <input type="date" class="form-control" name="waktu_kegiatan" id="waktu_kegiatan" autocomplete="off" value="<?php echo $waktu_kegiatan;?>" required>
       <div class="input-group-addon">
           <span>Hingga</span>
       </div>
       <input type="date" class="form-control" name="waktu_kegiatan2" id="waktu_kegiatan" autocomplete="off" value="<?php if($waktu_kegiatan2=="0000-00-00"){}else{echo $waktu_kegiatan2;};?>">
   </div>

   <label>Sasaran / Output</label>
   <div class="input-group col-lg-12">
    <div class="input-group-addon">
           <span class="fa fa-circle-o"></span>
       </div>
       <input type="text" class="form-control" name="output" id="output" autocomplete="off" value="<?php echo $output;?>" >
   </div>
   <label>Foto Dokumentasi (Kosongkan Apabila tidak di ganti)</label>
   <div class="input-group col-lg-12">
    <div class="input-group-addon">
           <span class="fa fa-camera"></span>
       </div>
       <input type="file" class="form-control" name="picture" id="picture" autocomplete="off">
   </div>
   <br>
   <p align="center"><a href="<?php echo base_url('assets/uploads/dokumentasi/').$file ?>"> <img src="<?php echo base_url('assets/uploads/dokumentasi/').$file ?>" alt="<?php echo $file;?>" height="100px"></a></p>
    <br>
    <center><button type="submit" value="simpan" class="btn btn-success">SIMPAN</button></center>
                        </div>
                </div>
            </div>
            </form>
            <div class="col-md-12">
    <div class="box box-primary">
    <div class="box-header with-border">
    <h3 class="text-center">Uraian Kegiatan</h3>
<p align="right">
     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle"></i> Tambah Uraian Kegiatan</button>
     </p>
     

    </div>
    <form action="<?=site_url('print_laporan/cetak_pelanggan')?>" class="form-horizontal" method="post">
    <div class="box-body">
    
    <table class="table table-striped table-bordered data" style="width:100%">
    <thead>
	
<tr>

	<th>NO.</th>
  <th><i class="fa fa-gears"></i> Aksi</th>
    <th><i class="fa fa-wrench"></i> Uraian Kegiatan</th>
	<th><i class="fa fa-calendar"></i> Kendala</th>
	<th><i class="fa fa-download"></i> Tindakan Lanjut</th>
  <th><i class="fa fa-sticky-note"></i> Keterangan</th>
  <th><i class="fa fa-check-circle-o"></i> Indikator</th>
    <th><i class="fa fa-user-circle"></i> Penanggung Jawab</th>
    <th><i class="fa fa-user-circle"></i> Penanggung Jawab2</th>
    <th><i class="fa fa-user-circle"></i> Penanggung Jawab3</th>
    <th><i class="fa fa-user-circle"></i> Penanggung Jawab4</th>
    <th><i class="fa fa-user-circle"></i> Penanggung Jawab5</th>
    <th><i class="fa fa-user-circle"></i> Penanggung Jawab6</th>
  
</tr>
</thead>
<tbody>
<?php 
                  $no=0;
                    foreach ($detail->result_array() as $sws):
                      $no++;
                      $id_detail_kegiatan=$sws['id_detail_kegiatan'];
                      $id_kegiatan=$sws['id_kegiatan'];
                      $uraian_kegiatan=$sws['uraian_kegiatan'];
                      $kendala=$sws['kendala'];
                      $tindakan_lanjut=$sws['tindakan_lanjut'];
                      $penanggung_jawab=$sws['penanggung_jawab'];
                      $penanggung_jawab2=$sws['penanggung_jawab2'];
                      $penanggung_jawab3=$sws['penanggung_jawab3'];
                      $penanggung_jawab4=$sws['penanggung_jawab4'];
                      $penanggung_jawab5=$sws['penanggung_jawab5'];
                      $penanggung_jawab6=$sws['penanggung_jawab6'];
                      $keterangan=$sws['keterangan'];    
                      $indikator=$sws['indikator'];    
                        
                        
                ?>
<tr>
	<td><?php echo $no;?></td>
  <td><a class="btn btn-sm btn-danger" href="#hapus<?php echo $id_detail_kegiatan?>" data-toggle="modal" title="Hapus"><span class="fa fa-trash"></span> Hapus</a> <a class="btn btn-sm btn-warning" href="#editpelanggan<?php echo $id_detail_kegiatan?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span> Edit</a></td>
	<td><?php echo $uraian_kegiatan;?></td>
  <td><?php echo $kendala;?></td>
  <td><?php echo $tindakan_lanjut;?></td>
  <td><?php echo $keterangan;?></td>
  <td><?php echo $indikator;?></td>
  <td><?php echo $penanggung_jawab;?></td>
  <td><?php echo $penanggung_jawab2;?></td>
  <td><?php echo $penanggung_jawab3;?></td>
  <td><?php echo $penanggung_jawab4;?></td>
  <td><?php echo $penanggung_jawab5;?></td>
  <td><?php echo $penanggung_jawab6;?></td>
  
	</center>
	
		
</tr>
<?php endforeach; ?>
</tbody>
  </table>



</div>


</form>

 



<br>

</div>
</div>         
            
</div>





</div>
       

  </section>
  <?php 
                  
                  foreach ($detail->result_array() as $sws){
                    $id_detail_kegiatan=$sws['id_detail_kegiatan'];
                    $id_kegiatan=$sws['id_kegiatan'];
                    $uraian_kegiatan=$sws['uraian_kegiatan'];
                    $kendala=$sws['kendala'];
                    $tindakan_lanjut=$sws['tindakan_lanjut'];
                    $penanggung_jawab=$sws['penanggung_jawab'];
                    $penanggung_jawab2=$sws['penanggung_jawab2'];
                    $penanggung_jawab3=$sws['penanggung_jawab3'];
                    $penanggung_jawab4=$sws['penanggung_jawab4'];
                    $penanggung_jawab5=$sws['penanggung_jawab5'];
                    $penanggung_jawab6=$sws['penanggung_jawab6'];
                    $keterangan=$sws['keterangan'];    
                    $indikator=$sws['indikator'];
                    
              ?>
               <div id="hapus<?php echo $id_detail_kegiatan?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel"><i class="fa fa-trash"></i> Hapus Data Uraian Kegiatan Ini ?</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'kegiatan/hapus_detail_kegiatan'?>">
                        <div class="modal-body">
                        <input type="hidden" name="bulan" value="<?php echo $bulan?>">
        <input type="hidden" name="tahun" value="<?php echo $tahun?>">
                            <br>
                                   <input name="id_detail_kegiatan" type="hidden" value="<?php echo $id_detail_kegiatan; ?>"> 
                                   <input name="id_kegiatan" type="hidden" value="<?php echo $id_kegiatan; ?>"> 
                                    <input class="form-control" name="nama"value="Uraian Kegiatan : <?php echo $uraian_kegiatan; ?>" readonly>
                                    <br>
                                    <input class="form-control" name="nama"value="Kendala : <?php echo $kendala; ?>" readonly>
                                    <br>
                                    <input class="form-control" name="nama"value="Tindakan Lanjut : <?php echo $tindakan_lanjut; ?>" readonly>
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

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel"><i class="fa fa-plus"></i> Tambah Uraian Kegiatan</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form autocomplete="off" method="post" action="<?php echo base_url().'kegiatan/tambah_detail_kegiatan'; ?>">
		<div class="form-group">
    <input type="hidden" name="bulan" value="<?php echo $bulan?>">
        <input type="hidden" name="tahun" value="<?php echo $tahun?>">
    <input type="hidden" name="id_kegiatan" class="form-control" value="<?php echo $id_kegiatan;?>">
    <label><i class="fa fa-list"></i> Uraian Kegiatan</label>
    <div class="input-group col-lg-8">
		<textarea rows="3" type="text" name="uraian_kegiatan" class="form-control" required></textarea>
    </div>

    <label><i class="fa fa-window-close-o"></i> Kendala</label>
    <div class="input-group col-lg-8">
		<input type="text" name="kendala" class="form-control" required>
    </div>

    <label><i class="fa fa-wrench"></i> Tindak Lanjut yang di Perlukan</label>
    <div class="input-group col-lg-8">
		<input type="text" name="tindak_lanjut"class="form-control" required>
    </div>

    <label><i class="fa fa-percent"></i> Indikator</label>
    <div class="input-group col-lg-8">
		<select name="indikator" class="form-control" required>
    <option selected="true" disabled="disabled">-- Pilih Indikator --</option>  
    <option value="100%">100%</option>
    <option value="90%">90%</option>
    <option value="80%">80%</option>
    <option value="70%">70%</option>
    <option value="60%">60%</option>
    <option value="50%">50%</option>
    <option value="40%">40%</option>
    <option value="30%">30%</option>
    <option value="20%">20%</option>
    <option value="10%">10%</option>
    <option value="0%">0%</option>
    </select>
    </div>
    
    <label> <i class="fa fa-user-circle"></i> Penanggung Jawab</label>
    <div class="input-group col-lg-8">
    <select name="penanggung_jawab" class="form-control">
       <option selected="true" disabled="disabled">-- Pilih Penanggung Jawab --</option>  
    <option value="Kepala Divisi Produksi">Kepala Divisi Produksi</>
    <option value="Kasub.Div Kualitas Air">Kasub.Div Kualitas Air</option>
    <option value="Kasub.Div Pengendalian Air Baku">Kasub.Div Pengendalian Air Baku</option>
    <option value="Kasub.Div Pengadaan">Kasub.Div Pengadaan</option>
    <option value="Kepala Divisi Trandist">Kepala Divisi Trandis</option>
    <option value="Kepala Divisi Umum">Kepala Divisi Umum</option>
    <option value="Kepala Divisi Litbang">Kepala Divisi Litbang</option>
    </select>
    </div>
    <label> <i class="fa fa-user-circle"></i> Penanggung Jawab 2</label>
    <div class="input-group col-lg-8">
    <select name="penanggung_jawab2" class="form-control">
    <option selected="true" disabled="disabled">-- Pilih Penanggung Jawab --</option>  
    <option value="Kepala Divisi Produksi">Kepala Divisi Produksi</>
    <option value="Kasub.Div Kualitas Air">Kasub.Div Kualitas Air</option>
    <option value="Kasub.Div Pengendalian Air Baku">Kasub.Div Pengendalian Air Baku</option>
    <option value="Kasub.Div Pengadaan">Kasub.Div Pengadaan</option>
    <option value="Kepala Divisi Trandist">Kepala Divisi Trandis</option>
    <option value="Kepala Divisi Umum">Kepala Divisi Umum</option>
    <option value="Kepala Divisi Litbang">Kepala Divisi Litbang</option>
    </select>
    </div>
    <label> <i class="fa fa-user-circle"></i> Penanggung Jawab3</label>
    <div class="input-group col-lg-8">
    <select name="penanggung_jawab3" class="form-control">
       <option selected="true" disabled="disabled">-- Pilih Penanggung Jawab --</option>  
    <option value="Kepala Divisi Produksi">Kepala Divisi Produksi</>
    <option value="Kasub.Div Kualitas Air">Kasub.Div Kualitas Air</option>
    <option value="Kasub.Div Pengendalian Air Baku">Kasub.Div Pengendalian Air Baku</option>
    <option value="Kasub.Div Pengadaan">Kasub.Div Pengadaan</option>
    <option value="Kepala Divisi Trandist">Kepala Divisi Trandis</option>
    <option value="Kepala Divisi Umum">Kepala Divisi Umum</option>
    <option value="Kepala Divisi Litbang">Kepala Divisi Litbang</option>
    </select>
    </div>
    <label> <i class="fa fa-user-circle"></i> Penanggung Jawab4</label>
    <div class="input-group col-lg-8">
    <input type="text" name="penanggung_jawab4" class="form-control">
    </div>
    <label> <i class="fa fa-user-circle"></i> Penanggung Jawab5</label>
    <div class="input-group col-lg-8">
    <input type="text" name="penanggung_jawab5" class="form-control">
    </div>
    <label> <i class="fa fa-user-circle"></i> Penanggung Jawab6</label>
    <div class="input-group col-lg-8">
    <input type="text" name="penanggung_jawab6" class="form-control">
    </div>
    <label> <i class="fa fa-sticky-note"></i> Keterangan</label>
    <div class="input-group col-lg-8">
    <input type="text" name="keterangan" class="form-control">
    </div>
    
   
        <br>

<br>

      </div>
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
                 
                    foreach ($detail->result_array() as $sws){
                      $id_detail_kegiatan=$sws['id_detail_kegiatan'];
                      $id_kegiatan=$sws['id_kegiatan'];
                      $uraian_kegiatan=$sws['uraian_kegiatan'];
                      $kendala=$sws['kendala'];
                      $tindakan_lanjut=$sws['tindakan_lanjut'];
                      $penanggung_jawab=$sws['penanggung_jawab'];
                      $penanggung_jawab2=$sws['penanggung_jawab2'];
                      $penanggung_jawab3=$sws['penanggung_jawab3'];
                      $penanggung_jawab4=$sws['penanggung_jawab4'];
                      $penanggung_jawab5=$sws['penanggung_jawab5'];
                      $penanggung_jawab6=$sws['penanggung_jawab6'];
                      $keterangan=$sws['keterangan'];    
                      $indikator=$sws['indikator'];    
                        
						
                ?>

<div class="modal fade" id="editpelanggan<?php echo $id_detail_kegiatan;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel"><i class="fa fa-pencil"></i> Ubah Data Detail Kegiatan</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="<?php echo base_url().'kegiatan/edit_detail_kegiatan'; ?>">
      <div class="modal-body">
      
    
			<div class="form-group">
      <input type="hidden" name="bulan" value="<?php echo $bulan?>">
        <input type="hidden" name="tahun" value="<?php echo $tahun?>">
      <input type="hidden" name="id_kegiatan" class="form-control" value="<?php echo $id_kegiatan;?>">
    <input type="hidden" name="id_detail_kegiatan" class="form-control" value="<?php echo $id_detail_kegiatan;?>">
    <label><i class="fa fa-list"></i> Uraian Kegiatan</label>
    <div class="input-group col-lg-12">
		<textarea rows="3" name="uraian_kegiatan" class="form-control"><?php echo $uraian_kegiatan;?></textarea>
    </div>

    <label><i class="fa fa-window-close-o"></i> Kendala</label>
    <div class="input-group col-lg-12">
		<input type="text" name="kendala" class="form-control" value="<?php echo $kendala;?>" required>
    </div>

    <label><i class="fa fa-wrench"></i> Tindak Lanjut yang di Perlukan</label>
    <div class="input-group col-lg-12">
		<input type="text" name="tindak_lanjut"class="form-control" value="<?php echo $tindakan_lanjut;?>" required>
    </div>

    <label><i class="fa fa-percent"></i> Indikator</label>
    <div class="input-group col-lg-8">
		<select name="indikator" class="form-control" required>
    <option value="100%">100%</option>
    <option value="90%">90%</option>
    <option value="80%">80%</option>
    <option value="70%">70%</option>
    <option value="60%">60%</option>
    <option value="50%">50%</option>
    <option value="40%">40%</option>
    <option value="30%">30%</option>
    <option value="20%">20%</option>
    <option value="10%">10%</option>
    <option value="0%">0%</option>
    </select>
    </div>
    
    <label> <i class="fa fa-user-circle"></i> Penanggung Jawab</label>
    <div class="input-group col-lg-12">
    <input type="text" name="penanggung_jawab" class="form-control" value="<?php echo $penanggung_jawab;?>" required>
    </div>
    <label> <i class="fa fa-user-circle"></i> Penanggung Jawab 2</label>
    <div class="input-group col-lg-12">
    <input type="text" name="penanggung_jawab2" class="form-control" value="<?php echo $penanggung_jawab2;?>" >
    </div>
    <label> <i class="fa fa-user-circle"></i> Penanggung Jawab3</label>
    <div class="input-group col-lg-12">
    <input type="text" name="penanggung_jawab3" class="form-control" value="<?php echo $penanggung_jawab3;?>" >
    </div>
    <label> <i class="fa fa-user-circle"></i> Penanggung Jawab4</label>
    <div class="input-group col-lg-12">
    <input type="text" name="penanggung_jawab4" class="form-control" value="<?php echo $penanggung_jawab4;?>">
    </div>
    <label> <i class="fa fa-user-circle"></i> Penanggung Jawab5</label>
    <div class="input-group col-lg-12">
    <input type="text" name="penanggung_jawab5" class="form-control" value="<?php echo $penanggung_jawab5;?>">
    </div>
    <label> <i class="fa fa-user-circle"></i> Penanggung Jawab6</label>
    <div class="input-group col-lg-12">
    <input type="text" name="penanggung_jawab6" class="form-control" value="<?php echo $penanggung_jawab6;?>">
    </div>
    <label> <i class="fa fa-sticky-note"></i> Keterangan</label>
    <div class="input-group col-lg-12">
    <input type="text" name="keterangan" class="form-control" value="<?php echo $keterangan;?>">
    </div>
   
        <br>

<br>

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


<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> Prototype
  </div>
  <strong>Copyright &copy; 2019 <a href="https://adminlte.io">Exitus</a>.</strong> All rights
  reserved.
</footer>
<script type="text/javascript">
	$(document).ready(function(){
		$('.data').DataTable({
      "scrollX": true
    });
  
	});
</script>

<div class="control-sidebar-bg"></div>
</div>
<script src="<?php echo base_url('assets/template/back/bower_components') ?>/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/template/back/bower_components') ?>/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url('assets/template/back/dist') ?>/js/adminlte.min.js"></script>
</body>

</html>
