<form action="imageuploadtest.php" method="POST" enctype="multipart/form-data">
<title>
ANALOG
</title>
<head>
<head/>
<body bgcolor="grey">
<center><p>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script></br>
<input type="file" name="image" onchange="$('#resim')[0].src = window.URL.createObjectURL(this.files[0])"/> </br>
<br><img id="resim" type="button"  width="390" height="450" /></br>
<br><input type="submit" name="submit" value="Yükle" />
<br>
 <center/>
</form>
<?php 
include "baglan.php";
	if(isset($_POST['submit'])){
  $imageName = $_FILES["image"]["name"];
  $imageData = @file_get_contents($_FILES["image"]["tmp_name"]);
  $imageType = $_FILES["image"]["type"];
  if($_FILES["image"]["type"]=="image/jpeg"||$_FILES["image"]["type"]=="image/png" ||$_FILES["image"]["type"]=="image/jpg"){
			if(substr($imageType,0,5)=="image"){
     $db3 = $db->prepare("INSERT INTO resimler set resim=?");
     $db3->execute(array($imageData));
	 header("location: http://localhost/finish/anasayfa.php");
  }			else{echo "bi hata oluştu veya resim formatınız jpeg değil";} 
 }		else{echo "bi hata oluştu veya resim formatınız jpeg değil";}
}	else{echo "bi hata oluştu";}/* 
	 $uret=array("as","rt","ty","yu","fg");
			$uzanti=substr($dosya_adi,-4,4);
			$sayi_tut=rand(1,10000);
			$yeni_ad="resimler/".$uret[rand(0,4)].$sayi_tut.$uzanti;
			//Dosya yeni adıyla dosyalar klasörüne kaydedilecek
			if (move_uploaded_file($_FILES["image"]["tmp_name"],$yeni_ad)){
			echo 'Dosya başarıyla yüklendi.';}
			else{echo "kaydedilmedi";}*/

?>