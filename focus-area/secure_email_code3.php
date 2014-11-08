<?php
//Checking for blank Fields..
    if($_POST["participationOption"]==""){
        $output = array(
            "message" => "choose one of the options",
            "messageId"=> "4",
            "status" => "ValidationError"
        );
        echo json_encode($output);
    }else{
        //if($_POST["options"]==""&&$_POST["options1"]!="")
        //{
        //    $options = $_POST["options1"];
        //}
        //elseif($_POST["options"]!=""&&$_POST["options1"]=="")
        //{
        //    $options = $_POST["options"];
        //}
        //$selected_radio = $_POST['gender'];
        //echo $_POST["options1"];
        $participationOption = $_POST["participationOption"];
        //echo $options1;

// Check if the "Sender's Email" input field is filled out
        $name=$_POST['name'];
        $email =$_POST['email'];
        $phone = $_POST['phone'];
        $profession = $_POST['profession'];
		$orgType = $_POST['orgType'];
        $message = $_POST['message'];
        $selectedtopics="";

        if ($_POST['All']=="on")
            $selectedtopics = 'All';
        else {
            if ($_POST['JobsandEmployment']=="on")
            {
                if ($selectedtopics != "")
                    $selectedtopics .="__";
                $selectedtopics .="Jobs and Employment";

            }
            if ($_POST['EnterpriseTradeandIndustry']=="on")
            {
                if ($selectedtopics != "")
                    $selectedtopics .="__";
                $selectedtopics .="Enterprise Trade and Industry";
            }
            if ($_POST['WomenRightsSafety']=="on")
            {
                if ($selectedtopics != "")
                    $selectedtopics .="__";
                $selectedtopics .="Women Rights (Safety)";
            }
            if ($_POST['SanitationandSolidWasteMgmt']=="on")
            {
                if ($selectedtopics != "")
                    $selectedtopics .="__";
                $selectedtopics .="Sanitation and Solid Waste Mgmt";
            }
            if ($_POST['SocialWelfareandSocialJustice']=="on")
            {
                if ($selectedtopics != "")
                    $selectedtopics .="__";
                $selectedtopics .="Social Welfare and Social Justice";
            }
            if ($_POST['Transportation']=="on")
            {
                if ($selectedtopics != "")
                    $selectedtopics .="__";
                $selectedtopics .="Transportation";
            }
            if ($_POST['EnergyandElectricity']=="on")
            {
                if ($selectedtopics != "")
                    $selectedtopics .="__";
                $selectedtopics .="Energy and Electricity";
            }
            if ($_POST['Education']=="on")
            {
                if ($selectedtopics != "")
                    $selectedtopics .="__";
                $selectedtopics .="Education";
            }
            if ($_POST['Health']=="on")
            {
                if ($selectedtopics != "")
                    $selectedtopics .="__";
                $selectedtopics .="Health";
            }
            if ($_POST['LandandHousing']=="on")
            {
                if ($selectedtopics != "")
                    $selectedtopics .="__";
                $selectedtopics .="Land and Housing";
            }
            if ($_POST['RuralDelhi']=="on")
            {
                if ($selectedtopics != "")
                    $selectedtopics .="__";
                $selectedtopics .="Rural Delhi";
            }
            if ($_POST['Water']=="on")
            {
                if ($selectedtopics != "")
                    $selectedtopics .="__";
                $selectedtopics .="Water";
            }


        }

        // Sanitize e-mail address
        $email =filter_var($email, FILTER_SANITIZE_EMAIL);

        // Validate e-mail address
        $email= filter_var($email, FILTER_VALIDATE_EMAIL);

        if (!$email){
            $output = array(
                "message" => "Email is invalid!",
                "messageId"=> "1",
                "status" => "ValidationError"
            );
            echo json_encode($output);
        }
        else{

            // message lines should not exceed 70 characters (PHP rule), so wrap it
            $url = 'https://api.parse.com/1/classes/submission';
            $appId = 'yVjYjEx1SN7YTAkALF07teCzVeG906SnADSlrSEa';
            $restKey = 'pGaZrwDkhm0A31dziZMWtTi6ip8C8IbtgQHdoCgd';
            $headers = array(
                "Content-Type: application/json",
                "X-Parse-Application-Id: " . $appId,
                "X-Parse-REST-API-Key: " . $restKey
            );
            $objectData = "{\"email\":\"$email\", \"name\":\"$name\", \"phone\":\"$phone\", \"profession\":\"$profession\",\"participationOption\":\"$participationOption\",  \"orgType\":\"$orgType\", \"message\":\"$message\",\"topics\":\"$selectedtopics\"}";
             //,  }";
            $rest = curl_init();
            curl_setopt($rest,CURLOPT_URL,$url);
            curl_setopt($rest,CURLOPT_POST,1);
            curl_setopt($rest,CURLOPT_POSTFIELDS,$objectData);
            curl_setopt($rest,CURLOPT_HTTPHEADER,$headers);
            curl_setopt($rest,CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($rest,CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($rest);

            //print_r($response);
            curl_close($rest);
            // Send mail by PHP Mail Function
            mail("delhidialogue@aamaadmiparty.org", "User Registrered", $participationOption);
            $output = array(
                "message" => "Thanks for registering with us!",
                "messageId"=> "3",
                "status" => "Completed"
            );
            //$output = array_merge( $output, $response );
            echo json_encode($output);
        }
    }
?>