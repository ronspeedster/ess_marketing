<?php
    date_default_timezone_set('Asia/Manila');

    include("dbh.php");
    if(isset($_POST['save_process'])){
        $process_name = $_POST['process_name'];
        $company1 = $_POST['company1'];
        $product1 = $_POST['product1'];
        /*$company2 = $_POST['company2'];
        $product2 = $_POST['product2'];
        $company3 = $_POST['company3'];
        $product3 = $_POST['product3'];
        */


        $getCompany1 = $mysqli->query("SELECT acc.account_name, acc.complete_address, ar.city, lat.hours, p.province_name FROM accounts acc
LEFT JOIN areas ar ON acc.areas = ar.id
LEFT JOIN location_and_time lat on ar.id = lat.location
LEFT JOIN province p on ar.province = p.id
WHERE acc.id='$company1'") or die ($mysqli->error());
        $newCompany1 = $getCompany1->fetch_array();
        //print_r($newCompany1);
/*
        $getCompany2 = $mysqli->query("SELECT acc.account_name, acc.complete_address, ar.city, lat.hours FROM accounts acc
    LEFT JOIN areas ar ON acc.areas = ar.id
    LEFT JOIN location_and_time lat on ar.id = lat.location
WHERE acc.id='$company2'") or die ($mysqli->error());
        $newCompany2 = $getCompany2->fetch_array();
        echo "<br>";

        $getCompany3 = $mysqli->query("SELECT acc.account_name, acc.complete_address, ar.city, lat.hours FROM accounts acc
    LEFT JOIN areas ar ON acc.areas = ar.id
    LEFT JOIN location_and_time lat on ar.id = lat.location
WHERE acc.id='$company3'") or die ($mysqli->error());
        $newCompany3 = $getCompany3->fetch_array();
*/
        $getProduct1 = $mysqli->query("SELECT * FROM product WHERE id=$product1") or die ($mysqli->error());
        $newProduct1 = $getProduct1->fetch_array();
/*
        $getProduct2 = $mysqli->query("SELECT * FROM product WHERE id=$product2") or die ($mysqli->error());
        $newProduct2 = $getProduct2->fetch_array();

        $getProduct3 = $mysqli->query("SELECT * FROM product WHERE id=$product3") or die ($mysqli->error());
        $newProduct3 = $getProduct3->fetch_array();
*/
        $processDate = date('Y-m-d');
        $processTime = date('H:i:s');
        $processTime = strtotime($processTime);

        if($processTime>strtotime(date('11:00:00'))){
            $processDate = new DateTime('+1 day');
            $processDate = $processDate->format('Y-m-d');

            $processTime = strtotime("8:00");
            $checkInventory = date('H:i', strtotime('+10 minutes', $processTime ));
            $checkInventory1 = strtotime($checkInventory);

            $purchaseOrder = date('H:i', strtotime('+23 minutes', $checkInventory1 ));
            $purchaseOrder1 = strtotime($purchaseOrder);

            $initialInvoicingOrder = date('H:i', strtotime('+9 minutes', $purchaseOrder1 ));
            $initialInvoicingOrder1 = strtotime($initialInvoicingOrder);

            $prepareTheOrder = date('H:i', strtotime('+332 minutes', $initialInvoicingOrder1 ));
            $prepareTheOrder1 = strtotime($prepareTheOrder);

            $checkThePreparedOrder = date('H:i', strtotime('+14 minutes', $prepareTheOrder1 ));
            $checkThePreparedOrder1 = strtotime($checkThePreparedOrder);

            $finalInvoicingAndPrinting = date('H:i', strtotime('+13 minutes', $checkThePreparedOrder1 ));
            $finalInvoicingAndPrinting1 = strtotime($finalInvoicingAndPrinting);

            $truckLoading = date('H:i', strtotime('+112 minutes', $finalInvoicingAndPrinting1 ));
            $truckLoading1 = strtotime($truckLoading);
        }
        else{

            $checkInventory = date('H:i', strtotime('+10 minutes', $processTime ));
            $checkInventory1 = strtotime($checkInventory);

            $purchaseOrder = date('H:i', strtotime('+23 minutes', $checkInventory1 ));
            $purchaseOrder1 = strtotime($purchaseOrder);

            $initialInvoicingOrder = date('H:i', strtotime('+9 minutes', $purchaseOrder1 ));
            $initialInvoicingOrder1 = strtotime($initialInvoicingOrder);

            $prepareTheOrder = date('H:i', strtotime('+332 minutes', $initialInvoicingOrder1 ));
            $prepareTheOrder1 = strtotime($prepareTheOrder);

            $checkThePreparedOrder = date('H:i', strtotime('+14 minutes', $prepareTheOrder1 ));
            $checkThePreparedOrder1 = strtotime($checkThePreparedOrder);

            $finalInvoicingAndPrinting = date('H:i', strtotime('+13 minutes', $checkThePreparedOrder1 ));
            $finalInvoicingAndPrinting1 = strtotime($finalInvoicingAndPrinting);

            $truckLoading = date('H:i', strtotime('+112 minutes', $finalInvoicingAndPrinting1 ));
            $truckLoading1 = strtotime($truckLoading);
        }

/*
        echo "Check the Inventory: ". $checkInventory;
        echo "<br/>";
        echo "Purchase Order: ". $purchaseOrder;
        echo "<br/>";
        echo "Initial Invoicing of Order: ".$initialInvoicingOrder;
        echo "<br/>";
        echo "Prepare the Order: ".$prepareTheOrder;
        echo "<br/>";
        echo "Check the prepared order: ".$checkThePreparedOrder;
        echo "<br/>";
        echo "Final Invoicing and Printing: ".$finalInvoicingAndPrinting;
        echo "<br/>";
        echo "Truck Loading: ".$truckLoading;
        echo "<br/><br/>";
        echo "Area: ". $newCompany1['city'];
*/
        $city = $newCompany1['province_name'];
        $complete_address = $newCompany1['complete_address'];
        $account_name = $newCompany1['account_name'];

        if($city=="ZAMBALES"){
            $departureTime = "4:00";
            $departureTime1 = strtotime($departureTime);
            $getHours = strtotime($newCompany1['hours']);
            $arrivalTime = date('H:i', strtotime($getHours, $departureTime1 ));
            //echo "Departure Time: ".$departureTime." Arrival Time: ".$arrivalTime;
        }
        else if($city=="TARLAC" || $city=="BATAAN" || $city=="NUEVA ECIJA"){
            $departureTime = "5:30";
            $departureTime1 = strtotime($departureTime);
            $getHours = strtotime($newCompany1['hours']);
            //echo "<br/>";
            $arrivalTime = date('H:i', strtotime($getHours, $departureTime1 ));
            //echo "Departure Time: ".$departureTime." Arrival Time: ".$arrivalTime;
        }
        else{
            $departureTime = "6:00";
            $departureTime1 = strtotime($departureTime);
            $getHours = strtotime($newCompany1['hours']);
            //echo "<br/>";
            $arrivalTime = date('H:i', strtotime($getHours, $departureTime1 ));
            //echo "Departure Time: ".$departureTime." Arrival Time: ".$arrivalTime;
        }
        $departureDate = date('Y-m-d', strtotime($processDate."+1 days"));
        $departureDate;
        $companyName = $newProduct1['company_name'];

        $mysqli->query("INSERT INTO process (process_name, process_date, check_inventory, purchase_order, initial_invoicing_order, prepare_the_order, check_prepared_order, final_invoicing_printing, truck_loading, product_company, departure_date, area, complete_address, account_name, arrivalTime, departureTime) VALUES( '$process_name','$processDate','$checkInventory','$purchaseOrder', '$initialInvoicingOrder','$prepareTheOrder','$checkThePreparedOrder','$finalInvoicingAndPrinting','$truckLoading','$companyName','$departureDate','$city','$complete_address','$account_name','$arrivalTime','$departureTime') ") or die ($mysqli->error);

        $_SESSION['message'] = "Record has been saved!";
        $_SESSION['msg_type'] = "success";
        header("location: print_process.php?process_name=".$process_name."&process_date=".$processDate."&check_inventory=".$checkInventory."&purchase_order=".$purchaseOrder."&initial_invoicing_order=".$initialInvoicingOrder."&prepare_the_order=".$prepareTheOrder."&check_prepared_order=".$checkThePreparedOrder."&final_invoicing_printing=".$finalInvoicingAndPrinting."&truck_loading=".$truckLoading."&product_company=".$companyName."&departure_date=".$departureDate."&area=".$city."&complete_address=".$complete_address."&account_name=".$account_name.="&arrivalTime=".$arrivalTime."&departureTime=".$departureTime);

    }
