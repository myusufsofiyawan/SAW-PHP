<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="../spk/program/metro/css/metro-bootstrap.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
	//ambil jumlah batas data
	$data 	  		  = $_POST["data"];
	
	//ambil jumlah batas kriteria
	$kriteria 		  = $_POST["kriteria"];
	$bn=1;

	//ambil nama jenis kriteria & checkbox & persentase
	for($xc=1;$xc<=$kriteria;$xc++)
	{
		$data_kriteria[$xc]   = $_POST["kriteria".$xc];
		$data_checkbox[$xc]   = $_POST["checkbox".$xc];
		$data_persentase[$xc] = $_POST["persentase".$xc];
		$data_select[$xc] 	  = $_POST["select".$xc];
	}

?>

<form action="proses2.php" method="post" name="form1">
<div style="margin-top: 200px">
  <table width="50%" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td width="5%"><div align="center">No</div></td>
      <td width="25%"><div align="center">Alternatif Data </div></td>
      <?php 
	  	//tampilkan nama jenis kriteria
	  	for($u=1;$u<=$kriteria;$u++){
	  ?>
	  <td width="10%"><div align="center"><?php echo $data_kriteria[$u]?></div></td>
      <?php }  ?>
	  </tr>
   	  <?php 
	  	//looping per-baris
		for($o=1;$o<=$data;$o++)
		{
	  ?>
    <tr>
      <td><div align="center"><?php echo $o; ?></div></td>
      <td><div align="center">
        <input name="<?=  "data".$o?>" type="text" size="20" />
      </div></td>
	  <?php
	  	//looping isi-an kriteria
		for($ox=1;$ox<=$kriteria;$ox++)
		{
		?>
      <td><div align="center">
        <div align="center">
		<?php
			if($data_checkbox[$ox]=="Ya"){
		?>
		  <select name="<?=  "C".$bn?>">
		  	<option value="1">Rendah</option>
			<option value="2">Sedang</option>
			<option value="3">Tinggi</option>
		  </select>
		<?php
		} else {
		?>
          <input name="<?=  "C".$bn?>" type="text" size="8" />
		<?php }?>
		
		</div>
      </div></td>
      <?php $bn++; } ?>
	  <?php
		}
		?>
   </tr>
    <tr>
      <td colspan="3"><input type="submit" name="submit" value="submit" style="opacity:0;" /></td>
      </tr>
  </table>
</div>
<?php 
//lempar kriteria
for($ns=1;$ns<=$kriteria;$ns++){
?>
<input type="hidden" value="<?php echo $data_kriteria[$ns] ?>" name="<?php echo "kriteria".$ns ?>"  />
<input type="hidden" value="<?php echo $data_persentase[$ns] ?>" name="<?php echo "persentase".$ns ?>"  />
<input type="hidden" value="<?php echo $data_select[$ns] ?>" name="<?php echo "select".$ns ?>"  />
<?php } ?>
<input type="hidden" value="<?php echo $data?>" name="data"  />
<input type="hidden" value="<?php echo $kriteria?>" name="kriteria"  />
</form>
</body>
</html>