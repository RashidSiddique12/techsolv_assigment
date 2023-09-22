<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./main.php" method="POST">
        <table>
            <tr>
                <td> <label for="name">Full Name : </label></td>
                <td><input type="text" name="name" required id=""><br></td>
            </tr>

            <tr>
                <td><label for="phnno">Phone Number : </label></td>
                <td><input type="tel" name="phnno" required id=""><br></td>
            </tr>

            <tr>
                <td> <label for="email">Email : </label></td>
                <td><input type="email" name="email" required id=""><br></td>
            </tr>

            <tr>
                <td><label for="subject">Subject : </label></td>
                <td><input type="text" name="subject" required id=""><br></td>
            </tr>

            <tr>
                <td><label for="message">Message : </label></td>
                <td><input type="text" name="message" required id=""><br></td>
            </tr>

            <tr>
                <td><input type="submit" name="login" value="Submit" id=""></td>
            </tr>
        </table>
    </form>
</body>

</html>

<?php

if (isset($_POST["login"])) {

    //name
    $name = $_POST["name"];
    $phnNo = $_POST["phnno"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // echo $name;
    if (!empty($name) && strlen($name) > 5 && strlen($name) < 15) {
        echo "Name : " . $_POST["name"] . "<br/>";
    } else {
        echo "Please Entre Vaild Full name <br/>";
    }

    //phn no.
    if (!empty($phnNo) && strlen($phnNo) == 10) {
        echo "Phone Number : " . $_POST["phnno"] . "<br>";
    } else {
        echo "Please Entre Valid Phone Number <br>";
    }

    //email

    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email : " . $_POST["email"] . "<br>";
    } else {
        echo "Please Entre Valid Email <br>";
    }

    //subject
    if (!empty($subject) && strlen($subject) >= 10 && strlen($subject) <= 25) {
        echo "Subject : " . $_POST["subject"] . "<br>";
    } else {
        echo "Please Entre Valid Subject  <br> ";
    }

    //message

    if (!empty($message) && strlen($message) > 20 && strlen($message) < 150) {
        echo "Message : " . $_POST["message"];
    } else {
        echo "Please Entre Valid Message";
    }
}


?>