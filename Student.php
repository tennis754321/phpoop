<?php
require_once "config.php";

class Student extends Config {

    public function getAllStudent() {
        $sql = "SELECT * FROM students";
        $result = $this->conn->query($sql);

        if($result->num_rows > 0) {
            $row = array();
            while($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows;
        } else {
            return false;
        }
    }

    public function addUser($student_name, $student_course, $student_gender) {
        $sql = "SELECT * FROM students WHERE name='$student_name'";
        $result = $this->conn->query($sql);

        if($result->num_rows > 0) {
            return "Student_name already exist.";
        }
        else {
            $hashed_password = md5($password);

            $sql = "INSERT INTO students(student_name, student_course, student_gender)
            VALUES('$student_name', '$student_course', '$student_gender')";
            $result = $this->conn->query($sql);

            if($result == TRUE) {
                header("Location: student.php");
            } else {
                echo "Error:" . $this->conn->error;
            }
        }
    }
    public function getOneStudent($student_id) {
        $sql = "SELECT * FROM students WHERE student_id = $student_id";
        $result =$this->conn->query($sql);

        if($result->num_rows == 1) {
            return $result->fetch_assoc();
        } else {
            echo "Error." .$this->conn->error;
        }
    }

    public function updateStudent($student_id, $student_name, $student_course, $student_gender) {
        $sql = "SELECT * FROM students WHERE student_name='$student_name' ";

        $result = $this->conn->query($sql);

        if($result->num_rows > 0) {
            return "name or Email already exist.";
        } else {
            $sql = "UPDATE students SET student_name='$student_name', student_course='$student_course', student_gender='$student_gender' WHERE student_id='$student_id'";
            $result = $this->conn->query($sql);
            if($result == FALSE) {
                echo "ERROR: " .$this->conn->error;
            } else {
                header("Location: studentlist.php");
            }
        }
    }

    public function deleteStudent($student_id) {
        $sql = "DELETE FROM students WHERE student_id=$student_id";

        $result = $this->conn->query($sql);

        if($result == FALSE) {
            echo "Error: " . $this->conn->error;
        } else {
            header("Location: studentlist.php");
        }
    }
}

?>