<?php
        $image_file = "<img src=\"images/surat_jalan.jpg\" width=\"150px\" />";
        $tgl_sekarang = date("d F Y");
        $total_nominal;
        $isi_header="
        
        <table align=\"left\">
              <tr>
                <td>".$image_file."</td>
              </tr>
            </table>
            <h3 align=\"center\">Lampiran Kegiatan Foto</h3>
          
            <hr>"
            ;
        

            $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
            $pdf->SetTitle('Laporan Kegiatan Foto');
            $pdf->SetHeaderMargin(30);
            $pdf->SetTopMargin(3);
            $pdf->setFooterMargin(20);
            $pdf->setPrintFooter(false);
            $pdf->setPrintHeader(false);
            $pdf->SetAutoPageBreak(true);
            $pdf->SetAuthor('Author');
            $pdf->SetDisplayMode('real', 'default');
            $pdf->AddPage();
            $pdf->SetFont('helvetica', '', 13);
            $i=0;
            $pdf->writeHTML($isi_header, true, false, false, false, '');
            $html='
            
            
            
                    <table cellspacing="1" bgcolor="#666666" cellpadding="2">
                    <tr bgcolor="black">
                            <th style="color:#fff" width="5%" align="center"><b>No</b></th>
                            <th style="color:#fff" width="20%" align="center"><b>Kegiatan</b></th>
                            <th style="color:#fff" width="75%" align="center"><b>Dokumentasi</b></th>
                        </tr>';
                      
            foreach ($data->result_array() as $row) 
                {
                $i++;
                    
                    
              
                    $html.='<tr bgcolor="#ffffff">
                            <th align="center">'.$i.'</th>
                            <th>'.$row['kegiatan'].'</th>
                            <th align="center"><img height="250px;max" src="'.base_url('assets/uploads/dokumentasi/').$row['file'].'"></th>
                        </tr>';
                }
            $html.='</table>';
            $pdf->writeHTML($html, true, false, true, false, '');
        
          
            $pdf->SetY(-20);
            $pdf->writeHTML("<hr>", true, false, false, false, '');
            $pdf->Cell(0, 10, 'Halaman '.$pdf->getAliasNumPage().' dari '.$pdf->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
            $pdf->Output('Data Penambahan Aset', 'I');
?>
		
        