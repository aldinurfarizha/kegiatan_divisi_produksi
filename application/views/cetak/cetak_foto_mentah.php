<style type="text/css" media="print">
@page {
    size: auto;   /* auto is the initial value */
    margin: 0;  /* this affects the margin in the printer settings */
}
</style>    
<body>                                                      
<center><h2>Lampiran Dokumentasi</h2><br></center>
<table cellspacing="1" bgcolor="#666666" cellpadding="2" width="100%">
<tr bgcolor="white">
    <th width="5%">No.</th>
    <th width="20%">KEGIATAN</th>
    <th width="75%">DOKUMENTASI</th>
</tr>
<?php

 
$no=0;
foreach($data->result_array() as $sws){ $no++ ?>
    <tr bgcolor="white" >
        <td><?php echo $no; ?></td>
        <td><?php echo $sws['kegiatan']; ?></td>
        <td align="center"><img height="250px;max" src="<?php echo base_url('assets/uploads/dokumentasi/').$sws['file']?>"></td>
        
        </tr>
    <?php } ?>
</table>
</body>
