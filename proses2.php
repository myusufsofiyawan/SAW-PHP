<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php 

//baris1
if($_POST["C1"]==5)
{
$kriteria01 = 3/$_POST["C1"]*0.30;
$kriteria05 = 3/$_POST["C5"]*0.30;
$kriteria09 = 3/$_POST["C9"]*0.30;
$kriteria13 = 3/$_POST["C13"]*0.30;
$kriteria17 = 3/$_POST["C17"]*0.30;
}else
{
$kriteria01 = 1/$_POST["C1"]*0.30;
$kriteria05 = 1/$_POST["C5"]*0.30;
$kriteria09 = 1/$_POST["C9"]*0.30;
$kriteria13 = 1/$_POST["C13"]*0.30;
$kriteria17 = 1/$_POST["C17"]*0.30;
}
//baris2
if($_POST["C2"]==7)
{
$kriteria02 = 3/$_POST["C2"]*0.20;
$kriteria06 = 3/$_POST["C4"]*0.20;
$kriteria10 = 3/$_POST["C9"]*0.20;
$kriteria14 = 3/$_POST["C14"]*0.20;
$kriteria18 = 3/$_POST["C18"]*0.20;
} else
{
$kriteria02 = 1/$_POST["C2"]*0.20;
$kriteria06 = 1/$_POST["C4"]*0.20;
$kriteria10 = 1/$_POST["C9"]*0.20;
$kriteria14 = 1/$_POST["C14"]*0.20;
$kriteria18 = 1/$_POST["C18"]*0.20;
}
//baris3
$kriteria03 = 9800/$_POST["C3"]*0.25;
$kriteria07 = 9800/$_POST["C7"]*0.25;
$kriteria11 = 9800/$_POST["C11"]*0.25;
$kriteria15 = 9800/$_POST["C15"]*0.25;
$kriteria19 = 9800/$_POST["C19"]*0.25;

//baris4
$kriteria04 = $_POST["C4"]/2200*0.25;
$kriteria08 = $_POST["C8"]/2200*0.25;
$kriteria12 = $_POST["C12"]/2200*0.25;
$kriteria16 = $_POST["C16"]/2200*0.25;
$kriteria20 = $_POST["C20"]/2200*0.25;

$hjk=99;
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
      
	  <td width="14%"><div align="center"><?= $_POST["kriteria1"]?></div></td>
      <td width="20%"><div align="center"><?= $_POST["kriteria2"]?></div></td>
      <td width="20%"><div align="center"><?= $_POST["kriteria3"]?></div></td>
      <td width="22%"><div align="center"><?= $_POST["kriteria4"]?></div></td>

	  <td width="22%" bgcolor="#FFFF00"><div align="center">Total</div></td>
    </tr>
    <tr>
      <td><div align="center">1</div></td>
      <td><div align="center"><?= $_POST["data1"]; ?></div></td>
      <td><div align="center"><?= $kriteria01 ?></div></td>
      <td><div align="center"><?= $kriteria02 ?></div></td>
      <td><div align="center"><?= $kriteria03 ?></div></td>
      <td><div align="center"><?= $kriteria04 ?></div></td>
      <td bgcolor="#FFFF00"><div align="center"><?= $total1 = $kriteria01+$kriteria02+$kriteria03+$kriteria04?></div></td>
    </tr>
    <tr>
      <td><div align="center">2</div></td>
      <td><div align="center"><?= $_POST["data2"]; ?></div></td>
      <td><div align="center"><?= $kriteria05 ?></div></td>
      <td><div align="center"><?= $kriteria06 ?></div></td>
      <td><div align="center"><?= $kriteria07 ?></div></td>
      <td><div align="center"><?= $kriteria08 ?></div></td>
      <td bgcolor="#FFFF00"><div align="center"><?= $total2 = $kriteria05+$kriteria06+$kriteria07+$kriteria08?></div></td>
    </tr>
    <tr>
      <td><div align="center">3</div></td>
      <td><div align="center"><?= $_POST["data3"]; ?></div></td>
      <td><div align="center"><?= $kriteria09 ?></div></td>
      <td><div align="center"><?= $kriteria10 ?></div></td>
      <td><div align="center"><?= $kriteria11 ?></div></td>
      <td><div align="center"><?= $kriteria12 ?></div></td>
      <td bgcolor="#FFFF00"><div align="center"><?= $total3 = $kriteria09+$kriteria10+$kriteria11+$kriteria12?></div></td>
    </tr>
    <tr>
      <td><div align="center">4</div></td>
      <td><div align="center"><?= $_POST["data4"]; ?></div></td>
      <td><div align="center"><?= $kriteria13 ?></div></td>
      <td><div align="center"><?= $kriteria14 ?></div></td>
      <td><div align="center"><?= $kriteria15 ?></div></td>
      <td><div align="center"><?= $kriteria16 ?></div></td>
      <td bgcolor="#FFFF00"><div align="center"><?= $total4 = $kriteria13+$kriteria14+$kriteria15+$kriteria16?></div></td>
    </tr>
    <tr>
      <td><div align="center">5</div></td>
      <td><div align="center"><?= $_POST["data5"]; ?></div></td>
      <td><div align="center"><?= $kriteria17 ?></div></td>
      <td><div align="center"><?= $kriteria18 ?></div></td>
      <td><div align="center"><?= $kriteria19 ?></div></td>
      <td><div align="center"><?= $kriteria20 ?></div></td>
      <td bgcolor="#FFFF00"><div align="center"><?= $total5 = $kriteria17+$kriteria18+$kriteria19+$kriteria20?></div></td>
    </tr>
    <tr>
	
      <td colspan="7"><div align="right"></div></td>
    </tr>
  </table>
</form>
</body>
</html>
