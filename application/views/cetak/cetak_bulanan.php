<?php
        $image_file = "<img src=\"images/surat_jalan.jpg\" width=\"150px\" />";
        $tgl_sekarang = date("d F Y");
        $total_nominal;
        $kota="Kuningan";
        $nama_user="Test";
        $isi_header="
        
        <table align=\"left\">
              <tr>
                <td>".$image_file."</td>
              </tr>
            </table>
            <h3 align=\"center\">Hasil Pemeriksaan Bakteriologis Kualitas Air Bersih PDAM KAB. Kuningan</h3>
            <h5 align=\"right\">Tanggal Cetak : ".$tgl_sekarang."</h5>
            <h5 align=\"left\">*MS = Memenuhi Syarat</h5>
            <h5 align=\"left\">*TMS = Tidak Memenuhi Syarat</h5>
            <hr>"
            ;
        

            $pdf = new Pdf('P', 'mm', 'F4', true, 'UTF-8', false);
            $pdf->SetTitle('Hasil Pemeriksaan Bakteriologis Kualitas Air Bersih PDAM KAB. Kuningan  ');
            $pdf->SetHeaderMargin(30);
            $pdf->SetTopMargin(3);
            $pdf->setFooterMargin(20);
            $pdf->setPrintFooter(false);
            $pdf->setPrintHeader(false);
            $pdf->SetAutoPageBreak(true);
            $pdf->SetAuthor('Author');
            $pdf->SetDisplayMode('real', 'default');
            $pdf->AddPage();
            $pdf->SetFont('helvetica', '', 8);
            $i=0;
            $pdf->writeHTML($isi_header, true, false, false, false, '');
            $html='
            
            
            
                    <table border="1">
                    <tr  >
                            <th width="5%" align="center"><b>No</b></th>
                            <th  width="30%" align="center"><b>Lokasi</b></th>
                            <th  width="10%" align="center"><b>Tanggal</b></th>
                            <th width="10%" align="center"><b>M S</b></th>
                            <th  width="10%" align="center"><b>T M S</b></th>
                            <th  width="10%" align="center"><b>Jumlah Sample</b></th>
                            <th  width="10%" align="center"><b>Persentase</b></th>
                            <th  width="10%" align="center"><b>Keterangan</b></th>
                        </tr>';
                        $total_ms=0;
                        $total_tms=0;
                        $total_sample=0;
            foreach ($data->result_array() as $row) 
                {
                $i++;
                    $ms=$row['ms'];
                    $tms=$row['tms'];
                    $jumlah_sample=$row['jumlah_sample'];
                    $total_ms+=$ms;
                    $total_tms+=$tms;
                    $total_sample+=$jumlah_sample;
                    $kali=100;
                    $html.='<tr bgcolor="#ffffff">
                            <th align="center">'.$i.'</th>
                            <th>'.$row['zona'].'</th>
                            <th align="center">'.$row['tgl'].'</th>
                            <th align="right">'.$row['ms'].' </th>
                            <th align="right">'.$row['tms'].' </th>
                            <th align="right">'.$row['jumlah_sample']. ' </th>
                            <th align="right">'.$row['persentase'].' % </th>
                            <th align="right">'.$row['keterangan']. ' </th>
                        </tr>';
                }
            $html.='
            <tr bgcolor="#ffffff">
            <th width="45%" align="center"><b>Total</b></th>
            <th width="10%" align="right"><b>'.$total_ms.'</b></th>
            <th width="10%" align="right"><b>'.$total_tms.'</b></th>
            <th width="10%" align="right"><b>'.$total_sample.'</b></th>
            <th width="10%" align="right"><b>'.round($total_ms/$total_sample*$kali,0).' %</b></th>
            </tr>
            </table>';
            $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->SetY(-60);
            $asd='
          
            <table>
            <tbody>
            <tr style="">
            <td style="">
            </td>
            <td style="">&nbsp;</td>
            <td style="text-align: center;">&nbsp;
            Kuningan, '.$tgl_sekarang.'
            </td>
            </tr>
            </tbody>
            </table>
            <table>
<tbody>
<tr style="height: 81px;">
<td style="height: 81px; text-align: center;">
<p>&nbsp;</p>
<p>&nbsp;Mengetahui:</p>
<p>Kadiv.Produksi</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong><span style="text-decoration: underline;">'.$nama_kadiv.'</span></strong></p>
<p>NIK:'.$nik_kadiv.'</p>
</td>
<td style="height: 81px;">&nbsp;</td>
<td style="height: 81px; text-align: center;">&nbsp;
<p>&nbsp;Mengetahui:</p>
<p>Kadiv.Produksi</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong><span style="text-decoration: underline;">'.$nama_kasubdiv.'</span></strong></p>
<p>NIK:'.$nik_kasubdiv.'</p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>';
$pdf->writeHTML($asd, true, false, true, false, '');
            $pdf->Output('Data Hasil Lab'.$tgl_sekarang, 'I');
?>
		
        