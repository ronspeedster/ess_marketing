<?php
include("dbh.php");
if(isset($_POST['save_account'])){
    $city = $_POST['city'];
    $company_name = $_POST['company_name'];
    $complete_address = $_POST['complete_address'];

    $mysqli->query("INSERT INTO accounts (areas, account_name, complete_address) VALUES( '$city','$company_name','$complete_address' ) ") or die ($mysqli->error);

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: accounts.php");
}
