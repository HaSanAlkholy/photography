<?php

include "admin/functions/connect.php";


if(isset($_POST['submit'])){

    

    $query = "SELECT * FROM `info` WHERE `id` = 9 ";
    if ($res = mysqli_query($conn,$query)) :
    while ($row = mysqli_fetch_assoc($res)) :  
    
    
        $to = $row['val'];
    
    endwhile;
    endif;
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
		$qmessage = $_POST["message"];

    
    
    
    
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= "From: " . $name . "\r\n"; // Sender's E-mail
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
        $message ='<table style="width:100%">
            <tr>
                <td>'.$name.'  '.$email.'</td>
            </tr>
            <tr><td>Name: '.$name.'</td></tr>
            <tr><td>Messege: '.$message.'</td></tr>       
        </table>';
    
        if (@mail($to, $email, $message, $headers))
        {
            $query = "INSERT INTO `messages` (`id`, `name`, `email`, `message`) VALUES (NULL, '$name', '$email', '$qmessage')";
            if ($res = mysqli_query($conn,$query)) {
                        $msgerr = 0;
                         header("location: index.php#contact?msgerr=0");
                         exit();            
            }else{
                $msgerr = 2;  
                header("location: index.php#contact?msgerr=2");
                exit();      
            }
                         
        }else{
            $msgerr = 1;
            header("location: index.php#contact?msgerr=1");
            exit();      
        }
    

}

?>
