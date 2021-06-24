
<?php


 
$kaynak = file_get_contents("http://api.open-notify.org/astros.json");
$data = json_decode($kaynak);



$sayi=$data->number;

for($i=0;$i<$sayi;$i++){
$name=$data->people[$i]->name;

}
	//  açıklama satırı bu şekilde olabilir <!-- bu şekilde olabilir ya da /*    */ şeklinde olabilir.



