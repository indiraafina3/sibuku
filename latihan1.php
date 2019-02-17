<?php
//ini adalah contoh komentar di PHP
echo "Belajar PHP itu sangat mudah";
echo "<br>";

//cara membuat variabel
$full_nama = "Indira";
$age = 17;
echo "Nama saya $full_nama , umur saya $age";
echo "<br>";
echo 'Nama saya '.$full_nama.' , umur saya '.$age;
echo "<br>";

$angka1=10;
$angka2=9;
echo $angka1-$angka2;
echo "<br>";

$nama ="unknown";
$nama .="akbar";

echo $nama;
echo "<br>";

$nilaiMahasiwa=60;
$grade="";
if ($nilaiMahasiwa>90 and $nilaiMahasiwa<100) {
	$grade="A";
	}elseif ($nilaiMahasiwa>80) {		
	$grade="B";
	} else{$grade="D";}
echo $grade;

echo "<br>";
$channelTV=1;
switch ($channelTV) {
	case 1:
		echo "indosiar";
		break;
	case 2:
	echo "MNC TV";
		break;
		default:
		echo "unknown channel";
		break;
}

echo "<hr>";
//cara membuat array (1)
$cats= array('persia','anggora','spinyx');
print_r($cats);
//cara membuat arrat (2)
echo "<hr>";
$fruits = array();
$fruits [2]="Mangga";
$fruits [1]="Orange";
$fruits [9]="Banana";
print_r($fruits);

//cara membuat elemen array
echo $fruits [1];

echo "<hr>";

$colors= array('red','yellow','blue');
print_r($colors);

echo "<hr>";
$students=array (
	array('nim'=>'TI890','nama'=>'Akbar'),
	array('nim'=>'TI768','nama'=>'Hafidz'),
	array('nim'=>'TI567','nama'=>'Wahyu'),
	);
echo "<pre>";
print_r($students);
echo "</pre>";

echo $students[1]['nama'];
echo "<hr>";

$Pendidikan = array('sd','smp','sma' );
print_r($Pendidikan);

echo "<hr>";
$Pendidikan = array();
$Pendidikan ['sd']="Sekolah Dasar";
$Pendidikan ['smp']="Sekolah Menengah Pertama";
$Pendidikan ['sma']="Sekolah Menengah Atas";
echo "<pre>";
print_r($Pendidikan);
echo "</pre>";

//menghitung jumlah array
echo count($Pendidikan);

echo "<hr>";
//looping for
for($i=1;$i<=10;$i++) {
	echo "Angka ke - $i";
	echo "<hr>";}

foreach ($fruits as $fruit)  {echo $fruit;}

echo "<hr>";

foreach ($students as $student) {
	//print_r($student);
	//echo "<hr>";
	echo $student ['nama'];
}


echo "<hr>";
//contoh build in function php
//strtoupper ('nuris');

//cara membuat function
function sayhello($nama=null) {return"hallo".$nama;}

//cara memanggil function
sayhello("Nuris Akbar");

function perhitungan($angka1, $angka2, $operator) {
	if ($operator=='-') {
		return $angka1-$angka2;
	}elseif ($operator=='+'){ 
		return $angka1+$angka2;
	}elseif ($operator=='*') {
		return $angka1*$angka1;
	}elseif ($operator=='/') {
		return $angka1/$angka2;
	}else return null;}



echo perhitungan(1,10,'*');

$string ="Halo dunia";
$pecah = explode (' ',$string);
print_r($pecah);

$arrData=array('Hello','Dunia');
print_r(implode('-', $arrData));


?>