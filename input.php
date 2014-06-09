<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="../spk/program/metro/css/metro-bootstrap.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
//ambil batas jumlah kriteria
$kriteria = $_POST["kriteria"];
?>

<form action="input2.php" method="post" name="form1">
<div style="margin-top: 200px">
  <table width="70%" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td width="5%"><div align="center">No</div></td>
      <td width="25%"><div align="center">Nama Jenis Kriteria </div></td>
      <td width="10%"><div align="center">Persentase</div></td>
      <td width="10%"><div align="center">Bobot </div></td>
      <td width="10%"><div align="center">Gunakan Nilai Bobot </div></td>
    </tr>
    <?php 
		// looping per-baris
		for($o=1;$o<=$kriteria;$o++)
		{
	?>
    <tr>
      <td><div align="center"><?php echo $o; ?></div></td>
      <td><div align="center">
        <input name="<?=  "kriteria".$o?>" type="text" size="40" />
      </div></td>
      <td><div align="center">
        <input name="<?=  "persentase".$o?>" type="text" size="2" />
        %</div></td>
      <td><div align="center">
          <select name="<?= "select".$o?>">
            <option value="Min">Min</option>
            <option value="Max">Max</option>
          </select>
      </div></td>
  
      <td><div align="center">
        <input type="checkbox" name="<?= "checkbox".$o?>" value="Ya"/>
      Ya</div></td>
      <?php
		}
		?>
   </tr>
    <tr>
      <td colspan="5"><input type="submit" name="submit" value="submit" style="opacity:0;" /></td>
    <?php 
		//pengiriman data
	?>  				 
	<input type="hidden" name="kriteria" value="<?php echo $kriteria; ?>"  />	 
	  </tr>
  </table>
</div>
</form>
</body>
</html>
