<?php	
error_reporting(E_ALL ^ E_NOTICE);
include('koneksi.php');
$nim =$_POST['nim'];
$result = mysql_query("SELECT * FROM tblmhs WHERE nim  = '$nim'");
$test = mysql_fetch_array($result);
if(isset($_POST['cek']))
{
		          
					$nama_cek=$test['nama'] ;
					$jk_cek=$test['jk'] ;
					$tempat_cek=$test['tempat'];
				    $no_hp_cek=$test['no_hp'] ;
					$photo_url_cek=$test['photo_url'] ;					
					
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
<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic+SC' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
<style> 

.back { 
background: url('background.png') no-repeat center center fixed;

-moz-background-size: cover;

-webkit-background-size: cover;

-o-background-size: cover;

background-size: cover;

} 

</style>

</head>
<body class="back" >
	
	<form name="f_ktm" method="POST" class="pure-form pure-form-aligned" >
	<table border="0" style="border:1px; "  align="center">
	<tr ><td class="header" align="center">
	<font face="mistral" size="10px" color="white"><b>Aplikasi Buku Tamu</b></font><br/>
<a href="http://localhost/idcard/list2.php" class="pure-button pure-button-primary">Daftar Tamu</a>
	</tr>

	<tr><td  width="50%" valign="top" align="center"red
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
		document.write( webcam.get_html(400,250) );
	</script>
	
	<!-- Some buttons for controlling things -->
	<br/></form>

	<form>
		<input class="pure-button pure-button-primary" type="button" value="Konfigurasi..." onClick="webcam.configure()">
		&nbsp;&nbsp;
		<input class="pure-button pure-button-primary" type="button" id="ambil_photo" value="Ambil Photo" onClick="take_snapshot()">
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
	<td valign="top" width="50%" align="center"> 
		<div id="upload_results"></div>
		<div id="print_area"><?php if(!empty($_GET['last_id'])){
	//echo "<iframe src=\"idcard.php?id=$_GET[last_id]\" width=\"500\" height=\"300\" frameborder=\"no\"></iframe>";
	}
	?>

	</div>
		</td></tr>
	<tr valign="top" >
	
	<td  class="">
		
	<table  >
	<div>
	<tr valign="top"><td><label for="name"><font color="white">No ID</font></label></td><td><input placeholder="KTP / SIM" class="input" type="text" name="nim"  size="30" value="<?php echo $id_cek ?>"></td>
	
	<td rowspan="1">
	 <input type="submit" class="pure-button pure-button-primary" id="cek" name="cek" value="Check"></input>
	<input type="submit" class="pure-button pure-button-primary" id="simpan" name="simpan" value="Simpan"/>
	
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
	<tr><td><label for="name"><font color="white">No.HP</label></td><td><input class="input" name="no_hp" size="40" value="<?php echo $no_hp_cek ?>"></td></tr>
	</td></tr>

	</table>
	</td>
	
	<td
	width="300px" valign="top"><img src="<?php echo $photo_url_cek;?>" width="300">
	</td>
	</table>
</form>


<!--BARUUUU-->


<?php	
if(!empty($_POST['simpan'])){
include('koneksi.php');
$nama=stripslashes($_POST['nama']);
$tempat=stripslashes($_POST['tempat']);


$simpan=mysql_query("insert into tblmhs values('$_POST[nim]','$nama','$_POST[jk]','$tempat',now(),'$_POST[no_hp]','$_POST[photo_url]')") or die (mysql_error());
echo("<META HTTP-EQUIV=Refresh CONTENT=\"0.1;URL=index.php?last_id=$_POST[nim]\">");
}
?>
</body>
</html>