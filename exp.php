<?php
/**
 * PHPExcel
 *
 * Copyright (C) 2006 - 2012 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA
 *
 * @category PHPExcel
 * @package PHPExcel
 * @copyright Copyright (c) 2006 - 2012 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt LGPL
 * @version 1.7.7, 2012-05-19
 */

$tgl1 = $_POST['tgl1'];
$tgl2 = $_POST['tgl2'];
/** Error reporting */
error_reporting(E_ALL);

date_default_timezone_set('Europe/London');

/** Include PHPExcel */
require_once 'Classes/PHPExcel.php';

// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set document properties
$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
    ->setLastModifiedBy("Data Siswa SMPN 5 ********")
    ->setTitle("Data Siswa SMPN 5 ********")
    ->setSubject("Data Siswa SMPN 5 ********")
    ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
    ->setKeywords("office 2007 openxml php")
    ->setCategory("Test result file");

// Create the worksheet
$objPHPExcel->setActiveSheetIndex(0);

$objPHPExcel->getActiveSheet()->setCellValue('A7', "No")
    ->setCellValue('B7', "NIM")
    ->setCellValue('C7', "NAMA")
    ->setCellValue('D7', "qqqqqqqqqq")
    ->setCellValue('E7', "J.qqqqq")
    ->setCellValue('F7', "Tmp&qqqqqqqqqq.Lahir")
    ->setCellValue('G7', "qqqqq")
    ->setCellValue('H7', "No.qqqqqq/HP")
    ->setCellValue('I7', "qqqqqq")
    ->setCellValue('J7', "qqqq.Test")
    ->setCellValue('K7', "qqqqqq");


$servers = "localhost";
$username = "root";
$password = "";
$db = "ktm";

$koneksi = mysql_connect("$servers","$username","$password");
mysql_select_db($db, $koneksi) or die("Cannot connect to database..");

$SQL = mysql_query("select m.nim,m.nama,m.tempat,m.photo_url,m.no_hp,m.alamat,t.no, t.no_id,t.tgl_masuk,t.keperluan,t.foto_wajah,t.lantai,t.lokasi,t.id_visitor,t.status
          	                      FROM tblmhs m LEFT JOIN tbl_tamu t ON m.nim = t.no_id
          	                      WHERE t.tgl_masuk BETWEEN '$tgl1' AND '$tgl2'");

$totJML = mysql_num_rows($SQL);

$dataArray= array();
$no=0;
while($row = mysql_fetch_array($SQL, MYSQL_ASSOC)){
    $no++;
    $row_array['no'] = $no;
    $row_array['nim'] = $row['nim'];
    $row_array['nama'] = $row['nama'];
    $row_array['alamat'] = $row['alamat'];
    $row_array['tempat'] = $row['tempat'];
    $row_array['id_visitor'] = $row['id_visitor'];
    $row_array['tgl_masuk'] = $row['tgl_keluar'];
    $row_array['keperluan'] = $row['keperluan'];
    $row_array['lantai'] = $row['lantai'];
    $row_array['lokasi'] = $row['lokasi'];

    array_push($dataArray,$row_array);
}
$nox=$no+7;
$objPHPExcel->getActiveSheet()->fromArray($dataArray, NULL, 'A8');

// Set page orientation and size
$objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
$objPHPExcel->getActiveSheet()->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_LEGAL);
$objPHPExcel->getActiveSheet()->getPageMargins()->setTop(0.75);
$objPHPExcel->getActiveSheet()->getPageMargins()->setRight(0.75);
$objPHPExcel->getActiveSheet()->getPageMargins()->setLeft(0.75);
$objPHPExcel->getActiveSheet()->getPageMargins()->setBottom(0.75);
$objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddFooter('&L&B' . $objPHPExcel->getProperties()->getTitle() . '&RPage &P of &N');

// Set title row bold;
$objPHPExcel->getActiveSheet()->getStyle('A7:M7')->getFont()->setBold(true);
// Set fills
$objPHPExcel->getActiveSheet()->getStyle('A7:M7')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('A7:M7')->getFill()->getStartColor()->setARGB('FF808080');

$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(4.43);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(6.29);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(11.14);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(21);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(9.14);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(16.14);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(23);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(11);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(6.86);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(7.43);
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(6.29);
$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(15.29);
$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(11.1);

// Set autofilter
// Always include the complete filter range!
// Excel does support setting only the caption
// row, but that's not a best practise...
$objPHPExcel->getActiveSheet()->setAutoFilter($objPHPExcel->getActiveSheet()->calculateWorksheetDimension());

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);

$sharedStyle1 = new PHPExcel_Style();
$sharedStyle2 = new PHPExcel_Style();

$sharedStyle1->applyFromArray(
    array('borders' => array(
        'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
        'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
        'right' => array('style' => PHPExcel_Style_Border::BORDER_MEDIUM),
        'left' => array('style' => PHPExcel_Style_Border::BORDER_MEDIUM)
    ),
    ));

$objPHPExcel->getActiveSheet()->setSharedStyle($sharedStyle1, "A7:M$nox");

// Set style for header row using alternative method
$objPHPExcel->getActiveSheet()->getStyle('A7:M7')->applyFromArray(
    array(
        'font' => array(
            'bold' => true
        ),
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
        ),
        'borders' => array(
            'top' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN
            )
        ),
        'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
            'rotation' => 90,
            'startcolor' => array(
                'argb' => 'FFA0A0A0'
            ),
            'endcolor' => array(
                'argb' => 'FFFFFFFF'
            )
        )
    )
);

// Add a drawing to the worksheet
//$objDrawing = new PHPExcel_Worksheet_Drawing();
//$objDrawing->setName('Logo');
//$objDrawing->setDescription('Logo');
//$objDrawing->setPath('../images/logo2.png');
//$objDrawing->setCoordinates('B2');
//$objDrawing->setHeight(120);
//$objDrawing->setWidth(120);
//$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objPHPExcel->getActiveSheet()->getStyle('A7:M1000')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->getStyle('A7:M1000')->getFont()->setSize(7);

// Merge cells
$objPHPExcel->getActiveSheet()->mergeCells('D2:M2');
$objPHPExcel->getActiveSheet()->setCellValue('D2', "PEMERINTAH KOTA ********");
$objPHPExcel->getActiveSheet()->mergeCells('D3:M3');
$objPHPExcel->getActiveSheet()->setCellValue('D3', "DINAS PENDIDIKAN");
$objPHPExcel->getActiveSheet()->mergeCells('D4:M4');
$objPHPExcel->getActiveSheet()->setCellValue('D4', "SMPN 5 ********");
$objPHPExcel->getActiveSheet()->mergeCells('D5:M5');
$objPHPExcel->getActiveSheet()->setCellValue('D5', "Jl.WR.Supratman 12, Telp. 482713 ********");
$objPHPExcel->getActiveSheet()->mergeCells('D6:M6');
$objPHPExcel->getActiveSheet()->setCellValue('D6', "REKAPITULASI DATA SISWA TAHUN $tahun");
$objPHPExcel->getActiveSheet()->getStyle('D2:M6')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->getStyle('D2:M5')->getFont()->setSize(18);
$objPHPExcel->getActiveSheet()->getStyle('D6')->getFont()->setSize(22);
$objPHPExcel->getActiveSheet()->getStyle('D2:M6')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A2:M6')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

// Redirect output to a client’s web browser (Excel2007)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="dataSiswa"'.date("d-F-Y").'".xlsx"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;

// Save Excel 2007 file
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save(str_replace('.php', '.xlsx', __FILE__));