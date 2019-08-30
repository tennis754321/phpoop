<?php
require_once "Student.php";

$student_id = $_GET['student_id'];

$student = new Student;

$get_one_student = $student->getOneStudent($student_id);

if(isset($_POST['update_student'])) {
    $student_name = $_POST['student_name'];
    $student_course = $_POST['student_course'];
    $student_gender = $_POST['student_gender'];

    $update_student = $student->updateStudent($student_id, $student_name, $student_course, $student_gender);
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Edit Student</h3>
            </div>
            <div class="card-body">
            <?php
            if(isset($update_student)) {
                echo "<p class='text-danger text-center'>$update_student</p>";
            }
            ?>
                <form method="post">
                    <div class="form-group">
                        <table>Name</table>
                        <input type="text" name="student_name" class="form-control" value="<?php echo $get_one_student['student_name']; ?>">
                    </div>
                    <div class="form-group">
                        <table>Course</table>
                        <input type="text" name="student_course" class="form-control" value="<?php echo $get_one_student['student_course']; ?>">
                    </div>
                    <div class="form-group">
                        <table>Gender</table>
                        <input type="text" name="student_gender" class="form-control" value="<?php echo $get_one_student['student_gender']; ?>">
                    </div>
                    <div class="clearfix">
                        <button type="submit" class="btn btn-primary" name="update_student">Update</button>
                    </div>
                </form>
            </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>