<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="../spk/program/metro/css/metro-bootstrap.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php 
	//ambil batas kriteria dari jumlah kriteria awal
	$kriteria   = $_POST["kriteria"];
	
	
	//ambil data text field "nama jenis kriteria" dalam array looping & checkbox
	for($v=1;$v<=$kriteria;$v++)
	{
		$data_kriteria[$v] 	 = $_POST["kriteria".$v];
		$data_checkbox[$v]   = $_POST["checkbox".$v];
		$data_persentase[$v] = $_POST["persentase".$v];
		$data_select[$v]	 = $_POST["select".$v];
	}
	
?>
<form action="input3.php" method="post" name="form1">
<div style="margin-top: 200px">
<table width="30%" border="0" cellspacing="0" cellpadding="5" align="center">
  <tr>
    <td align="center">Jumlah Data </td>
    </tr>
  <tr>
    <td align="center"><input type="text" name="data" /></td>
    </tr>
  <tr>
    <td align="center"> <input type="submit" name="Submit" value="Submit" style="opacity:0;"/></td>
  	
	<input type="hidden" name="kriteria" value="<?php echo $kriteria; ?>"  />
	<?php
		//kirimkan data textfield dari "nama jenis kriteria" hidden looping
		for($ee=1;$ee<=$kriteria;$ee++){	
	?>
	<input type="hidden" name="<?= "kriteria".$ee ?>" value="<?php echo $data_kriteria[$ee]; ?>"  />
	<input type="hidden" name="<?= "checkbox".$ee ?>" value="<?php echo $data_checkbox[$ee]; ?>"  />
	<input type="hidden" name="<?= "persentase".$ee ?>" value="<?php echo $data_persentase[$ee]; ?>"  />
	<input type="hidden" name="<?= "select".$ee ?>" value="<?php echo $data_select[$ee]; ?>"  />
	<?php } ?>
  </tr>
</table>
</div>
</form>
</body>
</html>
