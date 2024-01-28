<?php include_once("/xampp/htdocs/IntroductionToPhp/StudentManagement/common/header.php") ?>
<?php include_once("/xampp/htdocs/IntroductionToPhp/StudentManagement/common/db.php") ?>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $rollNumber = $_POST['deletedStudent'];
    $sql = "DELETE FROM students WHERE RollNumber=$rollNumber";
    mysqli_query($conn,$sql);
}
?>

<div class="container">
    <br>
    <br>

    <div class="row">
        <div>
            <h4>Student Records</h4>
        </div>
        <br>
        <br>
    </div>
    <br>
    <br>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Roll Number</th>
                <th scope="col">Name</th>
                <th scope="col">Class</th>
                <th scope="col">Created</th>
                <th>Edit Action</th>
                <th>Delete Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
              $sql = "SELECT * FROM students LIMIT 20";
              $result = mysqli_query($conn, $sql);
              while($student = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $student['RollNumber'] ?></td>
                    <td><?php echo $student['Name'] ?></td>
                    <td><?php echo $student['Class'] ?></td>
                    <td><?php echo $student['Created'] ?></td>
                    <td><form action="add.php" method="get"><button type="submit" class="btn btn-warning" name="editedStudent" value="<?php echo $student['RollNumber'] ?>">Edit</button></form></td>
                    <td><form action="" method="post"><button type="submit" class="btn btn-danger" name="deletedStudent" value="<?php echo $student['RollNumber'] ?>">Delete</button></form></td>
                </tr>
                <?php
              }
            ?>   
        </tbody>
    </table>
</div>
<?php include_once("/xampp/htdocs/IntroductionToPhp/StudentManagement/common/footer.php") ?>