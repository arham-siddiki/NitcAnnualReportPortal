<?php
session_start();

// Check if the user is not logged in, redirect to login page
if(empty($_SESSION['login']))
{
    header('Location: index.php');
}
if (empty($_SESSION['access_token'])) {
    $fname = "Welcome! ";
    $lname = $_GET["user"];
    $pic = "../../asset/nitc_logo_icon.svg";
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

$con = mysqli_connect('localhost', 'root', '', 'imsdemo');
$sql = "SELECT role FROM entity where id='$mail'";
$rs = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($rs);
$userRole = $row['role'];

$pdf_link = "./doc/pdf.php?user=" . $mail;
if ($userRole != 'department' && $userRole != 'centre')
    $pdf_link = "./doc/pdf_all.php";

// Add your dashboard content here
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/dashboard.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>
    <div class="container">
        <div class="login_header">
            <img class="nitc_complete_logo" src="https://nitc.ac.in/xc-assets/logo/logo-black-01.svg" alt="NITC Logo">
            <h2 class="heading">
                Annual Report Submission Portal for NITC
            </h2>
        </div>

        <!-- user strip --pending -->
        <?php
        echo '<div class="user_strip">
                <div class="user">
                    <img src="' . $pic . '" class="user_image" />
                    <h3>' . $fname . ' ' . $lname . '</h3>
                </div>
                <div class="logout_btn_holder">';
        if ($userRole == 'admin') {
            echo '<a href="users.php?user=' . $lname . '" class="">
                                    <button class="logout_btn" style="margin-right: 20px;">Manage users</button>
                                </a>';
        }
        echo '
                    <a href="../../logout.php" class="">
                        <button class="logout_btn">Logout</button>
                    </a>                    
                </div  > 
            </div>';

        // echo '<div class="panel-heading">Welcome NITC User</div><div class="panel-body">';
        // echo '<img src="' . $_SESSION['profile_picture'] . '" class="img-responsive img-circle img-thumbnail" />';
        // echo '<h3><b>Name : </b>' . $_SESSION["first_name"] . ' ' . $_SESSION['last_name'] . '</h3>';
        // echo '<h3><b>Email :</b> ' . $_SESSION['email_address'] . '</h3>';
        // echo '<h3><a href="logout.php">Logout</a></h3></div>';
        ?>

        <div class="content_container">
            <div class="content_sub_container">
                <div class="content_identifier">
                    Add Data
                </div>

                <div class="form_links">
                    <a href="./forms/planAndFund.php?user=<?php echo $lname; ?>">
                        <p class="form_link">&#8811; PLAN FUND ALLOCATION</p>
                    </a>

                    <a href="./forms/doc.php?user=<?php echo $lname; ?>">
                        <p class="form_link">&#8811; DOC ALLOCATION</p>

                    </a>

                    <a href="#">
                        <p class="form_link">&#8811; BUDGET ALLOCATION</p>
                    </a>


                </div>
            </div>

            <div class="content_sub_container">
                <div class="content_identifier">
                    Generate Report
                </div>
                <form action="">
                    <div class="report_generator">
                        <div class="section_container">
                            <p>Choose Period:</p>
                            <div class="time_period_selector">
                                <div class="start_date">
                                    <label for="startDate">Start: </label>
                                    <input type="date" id="startDate" name="startDate" class="input-fields" />
                                </div>
                                <div class="end_date">
                                    <label for="endDate">End: </label>
                                    <input type="date" id="endDate" name="endDate" class="input-fields" />
                                </div>
                            </div>
                        </div>
                        <div class="section_container">
                            <p>Choose Sections:</p>
                            <div class="section_selector">
                                <div>
                                    <input type="checkbox" id="all" name="all" value="all"
                                        onchange="selectAllOptions()" />
                                    <label for="all">All</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="planFundAllocation" name="planFundAllocation"
                                        value="planFundAllocation" />
                                    <label for="planFundAllocation">Plan Fund Allocation</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="docAllocation" name="docAllocation"
                                        value="docAllocation" />
                                    <label for="docAllocation">DOC Allocation</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="budgetAllocation" name="budgetAllocation"
                                        value="budgetAllocation" />
                                    <label for="budgetAllocation">Budget Allocation</label>
                                </div>
                                
                            </div>

                        </div>
                        <input type="submit" value="Generate Report" class="generate_btn">
                    </div>
                </form>
            </div>

        </div>

    </div>

    <script>
        function selectAllOptions() {
            // Get the "All" checkbox
            var allCheckbox = document.getElementById("all");

            // Get all the checkboxes excluding the "All" checkbox
            var checkboxes = document.querySelectorAll('.section_selector input[type="checkbox"]:not(#all)');

            // Set the state of other checkboxes based on the "All" checkbox
            checkboxes.forEach(function (checkbox) {
                checkbox.checked = allCheckbox.checked;
            });
        }
    </script>

</body>

</html>