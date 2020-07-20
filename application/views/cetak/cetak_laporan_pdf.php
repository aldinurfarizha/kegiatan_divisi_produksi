<?php
        $image_file = "<img src=\"images/surat_jalan.jpg\" width=\"150px\" />";
        $tgl_sekarang = date("d F Y");
        $total_nominal;
        $no=0;
        $isi_header="
        
        <table align=\"left\">
              <tr>
                <td>".$image_file."</td>
              </tr>
            </table>
            <h3 align=\"center\">Laporan Penambahan Aset</h3>
            <h5 align=\"right\">Tanggal Cetak : ".$tgl_sekarang."</h5>
            <hr>"
            ;
        

            $pdf = new Pdf('P', 'mm', 'F4', true, 'UTF-8', false);
            $pdf->SetTitle('Laporan Penambahan Aset');
            $pdf->SetHeaderMargin(30);
            $pdf->SetTopMargin(3);
            $pdf->setFooterMargin(20);
            $pdf->setPrintFooter(false);
            $pdf->setPrintHeader(false);
            $pdf->SetAutoPageBreak(true);
            $pdf->SetAuthor('Author');
            $pdf->SetDisplayMode('real', 'default');
            $pdf->AddPage('L');
            $pdf->SetFont('helvetica', '', 8);
            $pdf->writeHTML(true, false, false, false, '');
            $html='
            
            
            
                    <table cellspacing="1" bgcolor="#666666" cellpadding="2">
                    <tr bgcolor="white">
                            <th width="5%"><b>No</b></th>
                            <th width="10%">KEGIATAN</th>
                            <th width="5%">WAKTU KEGIATAN</th>
                        </tr>';
                   
            foreach ($kegiatan->result_array() as $source1) 
                {
                  $source2 = $this->db->query("select * from detail_kegiatan where id_kegiatan='$source1[id_kegiatan]'");
                  $total_source2 = $source2->num_rows();
                  $source3 = $source2->result_array();
                $no++;
                    
                    
              
                    $html.='<tr bgcolor="#ffffff">
                    <td rowspan="'.$total_source2.'">'.$no.'</td>
                    <td rowspan="'.$total_source2.'">'.$source1['kegiatan'].'</td>
                    <td rowspan="'.$total_source2.'">'.$source1['waktu_kegiatan'].'</td>
                 
                        </tr>';
                }
            $html.='</table>';
            $pdf->writeHTML($html, true, false, true, false, '');
        
          
            $pdf->SetY(-20);
            $pdf->writeHTML("<hr>", true, false, false, false, '');
            $pdf->Cell(0, 10, 'Halaman '.$pdf->getAliasNumPage().' dari '.$pdf->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
            $pdf->Output('Data Penambahan Aset', 'I');
?>
		
        