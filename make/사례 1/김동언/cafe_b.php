<?php
  $num = count($_POST["menu"]); //체크한 개수가 넘어오고
  $num2 = count($_POST["count"]); //싹다 넘어오고
  $subnum = 0;

  $menu[] = array();
  $count[] = array();
  $size[] = array();
  $price[] = array();
  $total = 0;

  for($i=0; $i<$num; $i++){
    $menu[$i] = $_POST["menu"][$i];
  } //체크박스에서 땡겨온 메뉴를 배열에 넣

  for($i=0; $i<$num2; $i++){
    if($_POST["count"][$subnum] == 0 || ($_POST["count"][$subnum] == 0 && $menu[$i] == true)){
      $i--;
      $num2--;
      $subnum++;
      continue;
    }
    $count[$i] = $_POST["count"][$subnum];
    $size[$i] = $_POST["size"][$subnum];
    $subnum++;
  } //메뉴에 따른 잔수와 사이즈를 배열에 넣

  for($i=0; $i<$num2; $i++){
    if($menu[$i] == "americano"){
      if($size[$i] == "g"){
        $price[$i] = $count[$i] * (1300 + 500);
      }
      else {
        $price[$i] = $count[$i] * 1300;
      }
    }
    else if($menu[$i] == "latte"){
      if($size[$i] == "g"){
        $price[$i] = $count[$i] * (2800 + 500);
      }
      else {
        $price[$i] = $count[$i] * 2800;
      }
    }
    else if($menu[$i] == "icetea"){
      if($size[$i] == "g"){
        $price[$i] = $count[$i] * (2300 + 500);
      }
      else {
        $price[$i] = $count[$i] * 2300;
      }
    }
    else if($menu[$i] == "choco"){
      if($size[$i] == "g"){
        $price[$i] = $count[$i] * (2800 + 500);
      }
      else {
        $price[$i] = $count[$i] * 2800;
      }
    }
    $total += $price[$i];
  } //>>계산해서 배열에 넣

  echo "결재내역<br>
        ------------------------------------------------<br>";
  for($i=0; $i<$num2; $i++) {
    if($menu[$i] == "americano"){
      if($size[$i] == "t"){
        echo "아메리카노 ".$count[$i]."잔 (사이즈 : tall) >>  ".$price[$i]."원<br>";
      }
      else if($size[$i] == "g"){
        echo "아메리카노 ".$count[$i]."잔 (사이즈 : grande) >>  ".$price[$i]."원<br>";
      }
    }
    else if($menu[$i] == "latte"){
      if($size[$i] == "t"){
        echo "라떼 ".$count[$i]."잔 (사이즈 : tall) >>  ".$price[$i]."원<br>";
      }
      else if($size[$i] == "g"){
        echo "라떼 ".$count[$i]."잔 (사이즈 : grande) >>  ".$price[$i]."원<br>";
      }
    }
    else if($menu[$i] == "icetea"){
      if($size[$i] == "t"){
        echo "아이스티 ".$count[$i]."잔 (사이즈 : tall) >>  ".$price[$i]."원<br>";
      }
      else if($size[$i] == "g"){
        echo "아이스티 ".$count[$i]."잔 (사이즈 : grande) >>  ".$price[$i]."원<br>";
      }
    }
    else if($menu[$i] == "choco"){
      if($size[$i] == "t"){
        echo "초코 ".$count[$i]."잔 (사이즈 : tall) >>  ".$price[$i]."원<br>";
      }
      else if($size[$i] == "g"){
        echo "초코 ".$count[$i]."잔 (사이즈 : grande) >>  ".$price[$i]."원<br>";
      }
    }
  }
  echo "-----------------------------------------------<br>";
  echo "총합 : ".$total."원";
 ?>
