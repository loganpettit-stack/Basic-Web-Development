
<?php
//Define variables
$userName = $password = $REpassword = $firstname = $lastname = $address
    = $address2 = $city = $gender = $mstat = $email = $zip = $phone = $birth = $state = "";
$usernameErr = $passwordErr = $REpasswordErr = $firstErr = $lastErr
    = $addressErr = $addressErr2 = $cityErr = $genderErr = $maritalErr = $emailErr
    = $phoneErr = $birthErr = $zipErr = $stateErr = "*";


$isValid = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $isValid = true;

    $userName = clean_input($_POST["username"]);
    if (empty($userName)) {
        $usernameErr = "Username is required";
        $isValid = false;
    }
    else {
        //check length
        if (strlen($userName) < 6 || strlen($userName) > 50) {
            $usernameErr = "Username must be more than 6 characters.";
            $isValid = false;
        }
        else{
            $usernameErr = "";
        }
    }



    $password = clean_input($_POST["password"]);
    if (strlen($password) < 6 || strlen($password) > 50){
        $passwordErr = "Password must be 6 - 50 characters";
        $isValid = false;
    }
    else {
        //check password for special characters and upper case and digit
        if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.* )(?=.*[^a-zA-Z0-9])/", $password)){
          $passwordErr = "Must include captial, lowercase, digit, and special character. ";
          $isValid = false;
        }
        else {
            $passwordErr = "";
        }
    }


    //Password re-enter check
    $REpassword = clean_input($_POST["REpassword"]);
    if ($REpassword != $password){
        $REpasswordErr = "Passwords do not match";
        $isValid = false;
    }
    else {
        $REpasswordErr = "";
    }
    if (empty($REpassword)){
        $REpasswordErr = "Re-enter password";
        $isValid = false;
    }


    $firstname = clean_input($_POST["firstname"]);
    if (strlen($firstname) < 1 || strlen($firstname) > 50) {
        $firstErr = "Enter first name less than 50 characters";
        $isValid = false;
    }
    else {
        $firstErr = "";
    }



    $lastname = clean_input($_POST["lastname"]);
    if (strlen($lastname) < 1 || strlen($lastname) > 50 ){
        $lastErr = "Enter last name less than 50 characters";
        $isValid = false;
    }
    else {
        $lastErr = "";
    }



    $address = clean_input($_POST["address1"]);
    if (strlen($address) < 1 || strlen($address) > 100){
        $addressErr = "Please enter address less than 100 characters";
        $isValid = false;
    }
    else {
        $addressErr = "";
    }



    $address2 = clean_input($_POST["address2"]);
    if (strlen($address2) > 100){
        $addressErr2 = "Please enter address less than 100 characters";
        $isValid = false;
    }
    else {
        $addressErr2 = "";
    }



    $city = clean_input($_POST["city"]);
    if (strlen($city) < 1 || strlen($city) > 50) {
        $cityErr = "Enter a city less than 50 characters";
        $isValid = false;
    }
    else {
        $cityErr = "";
    }



    if (isset($_POST["gender"])) {
        $gender = clean_input($_POST["gender"]);
        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
            $isValid = false;
        }
        else {
            $genderErr = "";
        }
    } else {
        $genderErr = "Gender is required";
        $isValid = false;
    }



    if (isset($_POST["mstat"])) {
        $mstat = clean_input($_POST["mstat"]);
        if (empty($_POST["mstat"])) {
            $maritalErr = "Marital status is required";
            $isValid = false;
        }
        else {
            $maritalErr = "";
        }
    } else {
        $maritalErr = "Marital status is required";
        $isValid = false;
    }



    $email = clean_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        /* The filter_var() function is the easiest and safest way
           to check whether an email address is well-formed. */
        $emailErr = "Invalid email format";
        $isValid = false;
    }
    else {
        $emailErr = "";
    }
    if (empty($email)) {
        $emailErr = "Email is required";
        $isValid = false;
    }


    $phone = clean_input($_POST["phone"]);
    if(!preg_match("/^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/",$phone)){
        $phoneErr = "Phone must be in the form xxx-xxx-xxxx";
        $isValid = false;
    }
    else {
        $phoneErr = "";
    }
    if (empty($phone)){
        $phoneErr = "Enter phone number";
        $isValid = false;
    }


    $birth = clean_input($_POST["birthday"]);
    if (empty($birth)){
        $birthErr = "Enter a birthday";
        $isValid = false;
    }
    else {
        $birthErr = "";
    }



    $zip = clean_input($_POST["zip"]);
    if (!preg_match("/^\d{5}(?:[-\s]\d{4})?$/",$zip)) {
        $zipErr = "Zip must be in the form xxxxx-xxxx";
        $isValid = false;
    }
    else {
        $zipErr = "";
    }
    if (empty($zip)){
        $zipErr = "Enter 5 digit zip";
        $isValid = false;
    }


    if (isset($_POST["state"])){
        $state = clean_input($_POST["state"]);

        if(empty($state)){
            $stateErr = "Please enter state";
            $isValid = false;
        }
        else {

            if (strlen($state) > 52){
                $stateErr = "Enter state less than 52 characters";
                $isValid = false;
            }
            else{
                $stateErr = "";
            }

        }
    }
    else {
        $stateErr = "Please enter state";
        $isValid = false;
    }

    if($isValid) {

        $servername = "localhost";
        $username = "root";
        $dbpassword = "";
        $dbname = "project";

        //create connection
        $conn = mysqli_connect($servername, $username, $dbpassword, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = ("INSERT INTO registration (id, userName, password, firstName, lastName, address1, address2, city,
                state, zipCode, phone, email, gender, maritalStatus, dateOfBirth)
                VALUES (NULL, '$userName', '$password', '$firstname', '$lastname', '$address', '$address2', '$city', '$state',
                '$zip', '$phone', '$email', '$gender', '$mstat', '$birth')");

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }

}

function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
