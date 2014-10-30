<?php
if(isset($_POST["submit"])){
//Checking for blank Fields..
    if($_POST["vemail"]==""||$_POST["vzip"]==""){
        echo "Fill All Fields..";
    }else{
// Check if the "Sender's Email" input field is filled out
        $email=$_POST['vemail'];

        // Sanitize e-mail address
        $email =filter_var($email, FILTER_SANITIZE_EMAIL);

        // Validate e-mail address
        $email= filter_var($email, FILTER_VALIDATE_EMAIL);

        if (!$email){
            echo "Invalid Sender's Email";
        }
        else{
            $zip = $_POST['vzip'];
            $focusarea = $_POST['focusarea'];

            // message lines should not exceed 70 characters (PHP rule), so wrap it
            $url = 'https://api.parse.com/1/classes/getupdates';
            $appId = 'yVjYjEx1SN7YTAkALF07teCzVeG906SnADSlrSEa';
            $restKey = 'pGaZrwDkhm0A31dziZMWtTi6ip8C8IbtgQHdoCgd';
            $headers = array(
                "Content-Type: application/json",
                "X-Parse-Application-Id: " . $appId,
                "X-Parse-REST-API-Key: " . $restKey
            );
            $objectData = "{\"email\":\"$email\", \"zip\":\"$zip\", \"focusarea\":\"$focusarea\"}";
            $rest = curl_init();
            curl_setopt($rest,CURLOPT_URL,$url);
            curl_setopt($rest,CURLOPT_POST,1);
            curl_setopt($rest,CURLOPT_POSTFIELDS,$objectData);
            curl_setopt($rest,CURLOPT_HTTPHEADER,$headers);
            curl_setopt($rest,CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($rest,CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($rest);
            //echo $response;
            //print_r($response);
            curl_close($rest);
            // Send mail by PHP Mail Function
            //mail("vijay.sirohi@gmail.com", "User added", "Contact us");
            echo "Thank you for your subscription";
        }
    }
}
?>