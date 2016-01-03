<?php
#################Author#############
########Sunil Singh#################
####################################
class Customer {

	public $Age;
	/*
	* function to create magic method __constructor() 
	* 21 Dec 2015
	*/
	public function __construct() { // automatically called when object created
		 
		echo "Constructor created<br />";
	}
	/*
	* function to create magic method __get()
	* 21 Dec 2015
	*/
	public function __get($var) { // when unaccessible data called from object 
 
       echo "Unavailable $var<br />";
    }
    /*
	* function to create magic method __call()
	* 21 Dec 2015
	*/
    public function __call($method,$argument) {
       echo "method is not defined <br />";
    }
    /*
	* function to create magic method __toString() 
	* 21 Dec 2015
	*/
    public function __toString() { ##It allows you to set a string value for the object that will 
    	                           ##be used if the object is ever used as a string
        echo "to string";
    }
     /*
	* function to create magic method __callStatic() 
	* Use its use when any not acceessible method call statically
	* 23 Dec 2015
	*/
    public static function __callStatic($name, $arguments) {
        // Note: value of $name is case sensitive.
        
             echo implode(', ', $arguments). "\n";
    }
     /*
	* function to create magic method __debugInfor() 
	* Use when any not acceessible method call statically
	* 23 Dec 2015
	*/
    public function __debugInfo() {
        return [
            'propSquared' => $this->prop ** 2,
        ];
    }

  
     

}

 $ob = new Customer(); ##Constructor created
 $ob->email ;  ##Unavailable email
 $ob->Age = 5;
 $ob->display(); ##method is not defined
// echo $ob; // to string
 ##Method Customer::__toString() must return a string value in D:\xampp\htdocs\developers\magic_method\index.php on line 30 
 ## after that use error_reporting();
 echo Customer::test('hello Static method testing');