<?php
mysql_connect("localhost","root","") or die("Koneksi Gagal");
mysql_select_db("ktm") or die("Database Tidak Ditemukan");



if(isset($_POST['submit']))
{	
   $id =$_GET['no_id']; 

	      mysql_query("UPDATE input SET activity ='$activity_save',
	          
								      
									  WHERE no_id = '$id'")
				or die(mysql_error()); 
	
	header ("Location:list2.php");			
}
mysql_close($conn);
					

?>