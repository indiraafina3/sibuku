<?php
function average ($data){
$total=0;
foreach ($data as $d) {
	$total = $total + $d;
}
return $total/count($data);}
$data = ['apel','ikan',9];
echo average($data);