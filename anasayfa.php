<html>
<body>
<style type="text/css"> <!---
#header {float:center;width:900px;background-color:#ccc;height:100px;margin-bottom:15px;}
  <div id="main">
.box{display:inline-block;}
--> </style>
<?php 
include "baglan.php";
$sorgu = $db->prepare("SELECT COUNT(*) FROM resimler");
$sorgu->execute();
$t = $sorgu->fetchColumn();

if($t>3){
	$gri=$db->query("SELECT * FROM `grid` WHERE `id` LIKE '1'")->fetch(PDO::FETCH_ASSOC);
	$say=$gri['grid'];
	$gri1=$db->query("SELECT * FROM `grid` WHERE `id` LIKE '2'")->fetch(PDO::FETCH_ASSOC);
	$say2=$gri1['grid'];
@session_start(); 
$a2=$say;
$a3=$say2;
$_SESSION['fuck']=$a2;
$_SESSION['bitch']=$a3;
$test1=$db->query("SELECT * FROM `resimler` WHERE `id` LIKE '$say'")->fetch(PDO::FETCH_ASSOC);
if($test1 >0){
	$p1=$test1['puan'];
}
$test2=$db->query("SELECT * FROM `resimler` WHERE `id` LIKE '$say2'")->fetch(PDO::FETCH_ASSOC);
if($test2 >0){
	$p2=$test2['puan'];	
}
if($say==$say2 || $say==0 || $say2==$t || $say>$t || $say2>$t){
    $w=$t-1;
    $say=rand(1,$w);
    $say2=rand(1,$w);
    if($say==$say2){
        echo'<meta http-equiv="refresh" content="1;URL=anasayfa.php">';
        
    }else{
        $t33=$db->query("UPDATE `grid` SET `grid` = '$say2' WHERE `grid`.`id` = 2");
        $t3=$db->query("UPDATE `grid` SET `grid` = '$say' WHERE `grid`.`id` = 1");
        echo'<meta http-equiv="refresh" content="1;URL=anasayfa.php">';
    }
	//echo'<meta http-equiv="refresh" content="1;URL=anasayfa.php">';
	
	return ;
}else{
    //burası ilk if in else si ve başarılı artık kurtarıcı php ye ihtiyacımız kalmadı :D
}
  ?> 
 <br>
<title>
ANALOG
</title>
<head>
<style type="text/css"> <!--
#box{height:450px;width:390px;border: 1px ;background-color:#ccc;margin:3px ;display:inline-block;}
#sidebar {float:left;background-color:#ccc;display:inline-block;}
--> </style>
</head>
<center><p>
</p>
<div id="box"><input type="image" value="submitimg" src=resimcekme.php?id=<?php echo $say; ?> onClick="location.href=`http://localhost/finish/puanlama.php`" width="390" height="450" ></div>
<div id="box"><input type="image" value="submitimg" src=resimcekme.php?id=<?php echo $say2; ?> onClick="location.href=`http://localhost/finish/puanlama2.php`" width="390" height="450"></div>
<br>
</p>
<?php
if($p1>$p2){
	echo'Bu resmin puanı='.$p1;
	echo " > ";
	echo'Bu resmin puanı='.$p2;
}elseif($p1==$p2){
	echo'Bu resmin puanı='.$p1;
	echo " = ";
	echo'Bu resmin puanı='.$p2;
}else{
	echo'Bu resmin puanı='.$p1;
	echo " < ";
	echo'Bu resmin puanı='.$p2;
}
}else{
	echo "yeterli fotoğraf yok";
}
//max php yi düzenlemeyi unutma '<img src="https://s0.2mdn.net/5585042/_728x90_pc_2016_3.png" alt="Advertisement" border="0" width="728" height="90">'
//ad blocc lar resim oldugunda inanıyor aq salaklıarı
?>
<body bgcolor="grey">
<!--<div id="header"><input type="image" src="py.png" alt="Advertisement" onClick="location.href=`http://www.python.org`" border="0" width="728" height="90"></div>-->
<h2><input type="submit" onClick="location.href='resimyukle.html'" value='Sende yükle'/></h2>
<p><b>Bu bir <a href="https://www.instagram.com/seyithan99/"target="_blank">Seyithan YILDIZ </a>ürünüdür.</b></p>
<p><b>Bu bir deneme sürümüdür gerçek sürüm ile neler geleceğini ve ne zaman gelecegini ogrenmek için  <a href="http://seyithan2.blogspot.com.tr"target="_blank">Takipde kalın </a>.</b></p>
</center>
</body>
</html>
