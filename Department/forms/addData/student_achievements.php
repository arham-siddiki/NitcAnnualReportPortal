<?php


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset ($_POST['form_type']) && $_POST['form_type'] === 'student_achievements') {
    $studentName = $_POST["name"];
    $studentName = filter_var($studentName, FILTER_SANITIZE_STRING);
    $studentAchievement = $_POST["achievement"];
    $studentAchievement = filter_var($studentAchievement, FILTER_SANITIZE_STRING);
    $date = $_POST["date"];
    $studentCourse = $_POST["course"];
    $studentSemester = $_POST["semester"];
    $studentRollno = $_POST["rollno"];
    $entity = $userRole;
    $id = $_POST['Id'];

    $con = mysqli_connect('localhost', 'root', '', 'imsdemo');

    if (!$con) {
        die ('Could not connect: ' . mysqli_error($con));
    }

    // Prepare the query for either insert or update
    if (isset ($id) && !empty ($id)) {
        $query = "UPDATE student_achievements SET name=?, course=?, semester=?, rollno=?, achievement=?, date=? WHERE Id=? AND entity=?";
    } else {
        $query = "INSERT INTO student_achievements (name, course, semester, rollno, achievement, entity, date) VALUES (?, ?, ?, ?, ?, ?, ?)";
    }

    // Prepare and bind parameters
    $stmt = mysqli_prepare($con, $query);
    if (!$stmt) {
        echo '<script>alert("Failed to prepare statement.");</script>';
    } else {
        if (isset ($id) && !empty ($id)) {
            mysqli_stmt_bind_param($stmt, 'ssssssis', $studentName, $studentCourse, $studentSemester, $studentRollno, $studentAchievement, $date, $id, $entity);
        } else {
            mysqli_stmt_bind_param($stmt, 'sssssss', $studentName, $studentCourse, $studentSemester, $studentRollno, $studentAchievement, $entity, $date);
        }

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            echo '<script>alert("Entry added/updated.");</script>';
        } else {
            echo '<script>alert("Entry addition/updation failed.");</script>';
        }

        // Close the statement
        mysqli_stmt_close($stmt);   
    }

    mysqli_close($con);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../styles/dashboard.css">
    <script>
        function validateFormstudentAchievement() {
            var studentName = document.forms["studentAchievement"]["name"].value;
            var studentCourse = document.forms["studentAchievement"]["course"].value;
            var studentSemester = document.forms["studentAchievement"]["semester"].value;
            var studentRollno = document.forms["studentAchievement"]["rollno"].value;
            var studentAchievement = document.forms["studentAchievement"]["achievement"].value;
            var date = document.forms["studentAchievement"]["date"].value;

            if (studentName.trim() == "" || studentAchievement.trim() == "" || date.trim() == "" ||
                studentCourse.trim() == "" || studentSemester.trim() == "" || studentRollno.trim() == "") {
                alert("Please fill in all fields.");
                return false;
            }

            return true;
        }

        $(document).ready(function () {
            $("#studentAchievement").submit(function (event) {
                event.preventDefault();
                if (!validateFormstudentAchievement()) {
                    return;
                }

                $.ajax({
                    type: "POST",
                    url: "dashboard.php",
                    data: $(this).serialize(),
                    success: function () {
                        alert("Entry added.");
                        location.reload();
                    },
                    error: function () {
                        alert("Entry addition failed.");
                    }
                });
            });
        });
    </script>
</head>


<body>
    <div class="d-flex flex-column align-items-center w-100">
        <p class="form-name">Student Achievements during year 2023-24</p>
        <div class="form-container">
            <form style="" id="studentAchievement" action="" method="post"
                onsubmit="return validateFormstudentAchievement();">
                <input type="hidden" name="Id" value="<?php echo isset ($_GET['dataId']) ? $_GET['dataId'] : null; ?>">
                <input type="hidden" name="form_type" value="student_achievements">


                <div class="row mb-3">
                    <label for="studentName" class="col-sm-2 col-form-label label-class">Name: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="studentName"
                            placeholder="Enter Student Name">

                    </div>
                </div>
                <div class="row mb-3">
                    <label for="rollno" class="col-sm-2 col-form-label label-class">Roll No: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="rollno" id="rollno"
                            placeholder="Enter Student Roll No">

                    </div>
                </div>
                <div class="row mb-3">
                    <label for="course" class="col-sm-2 col-form-label label-class">Course: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="course" id="course"
                            placeholder="Enter Student Course">

                    </div>
                </div>
                <div class="row mb-3">
                    <label for="semester" class="col-sm-2 col-form-label label-class">Semester: </label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="semester" id="semester"
                            placeholder="Enter Student Semester">

                    </div>
                </div>
                <div class="row mb-3">
                    <label for="achievement" class="col-sm-2 col-form-label label-class">Enter Student Achievement:
                    </label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="achievement" id="achievement"
                            placeholder="Enter Student Achievement" rows=4></textarea>

                    </div>
                </div>
                <div class="row mb-3">
                    <label for="date" class="col-sm-2 col-form-label label-class">Date: </label>
                    <div class="col-sm-10">
                        <input type="date" name="date" id="date" placeholder="Date here" class="form-control">
                    </div>
                </div>

                <button type="submit" class="submit_btn mt-2"><span>Add Entry</span></button>

            </form>
        </div>

    </div>



</body>

</html>