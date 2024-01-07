<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];


    try{
        if($num2 == 0){
            throw new Exception('divide by 0 exception');
        }
        $division = $num1/$num2;
        echo $division;
    }catch(Exception $e){
        echo "divide by zero not supported";
    }finally{
        echo "<br>";
        echo "Thank You for using our tool";
    }    
   
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
<form action="" method="POST">
        <div>
            <label for="num1">Number 1</label>
            <input type="text" id="num1" name="num1" placeholder="Enter first number">
        </div>
        <br>
        <div>
            <label for="num2">Number 2</label>
            <input type="text" id="num2" name="num2" placeholder="Enter second number">
        </div>
        <br>
        <button type="submit">Divide</button>
    </form>
</body>
</html>