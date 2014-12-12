<?php	
error_reporting(E_ALL ^ E_NOTICE);
include('koneksi.php');
$id_visitor =$_POST['id_visitors'];
$result = mysql_query("select m.nim,m.nama,m.tempat,m.photo_url,m.no_hp,m.alamat,t.no, t.no_id,t.tgl_masuk,t.keperluan,t.foto_wajah,t.lantai,t.id_visitor,t.status
          	                      FROM tblmhs m LEFT JOIN tbl_tamu t ON m.nim = t.no_id WHERE t.id_visitor='$id_visitor'");
$test = mysql_fetch_array($result);
if(isset($_POST['cek_out']))
{
		            $no_out=$test['no_id'] ;
					$nama_out=$test['nama'] ;
					$jk_out=$test['jk'] ;
					$tempat_out=$test['tempat'];
				    $no_hp_out=$test['no_hp'] ;
					$foto_wajah_out=$test['foto_wajah'] ;
					$alamat_out=$test['jenis_id'] ;	
					$tgl_masuk_out=$test['tgl_masuk'] ;				
					$keperluan_out=$test['keperluan'] ;
					$id_visitor_out=$test['id_visitor'] ;
					$lantai_out=$test['lantai'] ;
	}

?>



<?php	
error_reporting(E_ALL ^ E_NOTICE);
include('koneksi.php');
$nim =$_POST['nim'];
$result = mysql_query("SELECT * FROM tblmhs WHERE nim  = '$nim'");
$test = mysql_fetch_array($result);
if(isset($_POST['cek']))
{
		            $jenis_id_cek=$test['nama'] ;
					$nama_cek=$test['nama'] ;
					$jk_cek=$test['jk'] ;
					$tempat_cek=$test['tempat'];
				    $no_hp_cek=$test['no_hp'] ;
					$photo_url_cek=$test['photo_url'] ;
					$alamat_cek=$test['jenis_id'] ;					
					
					$id_cek=$test['nim'];
	}				
if(isset($_POST['ceks']))
{	
    $activity_save = $_POST['nama'];
	$descs_save = $_POST['jk'];
	$user_save = $_POST['tempat'];
	$start_save = $_POST['prodi'];
	$target_save = $_POST['photo_url'];
	$end_save = $_POST['nim'];
	
	      mysql_query("UPDATE input SET activity ='$activity_save',
	                                  descs ='$descs_save', 
	                                  user ='$user_save',
									  start ='$start_save',
									  target ='$target_save', 
									  end ='$end_save',
	                                  status ='$status_save',
		                              program ='$program_save',
								      incident ='$incident_save', 
								      notice ='$notice_save' 
								      
									  WHERE id = '$id'")
				or die(mysql_error()); 
}			
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Aplikasi Buku Tamu</title>
	
<script src="jquery.min.js"></script>	
<script type="text/javascript">
$(document).ready(function(){
	
		$("#upload_results").hide();$("#simpan").hide();
		
		$("#ambil_photo").click(function(){
		$("#upload_results").show(500);
		$("#simpan").show(500);
		$("#print_area").hide();
		});
		
		
});

$(document).ready(function(){
	
		$("#upload_results").hide();$("#test3").hide();
		
		$("#ambil_photo").click(function(){
		$("#upload_results").show(500);
		$("#test3").show(500);
		$("#print_area").hide();
		});
		
		
});

$(document).ready(function(){
	
		$("#upload_results").hide();$("#jajal,#test,#test2,#test4").hide();
		
		$("#ambil_photo").click(function(){
		$("#upload_results").show(500);
		$("#jajal,#test,#test2,#test4").show(500);
		$("#print_area").hide();
		});
		
		
});			
		</script>
<!--
<head>
<title>Ui kits Website Template | Home :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<script type="text/javascript" src="js/Chart.js"></script>
 <script type="text/javascript" src="js/jquery.easing.js"></script>
 <script type="text/javascript" src="js/jquery.ulslide.js"></script>

  <link rel="stylesheet" href="css/clndr.css" type="text/css" />
  <script src="js/underscore-min.js"></script>
  <script src= "js/moment-2.2.1.js"></script>
  <script src="js/clndr.js"></script>
  <script src="js/site.js"></script>
  <!----End Calender -------->


<script type="text/javascript" src="Dense-Regular.otf"></script>
<script type="text/javascript" src="js/login.js"></script>
<script type="text/javascript" src="js/Chart.js"></script>
 <script type="text/javascript" src="js/jquery.easing.js"></script>
 <script type="text/javascript" src="js/jquery.ulslide.js"></script>

<style> 

.back { 
background: url('background.png') no-repeat center center fixed;

-moz-background-size: cover;

-webkit-background-size: cover;

-o-background-size: cover;

background-size: cover;

} 

#content {
    position: relative;
}
#content img {
    position: fixed;
    top: 0px;
    left: 20px;
}
.tulisan {
    position: fixed;
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

.test {
    width:250px;
    height:180px;
    background-image: url('http://10.250.2.217/bukutamu/header.png');
    background-repeat:no-repeat;background-size:250px 180px;
    border: 1px solid black;
}

</style>

</head>

<div id="content">
   <img src="logo_telkomsel.png" width="200"/ >
   
</div>


<body class="back" >
	
	<form name="f_ktm" method="POST" class="pure-form pure-form-aligned" background="#e74c3c" >
	<table border="1" style="border:5px; "  align="center" >
<tr  ><td style="test"  colspan="3" align="center" bgcolor="#CF000F"  >
	<font  face="mistral" size="10px" color="white"><b>Aplikasi Buku Tamu</b></font><br/>
    <a href="list2.php" class="myButton">Daftar Tamu</a>
</tr>

<tr><td  width="40%" valign="top" align="center"red border="1" bgcolor="#bcbcbc"
	<!-- First, include the JPEGCam JavaScript Library -->
	<script type="text/javascript" src="webcam.js"></script>
	
	<!-- Configure a few settings -->
	<script language="JavaScript">
		webcam.set_api_url( 'capture.php' );
		webcam.set_quality( 100 ); // JPEG quality (1 - 100)
		webcam.set_shutter_sound( true ); // play shutter click sound
	</script>
	
	<!-- Next, write the movie to the page at 320x240 -->
	<script language="JavaScript">
		document.write( webcam.get_html(300,200) );
	</script>
	
	<!-- Some buttons for controlling things -->
	<br/></form>

	<form boder="1">
		<input class="myButton" type="button" value="Konfigurasi..." onClick="webcam.configure()">
		&nbsp;&nbsp;
		<input class="myButton" type="button" id="ambil_photo" value="Ambil Photo" onClick="take_snapshot()">
	<!--________________________________________-->

	</form>
	
	<!-- Code to handle the server response (see capture.php) -->
	<script language="JavaScript">
		webcam.set_hook( 'onComplete', 'my_completion_handler' );
		
		function take_snapshot() {
			// take snapshot and upload to server
			document.getElementById('upload_results').innerHTML = '<p>Menyimpan photo ...</p>';
			webcam.snap();
		}
		
		function my_completion_handler(msg) {
			// extract URL out of PHP output
			if (msg.match(/(http\:\/\/\S+)/)) {
				var image_url = RegExp.$1;
				// show JPEG image in page
				document.getElementById('upload_results').innerHTML = 
					
					'<img src="' + image_url + '" border="2">'+
					'<br/><font face="raavi" size="5px" color="white">Preview<br/><font face="raavi" size="3px" color="white"><input type="hidden" name="photo_url" value="'+image_url+'" size="20" readonly="readonly">';
				     
				// reset camera for another shot
				webcam.reset();
			}

			else alert("PHP Error: " + image_url);
		}
	</script>
	
	</td>
	<td valign="top" width="40%" align="center" bgcolor="#bcbcbc">
		<div id="upload_results"></div>
		<div id="print_area"><?php if(!empty($_GET['last_id'])){
	//echo "<iframe src=\"idcard.php?id=$_GET[last_id]\" width=\"500\" height=\"300\" frameborder=\"no\"></iframe>";
	}
	?>

	</div>
   </td>
<td bgcolor="#bcbcbc" width="300px" valign="top"><img src="<?php echo $foto_wajah_out ?>" width="300">
	</td>
</tr>
<tr></tr>

<tr valign="top" >
	
	<td  bgcolor="#CF000F">
		
	<table  >
	<div bgcolor="#CF000F">
<tr ><td ><label for="name"><font color="white">Jenis ID</label></td>	
	<td>
		<select name="jenis_id" class="input" >
              <option value="<?php echo $jenis_id_cek ?>"><?php echo $jenis_id_cek ?></option>
              <option value="KTP">KTP</option> 
              <option value="SIM">SIM</option>
        </select>
	</td>	
	<tr style="" valign="top"><td><label for="name"><font color="white">No ID</font></label></td><td><input placeholder="KTP / SIM" class="input" type="text" name="nim"  size="17" value="<?php echo $id_cek ?>">
	<input type="submit" class="myButton" id="cek" name="cek" value="Cari Data"></input></td>
	
	<td rowspan="1">
	 
	<input type="submit" class="myButton" id="simpan" name="save" value="Simpan"/>
	
	</td></tr>
	<tr><td><label for="name"><font color="white">Nama</label></td><td><input placeholder="Nama" class="input" type="text" name="nama" size="30" value="<?php echo $nama_cek ?>"></td></tr>
	<tr><td><label for="name"><font color="white">Perusahaan</label></td><td><input placeholder="Perusahaan" class="input" type="text" name="tempat" size="30" value="<?php echo $tempat_cek ?>"></td></tr>
	<!--<tr><td><font face="raavi" size="3px" color="white">Tanggal Masuk</td><td><input type="date" name="tanggal"></td></tr>-->
	<tr><td><label for="name"><font color="white">Jenis Kelamin</label></td>
	<td>
		<select name="jk" class="input" >
            <option value="<?php echo $jk_cek ?>"><?php echo $jk_cek ?></option>
            <option value="Laki-laki">Laki-laki</option> 
            <option value="Perempuan">Perempuan</option>
        </select>
	</td>
</tr>

<tr>
		<td>
			<label for="name"><font color="white">No.HP</label></td><td><input placeholder="No. HP" class="input" name="no_hp" size="15" value="<?php echo $no_hp_cek ?>"></td></tr>
	    </td>
</tr>
    <tr><td><label for="name"><font color="white">Alamat</label></td><td><input placeholder="Alamat" class="input" type="text" name="alamat" size="30" value="<?php echo $alamat_cek ?>"></td></tr>
    <tr id="jajal"><td><label for="name"><font color="white">Keperluan</label></td><td><textarea rows="4" cols="32"  placeholder="Keperluan" class="input" type="text" name="keperluan"  ></textarea></td></tr>
    <tr id="test2"><td><label for="name"><font color="white">Lantai</label></td><td><input  placeholder="Lantai" class="input" type="text" name="lantai" size="30" ></td></tr>
    <tr id="test4"><td><label for="name"><font color="white">Lokasi</label></td>
    <td >
		<select name="lokasi" class="input" >
            <option value="">--Lokasi Gedung--</option>
            <option value="BSD Office">BSD Office</option> 
            <option value="BSD TTC">BSD TTC</option>
            <option value="Buaran">Buaran</option> 
            <option value="TBS">TBS</option>
        </select>
	</td></tr>
    <tr id="test"><td><label for="nam"><font color="white">ID Visitor</label></td><td><input  placeholder="ID Visitor" class="input" type="text" name="id_visitor" size="30" ></td></tr>
    <tr id="test3"><td><label for="name"><font color="white"></label></td><td><input   class="myButton" type="submit" name="simpan2" value="SIMPAN TAMU" ></td></tr>
    
	</table>
	</td>
	
	<td bgcolor="#CF000F" width="300px" valign="top"><img src="<?php echo $photo_url_cek ?>" width="300">
	</td>
	<td bgcolor="#CF000F" width="40%">
		<label for="name"><font color="white">No Visitor :<input placeholder="No Visitor" class="input" type="text" name="id_visitors" size="5" value="<?php echo $id_visitor_out ?>">
	    <input type="submit" class="myButton" id="cek" name="cek_out" value="Cari Tamu"></input></br>
	    
	    <label for="name"><font color="white">No.ID  :<?php echo $no_out ?></br>
	    <label for="name"><font color="white">Nama  :<?php echo $nama_out ?></br>
	    <label for="name"><font color="white">Alamat :<?php echo $tempat_out ?></br>
	    <label for="name"><font color="white">HP  :<?php echo $no_hp_out ?></br>
	    <label for="name"><font color="white">Keperluan  :<?php echo $keperluan_out ?></br>
	    <label for="name"><font color="white">Lantai  :<?php echo $lantai_out ?></br>
	    <label for="name"><font color="white">Tgl Masuk  :<?php echo $tgl_masuk_out ?></br>
	    <input type="submit" class="myButton"  name="check_out" value="Check Out"/>
       <?php
include('koneksi.php');
if(isset($_POST['check_out']))
{	
  $id =$_POST['id_visitors']; 

	      $update =mysql_query("UPDATE tbl_tamu SET tgl_keluar =now(), status='1' WHERE id_visitor = '$id'");

         if ($update == true) 
{ 
    echo "Cek out Success";
} 
else 
{ 
    echo "Check out Gagal";
     
				
	
	//header ("Location:index.php");			
} 
}
?> 
	</td>
	</table>
    </form>


<!--BARUUUU-->


<?php	
if(!empty($_POST['save'])){
include('koneksi.php');
$nama=stripslashes($_POST['nama']);
$tempat=stripslashes($_POST['tempat']);


$simpan=mysql_query("insert into tblmhs values(
	                                           '$_POST[jenis_id]',
	                                           '$_POST[nim]',
	                                           '$nama',
	                                           '$_POST[jk]',
	                                           '$tempat',now(),
	                                           '$_POST[no_hp]',
	                                           '$_POST[photo_url]',
	                                           '$_POST[alamat]')")
or die (mysql_error());
echo("<META HTTP-EQUIV=Refresh CONTENT=\"0.1;URL=index.php?last_id=$_POST[nim]\">");
echo $simpan;
}
?>

<?php
if(!empty($_POST['simpan2'])){
include('koneksi.php');

$photo =$_POST['photo_url'];


$simpan2=mysql_query("insert into tbl_tamu values(
	                                             '',
	                                             '$_POST[nim]',
	                                              now(),
	                                             '$tgl_keluar',
	                                             '$_POST[keperluan]',
	                                             '$_POST[id_visitor]',
	                                             '$_POST[photo_url]',
	                                             '$_POST[lantai]',
	                                             '$_POST[lokasi]',

	                                             '')") 
or die (mysql_error());
echo("<META HTTP-EQUIV=Refresh CONTENT=\"0.1;URL=index.php?last_id=$_POST[nim]\">");
}
?>