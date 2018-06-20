<?php
	echo "helloworld";
	$a=10;
	$b=15;
	if($a>$b){
		echo " đáp án là: ".$a;
	}
	else{
		echo "\nđáp án là: ".$b;
	}


	$thang =3;

	// switch ($thang) {
	// 	case 'value':
	// 		# code...
	// 		break;
		
	// 	default:
	// 		# code...
	// 		break;
	// }

	$arr =[1,2,3,4,5];
	$sum= 0;
	for($i=0;$i<count($arr);$i++)
	{
		echo $arr[$i];
		$sum += $arr[$i];
	}
	echo $sum;


?>