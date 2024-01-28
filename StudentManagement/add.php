<?php include_once("/xampp/htdocs/IntroductionToPhp/StudentManagement/common/header.php") ?>
<?php include_once("/xampp/htdocs/IntroductionToPhp/StudentManagement/common/db.php") ?>

<?php

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $editFlag = isset($_REQUEST['editedStudent']) ? true : false;
    $rollNumber = isset($_REQUEST['editedStudent']) ? $_REQUEST['editedStudent'] : null;
    if($editFlag){
        $sql = "SELECT * FROM students WHERE RollNumber=$rollNumber";
        $result = mysqli_query($conn, $sql);
        $student = mysqli_fetch_assoc($result);
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $class = $_POST['class'];
    $rollNumber = $_POST['submitBtn'];
    if($rollNumber){
        $sql = "UPDATE students SET Name='$name',Class='$class' WHERE RollNumber = $rollNumber";
    }else{
        $sql = "INSERT INTO students (Name, Class) VALUES ('$name', '$class')";
    }
    
    if(mysqli_query($conn, $sql)){
        print_r("Student record" . $rollNumber ? "Updated" : "Inserted" . "Successfully");
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
            <h4><?php echo $editFlag ? "Edit Student Details" : "Add Student Details" ?></h4>
        </div>
        <br>
        <br>
    </div>
    <br>
        <form action="" method="POST">
            <div class="form-group">
                <label for="name">Student Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter student name" name="name" value="<?php echo isset($student['Name']) ? $student['Name'] : "" ?>">
            </div>
            <div class="form-group">
                <label for="lass">Student Class</label>
                <input type="text" class="form-control" id="class" placeholder="Enter student class" name="class" value="<?php echo isset($student['Class']) ? $student['Class'] : "" ?>">
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="submitBtn" value="<?php echo $rollNumber?>">Submit</button>
        </form>
</div>

<?php include_once("/xampp/htdocs/IntroductionToPhp/StudentManagement/common/footer.php") ?>