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
####################
   /* $str = 'abcd';
    $strlen = strlen($str);
    for ( $i = 0; $i <= $strlen; $i++ ) {
      $char = substr( $str, $i, 1 );
      echo $char."<br>";
    }
##################
   $str = 'abcd';
   $strlen = strlen($str);
   for ( $i = $strlen; $i >= 0; $i-- ) {
      $char = substr( $str, $i, 1 );
      echo $char."<br>";
    }*/

##############
  /*  function doSomething( &$arg ) { // pass by referrence
      $return = $arg; // pass by value not pass by referrence becasue here not &arg;
      $return += 1;
      // $arg += 1;
      return $arg;
    }

    $a = 3; // 
    echo doSomething( $a ); // 4*/

/*class SomeClass {
    protected $_someMember;

    public function __construct() {
        $this->_someMember = 1;
    }
    public function test() {
      echo "Hello";
    }

    public  function getSomethingStatic()
    {   
        //$this->test();
        return $this->_someMember * 5; // static method can't use object property
    }
}
//echo SomeClass::getSomethingStatic(); //Fatal error: Using $this when not in object context in D:\xampp\htdocs\developers\array\index.php on line 78
*/
##################
/*$string = "This is a reversed string";
echo strrev($string);*/
###########
/*$str1 = "yabadabadoo";
$str2 = "yaba";

if (strpos($str1,$str2)) { // 0
    echo "\"" . $str1 . "\" contains \"" . $str2 . "\"";
} else {
    echo "\"" . $str1 . "\" does not contain \"" . $str2 . "\"";
}*/

############33
/*$x = 5;
echo $x; //5
echo "<br />";
echo $x++ + $x++; // 11
echo "<br />";
echo $x; //7
echo "<br />";
echo $x-- - $x--; //1
echo "<br />";
echo $x; // 5
*/
#########
/*$a = '1';
$b = &$a;
$b = "2$b";
echo $a; // 21*/
#######
/*$text = 'John ';
$text[10] = 'Doe';
echo $text;
*/
###############
/*$array = array(  
  '0' => 'z1',
  '1' => 'Z10',
  '2' => 'z12',
  '3' => 'Z2',
  '4' => 'z3',
);*/
$array = array(2,1,5);  
// after short 
/*array(
  '0' => 'z1',
  '3' => 'Z2',
  '4' => 'z3',
  '1' => 'Z10',
  '2' => 'z12',
);*/
 //sort($array); // short array only values assending order
 //asort($array); // short array key and values  assending order
 //ksort($array); // short array key assending order
 //krsort($array); // short value in descending order acoording to key 


/*foreach ( $array as $key => $value ) {
  echo "$key => $value<br />";  
}
$str = "working with php";

echo ucwords($str);  //Working With Php
echo ucfirst($str); // Working with php
*/
################
/*echo "<pre>";
//print_r(array_merge($myarray1,$myarray2));
print_r(array_combine($myarray1,$myarray2)); // both array have same parameter*/

#############
//echo json_encode($myarray2); //[1,2,3]
###############
//$serialyze = serialize($myarray2);//a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}
//$unserialize = unserialize($serialyze);// Array ( [0] => 1 [1] => 2 [2] => 3 ) 

/*class myclass
{
  public function test() { 
    return 'level 112';
  }
}
class myclass2 extends myclass {
  public function test() {
   echo "Lovely";
  }
}
class myclass3 extends myclass2 {
  public function test() { 
    return parent::test() ;
  }
}
$example = new myclass3();
echo $example->test(); // should display Lovely*/

#############

/*$string    = "ITI";
$newstring = "";
for ($i = strlen($string)-1; $i >= 0; $i--) {
  
  $newstring .= $string[$i];
}
if( strtolower($string) == strtolower($newstring) ) {
  echo "String is palindrome!";
} else {
  echo "String is not palindrome!";
}*/
#############
/*class LinkedObject
{
    var $value;
    var $prev;
    var $next;

    public function __construct($value, $prev = null, $next = null)
    {
        $this->value = $value;
        $this->prev  = $prev;
        $this->next  = $next;
    }

    public function append(LinkedObject $insertee)
    {
        $link = $this;
        while($link->next != null)
            $link = $link->next;

        $link->next = $insertee;
        $insertee->prev = $link;
    }

    public function __toString()
    {
        $str = $this->value;
        if($this->next != null)
        {
            $str .= " » ";
            $str .= $this->next;
        }
        return $str;
    }
}

$head = new LinkedObject("foo");
$head->append(new LinkedObject("bar"));
$head->append(new LinkedObject("baz"));
$head->append(new LinkedObject("mahi"));
echo $head . "\n"; // output is "foo » bar » baz » mahi"*/

#################
/*$array = array(10,9,8,5,17,16,15,25,24,23,22,21,20,19,14,13,12,34,33,90);

$mycount    = 0;
$arr_desc_order = array();

for($i=0; $i < count($array); $i++){

  if($i == 0){
      $arr_desc_order[$mycount][] = $array[$i];
  }else{
    if($array[$i-1] < $array[$i]){
      $mycount++;
    }
    $arr_desc_order[$mycount][]     = $array[$i];
  }

}

// Find the array with maximun number of elements
$arr_elemt = $count= 0;
foreach($arr_desc_order as $arr){
  if(count($arr) > $arr_elemt){
  $arr_elemt = $count;
  }
  $count++;
}

echo "<pre>";
print_r($arr_desc_order[$arr_elemt]);
echo "</pre>";*/
##########################
/**
* Return URL-Friendly string slug
* @param string $string
* @return string
*/
/*function seoUrl($string) {
 
    //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ‘ ( )
    $string = strtolower($string);
     
    //Strip any unwanted characters
    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
     
    //Clean multiple dashes or white spaces
    $string = preg_replace("/[\s-]+/", " ", $string);
     
    //Convert whitespaces and underscore to dash
    $string = preg_replace("/[\s_]/", "-", $string);
    return $string;
 
}
echo seoUrl('dfdjk?werty=123');*/
############
/*if (print("Hello World")) { //Hello World1
  print "1";
}*/
####################
/*$ducks = "12 ducks and 13 ducklings"; Type Juggling
$result = $ducks + 10; //22
var_dump($result);*/
##############
/*$array = array(
  'elephant' => 1,
  'tiger' => 0,
  'cat' => 1
);
var_dump(in_array('mouse', $array));
*/
###########
/*$x='foo';
if ($x='bar') {
  echo('Result #1');
} else {
  echo('Result #2');
}
 */
################
/*class Foo {
  private $num;
  public function __construct($num) {
    $this->num = $num;
  }
  public function get_num() {
    return $this->num;
  }
}
 
$a = new Foo(1);
$b = &$a;
$a = new Foo(2);
 
var_dump($b->get_num());*/
###################
 function __autoload($Class) {
        print "Bad class name: $Class!\n";
        include "barclass.php";
    }

    $foo = new Bar;
    $foo->wombat();