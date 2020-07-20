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
  <strong>Sukses !</strong> Penambahan Zona Berhasil
</div> 
<?php endif; ?>

<?php if($this->session->flashdata('edit') == TRUE):?>
	<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
  <strong>Sukses !</strong> Edit Zona Berhasil
</div> 
<?php endif; ?>
        
<?php if($this->session->flashdata('hapus') == TRUE):?>
	<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
  <strong>Sukses !</strong> Hapus Zona berhasil
</div> 
<?php endif; ?>
  </section>
  <section class="content">
  <div class="callout callout-success">
                <h4><i class="fa fa-plus"></i> Halaman Tambah Kegiatan</h4>
              </div>
              <br>
<form id="kegiatan">
  <div class="container">      
  <div class="row">
          <div class="col-md-9">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-calendar"></i> Kegiatan</h3>
              </div>
             
                <div class="box-body">
             
   <label>Kegiatan</label>
   <div class="input-group col-lg-12">
    <div class="input-group-addon">
           <span class="fa fa-wrench"></span>
       </div>
       <input type="text" placeholder="Misal: Koordinasi terkait..." class="form-control" name="kegiatan" id="kegiatanc" autocomplete="off" required>
   </div>

   <label>Waktu Kegiatan</label>
   <div class="input-group col-lg-12">
    <div class="input-group-addon">
           <span class="fa fa-calendar"></span>
       </div>
       <input type="date" class="form-control" name="waktu_kegiatan" id="waktu_kegiatan" autocomplete="off" required>
   </div>

   <label>Sasaran / Output</label>
   <div class="input-group col-lg-12">
    <div class="input-group-addon">
           <span class="fa fa-circle-o"></span>
       </div>
       <input type="text" class="form-control" name="output" id="output" autocomplete="off" required>
   </div>
    <br>
                        </div>
                </div>
            </div>
            </form>
            <form id="deskripsi">
            <div id="dynamic_field" class="col-md-9">
            <div class="box box-info">
              <div class="box-header with-border">
                <div class="row">
                  <div class="col-md-3"><h3 class="box-title">(1) Deskripsi Kegiatan</h3></div>
                  <div class="col-md-3 pull-right"><p align="right"><button type="button" id="add" name="add" class="btn btn-success">+</button></p></div>
                </div>
                
             
              </div>
                <div class="box-body">
<label>Uraian Kegiatan</label>
    <div class="input-group col-lg-12">
    <textarea class="form-control" rows="3" name="uraian_kegiatan[]" id="uraian_kegiatan" placeholder="Misal: Koordinasi Terkait jalur pipa..."></textarea>
    </div>
<label>Kendala</label>
    <div class="input-group col-lg-12">
    <input type="text" class="form-control" name="kendala[]" value="-" required>
    </div>
    <label>Tindak Lanjut Yang di Perlukan</label>
    <div class="input-group col-lg-12">
    <input type="text" class="form-control" name="tindak_lanjut[]" value="-" required>
    </div>
    <label>Indikator Hasil Utama</label>
    <div class="input-group col-lg-12">

    <select name="indikator[]" id="tahun" class="form-control" required>
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
  <label>Penanggung Jawab</label> 
  <div class="row">
    <div class="col-sm-6">
  <div class="input-group">
     <div class="input-group-addon">
          1.
       </div>
       <select name="penanggung_jawab[]" id="tahun" class="form-control" required>
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
</div>
<div class="col-sm-6">
    <div class="input-group">
     <div class="input-group-addon">
          2.
       </div>
       <select name="penanggung_jawab2[]" id="tahun" class="form-control">
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
    </div>
</div>
<br>
<div class="row">
    <div class="col-sm-6">
  <div class="input-group">
     <div class="input-group-addon">
          3.
       </div>
       <select name="penanggung_jawab3[]" id="tahun" class="form-control">
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
</div>
<div class="col-sm-6">
    <div class="input-group">
     <div class="input-group-addon">
          4.
       </div>
       <select name="penanggung_jawab4[]" id="tahun" class="form-control">
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
    </div>
</div>
<br>
<div class="row">
    <div class="col-sm-6">
  <div class="input-group">
     <div class="input-group-addon">
          5.
       </div>
     <input type="text" name="penanggung_jawab5[]" class="form-control" placeholder="Misal:Kepala Divisi Produksi">
    </div>
</div>
<div class="col-sm-6">
    <div class="input-group">
     <div class="input-group-addon">
          6.
       </div>
      <input type="text" name="penanggung_jawab6[]" class="form-control" placeholder="Misal:Kasubdiv Kualitas Air">
    </div>
    </div>
</div>
<label>Keterangan</label>
    <div class="input-group col-lg-12">
    <input type="text" class="form-control" name="keterangan[]" value="-" required>
    </div>

                </div>
            </div>
</div>
</div>
</form>
          <div class="col-sm-9">
 
  <div id="loading">
  <p align="center"><i class="fa fa-refresh fa-spin"></i></p>
          </div>
         
          <div id="button">
          <p align="center"><input type="button" name="submit" id="submit" class="btn btn-success" value="SIMPAN"></input></p>
          </div>
  
 
  </div>
</div>



</div>
       
</form>
  </section>
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
<script>  
 $(document).ready(function(){  
  var i=1;  
  $('#loading').hide();
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<div id="row'+i+'" class="box box-info"><div class="box-header with-border"><div class="row"><div class="col-md-3"><h3 class="box-title">('+i+') Deskripsi Kegiatan</h3></div><div class="col-md-3 pull-right"><p align="right"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></p></div></div></div><div class="box-body"><label>Uraian Kegiatan</label><div class="input-group col-lg-12"><textarea class="form-control" name="uraian_kegiatan[]" rows="3" placeholder="Misal: Koordinasi Terkait jalur pipa..."></textarea></div><label>Kendala</label><div class="input-group col-lg-12"><input type="text" class="form-control" name="kendala[]" value="-" required></div><label>Tindak Lanjut Yang di Perlukan</label><div class="input-group col-lg-12"><input type="text" class="form-control" name="tindak_lanjut[]" value="-" required></div><label>Indikator Hasil Utama</label><div class="input-group col-lg-12"><select name="indikator[]" class="form-control" required><option value="100%">100%</option><option value="90%">90%</option><option value="80%">80%</option><option value="70%">70%</option><option value="60%">60%</option><option value="50%">50%</option><option value="40%">40%</option><option value="30%">30%</option><option value="20%">20%</option><option value="10%">10%</option><option value="0%">0%</option></select></div><label>Penanggung Jawab</label> <div class="row"><div class="col-sm-6"><div class="input-group"><div class="input-group-addon">1.</div><input type="text" name="penanggung_jawab[]" class="form-control" placeholder="Misal:Kepala Divisi Produksi" required></div></div><div class="col-sm-6"><div class="input-group"><div class="input-group-addon">2.</div><input type="text" name="penanggung_jawab2[]" class="form-control" placeholder="Misal:Kasubdiv Kualitas Air"></div></div></div><br><div class="row"><div class="col-sm-6"><div class="input-group"><div class="input-group-addon">3.</div><input type="text" name="penanggung_jawab3[]" class="form-control" placeholder="Misal:Kepala Divisi Produksi"></div></div><div class="col-sm-6"><div class="input-group"><div class="input-group-addon">4.</div><input type="text" name="penanggung_jawab4[]" class="form-control" placeholder="Misal:Kasubdiv Kualitas Air"></div></div></div><br><div class="row"><div class="col-sm-6"><div class="input-group"><div class="input-group-addon">5.</div><input type="text" name="penanggung_jawab5[]" class="form-control" placeholder="Misal:Kepala Divisi Produksi"></div></div><div class="col-sm-6"><div class="input-group"><div class="input-group-addon">6.</div><input type="text" name="penanggung_jawab6[]" class="form-control" placeholder="Misal:Kasubdiv Kualitas Air"></div></div></div><label>Keterangan</label><div class="input-group col-lg-12"><input type="text" class="form-control" name="keterangan[]" value="-" required></div></div></div></div>');  
      });  
      $(document).on('click', '.btn_remove', function(){
        i--;  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      }); 
      $('#submit').click(function(){
        var kegiatan = $("#kegiatanc").val();
        var waktu =$("#waktu_kegiatan").val();
        var output = $("#output").val();
        var uraian = $("#uraian_kegiatan").val();
        var penanggung_jawab = $("#penanggung_jawab").val();
        if (kegiatan == "") {
		alert("Kegiatan Belum di Isi");
		return false;
	}
  else if(waktu=="") {
		alert("Waktu Belum di Isi");
		return false;
	}
  else if(output=="") {
		alert("Sasaran/Output Belum di Isi");
		return false;
	}
  else if(uraian=="") {
		alert("Uraian Kegiatan Belum Di isi");
		return false;
	}
  else if(penanggung_jawab=="") {
		alert("Masukan Minimal 1 Penanggung Jawab");
		return false;
	}
  else{

        $('#button').hide();
        $('#loading').show();
          $.ajax({  
              url:"<?php echo base_url().'kegiatan/insert_kegiatan' ?>", 
                method:"POST",  
                data:$('#kegiatan, #deskripsi').serialize(),  
                success:function(data)  
                {  
                  swal("Success!", "Tambah Kegiatan Berhasil", "success");
                  $('#kegiatan')[0].reset(); 
                  $('#deskripsi')[0].reset();   
                  $('#loading').hide();
                  $('#button').show();
                }  
           });  
          }

      }); 
    });
    </script>
</body>

</html>
