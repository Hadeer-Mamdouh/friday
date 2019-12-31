<?php
//-------------------------------------------------------------------------------------
//1-Days Translator
//--------------------------------------------------------------------------------------
$day1="الاربعاء";

if($day1=="السبت"){
	echo"Satarday";
}
elseif($day1=="الاحد"){
	echo"Sunday";
}
elseif($day1=="الاثنين"){
	echo"Monday";
}
elseif($day1=="الثلاثاء"){
	echo"Tuesday";
}
elseif($day1=="الاربعاء"){
	echo"wendnesday";
}
elseif($day1=="الخميس"){
	echo"Thrursday";
}
elseif($day1=="الجمعه"){
	echo"Friday";
}

echo"<hr/>";

//------------------------------------------------------------------------------------
//2-Login page
//--------------------------------------------------------------------------------------
$userName="tariq";
$password="789";
if(gettype($userName)=='string' && gettype($password)=='string'){
     	if($userName=="ahmed" && $password=="123"){
     		echo "User Name is " . $userName . " and password is " . $password ;
     	}
     	else if($userName=="tariq" && $password=="789"){
     		echo "User Name is " . $userName . " and password is " . $password ;
     	}
     	else{
 	echo "Check your user name and password";
        }
     }
     else{
 	echo "Wrong user name and password";
        }
 
 echo "<hr/>"; 
//--------------------------------------------------------------------------------------
//3-Tester
//--------------------------------------------------------------------------------------

     $test=array(1.4,6.78,9);

     if(gettype($test)=='string'){
     	echo $test;
     }
     elseif (gettype($test)=='boolean') {
     	if($test==true){
     		echo "Yes";
     	}
     	else{
     		echo "No";
     	}
     }

     elseif (gettype($test)=='integer') {
     	$test+=5;
     	    echo $test;
     }
     elseif (gettype($test)=='double') {
     	$test=$test*7;
     	echo $test;
     }
     else
     	echo "Error";


?>