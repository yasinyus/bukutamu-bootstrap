<?php
/**
 * By Shaharia Azam
 * shaharia.azam@gmail.com
 * http://www.shahariaazam.com
 */
class Excel{
 
    /**
     * set the header configuration
     * @param $filename the xls file name
     */
    function setHeader($filename)
    {
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");;
        header("Content-Disposition: attachment;filename=$filename");
        header("Content-Transfer-Encoding: binary ");
    }
 
    /**
     * write the xls begin of file
     */
    function BOF() {
        echo pack("ssssss", 0x809, 0x8, 0x0, 0x10, 0x0, 0x0);
        return;
    }
 
    /**
     * write the xls end of file
     */
    function EOF() {
        echo pack("ss", 0x0A, 0x00);
        return;
    }
 
    /**
     * write a number
     * @param $Row row to write $Value (first row is 0)
     * @param $Col column to write $Value (first column is 0)
     * @param $Value number value
     */
    function writeNumber($Row, $Col, $Value) {
        echo pack("sssss", 0x203, 14, $Row, $Col, 0x0);
        echo pack("d", $Value);
        return;
    }
 
    /**
     * write a string label
     * @param $Row row to write $Value (first row is 0)
     * @param $Col column to write $Value (first column is 0)
     * @param $Value string value
     */
    function writeLabel($Row, $Col, $Value) {
        $L = strlen($Value);
        echo pack("ssssss", 0x204, 8 + $L, $Row, $Col, 0x0, $L);
        echo $Value;
        return;

    }
}
#koneksi ke mysql
$mysqli = new mysqli("localhost","root","","ktm");
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_error . ') ');
}
#akhir koneksi
 
#ambil data
$tgl1 = $_POST['tgl1'];
$tgl2 = $_POST['tgl2'];
$query = "select m.nim,m.nama,m.tempat,m.photo_url,m.no_hp,m.alamat,t.no, t.tgl_masuk,t.keperluan,t.foto_wajah,t.lantai,t.lokasi,t.id_visitor,t.status
                                  FROM tblmhs m LEFT JOIN tbl_tamu t ON m.nim = t.no_id
                                  WHERE t.tgl_masuk BETWEEN '$tgl1' AND '$tgl2'";
$sql = $mysqli->query($query);
$arrmhs = array();
while ($row = $sql->fetch_assoc()) {
	array_push($arrmhs, $row);
}
#akhir data
 
$excel = new Excel();
#Send Header
$excel->setHeader('Report_Buku_Tamu.xls');
$excel->BOF();
 
#header tabel
$excel->writeLabel(0, 0, "No. ID");
$excel->writeLabel(0, 1, "NAMA");
$excel->writeLabel(0, 2, "PERUSAHAAN");
$excel->writeLabel(0, 3, "PHOTO URL");
$excel->writeLabel(0, 4, "NO HP");
$excel->writeLabel(0, 5, "ALAMAT");
$excel->writeLabel(0, 6, "LANTAI");
$excel->writeLabel(0, 7, "ID VISITOR");
$excel->writeLabel(0, 8, "LOKASI");
 
#isi data
$i = 1;
foreach ($arrmhs as $baris) {
	$j = 0;
	foreach ($baris as $value) {
		$excel->writeLabel($i, $j, $value);
        
		$j++;
	}
	$i++;
}
 
$excel->EOF();
 
exit();

?>