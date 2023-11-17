<?php
session_start();
require_once("db_con.php");
if (isset($_POST['btn']) == "Submit") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
   
    $email = $_POST['email'];
    $pnumber = $_POST['pnumber'];
    $val = "'$fname','$lname','$email','$pnumber'";
    $inQuery = "INSERT INTO userinfo values($val)";
    $exequte = mysqli_query($dbCon, $inQuery);
    if ($exequte) {
        $_SESSION['msg'] = "<strong style='color: green;'>Insert Successfully</strong>";
    } else {
        $_SESSION['msg'] = "<strong style='color: red;'>Insert Error</strong>";
    }
    header("Location:" .BASE);

}
?>