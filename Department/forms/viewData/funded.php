<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <div class="d-flex flex-column align-items-center gap-2 w-100 h-100">
        <div class="table-heading">Funded Research Projects for the year 2023-24</div>
        <?php
        if ($userRole == 'admin')
            $sql = "SELECT * FROM funded";
        else
            $sql = "SELECT * FROM funded where entity='$userRole'";
        $rs = mysqli_query($con, $sql);


        echo '<div class="table_container">';
        echo '
            <table id="funded" class="table table-striped" style="width: 100%; height: auto;">
                <thead> 
                    <tr> 
                    <th class="box">S. no.</th> 
                    <th class="box">Title of the Project</th> 
                    <th class="box">Funding Agency</th> 
                    <th class="box">Amount (in lakh)</th> 
                    <th class="box">Date</th>
                    <th class="box">Status</th> 
                    <th class="box">Principal Investigator & Co-PIs</th>
                    <th class="box">Action</th>
                    </tr>
                </thead>';

        echo '<tbody>';
        $count = 1;
        while ($row = mysqli_fetch_assoc($rs)) {
            $title = $row['title'];
            $agent = $row['agent'];
            $amount = $row['amount'];
            $start = $row['start'];
            $status = $row['status'];
            $prin = $row['principal'];
            $id = $row['Id'];

            echo '
                <tr>
                <td class="box">' . $count . '</td>
                <td class="box">' . $title . '</td>
                <td class="box">' . $agent . '</td>
                <td class="box">' . $amount . '</td>
                <td class="box">' . $start . '</td>
                <td class="box">' . $status . '</td>
                <td class="box">' . $prin . '</td>
                    <td class="">
                       
                            <button class="edit_btn" data-id="funded:form-14:' . $id . '"><i class="fas fa-edit"></i></button>
                            <button class="delete_btn" onclick="handleDeleteClick(' . $id . ', \'funded\')"><i class="fas fa-trash-alt"></i></button>
                       
                    </td>
                </tr>';

            $count++;
        }
        echo '</tbody>';
        echo '<tfoot> 
<tr> 
<th class="box">S. no.</th> 
<th class="box">Title of the Project</th> 
<th class="box">Funding Agency</th> 
<th class="box">Amount (in lakh)</th> 
<th class="box">Date</th>
<th class="box">Status</th> 
<th class="box">Principal Investigator & Co-PIs</th>
<th class="box">Action</th>
</tr>
</tfoot>';
        echo '</table>
</div>';
        ?>
    </div>
</body>

</html>