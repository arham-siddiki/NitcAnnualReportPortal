<?php


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['form_type']) && $_POST['form_type'] === 'faculty_qualification') {
    $staffName = $_POST["name"];
    $staffQualification = $_POST["qualification"];
    $staffQualification = filter_var($staffQualification, FILTER_SANITIZE_STRING);
    $staffInstitute = $_POST["institute"];
    $staffInstitute = filter_var($staffInstitute, FILTER_SANITIZE_STRING);
    $date = $_POST["date"];
    $entity = $mail;
    $id = $_POST['Id'];

    $con = mysqli_connect('localhost', 'root', '', 'imsdemo');

    if (!$con) {
        die ('Could not connect: ' . mysqli_error($con));
    }

    // Prepare the query for either insert or update
    if (isset ($id) && !empty ($id)) {
        $query = "UPDATE faculty_qualification SET name=?, qualification=?, institute=?, date=? WHERE Id=? AND entity=?";
    } else {
        $query = "INSERT INTO faculty_qualification (name, qualification, institute, entity, date) VALUES (?, ?, ?, ?, ?)";
    }

    
    $stmt = mysqli_prepare($con, $query);
    if (!$stmt) {
        echo '<script>alert("Failed to prepare statement.");</script>';
    } else {
        if (isset ($id) && !empty ($id)) {
            mysqli_stmt_bind_param($stmt, 'ssssis', $staffName, $staffQualification, $staffInstitute, $date, $id, $userRole );
        } else {
            mysqli_stmt_bind_param($stmt, 'sssss', $staffName, $staffQualification, $staffInstitute, $userRole, $date);
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
        $(document).ready(function () {
            $("#facultyQualification").submit(function (event) {
                event.preventDefault();
                if (!validateForm()) {
                    return;
                }

                $.ajax({
                    type: "POST",
                    url: "",
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

            function validateForm() {
                var staffName = document.forms["facultyQualification"]["name"].value;
                var staffQualification = document.forms["facultyQualification"]["qualification"].value;
                var staffInstitute = document.forms["facultyQualification"]["institute"].value;
                var date = document.forms["facultyQualification"]["date"].value;


                if (staffName.trim() == "" || staffQualification.trim() == "" || staffInstitute.trim() == "" || date
                    .trim() == "") {
                    alert("Please fill in all fields.");
                    return false;
                }

                return true;
            }
        });
    </script>
</head>

<body>
    <div class="d-flex flex-column align-items-center w-100">
        <p class="form-name">Faculty obtaining higher qualifications during year 2023-24</p>
        <div class="form-container">
            <form style="" id="facultyQualification" action="" method="post" onsubmit="return validateForm();">
                <input type="hidden" name="Id" value="<?php echo isset ($_GET['dataId']) ? $_GET['dataId'] : null; ?>">
                <input type="hidden" name="form_type" value="faculty_qualification">


                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label label-class">Name: </label>
                    <div class="col-sm-10">
                        <select name="name" id="name" class="form-control" class="input-fields">
                            <option disabled selected>Name of Faculty</option>

                            <?php
                            $sql = "SELECT department from roles where name = '$userRole'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_assoc($result);
                            if ($row['department'] == 'centre')
                                $sql = "SELECT Name FROM faculty";
                            else
                                $sql = "SELECT Name FROM faculty WHERE department='$userRole'";
                            $result = mysqli_query($con, $sql);

                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<option value="' . $row['Name'] . '">' . $row['Name'] . '</option>';
                                }
                            } else {
                                echo 'Query failed: ' . mysqli_error($con);
                            }
                            ?>

                        </select>

                    </div>
                </div>

                <div class="row mb-3">
                    <label for="qualification" class="col-sm-2 col-form-label label-class">Qualification: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="qualification" id="qualification"
                            placeholder="Qualification">

                    </div>
                </div>
                <div class="row mb-3">
                    <label for="institute" class="col-sm-2 col-form-label label-class">Institute: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="institute" id="institute"
                            placeholder="Institute">

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