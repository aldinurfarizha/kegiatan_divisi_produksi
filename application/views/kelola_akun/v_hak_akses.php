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
    <h1>Hak Akses</h1>
    </center>
    <br>
    <?php if($this->session->flashdata('berhasil') == TRUE):?>
	<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
  <strong>Sukses !</strong> Ubah Hak Akses Berhasil
</div> 
<?php endif; ?>
<br>
        
   
  </section>

</form>
	
	
	<br>
    <div class="col-md-12">
    <div class="box box-primary">
    <div class="box-header with-border">
  


    </div>
    <form class="form-horizontal">
    <div class="box-body">
		<table class="table">
	
<tr>
	<th>NO.</th>
    <th><i class="fa fa-user"></i> Nama Lengkap</th>
    <th><i class="fa fa-users"></i> Username</th>
	<th><i class="fa fa-eye"></i> Hak Akses</th>
	<th><center><i class="fa fa-gear"></i> Pilihan</center></th>
</tr>

<?php 
                  $no=0;
                    foreach ($data->result_array() as $sws):
                        $no++;
                        $id_user=$sws['id_user'];
                        $username=$sws['username'];
                        $nama_lengkap=$sws['nama_user'];
                       
                        $hakakses=$sws['hakakses'];
						
                ?>
<tr>
	<td><?php echo $no;?></td>
    <td><?php echo $nama_lengkap;?></td>
    <td><?php echo $username;?></td>
	
    <td><?php if ($hakakses==0){echo '<div class="btn btn-primary">Manager</div>' ;} else {if ($hakakses==1){echo '<div class="btn btn-warning">Personalia</div>' ;}else{if ($hakakses==2){echo '<div class="btn btn-success">Admin</div>' ;}else{echo '<div class="btn btn-default">Agen</div>' ;}}}?></td>
    <td><center><a class="btn btn-sm btn-warning" href="#exampleModal<?php echo $id_user?>" data-toggle="modal" title="Edit"><span class="fa fa-eye"></span> Ubah Hak Akses</a>

	</center>
	
		
</tr>
<?php endforeach; ?>
  </table>
</form>
</div>
  </div>
  </div>
  </div>
<!-- Modal -->
<?php 
                  $no=0;
                    foreach ($data->result_array() as $sws){
                        $no++;
                        $id_user=$sws['id_user'];
                        $username=$sws['username'];
                        $nama_lengkap=$sws['nama_user'];
                        $password=$sws['password'];
                        $hakakses=$sws['hakakses'];
						
                ?>

<div class="modal fade" id="exampleModal<?php echo $id_user;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel"><i class="fa fa-eye"></i> Ubah Hak Akses</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="<?php echo base_url().'kelola_akun/ubah_hak_akses'; ?>">
      <div class="modal-body">
      
    <center><label><h3><?php echo $nama_lengkap;?></h3></label></center>
		<div class="form-group">
        
                    <label for="inputEmail3" class="col-sm-2 control-label">Hak Akses</label>
                    <input name="user" value="<?php echo $id_user;?>" hidden>
                    <div class="col-sm-10">
                    <select class="form-control select2" name="hak" style="width: 100%;">
                
                        <option value="0">Manager</option>
                        <option value="1">Personalia</option>
                        <option value="2">Admin</option>
                        <option value="3">Agen</option>
                        
                      </select>
                    
                  </div>
               
	
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
  <?php $this->load->view('admin/footer') ?>
</body>
</html>
