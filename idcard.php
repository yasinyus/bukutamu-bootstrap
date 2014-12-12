<?php

			include ('fpdf/fpdf.php');
include ('koneksi.php');
// buat file pdf
$pdf = new FPDF();
//buka file
$pdf->Open();

// disable oto page break
$pdf->SetAutoPageBreak(false);
$pdf->AddPage();

$y_axis_initial=5;
$y_axis1=5;



$data=mysql_query("SELECT * from tblmhs where nim='$_GET[id]'");
$i=0;



$max=25;

$row_height=5;

$row=mysql_fetch_array($data);

$tgl_lahir=explode("-",$row['tanggal']);
$pdf->SetDrawColor(50, 0, 0, 0);		
$pdf->SetFillColor(300,0);
$pdf->SetFont('Arial','B',10);
$pdf->SetY($y_axis1);

//$pdf->SetX(25);
$pdf->Rect(9.75, 4.0, 90, 62 , 'D') ;
$pdf->Line(9.65, 17.5, 99.5, 17.5); 

$pdf->Rect(105, 4.0, 90, 62 , 'D') ;


$pdf->Cell(89,6,'KARTU TANDA MASUK GEDUNG',0,0,'C',1);
$pdf->Cell(6.5);$pdf->Cell(89,6,'PERHATIAN',0,0,'C',0);$pdf->Ln();
$pdf->Cell(89,6,'TELKOMSEL',0,0,'C',1);
$pdf->Cell(6.5);$pdf->Cell(89,6,' ',0,0,'C',0);
//$pdf->Line(100, 4, 100, 83); 

$pdf->Ln();$pdf->Ln();

$pdf->SetFont('Arial','',10);
//konversi tgl tes
$img_file = 'download.jpg';
$pdf->Image($img_file,15,25,50);
$pdf->SetX(13);
$pdf->Cell(30,5,'ID',0,0,'l',0);$pdf->Cell(65,5,': '.$row['nim'],0,0,'l',0);
$pdf->SetFont('Arial','B',9);





$pdf->Cell(5,5,'1. Kartu ini berlaku selama berada di lokasi.',0,0,'l',0);
$pdf->Ln();


$pdf->SetX(13);$pdf->Cell(30,5,'Nama',0,0,'L',0);$pdf->Cell(65,5,': '.str_replace("\\","",$row['nama']),0,0,'l',0);

$pdf->Cell(5,5,'2. Apabila hilang / rusak harap lapor ke penjaga.',0,0,'l',0);
$pdf->Ln();

$pdf->SetX(13);$pdf->Cell(30,5,'Tanggal Masuk',0,0,'L',0);$pdf->Cell(65,5,': '.$row['tempat'].', '.$tgl_lahir[2].'-'.$tgl_lahir[1].'-'.$tgl_lahir[0],0,0,'l',0);


$pdf->Cell(5,5,'3. Bagi yang menemukan kartu ini, harap dilaporkan. ',0,0,'l',0);
$pdf->Ln();

$pdf->SetX(13);$pdf->Cell(30,5,'Keperluan',0,0,'L',0);$pdf->Cell(65,5,': '.$row['prodi'],0,0,'l',0);
$pdf->Cell(5,5,'    ke security ',0,0,'l',0);
$pdf->Ln();

//$pdf->Cell(98);$pdf->Cell(5,5,' ke security',0,0,'l',0);$pdf->Ln();




//$pdf->Rect(15, 52, 20, 25 , 'D') ;
if(!empty($row['photo_url'])){
$pdf->Image($row['photo_url'],70,38,22,0);
}

$pdf->SetFont('Arial','',10);
		$tglskr_temp=date("d - m - Y");
		$pdf->SetY($y_axis1+45);
		$pdf->cell(12);$pdf->cell(6,5, 'BSD, '.$tglskr_temp);$pdf->Ln();
		$pdf->cell(40);$pdf->cell(6,5, '');$pdf->Ln();$pdf->Ln();$pdf->Ln();
		$pdf->SetFont('Arial','BU',9);
		$pdf->cell(12);$pdf->cell(50,-20, 'Yasin Yusuf, S.Kom.');$pdf->Ln(3);
		$pdf->SetFont('Arial','B',9);

		
		
//				mysql_close;
	$pdf->Output();	
	?>
