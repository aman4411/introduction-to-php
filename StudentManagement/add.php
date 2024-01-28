<?php include_once("/xampp/htdocs/IntroductionToPhp/StudentManagement/common/header.php") ?>
<?php include_once("/xampp/htdocs/IntroductionToPhp/StudentManagement/common/db.php") ?>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $class = $_POST['class'];

    $sql = "INSERT INTO students (Name, Class) VALUES ('$name', '$class')";
    if(mysqli_query($conn, $sql)){
        print_r("Student record Inserted Successfully");
    }else{
        print_r("Error inserting student record" . mysqli_error($conn));
    }
    exit;
}

?>

<div class="container">
    <br>
    <br>

    <div class="row">
        <div>
            <h4>Add Student Details</h4>
        </div>
        <br>
        <br>
    </div>
    <br>
        <form action="" method="POST">
            <div class="form-group">
                <label for="name">Student Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter student name" name="name">
            </div>
            <div class="form-group">
                <label for="lass">Student Class</label>
                <input type="text" class="form-control" id="class" placeholder="Enter student class" name="class">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>

<?php include_once("/xampp/htdocs/IntroductionToPhp/StudentManagement/common/footer.php") ?>