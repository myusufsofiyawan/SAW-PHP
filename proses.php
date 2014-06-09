<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="../spk/program/metro/css/metro-bootstrap.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
$data = $_POST["data"];
$kriteria = $_POST["kriteria"];
$bn=1;
$data_kriteria[1] = $_POST["kriteria1"];
$data_kriteria[2] = $_POST["kriteria2"];
$data_kriteria[3] = $_POST["kriteria3"];
$data_kriteria[4] = $_POST["kriteria4"];


$nama_data1=$_POST["data1"];
echo $nama_data1;
?>

<form action="" method="post" name="form1">
<div style="margin-top: 200px">
  <table width="50%" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td width="5%"><div align="center">No</div></td>
      <td width="25%"><div align="center">Alternatif Data </div></td>
      <?php for($u=1;$u<=$kriteria;$u++)
	  {
	  ?>
	  <td width="10%"><div align="center"><?php echo $data_kriteria[$u]?></div></td>
      <?php
	  }
	  ?>
	  </tr>
    <?php 
		for($o=1;$o<=$data;$o++)
		{
		?>
    <tr>
      <td><div align="center"><?php echo $o; ?></div></td>
      <td><div align="center"><?php echo $nama_data1; ?></div></td>
	  <?php
		for($ox=1;$ox<=$kriteria;$ox++)
		{
		?>
      <td><div align="center">
        <div align="center">
          <input name="<?=  "C".$bn?>" type="text" size="8" />
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
</form>
</body>
</html>
