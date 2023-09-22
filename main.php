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
                <td><input type="phone" name="phnno" required id=""><br></td>
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
    echo $name;
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