
<?php
$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++) {
  if ($i % 15 == 0) {
    echo $FizzBuzz;
  } else if ($i % 3 == 0) {
    echo $Fizz;
  } else if ($i % 5 == 0) {
    echo $Buzz;
  } else {
    echo $i;
  }
}

<?php
for($i = 1; $i <= 50; $i++){
  if($i%3==0){
    echo 'Fizz';
  }
  if($i%5==0){
    echo 'Buzz';
  }
  if($i%3==0 && $i%5==0){
    echo 'FizzBuzz';
  }else{
    echo $i;
  }
  echo '<br>';

}
?>

 echo '<br>';
