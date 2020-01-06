<?php

	$product =$_POST["product"];
	$count   =$_POST["count"];
	$price   =0;


	if($count<0)
		echo "You cannot Enter negitive numbers";
	else if($product=="dress"){
		$price=$count*400;
		echo "Price = " . $price . "</br>";
		if($price<1000){
			$price -=(0.1*$price);
			echo "Price after sale = " . $price ;
		}
		elseif($price>=1000){
			$price -=(0.15*$price);
			echo "Price after sale = " . $price;
		}

	}
	else if($product=="shoes"){
		$price=$count*200;
		echo "Price = " . $price . "</br>";
		if($price<1000){
			$price -=(0.1*$price);
			echo "Price after sale = " . $price ;
		}
		elseif($price>=1000){
			$price -=(0.15*$price);
			echo "Price after sale = " . $price;
		}

	}
	else if($product=="handbag"){
		$price=$count*150;
		echo "Price = " . $price . "</br>";
		if($price<1000){
			$price -=(0.1*$price);
			echo "Price after sale = " . $price ;
		}
		elseif($price>=1000){
			$price -=(0.15*$price);
			echo "Price after sale = " . $price;
		}

	}
	else if($product=="jacket"){
		$price=$count*500;
		echo "Price = " . $price . "</br>";
		if($price<1000){
			$price -=(0.1*$price);
			echo "Price after sale = " . $price ;
		}
		elseif($price>=1000){
			$price -=(0.15*$price);
			echo "Price after sale = " . $price;
		}

	}
	else if($product=="pants"){
		$price=$count*300;
		echo "Price = " . $price . "</br>";
		if($price<1000){
			$price -=(0.1*$price);
			echo "Price after sale = " . $price ;
		}
		elseif($price>=1000){
			$price -=(0.15*$price);
			echo "Price after sale = " . $price;
		}

	}
	

?>