<?php
mysql_connect("localhost","root","") or die("Koneksi Gagal");
mysql_select_db("ktm") or die("Database Tidak Ditemukan");

 

if(isset($_POST['check_out']))
{	
  $id =$_POST['no']; 

	      mysql_query("UPDATE tbl_tamu SET tgl_keluar =now(), status='1' WHERE no = '$id'");

             
				
	
	header ("Location:list2.php");			
}
					

?>

<DOCTYPE html>
	<head>
		<style type="text/css">
	.flat-table {
		margin-bottom: 20px;
		border-collapse:collapse;
		font-family: 'Lato', Calibri, Arial, sans-serif;
		border: none;
                border-radius: 3px;
               -webkit-border-radius: 3px;
               -moz-border-radius: 3px;
	}
	.flat-table th, .flat-table td {
		box-shadow: inset 0 -1px rgba(0,0,0,0.25), 
			inset 0 1px rgba(0,0,0,0.25);
	}
	.flat-table th {
		font-weight: normal;
		-webkit-font-smoothing: antialiased;
		padding: 1.3em;
		
		
		font-size: 1.3em;
	}
	.flat-table td {
		
		padding: 0.7em 1em 0.7em 1.15em;
		
		font-size: 0.8em;
	}
	.flat-table tr {
		-webkit-transition: background 0.3s, box-shadow 0.3s;
		-moz-transition: background 0.3s, box-shadow 0.3s;
		transition: background 0.3s, box-shadow 0.3s;
	}
	.flat-table-1 {
		background: #336ca6;
	}
	.flat-table-1 tr:hover {
		background: rgba(0,0,0,0.19);
	}
	.flat-table-2 tr:hover {
		background: rgba(0,0,0,0.1);
	}
	.flat-table-2 {
		background: #CF000F;

	}
	.flat-table-3 {
		background: #DADFE1;
	}
	.flat-table-3 tr:hover {
		background: rgba(0,0,0,0.1);
		color
	}
.myButton {
	background-color:#44c767;
	-moz-border-radius:28px;
	-webkit-border-radius:28px;
	border-radius:10px;
	border:1px solid #18ab29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:arial;
	font-size:12px;
	padding:5px 9px;
	text-decoration:none;
	text-shadow:0px 1px 0px #2f6627;
}
.myButton:hover {
	background-color:#5cbf2a;
}
.myButton:active {
	position:relative;
	top:1px;
}	

.back { 
background: url('background.png') no-repeat center center fixed;

-moz-background-size: cover;

-webkit-background-size: cover;

-o-background-size: cover;

background-size: cover;
 
 }
.tulisan {
    position: fixed;
}

}  

.table {
    border: 1px solid;
    color: black;
}

</style>
	</head>
		<body align="center"  class="back">
			<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<div class="tulisan">
<a href="index.php" class="myButton">Kembali Ambil Foto</a>
<!--<a href="export.php" class="myButton">Export</a>-->
</div>


<marquee scrolling="yes" behavior="scroll" height="100%" width="80%" direction="up" onmouseover="stop()" onmouseout="start()" scrollamount="1">
  
<form method="POST" name="form" action="">
   <table  class="flat-table flat-table-3" align="center" >
	<thead  class="flat-table-2">
		<th width="1%">No</th>
		<th width="30%">PHOTO</th>
		<th width="20%"></th>
		<th width="40%">DATA</th>
		<th width="40%"></th>
		
		
	</thead>
	<tbody>
	<?php 
          $no=1;
          $result  = mysql_query("select m.nim,m.nama,m.tempat,m.photo_url,m.no_hp,m.alamat,t.no, t.no_id,t.tgl_masuk,t.keperluan,t.foto_wajah,t.lantai,t.id_visitor,t.status
          	                      FROM tblmhs m LEFT JOIN tbl_tamu t ON m.nim = t.no_id WHERE t.status=0 ");
          while($data=mysql_fetch_array($result)){
         
         ?>
	
		


		<tr >
			<td><?php echo $no; ?></td>
			<td><width="125px" valign="top">
				<img BORDER="1" ALIGN="Left" src="<?php echo $data['foto_wajah'];?>" width="180">
			</td>
			<td class="table">
				     No. ID</br>
				     Nama</br>
				     Perusahaan</br> 
				     HP</br>
				     ID Visitor</br>  
				     Keperluan</br>
				     Lantai</br>
				     Tanggal Masuk</br> 
				     
			</td>

			<td class="table">
				   
				      :&nbsp<?php echo $data['no'];?></br>
				      :&nbsp<?php echo $data['nama'];?></br>
				      :&nbsp<?php echo $data['tempat'];?></br>
				      :&nbsp<?php echo $data['no_hp'];?></br>
				      :&nbsp<?php echo $data['id_visitor'];?></br>
				      :&nbsp<?php echo $data['keperluan'];?></br>
				      :&nbsp<?php echo $data['lantai'];?></br>
				      :&nbsp<?php echo $data['tgl_masuk'];?></br>
				     
			</td>

			<td>
             <br>
             <br>
             <br>
             <br></br>
			 <br>
			</td>
			
		</tr>
		<?php
		 $no++;
		}
          ?>

</marquee>

	</tbody>
</table>
</form>
</body>
</html>
