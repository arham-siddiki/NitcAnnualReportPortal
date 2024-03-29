<?php
session_start();

if (empty($_SESSION['login'])) {
    header('Location: ../index.php');
}

if (empty($_SESSION['access_token'])) {
    $fname = "Welcome! ";
    $lname = $_GET["user"];
    $pic = "../asset/nitc_logo_icon.svg";
    $mail = $_GET["user"];

    //below two lines are commented out for testing purpose. uncomment it to properly run system with login.

    // header('Location: index.php');
    // exit();
} else {
    $fname = $_SESSION["first_name"];
    $lname = $_SESSION['last_name'];
    $pic = $_SESSION['profile_picture'];
    $mail = $_SESSION['email_address'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $staffName = $_POST["faculty_name"];
    $progTitle = $_POST["title"];
    $date = $_POST["date"];
    $entity = $mail;

    $con = mysqli_connect('localhost', 'root', '', 'imsdemo');

    // Use prepared statement to prevent SQL injection
    $query1 = "INSERT INTO community_services (staff, title, date, entity) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $query1);

    // Bind parameters
    mysqli_stmt_bind_param($stmt, 'ssss', $staffName, $progTitle, $date, $entity);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        echo '<script>alert("Entry added.");</script>';
    } else {
        echo '<script>alert("Entry addition failed.");</script>';
    }

    // Close the statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($con);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Community services</title>
    <link href="../styles/forms.css" type="text/css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c0795f1bee.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $("#myForm").submit(function (event) {
                event.preventDefault();

                // Validate the form
                if (!validateForm()) {
                    return;
                }

                $.ajax({
                    type: "POST",
                    url: "",
                    data: $(this).serialize(),
                    success: function () {
                        alert("Entry added.");
                        // Reload the page after a successful form submission
                        location.reload();
                    },
                    error: function () {
                        alert("Entry addition failed.");
                    }
                });
            });

            function validateForm() {
                var staffName = document.forms["myForm"]["faculty_name"].value;
                var progTitle = document.forms["myForm"]["title"].value;
                var date = document.forms["myForm"]["date"].value;

                if (staffName.trim() == "" || progTitle.trim() == "" || date.trim() == "") {
                    alert("Please fill in all fields.");
                    return false;
                }

                return true;
            }
        });
    </script>

</head>

<body>
    <div class="container">


        <div class="subcontainer">
            <div class="sidebar">
                <a href="../dashboard.php" class="user_to_dash">
                    <span>
                        <i class="fa-solid fa-angle-left"></i>
                        BACK
                    </span>
                </a>
                <div class="user_container">
                    <?php
                    echo '<img src="' . $pic . '" class="user_image" />
                        <p class="user_name">' . $fname . ' ' . $lname . '</p>';
                    ?>
                </div>
                <div class="partition"> </div>
                <ul class="navlinks">
                    <li class="active"><i class="fa-solid fa-plus"></i> ADD DATA</li>
                    <li><i class="fa-regular fa-eye"></i> VIEW DATA</li>
                </ul>
                <div class="partition"> </div>
                <a href="../logout.php" class="logout_btn">
                    <span><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</span>
                </a>
            </div>
            <div class="content_container">
                <h2>Community Services</h2>
                <div class="left_container" id="addDataFormContainer">
                    <form id="myForm" action="" method="post" onsubmit="return validateForm();" class="form_field">
                        <!-- <input type="text" name="name" placeholder="Name of staff" class="input-fields"><br><br> -->
                        
                        <select name="faculty_name" class="input-fields">
                            <option disabled selected>Name of Staff</option>
                            <?php
                            // Establish a connection to the database
                            $con = mysqli_connect('localhost', 'root', '', 'imsdemo');

                            // Check the connection
                            if (!$con) {
                                die('Could not connect: ' . mysqli_error($con));
                            }

                            // Set $entity based on your logic
                            $entity = isset($_GET["user"]) ? $_GET["user"] : '';

                            // Select the faculty names from the database based on the entity
                            $sql = "SELECT Name FROM faculty WHERE Email='$entity'";
                            $result = mysqli_query($con, $sql);

                            // Check if the query was successful
                            if ($result) {
                                // Fetch and display faculty names as options
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<option value="' . $row['Name'] . '">' . $row['Name'] . '</option>';
                                }
                            } else {
                                echo 'Query failed: ' . mysqli_error($con);
                            }

                            // Close the database connection
                            mysqli_close($con);
                            ?>
                        </select>
                        <textarea name="title" placeholder="Community services" class="input-fields textarea"
                            rows=4></textarea>

                        <input type="date" name="date" id="date" placeholder="Date daalo" class="input-fields">

                        <input type="submit" class="submit-button" value="Add Entry">
                    </form>

                </div>
                <div class="table_container" id="viewDataTableContainer">
                    <?php
                    $con = mysqli_connect('localhost', 'root', '', 'imsdemo');
                    $entity = $_GET["user"];
                    if ($entity == 'admin' || $entity == '')
                        $sql = "SELECT * FROM community_services";
                    else
                        $sql = "SELECT * FROM community_services where entity='$entity'";
                    $rs = mysqli_query($con, $sql);

                    echo '<div class="table_field">';
                    echo '
                <table border="1"> 
                <tr> 
                    <th class="box">S.no.</th> 
                    <th class="box">Name of staff</th>                     
                    <th class="box">Services</th>                    
                    <th class="box">Date</th>
                    <th class="box">Entity</th>
                    <th class="box">Action</th>
                </tr>';

                    $count = 1;
                    while ($row = mysqli_fetch_assoc($rs)) {
                        $staff = $row['staff'];
                        $title = $row['title'];
                        $date = $row['date'];
                        $dep = $row['entity'];
                        $id = $row['Id'];

                        echo '<tr>
                            <td class="box sn">' . $count . '</td>
                            <td class="box name">' . $staff . '</td>
                            <td class="box services">' . $title . '</td>
                            <td class="box services">' . $date . '</td>
                            <td class="box entity">' . $dep . '</td>
                            <td class="box button_box btn">
                                <div class="btn_inner_box">
                                <button class="edit_btn" data-id="' . $id . '"><i class="fas fa-edit"></i></button>
                                <button class="delete_btn"  onclick=handleDeleteClick(' . $id . ') "><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </td>
                        </tr>';

                        $count++;
                    }
                    echo '</table>
                </div>';
                    ?>
                </div>
            </div>


        </div>
    </div>
    <script>
        $(document).ready(function () {
            // Initial setup: Show add data form, hide view data table
            $("#viewDataTableContainer").hide();

            // Highlight the current list item and toggle form/table visibility
            $(".sidebar ul li").click(function () {
                // Remove the 'active' class from all list items
                $(".sidebar ul li").removeClass("active");

                // Add the 'active' class to the clicked list item
                $(this).addClass("active");

                // Determine which link was clicked
                var linkText = $(this).text().trim();

                // Toggle form and table visibility based on the clicked link
                if (linkText === "ADD DATA") {
                    $("#addDataFormContainer").show();
                    $("#viewDataTableContainer").hide();
                } else if (linkText === "VIEW DATA") {
                    $("#addDataFormContainer").hide();
                    $("#viewDataTableContainer").show();
                }
            });

            // Initially highlight the "Add Data" list item
            $(".sidebar ul li:contains('ADD DATA')").addClass("active");

            // Rest of your code...
        });


    </script>
</body>

</html>

<script>

    function handleEditClick(event) {
        var id = event.currentTarget.getAttribute("data-id");

        // Check if id is not null or undefined before redirecting
        if (id !== null && id !== undefined) {
            // Redirect to the edit page with the community service title as a parameter
            var user = "<?php echo $lname; ?>";
            window.location.href = 'editables/edit_community_services.php?Id=' + encodeURIComponent(id) + '&user=' +
                encodeURIComponent(user);
        } else {
            // Handle the case where id is null or undefined
            console.error("Invalid id for editing");
            // You may want to display an alert or handle the error in a way that suits your application
        }
    }

    function handleDeleteClick(id) {

        // window.alert("status button clicked with ID: " + id);
        fetch('../api/api.php', {
            method: 'POST',
            body: JSON.stringify({
                id: id,
                action: 'delete',
                table: 'community_services',
                column: 'Id'
            })
        })
            .then(response => response.json())
            .then(data => {
                window.alert(data.message);

                // Reload the page after successful deletion
                location.reload();
            })
            .catch(error => {
                window.alert('Error:', error);
                // console.error('Error:', error);
                // window.alert('check console');
            });
        // location.reload();
    }

    document.addEventListener('DOMContentLoaded', function () {
        var editButtons = document.querySelectorAll(".edit_btn");
        var deleteButtons = document.querySelectorAll(".delete_btn");

        editButtons.forEach(function (button) {
            button.addEventListener("click", handleEditClick);
        });
    });
</script>