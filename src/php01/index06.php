<?php
function text($number1,$number2){
  $value = $number1 + $number2;
  return $value;
}
$total = text(2,4);
echo $total;
?>

<?php

function exam($ten1,$ten2,$ten3){
  $total = $ten1+$ten2+$ten3;
  if($total > 210){
    echo $total.'点なので合格です';
    }else{
      echo $total.'点なので不合格です';
    }
  }
  echo (exam(80,60,90));
