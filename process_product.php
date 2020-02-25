<?php
include("dbh.php");
if(isset($_POST['save_category'])){
    $category = $_POST['category'];

    $mysqli->query("INSERT INTO product_category (name) VALUES( '$category' ) ") or die ($mysqli->error);

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: categories.php");
}

if(isset($_POST['save_product'])){
    $company = $_POST['company'];
    $category = $_POST['category'];
    $product_code = $_POST['product_code'];
    $product = $_POST['product'];

    $mysqli->query("INSERT INTO product (company_name,category,product_code,name) VALUES( '$company','$category','$product_code','$product' ) ") or die ($mysqli->error);

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: products.php");
}
