
<?php

//$edu = $_POST['lvl_of_edu'];
//$deg  = $_POST['degree'];

$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "ftfl");

$query="INSERT INTO `ftfl`.`academicinfo` (
                                            `lvl_of_edu` ,
                                            `degree` ,
                                            `groups` ,
                                            `institute` ,
                                            `result` ,
                                            `duration` ,
                                            `achievement` ,
                                            `complete_status`
)
VALUES (
      '".$_POST['lvl_of_edu']."', '".$_POST['degree']."','".$_POST['groups']."',
     '".$_POST['institute']."', '".$_POST['result']."','".$_POST['duration']."', '".$_POST['achievement']."','".$_POST['complete_status']."'
);";


//$query = "INSERT INTO `ftfl`.`academicinfo` (
//`lvl_of_edu` ,
//`degree`
//)
//VALUES (
//    '$edu', '$deg'
//)";


mysqli_query($link, $query);

header('location:list_info.php');