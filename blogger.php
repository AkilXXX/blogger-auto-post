<?php
/*
<? BY AKIL 
$TELEGRAM = @AKIL828 , @FFFFFFM ;  
$MY_BLOG = www.hacktools.tk ; 
$MY_website = www.akil.ga ;
?>
*/


function bloggerposter($blogid,$authorization,$title,$htmlcod){

  $daaataa = array(
    'kind' => 'blogger#post',
    'blog' => array('id' => $blogid),
    'title' => $title,
    'content' => $htmlcod
                     );                     
  $gg = [
      "authorization: $authorization",
      'Accept: application/json',
      'Content-Type: application/json',
         ];
  
  $url = 'https://www.googleapis.com/blogger/v3/blogs/'.$blogid.'/posts/';
  $pro = curl_init();
  curl_setopt_array($pro,array(
    CURLOPT_URL => $url,
    CURLOPT_HTTPHEADER => $gg,
    CURLOPT_POST => 1,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => json_encode($daaataa),
    ));
     
   $ree = curl_exec($pro);   //echo $ree;
   $response = json_decode($ree);
   $arr = array();
   $arr["josn"] = $response;
   
    if(isset($response->error->code)){	            
      $arr["code"] = $response->error->code; //print_r($response);  echo "errooooor";      
      $arr["sis"] = false;	    
      return $arr;	
      exit();      
      
	 }	  
   $arr["sis"] = true;	 // print_r($response);
   return $arr;	
}

/*
<? BY AKIL 
$TELEGRAM = @AKIL828 , @FFFFFFM ;  
$MY_BLOG = www.hacktools.tk ; 
$MY_website = www.akil.ga ;
?>
*/
