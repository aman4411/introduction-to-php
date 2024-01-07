<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = isset($_POST['name']) ? $_POST['name'] : "not set";
    $email = isset($_POST['email']) ? $_POST['email'] : "not set";
    $password = isset($_POST['password']) ? $_POST['password'] : "not set";
    $message = isset($_POST['message']) ? $_POST['message'] : "not set";

    echo "Name Submitted - " . $name;
    echo "<br>";
    echo "Email Submitted - " . $email;
    echo "<br>";
    echo "Password Submitted - " . $password;
    echo "<br>";
    echo "Message Submitted - " . $message;
    echo "<br>";
    if(strlen($name) < 2){
        echo 'Please enter a valid name';
        return;
    }
    //save data in database

}
?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>

<body>
    <h1>Contact Form - </h1>
    <br>
    <form action="" method="POST">
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name">
        </div>
        <br>
        <div>
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Enter your email">
        </div>
        <br>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">
        </div>
        <br>
        <div>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter your message"></textarea>
        </div>
        <br>
        <button type="submit">Contact</button>
    </form>
</body>

</html> -->