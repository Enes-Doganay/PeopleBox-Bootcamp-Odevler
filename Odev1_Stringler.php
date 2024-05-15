<?php 
/*
1- Film açıklamasındaki baş harf hariç tüm harfleri küçük harfe çeviriniz.
2- Film açıklaması içindeki ilk 50 karakteri alarak sonuna "..." ekleyiniz. (substr) 
3- Her bir film için url bilgisini film başlığına göre oluşturunuz.    
4- "baslik" isminde bir sabit oluşturarak sayfanın h1 etiketinde kullanınız.
*/

$filmAciklamasi = "Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)";

$filmBasligi = "Paper Lives";

//1-
echo ucfirst(strtolower($filmAciklamasi)) . "<br>"; 

//2-
echo substr($filmAciklamasi, 0, 50) . "... <br>"; 

//3-
$filmUrl = strtolower(str_replace(" ","-",$filmBasligi));
echo $filmUrl . "<br>";

//4-
define("baslik", "Film Sayfası");
echo "<h1>". baslik . "</h1>"
?>