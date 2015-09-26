<?php 

/*$website = "www.w3schools.com";
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
 echo  $websiteErr = "Invalid URL";
} else {
	echo "valid url";
}*/

 /* function getReferralCat($refCatId = null) {

    	$refCat = array(1 => 'Mojopay', 2 => 'TotalApps', 3 => 'Twt2pay', 4 => 'VideoCheckout');
    	//.magic($refCat);

    	if ( !empty($refCatId) ) {
    		$explode = explode(',',$refCatId);
    		//$final = array();

    		foreach($explode as $key=>$value){
    			$final[] = $refCat[$value];
    		}
    		return implode(', ', $final);
    	}
		return $refCat;
    }
 function magic($var){
 	echo "<pre>";
 	print_r($var);
 	echo "</die>";
 	die;
 }   
    // $refCatId = '1,2,3,4';
    magic(getReferralCat('1,2,3,4'));*/

//create function with an exception
/*function checkNum($number) {
  if($number>1) {
    throw new Exception("Value must be 1 or below");
  }
  return true;
}

//trigger exception
checkNum(2);*/
//create function with an exception
class customException extends Exception {
  public function errorMessage() {
    //error message
    $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
    .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
    return $errorMsg;
  }
}

$email = "someone@example.com";

try {
  //check if
  if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
    //throw exception if email is not valid
    throw new customException($email);
  }
  //check for "example" in mail address
  if(strpos($email, "example") !== FALSE) {
    throw new Exception("$email is an example e-mail");
  }
}

catch (customException $e) {
  echo $e->errorMessage();
}

catch(Exception $e) {
  echo $e->getMessage();
}

?>
