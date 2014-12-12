<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Report Buku Tamu</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    </head>
    
    <body>
        <div class="row" style="width:800px; margin:0 auto;">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <h2>Report Buku Tamu</h2>
                    <table id="tabelExport" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="7%">No.</th>
                                <th width="30%">Nama</th>
				                <th width="40%">Kota Asal</th>
                                <th width="23%">No. Hp</th>
								<th width="40%">Kota Asal</th>
                                <th width="23%">No. Hp</th>
                            </tr>
	                </thead>
	                <tbody>
	                <?php 
			        $i = 1;
	                $query = mysql_query("select m.nim,m.nama,m.tempat,m.photo_url,m.no_hp,m.alamat,t.no_id,t.tgl_masuk,t.keperluan,t.foto_wajah,t.lantai,t.id_visitor,t.status
          	                      FROM tblmhs m LEFT JOIN tbl_tamu t ON m.nim = t.no_id where t.no_id ");
					if($query === FALSE) {
                    die(mysql_error()); // TODO: better error handling
                    }			  
								  
	                while($fetch = mysql_fetch_array($query)) {
	                ?>
                            <tr>
                                <td><?php echo $fetch['no_id'];?></td>
        
								<td><?php echo $fetch['nama'];?></td>
								<td><?php echo $fetch['tempat'];?></td>
								<td><?php echo $fetch['no_hp'];?></td>
								<td><?php echo $fetch['keperluan'];?></td>
								<td><?php echo $fetch['lantai'];?></td>
       
                            </tr>
	                <?php 
                        $i++; 
			} ?>
	                </tbody>
                    </table>		  
	        </div>
                <button class="btn btn-primary" id="tombolExport">Export Excel</button>
            </div>
        </div><!-- /.row -->
	
	<script src="js/jquery-2.0.1.min.js"></script>
	<script src="js/jquery.base64.js"></script>
        <script src="js/jquery.btechco.excelexport.js"></script>
	<script>
            $(document).ready(function () {
                $("#tombolExport").click(function () {
                    $("#tabelExport").btechco_excelexport({
                        containerid: "tabelExport"
                       , datatype: $datatype.Table
                    });
                });
            });
	</script>
    </body>
</html>