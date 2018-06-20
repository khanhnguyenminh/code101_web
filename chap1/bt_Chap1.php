<?php
	$a= 11;
	echo "a là: ".$a."<br>";
	function tinhGiaiThua($a)
	{
		$gt=1;
		for($i=1; $i <=$a; $i++)
			$gt *=$i;
		return $gt;
	}
	echo "kết quả giai thừa: ".tinhGiaiThua($a)."<br>";


	function kTSoNguyenTo($a)
	{
		for($i =2 ; $i <=sqrt($a);$i++)
		{
			if ($a % $i == 0) {
				return "không phải là số nguyên tố";
			}
		}
		return "Là số nguyên tố";
	}
	echo "a ".kTSoNguyenTo($a)."<br>";


	$arr = "nguyen minh khanh";
	echo "chuỗi ký tự là: ".$arr."<br>";
	echo "Số ký tự trong chuỗi: ".strlen($arr)."<br>";


	$arrSN = [4,5,9,4,5,3,7,1];
	echo "chuỗi ban đầu: ";
	print_r($arrSN);

	function sapXepMangSN($arrSN)
	{
		for ($i=0; $i < count($arrSN)-1; $i++) { 
			for ($j=$i+1; $j<count($arrSN) ; $j++) { 
				if($arrSN[$i] < $arrSN[$j])
				{
					$temp = $arrSN[$i];
					$arrSN[$i]=$arrSN[$j];
					$arrSN[$j] =$temp;
				}
			}
		}
		print_r($arrSN);
	}
	echo "<br> chuỗi đã sắp xếp: ";
	print_r(sapXepMangSN($arrSN));

	$b=9;
	echo "<br>"."<h3>Bảng cửu chương</h3>";
	function inBangCuuChuong($b)
	{
		echo "<table>";
		for ($i=2; $i <= $b ; $i++) {
			echo "<td>";
			for ($j=2; $j<=$b ; $j++) { 
			 	echo $i." x ". $j." = ".$i*$j."<br>";

			 }
			 echo "</td>";
		}
		echo "</table>";
	}
	echo inBangCuuChuong($b);
?>
<style type="text/css">
	
	td{
		padding: 5px;
		padding-left: 10px;
		border: 0;
	}

</style>
