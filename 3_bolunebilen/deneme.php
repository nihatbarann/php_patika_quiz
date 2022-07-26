<?php

if(isset($_POST['gonder'])){

$sayi=$_POST['sayi'];

function hesapla($sayi){
  global $sayi;
if($sayi % 3 == 0){

	echo "bu sayı 3 e tam bölünür";
}
else {
	$fark=$sayi % 3;

	if($fark==1){$sayi+=2;}
	else if($fark==2) {	$sayi++;}

	echo "sayı 3 e tam bölünemez bölüneek ilk sayı =" .$sayi;
}

}
hesapla($sayi);
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>
 	</title>
 </head>
 <body>
 <form action="" method="post">

 	<label>Lütfen bir sayı giriniz :</label>
 	<input type="text" name="sayi" required>
 	<button type="submit" name="gonder">hesapla</button>
 	
 </form>
 </body>
 </html>