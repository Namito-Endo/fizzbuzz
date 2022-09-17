<?php
//編集済
for($x=1; $x<=100; $x++){
	if($x % 15 === 0){
	echo "fizzbuzz" . PHP_EOL;
	}elseif($x % 3 === 0){
	echo "fizz" . PHP_EOL;
	}elseif($x %5 === 0){
	echo "buzz" . PHP_EOL;
	}else{
	echo "$x" . PHP_EOL;
	}
}
?>

