<?php 

 

DEFINE('DB_HOST','localhost');
DEFINE('DB_USER','su');
DEFINE('DB_PWD','P@ss123');
DEFINE('DB_NAME','isa052');


$connect=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME) or die($connect);
 
$filename =("http://geodata.grid.unep.ch/api/countries/KE/variables/331");
$data=file_get_contents($filename);
$array=array();
$array=json_decode($data,true);
foreach ($array as $row) {
     # code...
     $sql ="INSERT INTO tb_isa052 (iso_2,year,value)VALUES ('".$row["iso-2"]."','".$row["year"]."','".$row["value"]."')";  
        }     
 

mysqli_query($connect,$sql)
?>