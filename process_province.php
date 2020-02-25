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

    if(isset($_POST['save_sculpture_materials'])){
        $item_code = $_POST['item_code'];
        $sculpture_material = $_POST['sculpture_material'];
        $item_value = $_POST['item_value'];

        $mysqli->query("INSERT INTO item_sculpture_material (item_id, sculpture_id, item_value) VALUES('$item_code','$sculpture_material','$item_value' )") or die ($mysqli->error());

        $_SESSION['message'] = "Record has been saved!";
        $_SESSION['msg_type'] = "success";
        header("location: sculpture-materials.php");
    }
