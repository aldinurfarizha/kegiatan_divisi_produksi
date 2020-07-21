<style type="text/css" media="print">
@page {
    size: auto;   /* auto is the initial value */
    margin: 0;  /* this affects the margin in the printer settings */
}
</style>    
<body  onload="window.print()">                                                      
<center><h2>Rekapitulasi Laporan Kegiatan Bulanan Divisi Produksi PAM TIRTA KAMUNING KAB.KUNINGAN <br>Bulan <?php 
Switch ($bulan){
    case 1 : $bulan="JANUARI";
        Break;
    case 2 : $bulan="FEBRUARI";
        Break;
    case 3 : $bulan="MARET";
        Break;
    case 4 : $bulan="APRIL";
        Break;
    case 5 : $bulan="MEI";
        Break;
    case 6 : $bulan="JUNI";
        Break;
    case 7 : $bulan="JULI";
        Break;
    case 8 : $bulan="AGUSTUS";
        Break;
    case 9 : $bulan="SEPTEMBER";
        Break;
    case 10 : $bulan="OKTOBER";
        Break;
    case 11 : $bulan="NOVEMBER";
        Break;
    case 12 : $bulan="DESEMBER";
        Break;
    } echo $bulan." ".$tahun ;
                                                            ?></h2><br></center>
<table cellspacing="1" bgcolor="#666666" cellpadding="2">
<tr bgcolor="white">
    <th width="1%">No.</th>
    <th width="10%">KEGIATAN</th>
    <th width="5%">WAKTU KEGIATAN</th>
    <th width="10%">SASARAN/OUTPUT</th>
    <th width="1%"></th>
    <th width="25%">URAIAN KEGIATAN</th>
    <th width="10%">KENDALA</th>
    <th width="15%">TINDAK LANJUT YANG DI PERLUKAN</th>
    <th width="15%">PENANGGUNG JAWAB</th>
    <th width="3%">INDIKATOR HASIL UTAMA</th>
    <th width="3%">KETERANGAN</th>
</tr>
<?php

 
$no=1;
foreach($kegiatan->result_array() as $source1){ ?>
    <tr bgcolor="white" >
        <?php 
        $source2 = $this->db->query("select * from detail_kegiatan where id_kegiatan='$source1[id_kegiatan]'");
        $total_source2 = $source2->num_rows();
        $source3 = $source2->result_array();
        ?>
        <td rowspan="<?php echo $total_source2 ?>"><?php echo $no; ?></td>
        <td rowspan="<?php echo $total_source2 ?>"><?php echo $source1['kegiatan']; ?></td>
        <td rowspan="<?php echo $total_source2 ?>"><center><?php if($source1['waktu_kegiatan2']=="0000-00-00"){echo $source1['waktu_kegiatan'];}else{ echo $source1['waktu_kegiatan']." s/d ".$source1['waktu_kegiatan2'];} ?></center></td>
        <td rowspan="<?php echo $total_source2 ?>"><?php echo $source1['output']; ?></td>
        <?php $asad=0; foreach($source3 as $source3){ $asad++;?>
          <td bgcolor="white"><?php echo $asad.". ";?></td>
            <td bgcolor="white"><?php echo $source3['uraian_kegiatan'] ?></td>
            <td bgcolor="white"><?php echo $source3['kendala'] ?></td>
            <td bgcolor="white"><?php echo $source3['tindakan_lanjut'] ?></td>
            <td bgcolor="white"><?php if($source3['penanggung_jawab']!=null){ echo "-".$source3['penanggung_jawab'];} if($source3['penanggung_jawab2']!=null){ echo "<br>-".$source3['penanggung_jawab2'];} if($source3['penanggung_jawab3']!=null){ echo "<br>-".$source3['penanggung_jawab3'];} if($source3['penanggung_jawab4']!=null){ echo "<br>-".$source3['penanggung_jawab4'];} if($source3['penanggung_jawab5']!=null){ echo "<br>-".$source3['penanggung_jawab5'];} ?></td>
            <td bgcolor="white"><center><?php echo $source3['indikator'] ?></center></td>
            <td bgcolor="white"><?php echo $source3['keterangan'] ?></td>
        </tr>
    <?php } ?>
    <?php $no++; } ?>
</table>
<table width="100%">
<tr>
<br>
<th width="30%">Mengetahui: <br>Kepala Divisi Produksi</th>
<th width="34%">Di Periksa Oleh: <br>Kasub.Div Pengendalian Air Baku</th>
<th width="36%">Di Buat: <br> Pelaksana divisi Produksi</th>
</tr>
<br>
<br>
<th width="30%"><br><br><br><br><br><u><?php echo $nama_kadiv;?></u></th>
<th width="34%"><br><br><br><br><br><u><?php echo $nama_kasubdiv;?></u></th>
<th width="36%"><br><br><br><br><br><u><?php echo $nama_pelaksana;?></u></th>
<tr>
<th width="30%"><?php echo "NIK. ".$nik_kadiv;?></u></th>
<th width="34%"><?php echo "NIK. ".$nik_kasubdiv;?></u></th>
<th width="36%"><?php echo "NIK. ".$nik_pelaksana;?></u></th>
</tr>
</table>
</body>
<script type="text/javascript">   
     $(window).load(function() {
      window.print();
    });
</script>
