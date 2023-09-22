<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./main.php" method="POST">
        <label for="name">Full Name : </label>
        <input type="text" name="name" required id=""><br>

        <label for="phnno">Phone Number : </label>
        <input type="phone" name="phnno" required id=""><br>

        <label for="email">Email : </label>
        <input type="email" name="email" required id=""><br>

        <label for="subject">Subject : </label>
        <input type="text" name="subject" required id=""><br>

        <label for="message">Message : </label>
        <input type="text" name="message" required id=""><br>

        <input type="submit" name="login" value="Submit" id="">
    </form>
</body>

</html>

<?php

if (isset($_POST["login"])) {

    //name
    $name = $_POST["name"];
    // echo $name;
    if (!empty($_POST["name"])) {
        echo "Name : " . $_POST["name"] . "<br/>";
    } else {
        echo "Please entre Full name <br/>";
    }

    //phn no.
    if (!empty($_POST["phnno"])) {
        echo "Phone Number : " . $_POST["phnno"] . "<br>";
    } else {
        echo "Please entre Phone Number <br>";
    }

    //email

    if (!empty($_POST["email"])) {
        echo "Email : " . $_POST["email"] . "<br>";
    } else {
        echo "Please entre Email <br>";
    }

    //subject
    if (!empty($_POST["subject"])) {
        echo "Subject : " . $_POST["subject"] . "<br>";
    } else {
        echo "Please entre Subject  <br> ";
    }

    //message

    if (!empty($_POST["message"])) {
        echo "Message : " . $_POST["message"];
    } else {
        echo "Please entre Message";
    }
}


?>