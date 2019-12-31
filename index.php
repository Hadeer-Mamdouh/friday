<h1> Hello Route </h1>


<?php
	//printing code
 	//echo "Welcome to Route <br/>";


 	/*data types
	 string (any name or characters)
	 intring(any number 11234   -12345)
	 double / float (any decimal number 2233.99)
	 char (one characters)
	 boolean( true or false any thing have two chocie)
	 array ( contain a gruop of data like string integer float and i don't knowne their numbers  )
	
	*/
    
	 $name    ="Hadeer";      //string
	 $age     =26; 			  //integer
	 $salary  =3450.50;       //double
	 $type    =true;          //boolean
	 $name   .="Mamdouh";

	 echo "Name:  " .  $name . "  " . gettype($name) . "<br/>" ;
	 echo "Age: " . $age . "  " . gettype($age) . "<br/>" ;
	 echo  "Salary: " . $salary . "  " . gettype($salary). "<br/>" ;
	 echo "Type: " . $type . "  " .gettype($type);
    
    echo "<hr/>";             //Horizontal row
       

	 $num1  =30;
	 $num2  =6;


	 $result  =$num1 + $num2;  //Addition
	 echo $result . "<br/>  ";

	  $result  =$num1 - $num2;  //Subtraction
	 echo $result . "<br/>  ";

	  $result  =$num1 * $num2;  //Multiply
	 echo $result . "<br/>  ";

	  $result  =$num1 / $num2;  //Divide
	 echo $result . "<br/>  ";


     echo "<hr/>";             //Horizontal row
   //-------------------------------------------------------------------------------------------------
    // if condition
   //---------------------------------------------------------------------------------------------- 
     $grade=95;

     if ($grade>=90 && $grade<=100) {
              echo "A+";
              } 
     elseif ($grade>=80 && $grade<90) {
              echo "B+";
             }   
     elseif ($grade>=70 && $grade<80) {
          	 echo "c+";
          } 
     elseif ($grade>=60 && $grade<70) {
     	 echo "D+";
     }
     else{
     	 echo "F";

     }

     echo "<hr/>";             //Horizontal row
     
     $kid1   ="boy";
     $kid2   ="girle";

     if ($kid1=="boy" && $kid2=="boy") {
     	echo "Car <br/>";
     }
     elseif($kid1=="boy" && $kid2=="girle") {
     	echo "Moto <br/>";
     }
     elseif($kid1=="girle" && $kid2-="boy") {
     	echo "Tok tok <br/>";
     }
     else if ($kid1=="girle" && $kid2-="girle"){
     	echo "Mirror <br/>";
     }

     echo "<hr/>";             //Horizontal row
    //-----------------------------------------------------------------------------------
     // for loop
    //-----------------------------------------------------------------------------------
     for($i=1;$i<7;$i++){
     	if ($i!=2) {
     		echo  $i .  "   " ." Hadeer <br/>";
     	}
      
     }
  
     echo "<hr/>";             //Horizontal row

     // for loop

     for($i=1;$i<7;$i++){
     	if ($i==3) {

     		continue;          //not echo when i=3 
     	}
     	else{
       
             echo  $i .  "   " ." Hadeer <br/>";

     	}
     
     }
     echo "<hr/>";             //Horizontal row
    
    //moduls  (reminder)

     for($i=1;$i<=100;$i++){
     	if ($i%5==0) {
     		echo "Boom <br/>";

     	}
      else{
      	echo $i . "<br/>";
       }
     }

    echo "<hr/>";             //Horizontal row

    $result=0;
    for($i=1;$i<=9999;$i++){
     	if ($i%2!=0 &&  $i%5!=0) {
     		
     		$result=$result+$i;

        }
     		     
    }
   echo "result=   " . $result . "<br/>";

    echo "<hr/>";             //Horizontal row

  //-------------------------------------------------------------------------------
   //Array
 //---------------------------------------------------------------------------------

  	$cars=array("KIA","Mer","Chev","BMW");
   	for($i=0;$i<count($cars);$i++){

      if($cars[$i]!="Mer"){
      	  echo $cars[$i] . "<br/>";
      }
      else{
      	continue;
      }

   }

     echo "<hr/>";             //Horizontal row
   $cars=array("KIA","Mer","Chev","BMW");
   	for($i=count($cars)-1;$i>=0;$i--){

      if($cars[$i]=="Mer"){
      	continue;
      }
      
        echo $cars[$i] . "<br/>";
      

   }

//--------------------------------------------------------------------------
   //While loop
//--------------------------------------------------------------------------
    $num1=0;
    while ( $num1<= 100) {
       if ($num1%5==0) {
     		echo "Boom <br/>";

     	}
      else{
      	echo $num1 . "<br/>";
       }
       $num1++;
    }
//-----------------------------------------------------------------------------
    //foreach 
//-----------------------------------------------------------------------------

    
?>