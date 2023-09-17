<?php
$a=5;
if($a=5){
  echo '$aは5です';

}
?>

<?php
$a=7;
if($a===5){
  echo '$aは5です';
  }else{
    echo '$aは5以外です';
  }

  echo '<br>';

  $a=7;
  if($a===5){
    echo '$aは5です';
  }elseif($a===3){
    echo '$aは3です';
    }else{
      echo '$aは7です';
    }

  echo '<br>';

  $a=7;
  $b=($a>5)?"TRUE":"FALSE";
  echo $b;
