<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <div class="d-flex flex-column align-items-center w-100">
        <?php
        if ($userRole == 'admin')
            $sql = "SELECT * FROM expert_lectures order by start";
        else
            $sql = "SELECT * FROM expert_lectures where entity='$userRole' order by start";
        $rs = mysqli_query($con, $sql);


        echo '
            <div class="" id="">

                <div class="table_container">
            
                    <table id="expert_lectures" class="table table-striped" style="width: 100%; height: auto;">
                        <thead> 
                            <tr> 
                            <th class="box">S. no.</th> 
                            <th class="box">Name of Speaker</th> 
                            <th class="box">Title of programme</th> 
                            <th class="box">Start Date</th>                     
                            <th class="box">End Date</th>                       
                            <th class="box">Organization</th>       
                            <th class="box">Action</th>
                            </tr>
                        </thead>

                        <tbody>';
        $count = 1;
        while ($row = mysqli_fetch_assoc($rs)) {
            $staff = $row['staff'];
            $title = $row['title'];
            $start = $row['start'];
            $end = $row['end'];
            $organization = $row['organization'];
            $id = $row['Id'];

            echo '
                                <tr>
                                <td class="box">' . $count . '</td>
                                <td class="box">' . $staff . '</td>
                                <td class="box">' . $title . '</td>
                                <td class="box">' . $start . '</td>
                                <td class="box">' . $end . '</td>
                                <td class="box">' . $organization . '</td>
                                    <td class="">
                                        <div class="">
                                            <button class="edit_btn" data-id="community_services:form-1:' . $id . '"><i class="fas fa-edit"></i></button>
                                            <button class="delete_btn"  onclick=handleDeleteClick(' . $id . ') "><i class="fas fa-trash-alt"></i></button>
                                        </div>
                                    </td>
                                </tr>';

            $count++;
        }
        echo '</tbody>';
        echo '<tfoot> 
                            <tr> 
                            <th class="box">S. no.</th> 
                            <th class="box">Name of Speaker</th> 
                            <th class="box">Title of programme</th> 
                            <th class="box">Start Date</th>                     
                            <th class="box">End Date</th>                       
                            <th class="box">Organization</th>       
                            <th class="box">Action</th>
                            </tr>
                            </tfoot>';
        echo '</table>
            </div>
        </div>';
        ?>
    </div>
</body>

</html>