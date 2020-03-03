<?php
    include("dbh.php");
    if(isset($_POST['save_city'])){
        echo $province = $_POST['province'];
        echo $city = $_POST['city'];

        $mysqli->query("INSERT INTO areas (province, city) VALUES( '$province','$city' ) ") or die ($mysqli->error);

        $_SESSION['message'] = "Record has been saved!";
        $_SESSION['msg_type'] = "success";
        header("location: areas.php");
    }


    if(isset($_POST['save_location_and_time'])){
        $area = $_POST['area'];
        $travel_time = $_POST['travel_time'];

        $mysqli->query("INSERT INTO location_and_time (location, hours) VALUES('$area','$travel_time' )") or die ($mysqli->error());

        $_SESSION['message'] = "Record has been saved!";
        $_SESSION['msg_type'] = "success";
        header("location: location_and_time.php");
    }
