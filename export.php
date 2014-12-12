<?php
echo "<form method='$_POST' action='#'>
         <tr>
         <td><label for='name'><font color='white'>Nama</label></td><td><input placeholder='Nama' class='input' type='text' name='nama' size='30' value='<?php echo $nama_cek ?>'></td></tr>
	<tr><td><label for='name'><font color='white'>Perusahaan</label></td><td><input placeholder='Perusahaan' class='input' type='text' name='tempat' size='30' value='<?php echo $tempat_cek ?>'></td></tr>
	

";

// nama file
 
$namaFile = "report.xls";
 
// Function penanda awal file (Begin Of File) Excel
 
function xlsBOF() {
echo pack("ssssss", 0x809, 0x8, 0x0, 0x10, 0x0, 0x0);
return;
}
 
// Function penanda akhir file (End Of File) Excel
 
function xlsEOF() {
echo pack("ss", 0x0A, 0x00);
return;
}
 
// Function untuk menulis data (angka) ke cell excel
 
function xlsWriteNumber($Row, $Col, $Value) {
echo pack("sssss", 0x203, 14, $Row, $Col, 0x0);
echo pack("d", $Value);
return;
}
 
// Function untuk menulis data (text) ke cell excel
 
function xlsWriteLabel($Row, $Col, $Value ) {
$L = strlen($Value);
echo pack("ssssss", 0x204, 8 + $L, $Row, $Col, 0x0, $L);
echo $Value;
return;
}
 
// header file excel
 
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0,
 pre-check=0");
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
 
// header untuk nama file
header("Content-Disposition: attachment;
 filename=".$namaFile."");
 
header("Content-Transfer-Encoding: binary ");
 
// memanggil function penanda awal file excel
xlsBOF();
 
// ------ membuat kolom pada excel --- //
 
// mengisi pada cell A1 (baris ke-0, kolom ke-0)
xlsWriteLabel(0,0,"NO");
 
// mengisi pada cell A2 (baris ke-0, kolom ke-1)
xlsWriteLabel(0,1,"No ID");
 
// mengisi pada cell A3 (baris ke-0, kolom ke-2)
xlsWriteLabel(0,2,"NAMA ");
 
// mengisi pada cell A4 (baris ke-0, kolom ke-3)
xlsWriteLabel(0,3,"TEMPAT");
 
// mengisi pada cell A5 (baris ke-0, kolom ke-4)
xlsWriteLabel(0,4,"No HP");
xlsWriteLabel(0,5,"Keperluan");
xlsWriteLabel(0,6,"Lantai");
xlsWriteLabel(0,7,"Tgl Masuk");
 
// -------- menampilkan data --------- //
 
// koneksi ke mysql
 
mysql_connect("localhost", "root", "");
mysql_select_db("ktm");
 
if(isset($_POST['report']))
{	// query menampilkan semua data
 
$query = "select m.nim,m.nama,m.tempat,m.photo_url,m.no_hp,m.alamat,t.no_id,t.tgl_masuk,t.keperluan,t.foto_wajah,t.lantai,t.id_visitor,t.status
                                  FROM tblmhs m LEFT JOIN tbl_tamu t ON m.nim = t.no_id WHERE t.tgl_masuk BETWEEN '2014-11-06' AND '2014-11-12'";
$hasil = mysql_query($query);
 
// nilai awal untuk baris cell
$noBarisCell = 1;
 
// nilai awal untuk nomor urut data
$noData = 1;
 
while ($data = mysql_fetch_array($hasil))
{
 // menampilkan no. urut data
 xlsWriteNumber($noBarisCell,0,$noData);
 
// menampilkan data nim
 xlsWriteLabel($noBarisCell,1,$data['no_id']);
 
// menampilkan data nama mahasiswa
 xlsWriteLabel($noBarisCell,2,$data['nama']);
 
// menampilkan data nilai
 xlsWriteLabel($noBarisCell,3,$data['tempat']);
 xlsWriteLabel($noBarisCell,4,$data['no_hp']);
 xlsWriteLabel($noBarisCell,5,$data['keperluan']);
 xlsWriteLabel($noBarisCell,6,$data['lantai']);
 xlsWriteLabel($noBarisCell,7,$data['tgl_masuk']);
 
 
// increment untuk no. baris cell dan no. urut data
 $noBarisCell++;
 $noData++;
}
}
 
// memanggil function penanda akhir file excel
xlsEOF();
exit();
 
?>