<?php

$arr[0]=$_POST["j1"];
$arr[1]=$_POST["j2"];
$arr[2]=$_POST["j3"];
$arr[3]=$_POST["j4"];
$cnt[4]=array(0,0,0,0);
$num = count($_POST["usub"]);
$index =0;
$price=0;
$sum=0;
echo "<table border='1' cellspacing='2' >";
 echo "<tr>";
   echo "<th>";
echo "주문서";
echo "<br>";
  echo "</th>";
echo "</tr>";
for ($i=0; $i<4; $i++) {
 if($arr[$i]!=0){
   $cnt[$index]=$arr[$i];
   $index++;
 }
}
for ($i=0; $i<$num; $i++) {
  echo "<tr>";
  echo "<td>";
 echo $_POST["usub"][$i];
 echo $cnt[$i];
 echo "잔: ";

 if($_POST["usub"][$i]=="아메리카노"){
   if($_POST["size"]=="small"){
     $price=1000*$cnt[$i];
   $sum+=$price;
   echo $price."원";
   echo "</td>";
  echo "</tr>";}
   if($_POST["size"]=="mid"){
     $price=1500*$cnt[$i];
   $sum+=$price;
   echo $price."원";
   echo "</td>";
  echo "</tr>";}
   if($_POST["size"]=="big"){
     $price=2000*$cnt[$i];
   $sum+=$price;
   echo $price."원";
   echo "</td>";
  echo "</tr>";}
 }
 if($_POST["usub"][$i]=="라떼"){
$price=2500*$cnt[$i];
$sum+=$price;
echo $price."원";
echo "</td>";
echo "</tr>";
 }
 if($_POST["usub"][$i]=="아이스티"){
$price=3000*$cnt[$i];
$sum+=$price;
echo $price."원";
echo "</td>";
echo "</tr>";
 }
 if($_POST["usub"][$i]=="초코"){
   $price=3500*$cnt[$i];
   $sum+=$price;
   echo $price."원";
   echo "</td>";
  echo "</tr>";
 }
 echo "<br>";
}
echo "<tr>";
echo "<td>";
echo "총합 :          ";
echo $sum;
echo "</td>";
echo "</tr>";
echo "</table>";
 ?>
<style type="text/css">
       table {
         width: 100%;
         border-top: 1px solid #444444;
         border-collapse: collapse;
       }
       th, td {
         border-bottom: 1px solid #444444;
         padding: 20px;
         text-align: center;
       }
       th {
background-color: yellow;
}
td {
background-color: green;
}
</style>
