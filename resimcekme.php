<?php
include "baglan.php";

if(isset($_GET['id'])){
	$id=$_GET['id'];
	$sorgu=$db->query("select * from resimler where id= '$id'");
	While($cek = $sorgu->fetch(PDO::FETCH_ASSOC)){
		$resim_veri=$cek["resim"];
		}
		 header("content-type: image/png");
		echo $resim_veri;
}else{
	echo 'hata';
}

?>
