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
                     ->setKeywords("Hasil Lab");
        // Buat header tabel nya pada baris ke 1
        $csv->setActiveSheetIndex(0)->setCellValue('A1', "NO"); 
        $csv->setActiveSheetIndex(0)->setCellValue('B1', "LOKASI"); 
        $csv->setActiveSheetIndex(0)->setCellValue('C1', "TANGGAL"); 
        $csv->setActiveSheetIndex(0)->setCellValue('D1', "MS"); 
        $csv->setActiveSheetIndex(0)->setCellValue('E1', "TMS"); 
        $csv->setActiveSheetIndex(0)->setCellValue('F1', "JUMLAH SAMPLE"); 
        $csv->setActiveSheetIndex(0)->setCellValue('G1', "PERSENTASE"); 
        $csv->setActiveSheetIndex(0)->setCellValue('H1', "KETERANGAN"); 
        // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
        $total_ms=0;
        $total_tms=0;
        $total_sample=0;
        $kali=100;
        $no = 1; // Untuk penomoran tabel, di awal set dengan 1
        $numrow = 2; // Set baris pertama untuk isi tabel adalah baris ke 2
        foreach($data as $data){ 
          $csv->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
          $csv->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->zona);
          $csv->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->tgl);
          $csv->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->ms);
          $csv->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->tms);
          $csv->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->jumlah_sample);
          $csv->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->persentase."%");
          $csv->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data->keterangan);
          $no++; // Tambah 1 setiap kali looping
          $numrow++; // Tambah 1 setiap kali looping
          $ms=$data->ms;
          $tms=$data->tms;
          $jumlah_sample=$data->jumlah_sample;
          $total_ms+=$ms;
          $total_tms+=$tms;
          $total_sample+=$jumlah_sample;
          
        }
        $csv->setActiveSheetIndex(0)->setCellValue('B'.$numrow, "TOTAL"); 
        $csv->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $total_ms); 
        $csv->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $total_tms); 
        $csv->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $total_sample); 
        $csv->setActiveSheetIndex(0)->setCellValue('G'.$numrow, round($total_ms/$total_sample*$kali,0)."%"); 


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
        header('Content-Disposition: attachment; filename="HASIL PEMERIKSAAN BAKTERIOLOGIS "'.$bulan_nama.'"_"'.$tahun.'".csv"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
        $write = new PHPExcel_Writer_CSV($csv);
        $write->save('php://output');
        ?>
   