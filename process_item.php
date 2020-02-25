<?php
    include("dbh.php");
    if(isset($_POST['save'])){
        $item_code = $_POST['item_code'];
        $description = $_POST['description'];
        $material = $_POST['material'];
        $finish = $_POST['finish'];

        $mysqli->query("INSERT INTO item (item_code, item_description, material, finish) VALUES('$item_code','$description','$material','$finish' )") or die ($mysqli->error());

        $_SESSION['message'] = "Record has been saved!";
        $_SESSION['msg_type'] = "success";
        header("location: item.php");
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
