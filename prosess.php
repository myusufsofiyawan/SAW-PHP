<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php 

//ambil batas data & kriteria
$data= $_POST["data"];
$kriteria = $_POST["kriteria"];
$bn=1;
$an=1;

//ambil isi
for($mn=1;$mn<=$data*$kriteria;$mn++){
$data_array[$mn] = $_POST["C".$mn];
}

//rumus max min
$max=$data_array[1];
$min=$data_array[1];
for($lo=1;$lo<=$data*$kriteria;$lo++){
	  if($data_array[$lo]>=$max){
	  	$max=$data_array[$lo];}
		else
	  if($data_array[$lo]<=$min){
	  	$min=$data_array[$lo];}
}


//ambil array
for($kk=1;$kk<=$kriteria;$kk++)
{
	$data_kriteria[$kk]   = $_POST["kriteria".$kk];
	$data_persentase[$kk] = $_POST["persentase".$kk];
	$data_select[$kk] 	  = $_POST["select".$kk];
}

/*buat array kriteria
for($hu=1;$hu<=$data;$hu++){
	$data_baris.$hu[$hu]=$data_array[$an];
	$an=$an+$kriteria;
}*/

//coretan
for($hx=1;$hx<=$kriteria*$data;$hx++){
	$hx=$hx+$kriteria;
}
//baris1
$kriteria1 = 3/$_POST["C1"]*0.30;
$kriteria5 = 3/$_POST["C5"]*0.30;
$kriteria9 = 3/$_POST["C9"]*0.30;
$kriteria13 = 3/$_POST["C13"]*0.30;
$kriteria17 = 3/$_POST["C17"]*0.30;

//baris2
$kriteria2 = 3/$_POST["C2"]*0.20;
$kriteria6 = 3/$_POST["C4"]*0.20;
$kriteria10 = 3/$_POST["C9"]*0.20;
$kriteria14 = 3/$_POST["C14"]*0.20;
$kriteria18 = 3/$_POST["C18"]*0.20;

//baris3
$kriteria3 = 9800/$_POST["C3"]*0.25;
$kriteria7 = 9800/$_POST["C7"]*0.25;
$kriteria11 = 9800/$_POST["C11"]*0.25;
$kriteria15 = 9800/$_POST["C15"]*0.25;
$kriteria19 = 9800/$_POST["C19"]*0.25;

//baris4
$kriteria4 = $_POST["C4"]/2200*0.25;
$kriteria8 = $_POST["C8"]/2200*0.25;
$kriteria12 = $_POST["C12"]/2200*0.25;
$kriteria16 = $_POST["C16"]/2200*0.25;
$kriteria20 = $_POST["C20"]/2200*0.25;

?>


<body>
<form id="form1" name="form1" method="post" action="">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="80%" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td width="6%"><div align="center">No</div></td>
      <td width="18%"><div align="center">Alternatif Data</div></td>
      
	  <?php //tampilkan nama kriteria 
	  	for($km=1;$km<=$kriteria;$km++){?>
	  <td><div align="center"><?php echo $data_kriteria[$km];?></div></td>
	  <?php } ?>
	  
	  <td width="22%" bgcolor="#FFFF00"><div align="center">Total</div></td>
    </tr>
	<?php
		//looping perbaris
		for($sis=1;$sis<=$data;$sis++){	
	?>
    <tr>
      <td><div align="center"><?= $sis; ?></div></td>
      <td><div align="center"><?= $_POST["data".$sis]; ?></div></td>
      <?php
	  	//looping rumusan
		for($nsi=1;$nsi<=$kriteria;$nsi++){
	  ?>
	  <td><div align="center">
	  <?php 
	  echo $data_array[$bn]*($data_persentase[$nsi]/100)//." ".$data_select[$nsi]." ".$min.$max;?>
	  </div></td>
	  <?php $bn++ ;}?>
      <td bgcolor="#FFFF00"><div align="center"><?= $total1 = $kriteria01+$kriteria02+$kriteria03+$kriteria04?></div></td>
    </tr>
	<?php
		}
	?>
      </table>
</form>
</body>
</html>

