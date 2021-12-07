<?php
$num = count($_POST["menu"]);
$result = 0;
echo "<h4><주문서></h4>";
for ($i=0; $i<$num; $i++) {
  echo $_POST["menu"][$i];
  if($_POST["menu"][$i] == "아메리카노"){
    echo $_POST["count1"]."잔";
    echo "(사이즈 : ".$_POST["size"].")";
    if($_POST["size"] == "small")
      $result = $result + (1000 * $_POST["count1"]);
    elseif($_POST["size"] == "meddle")
      $result = $result + (1300 * $_POST["count1"]);
    else {
      $result = $result + (1500 * $_POST["count1"]);
    }
  }
  elseif ($_POST["menu"][$i] == "라떼"){
    echo $_POST["count2"]."잔";
    $result = $result + (1500 * $_POST["count2"]);
  }
  elseif ($_POST["menu"][$i] == "아이스티"){
    echo $_POST["count3"]."잔";
    $result = $result + (1000 * $_POST["count3"]);
  }
  else{
    echo $_POST["count4"]."잔";
    $result = $result + (1500 * $_POST["count4"]);
  }
  if($i != $num - 1)
    echo "<br>";
}
echo "<br>총합계 : ".$result."원";

?>
