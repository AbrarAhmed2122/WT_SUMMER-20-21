<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['username']) && isset($_POST['password']) &&
        isset($_POST['address']) && isset($_POST['birthday']) &&
        isset($_POST['gender']) && isset($_POST['email']) &&
        isset($_POST['vehicle1']) && isset($_POST['phoneCode']) &&
        isset($_POST['phone']) && isset($_POST['registerdate'])) {
        
        $username = $_POST['username'];
        $address = $_POST['address'];
        $birthday = $_POST['birthday'];
        $vehicle1 = $_POST['vehicle1'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phoneCode = $_POST['phoneCode'];
        $phone = $_POST['phone'];
        $registerdate = $_POST['registerdate'];


        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "test";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM registration WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO registration(username, address, birthday, vehicle1, password, gender, email, phoneCode, phone, registerdate)
            values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;
            
            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sssssssiis",$username, $address, $birthday, $vehicle1, $password, $gender, $email, $phoneCode, $phone, $registerdate);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>