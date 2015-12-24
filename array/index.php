<?php
	##1
    $myarray1 = array(1,2,3);
	$myarray2 = array(1,2,3);
	$myarray3 = array(7,8,9);
	$single_merged_array = array_merge($myarray1,$myarray2,$myarray3);
    //$sort = sort($single_merged_array);
    //print_r($single_merged_array);
    ## 2
    //print_r(array_diff($myarray1, $myarray2)); // Array ( [2] => 3 ) compare value only
    ##3
    //print_r(array_diff_assoc($myarray1, $myarray2)); // Array ( [2] => 3 ) compare key value
    ##4
    //print_r(array_intersect($myarray1, $myarray2)); // Array ( [0] => 1 [1] => 2 ) common value
    ##5
    //print_r(array_keys($myarray1)); // Array ( [0] => 0 [1] => 1 [2] => 2 ) return key
    ##6
    //rint_r(array_values($myarray1)); // Array ( [0] => 0 [1] => 1 [2] => 2 ) return values
    ##7
    //echo implode($myarray1); // 123 string
    ##8
    //print_r(array_chunk($myarray1,2)); // Array ( [0] => Array ( [0] => 1 [1] => 2 ) [1] => Array ( [0] => 3 ) )  break array into chunks
    ##9
    //print_r(array_unique($myarray2)); // Array ( [0] => 1 [1] => 2 ) return unique array
    ##10
    //print_r(array_replace($myarray2,array(2),array(25))); //Array ( [0] => 25 [1] => 2 [2] => 3 ) 


 /* $array = array(1,2,3);
   foreach ( $array as $add ) {
    if($add==1) {
        $arrayy[] = $add+2;
    }
     if($add==2){
        $arrayy[] = $add+3;
    }
     if($add==3) {
        $arrayy[] = $add+4;
    }
   }
   echo "<pre>";
   print_r( $arrayy );*/

   $str = 'abcd';
   $strlen = strlen($str);
   for( $i = 0; $i <= $strlen; $i++ ) {
    $char = substr( $str, $i, 1 );
    echo $char."<br>";
    }


?>