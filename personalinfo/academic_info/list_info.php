


<?php

$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "ftfl");

$query = "select * from academicinfo";

$result = mysqli_query($link, $query);


?>

<table border="1" width="100%">

    <tr>
        <td>ID</td>
        <td>Level of Education</td>
        <td>Degree Name</td>
        <td>Group</td>
        <td>Institute</td>
        <td>Result</td>
        <td>Duration</td>
        <td>Achievement</td>
        <td>Completion Status</td>
        <td>Action</td>

    </tr>

    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['lvl_of_edu']?></td>
            <td><?php echo $row['degree']?></td>
            <td><?php echo $row['groups']?></td>
            <td><?php echo $row['institute']?></td>
            <td><?php echo $row['result']?></td>

            <td><?php echo $row['duration']?></td>
            <td><?php echo $row['achievement']?></td>
            <td><?php echo $row['complete_status']?></td>

            <td> <a href="view_info.php?id=<?php echo $row['id']?>">View</a> |<a href="edit_info.php?id=<?php echo $row['id']?>">Edit</a> | <a href="delete_info.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>

    <?php
    }
    ?>


</table>
<a href="create_info.html">Create New</a>