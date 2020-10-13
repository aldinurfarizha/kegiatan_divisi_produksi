<?php  
include APPPATH.'third_party/PHPExcel/PHPExcel.php';
        
        // Panggil class PHPExcel nya
        $csv = new PHPExcel();
        // Settingan awal fil excel
        $csv->getProperties()->setCreator('Backup')
                     ->setLastModifiedBy('Backup')
                     ->setTitle("Backup")
                     ->setSubject("Backup")
                     ->setDescription("Laporan Excell")
                     ->setKeywords("KEGIATAN BULANAN");
        // Buat header tabel nya pada baris ke 1
        $csv->setActiveSheetIndex(0)->setCellValue('A1', "NO"); 
        $csv->setActiveSheetIndex(0)->setCellValue('B1', "KEGIATAN"); 
        $csv->setActiveSheetIndex(0)->setCellValue('C1', "WAKTU KEGIATAN"); 
        $csv->setActiveSheetIndex(0)->setCellValue('D1', "SASARAN/OUTPUT"); 
        $csv->setActiveSheetIndex(0)->setCellValue('E1', "URAIAN KEGIATAN"); 
        $csv->setActiveSheetIndex(0)->setCellValue('F1', "KENDALA"); 
        $csv->setActiveSheetIndex(0)->setCellValue('G1', "TINDAK LANJUT YANG DI PERLUKAN"); 
        $csv->setActiveSheetIndex(0)->setCellValue('H1', "PENANGGUNG JAWAB"); 
        $csv->setActiveSheetIndex(0)->setCellValue('I1', "INDIKATOR HASIL UTAMA"); 
        $csv->setActiveSheetIndex(0)->setCellValue('J1', "KETERANGAN"); 
        $no=0;
        $numrow=1;
        foreach($hasil->result_array() as $data){ 
          $no++;
          $numrow++;
          $csv->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
          $csv->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data['kegiatan']);
          $csv->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data['waktu_kegiatan']);
          $csv->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data['output']);
          $csv->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data['uraian_kegiatan']);
          $csv->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data['kendala']);
          $csv->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data['tindakan_lanjut']);
          $csv->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data['penanggung_jawab']."-".$data['penanggung_jawab2']."-".$data['penanggung_jawab3']."-".$data['penanggung_jawab4']."-".$data['penanggung_jawab5']);
          $csv->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $data['indikator']);
          $csv->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $data['keterangan']);
          
        }
  


        // Set orientasi kertas jadi LANDSCAPE
        $csv->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
        // Set judul file excel nya
        $csv->getActiveSheet(0)->setTitle("Laps");
        $csv->setActiveSheetIndex(0);
        // Proses file excel
        $bulan_nama;
        switch($bulan){
            case "01":
                $bulan_nama="JANUARI";
                  break;
                  case "02":
                    $bulan_nama="FEBRUARI";
                      break;
                      case "03":
                        $bulan_nama="MARET";
                          break;
                          case "04":
                            $bulan_nama="APRIL";
                              break;
                              case "05":
                                $bulan_nama="MEI";
                                  break;
                                  case "06":
                                    $bulan_nama="JUNI";
                                      break;
                                      case "07":
                                        $bulan_nama="JULY";
                                          break;
                                          case "08":
                                            $bulan_nama="AGUSTUS";
                                              break;
                                              case "09":
                                                $bulan_nama="SEPTEMBER";
                                                  break;
                                                  case "10":
                                                    $bulan_nama="OKTOBER";
                                                      break;
                                                      case "11":
                                                        $bulan_nama="NOVEMBER";
                                                          break;
                                                          case "12":
                                                            $bulan_nama="DESEMBER";
                                                              break;
                                                            }
            
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="REKAPITULASI LAPORAN KEGIATAN "'.$bulan_nama.'"_"'.$tahun.'".xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
        $write = new PHPExcel_Writer_CSV($csv);
        $write->save('php://output');
        ?>
   