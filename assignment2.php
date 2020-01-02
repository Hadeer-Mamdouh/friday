<?php
//---------------------------------------------------------------------------
//1-search
//---------------------------------------------------------------------------
    $films=array("Fast","Predestination","Persuit","Avatar","Prestige");
    for ($i=0; $i <count($films) ; $i++) { 
    	if ($films[$i]=="Avatar") {
            echo "Found";
    		break;
    	
    	}
        
    }
    echo "<hr/>";
//-----------------------------------------------------------------------------
    //2-Counting
//-----------------------------------------------------------------------------
    
    $films1=array("Avatar","Prestige","Avatar","Prestige");

     $numOfRepet1=0;
     $numOfRepet2=0;
     for ($i=0; $i <count($films1) ; $i++) { 
    	if ($films1[$i]=="Avatar") {
    		$numOfRepet1=$numOfRepet1+1;
    		
    	}
    	elseif($films1[$i=="Prestige"]){
    		$numOfRepet2=$numOfRepet2+1;
    		
     }
    
    	}
    	 echo "Avatar   = " . $numOfRepet1;
         echo "Prestige = " . $numOfRepet2;
    echo "<hr/>";
//------------------------------------------------------------------------------
    //3-reverse
//------------------------------------------------------------------------------

     $films2=array("Avatar","Prestige","Avatar","Prestige");
       for ($i=count($films2)-1; $i >=0 ; $i--) { 

       	echo $films2[$i] . " - ";
       }
        echo "<hr/>";

//--------------------------------------------------------------------------------
        //4-Boolean
//--------------------------------------------------------------------------------
    $boolean=array(1,"tariq",1.5,true,7,"s",false);
      for($i=0;$i<count($boolean);$i++){
        if($boolean[$i]===true || $boolean[$i]===false){
           if($boolean[$i]===true){
            echo "Yes";
           }
           else if($boolean[$i]===false){
            echo "No";
           }
        }
        else{
            echo $boolean[$i] . "  ";
        }
      }

     echo "<hr/>";
 
    $num1=0;
    while ( $num1< count($boolean)) {
      if($boolean[$num1]===true || $boolean[$num1]===false){
           if($boolean[$num1]===true){
            echo "Yes";
           }
           else if($boolean[$num1]===false){
            echo "No";
           }  
        }
        else{
            echo $boolean[$num1] . "  ";
        }
       $num1++;
    }
     echo "<hr/>";
    
//---------------------------------------------------------------------------------
    //5-max
//---------------------------------------------------------------------------------
     
     $test=array(5,4,9,3,1,7,5,8,6);
     $max=$test[0];
     for($i=0;$i<count($test);$i++){
        if($test[$i]>$max){
            $max=$test[$i];
        }
     }
     echo "Max = " . $max;
      echo "<hr/>";
//---------------------------------------------------------------------------------
    //6-Sum
//---------------------------------------------------------------------------------
     $sum=0;
     $tests= array(5,4,9,3,1,7,5,8,6);
     for ($i=0; $i <count($tests) ; $i++) { 
         $sum=$sum+$tests[$i];
     }
     echo "Sum = " . $sum;
     echo "<hr/>";
//---------------------------------------------------------------------------------
   //7-average
//----------------------------------------------------------------------------------

     $sum1=0;
     $test1= array(9,4,6,3,12,8,7);
     for ($i=0; $i <count($test1) ; $i++) { 
         $sum1=$sum1+$test1[$i];
     }
    $average=$sum1/count($test1);
    echo "Average = " . $average;
    echo "<hr/>";
//-----------------------------------------------------------------------------------
   //8-sorting
//------------------------------------------------------------------------------------
    
    $num=0;
    for ($i=0; $i <count($test1) ; $i++){
       for ($j=$i; $j >0 ; $j--) { 
          if($test1[$j]<$test1[$j-1]){
             $num=$test1[$j];
             $test1[$j]=$test1[$j-1];
             $test1[$j-1]=$num;
          }
       }
    }

    for ($i=0; $i <count($test1) ; $i++) { 
        echo $test1[$i] . "  ";
    }
     echo "<hr/>";
//-------------------------------------------------------------------------------------
   //9-same value 
//-------------------------------------------------------------------------------------        
     $arr1=array('a','b','c','d');
     $arr2=array('c','d','e','f');
    
     for ($i=0; $i <count($arr1) ; $i++) { 
         for ($j=0; $j <count($arr2) ; $j++) { 
             if($arr1[$i]==$arr2[$j]){
               echo $arr1[$i] ; 
             }
         }
     }

     echo "<hr/>";

?>
