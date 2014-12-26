<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "ftfl");

$query = "select * from academicinfo WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);


?>


<form action="update_info.php" method="post">

    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

    <label>Level of Education</label>
    <select name="lvl_of_edu">
        <option <?php if($row['lvl_of_edu']=='diploma') echo 'selected'?> value="diploma">diploma</option>
        <option <?php if($row['lvl_of_edu']=='bachelor of honors') echo 'selected'?> value="bachelor of honors">bachelor of honors</option>
        <option <?php if($row['lvl_of_edu']=='masters') echo 'selected'?> value="masters">masters</option>
    </select></br>


    <label>Degree Name</label><span style="color:red">*</span>
    <input type="text" name="degree" value="<?php echo $row['degree'];?>" /></br>

    <label>Group</label><span style="color:red">*</span>
    <input type="text" name="group" value="<?php echo $row['groups'];?>"/></br>

    <label>Institute</label><span style="color:red">*</span>
    <select name="institute">
        <option <?php if($row['institute']=='NSTU') echo 'selected'?> value="NSTU">NSTU</option>
        <option <?php if($row['institute']=='sust') echo 'selected'?> value="sust">SUST</option>
        <option <?php if($row['institute']=='buet') echo 'selected'?> value="buet">BUET</option>
    </select></br>

    <label>Result</label><span style="color:red">*</span>
    <select name="result">
        <option <?php if($row['result']=='grade') echo 'selected'?> value="grade">Grade</option>
        <option <?php if($row['result']=='gpa') echo 'selected'?> value="gpa">GPA</option>
        <option  <?php if($row['result']=='Others') echo 'selected'?> value="Others">Others</option>
    </select></br>
    <label>Duration</label>
    <input type="text" name="duration" value="<?php echo $row['duration'];?>"/></br>

    <label>Achievement</label>
    <textarea rows="3" cols="50" name="achievement"><?php echo $row['achievement'];?> </textarea></br>

    <label>Completion Status</label>
    <select name="complete_status">
        <option <?php if($row['complete_status']=='Completed') echo 'selected'?> value="Completed">Completed</option>
        <option <?php if($row['complete_status']=='Not Completed') echo 'selected'?> value="Not Completed">Not Completed</option>
    </select></br>
    </br>

    <button type="submit" align="right">Update</button>

</form>