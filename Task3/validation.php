<?php 
    $validatepassword   = "";
    $validatecomment    = "";
    $validateradio      = "";
    $validatecheckbox   = "";
    $validateemail      = "";
    $validFile          = "";
    $validName          = "";
    $filePath           = "";
    $Name               = "";
    $email              = "";
    $writeData          = false;

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $Name       =   $_POST["name"]; 
        $email      =   $_POST["email"]; 
        $Comment    =   $_POST["comment"];
        $Password   =   $_POST["password"];
        $gender="";
        $hobby="";

        if(!empty($Name) && strlen($Name)>=5) 
        {
            $Name = "Name : ".$Name;
            $validName = $Name;
        }
        else
        {
            $Name = "Invalid Name...";
        }

        if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
        {
            $email = "Invalid Email";
        }
        else{
            $email = "Email : " . $email;
            $validateemail = $email;
        }

        if(strlen($Password) >= 8)
        {
            $validatepassword=$Password;
        }
        else{
            $Password=" Password Must Contain 8 character!!";
        }

        if(strlen($Comment) > 10)
        {
            $validatecomment = $Comment;
        }
        else{
            $validatecomment=" Comment Must Contain 20 character!!";
        }

        // Gender
        if(isset($_POST["gender"]))
        {
            $gender = $_POST["gender"];
            $validateradio= "Gender : " . $_POST["gender"];
        }
        else{
            $validateradio= "Please Select Your Gender";
        }


        // HOBBY
        if(isset($_POST["Dancing"]) && isset($_POST["Singing"]) && isset($_POST["Reading"]))
        {
            $hobby = $_POST["Dancing"].','.$_POST["Singing"].','.$_POST["Reading"];
        }
        else if(isset($_POST["Dancing"]) && isset($_POST["Singing"]))
        { 
            $hobby = $_POST["Dancing"].','.$_POST["Singing"];
        }
        else if(isset($_REQUEST["Reading"]) && isset($_POST["Singing"]))
        { 
            $hobby = $_POST["Reading"].','.$_POST["Singing"];
        }
        else if(isset($_REQUEST["Reading"]) && isset($_POST["Dancing"]))
        { 
            $hobby = $_POST["Reading"].','.$_POST["Dancing"];
        }
        else if(isset($_REQUEST["Reading"]))
        { 
            $hobby = $_POST["Reading"];
        }
        else if(isset($_REQUEST["Dancing"]))
        { 
            $hobby = $_POST["Dancing"];
        }
        else if(isset($_REQUEST["Singing"]))
        { 
            $hobby = $_POST["Singing"];
        }
        else{
            $validatecheckbox = "Please Select at Least One Checkbox";
        }

        $filePath = "File/".$_FILES["fileupload"]["name"];
        if(move_uploaded_file($_FILES["fileupload"]["tmp_name"], $filePath))
        {
            echo "Uploaded File : "."<img src='".$filePath."'>";
        }
        
        $writeData = true;
    }

    if($writeData)
    {
        $formdata = array(
            'Name'      =>  $validName,
            'Email'     =>  $validateemail,
            'Password'  =>  $validatepassword,
            'Comment'   =>  $validatecomment,
            'Gender'    =>  $validateradio,
            'Hobby'     =>  $validatecheckbox,
            "File_Path" =>  $filePath
        );

        $tempData = json_decode(file_get_contents('data.json'));
        $tempData[] =$formdata;

        $jsondata = json_encode($tempData, JSON_PRETTY_PRINT);

        if(file_put_contents("data.json", $jsondata)) {
            echo "Data saved successfully <br>";
        }
        else{
            echo "Can't Save Data...";
        }
        $sl = 1;
        foreach(json_decode(file_get_contents("data.json")) as $item)
        {
            echo "Result No: " . $sl ."<br>";
            foreach($item as $key=>$value)
            {
                echo $key." : ".$value."<br>";
            } 
            echo "<br>";
            $sl++;
        }
    }
?>