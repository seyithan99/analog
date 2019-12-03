<?php
//fuck id 1
include "baglan.php";
@session_start(); 
$a1=$_SESSION['fuck'] ;
$test1=$db->query("SELECT * FROM `resimler` WHERE `id` LIKE '$a1'")->fetch(PDO::FETCH_ASSOC);
if($test1 >0){	
$aa=1;
$gri=$db->query("SELECT * FROM `grid` WHERE `id` LIKE '2'")->fetch(PDO::FETCH_ASSOC);
	$say=$gri['grid'];
	$v=$say+$aa;
	$p1=$test1['puan'];
	$d=$p1+$aa;
	$t1=$db->query("UPDATE `resimler` SET `puan` = '$d' WHERE `resimler`.`id` = $a1");
	$t33=$db->query("UPDATE `grid` SET `grid` = '$v' WHERE `grid`.`id` = 2");
	if($t1){
	 header("location: http://localhost/finish/anasayfa.php");
	}
}else{
	echo 'ya allah';
}
?>