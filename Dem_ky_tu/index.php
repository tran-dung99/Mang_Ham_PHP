<?php
$string = "Toi la nguoi Viet nam";
$character = "i";
$count = 0;
for($i = 0; $i < strlen($string);$i++ ){
  if($string[$i] == $character) {
      $count += 1;
  }
}
echo "số lần xuất hiện của ".$character." là ".$count;
?>
