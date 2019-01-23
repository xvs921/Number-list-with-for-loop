<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>
<form>
	Add meg az első számértékét: <br />
	<input type="number" name="input_elso"><br />
	Add meg a második szám értékét: <br />
	<input type="number" name="input_masodik"><br />	
	<input type="submit" value="Közte lévő számok">
</form>
<?php
if (isset($_GET["input_elso"]) and 
	!empty($_GET["input_elso"]) and  
	is_numeric($_GET["input_elso"]) and
	isset($_GET["input_masodik"]) and 
	!empty($_GET["input_masodik"]) and
	is_numeric($_GET["input_masodik"]) 
	){
		$elsoszam=$_GET["input_elso"];
		$masodikszam=$_GET["input_masodik"];
		if($elsoszam<$masodikszam){
		$kulonbseg=$masodikszam-$elsoszam;
		$kiirt=$elsoszam+1;
		for($i=0;$i<$kulonbseg-1;$i++){
				echo $kiirt.", ";
				$kiirt++;
			}
		}
		else{
			$kulonbseg=$elsoszam-$masodikszam;
			$kiirt=$masodikszam+1;
			for($i=0;$i<$kulonbseg-1;$i++){
				echo $kiirt.", ";
				$kiirt++;
			}
		}
	}
?>
<hr>
</body>
</html>