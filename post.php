<?php

if(isset($_POST['submit'])){
    $data_missing = array();
    if(empty($_POST['FristName'])){
        // Adds name to array
        $data_missing[] = 'First Name';
    } else {
        // Trim white space from the name and store the name
        $f_name = trim($_POST['FristName']);
    }
    if(empty($_POST['LastName'])){
        // Adds name to array
        $data_missing[] = 'LastName Name';
    } else {
        // Trim white space from the name and store the name
        $l_name = trim($_POST['LastName']);
    }
    if(empty($_POST['Id'])){
        // Adds name to array
        $data_missing[] = 'Ide';
    } else {
        // Trim white space from the name and store the name
        $id = trim($_POST['Id']);
    }
    if(empty($data_missing)){
        require_once('Controller.php');
        $query = "INSERT INTO OOXX(Id, LastName, FirstName) values(?, ?, ?)";
        $stmt = mysqli_prepare($con, $query);

        mysqli_stmt_bind_param($stmt, "iss", $f_name,
                                        $l_name, $id);
        mysqli_stmt_execute($stmt);
        $affected_rows = mysqli_stmt_affected_rows($stmt);
        if($affected_rows == 1){
            echo 'Student Entered';
            mysqli_stmt_close($stmt);
            mysqli_close($con);
        } else {
            echo 'Error Occurred<br />';
            echo mysqli_error();
            mysqli_stmt_close($stmt);
            mysqli_close($con);
        }
    } else {
    echo 'You need to enter the following data<br />';
    foreach($data_missing as $missing){
        echo "$missing<br />";
    }
}
};