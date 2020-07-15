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
    <?php if($this->session->flashdata('berhasil') == TRUE):?>
	<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
  <strong>Sukses !</strong> Penambahan Data Berhasil
</div> 
<?php endif; ?>

<?php if($this->session->flashdata('edit') == TRUE):?>
	<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
  <strong>Sukses !</strong> Edit Data Berhasil
</div> 
<?php endif; ?>
        
<?php if($this->session->flashdata('hapus') == TRUE):?>
	<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
  <strong>Sukses !</strong> Hapus Data berhasil
</div> 
<?php endif; ?>
  </section>

</form>

	
	<br>
    <div class="col-md-12">
    <div class="box box-primary">
    <div class="box-header with-border">
  <label><?php echo $bulan." ".$tahun?></label>
<p align="right">
     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle"></i> Tambah Data</button>
     </p>
     

    </div>
    <form action="<?=site_url('print_laporan/cetak_pelanggan')?>" class="form-horizontal" method="post">
    <div class="box-body">
    <table class="table table-striped table-bordered data">
    <thead>
	
<tr>

	<th width="1%">NO.</th>
    <th width="24%"><i class="fa fa-wrench"></i> Kegiatan</th>
	<th width="16%"><i class="fa fa-calendar"></i> Waktu Kegiatan</th>
	<th width="16%" ><i class="fa fa-check-circle-o"></i> Sasaran/Output</th>
    <th width="10%" ><i class="fa fa-search"></i> Lihat</th>
  <th width="16%"><i class="fa fa-gears"></i> Aksi</th>

  
</tr>
</thead>
<?php 
                  $no=0;
                    foreach ($data->result_array() as $sws):
                        $no++;
                        $id_kegiatan=$sws['id_kegiatan'];
                        $kegiatan=$sws['kegiatan'];
                        $waktu_kegiatan=$sws['waktu_kegiatan'];
                        $output=$sws['output'];
                        
                        
                ?>
<tr>
	<td class="count"><?php echo $no;?></td>
	<td><?php echo $kegiatan;?></td>
  <td><?php echo $waktu_kegiatan;?></td>
  <td><?php echo $output;?></td>
  <td><center><?php echo anchor ('piutang/detail_piutang_agen/'.$id_kegiatan, ' <div class="btn bg-blue btn-sm"><i class ="fa fa-search"> Detail</i></div>')?></center></td>
    <td><center><a class="btn btn-sm btn-warning" href="#editpelanggan<?php echo $id_kegiatan?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span> Edit</a>
    <a class="btn btn-sm btn-danger" href="#hapus<?php echo $id_kegiatan?>" data-toggle="modal" title="Hapus"><span class="fa fa-trash"></span> Hapus</a></td>
	</center>
	
		
</tr>
<?php endforeach; ?>
  </table>



</div>


</form>

 



<br>
<?php 
                  
                  foreach ($data->result_array() as $sws){
                    $id_kegiatan=$sws['id_kegiatan'];
                        $kegiatan=$sws['kegiatan'];
                        $waktu_kegiatan=$sws['waktu_kegiatan'];
                        $output=$sws['output'];
                    
              ?>
               <div id="hapus<?php echo $id_kegiatan?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel"><i class="fa fa-trash"></i> Hapus Data Kegiatan Ini ?</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'kegiatan/hapus_kegiatan'?>">
                        <div class="modal-body">
                           
                            <br>
                            <input type="hidden" name="bulan" value="<?php echo $no_bulan?>">
        <input type="hidden" name="tahun" value="<?php echo $tahun?>">
                                   <input name="id_kegiatan" type="hidden" value="<?php echo $id_kegiatan; ?>"> 
                                    <input class="form-control" name="nama"value="Tanggal : <?php echo $waktu_kegiatan; ?>" readonly>
                                    <br>
                                    <input class="form-control" name="nama"value="Kegiatan : <?php echo $kegiatan; ?>" readonly>
                                    <br>
                                    <input class="form-control" name="nama"value="Output : <?php echo $output; ?>" readonly>
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
</div>
</div>
</div>
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
<script src="<?php echo base_url('assets/template/back/bower_components/moment/min/moment.min.js')?>"></script>
<script src="<?php echo base_url('assets/template/back/bower_components/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')?>"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/template/back/bower_components/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')?>">

</body>

</html>


<script>  
 $(document).ready(function(){  
  var count=0;
  var total_persentase=0;
  var total_jumlah_sample=0;
  var total_tms=0;
  var total_ms=0;
  $(".total_persentase").each(function(){
    total_persentase += parseInt($(this).text());
    count++;
    var final=total_persentase/count;
    $('#total_persentase2').html(final.toFixed(0)+" %");

});

$(".total_jumlah_sample").each(function(){
    total_jumlah_sample += parseInt($(this).text());
    $('#total_jumlah_sample2').html(total_jumlah_sample);

});

$(".total_tms").each(function(){
    total_tms += parseInt($(this).text());
    $('#total_tms2').html(total_tms);

});

$(".total_ms").each(function(){
    total_ms += parseInt($(this).text());
    $('#total_ms2').html(total_ms);

});

 });  
 </script>

<script>
 $(document).ready(function() {
             
                $('#ms1,#tms1').keyup(function(){
                var ms=parseInt($('#ms1').val());
                var tms=parseInt($('#tms1').val());
                var jumlah_sample=ms+tms;
                var persentase=ms/jumlah_sample*100;
                console.log(persentase);
                $('#jumlah_sample1').val(jumlah_sample);
                $('#persentase1').val(persentase.toFixed(0));
                });

            

            });
</script>
