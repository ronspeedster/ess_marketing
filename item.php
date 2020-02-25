<?php
require_once 'dbh.php';
include("sidebar.php");
$getItems = $mysqli->query('SELECT * FROM item') or die ($mysqli->error);

?>
<title>Item</title>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
        <?php
        include("topbar.php");
        ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <?php
            if(isset($_SESSION['message'])){
                ?>
                <div class="alert alert-<?=$_SESSION['msg_type']?> alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                    ?>
                </div>
                <?php
            }
            ?>
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Item</h1>
            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- Content Column -->
                <div class="col-lg-12 mb-4">

                    <!-- Project Card Example -->
                    <div class="card shadow mb-4">
                        <form action="process_item.php" method="POST" class="mb-1">
                            <div class="card-body">

                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Item Code</th>
                                        <th>Item Description</th>
                                        <th>Material</th>
                                        <th>Finish</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><input class="form-control" name="item_code" placeholder="ex: WASD" required></td>
                                        <td>
                                            <input type="text" class="form-control" name="description" placeholder="Coconut" required>
                                        </td>
                                        <td>
                                            <select class="form-control" name="material" required>
                                                <option value="Polyester Resin">Polyester Resin</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" name="finish" required>
                                                <option value="Handpainted">Handpainted</option>
                                                <option value="No Finish">No Finish</option>
                                            </select>
                                        </td>

                                    </tr>
                                    <tr>

                                    </tr>
                                    </tbody>

                                </table>
                                <button type="submit" class="btn btn-primary btn-sm mb-1 float-right" name="save"><i class="far fa-save"></i> Save</button>
                        </form>
                    </div>
                </div>
                <!-- Content Column -->
                <div class="col-lg-12 mb-4">

                    <!-- Project Card Example -->
                    <div class="card shadow mb-12" style="padding: 2%;">
                        <table class="table" id="dataTable">
                            <thead>
                            <tr>
                                <th>Item Code</th>
                                <th>Description</th>
                                <th>Material</th>
                                <th>Finish</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php while($newItems=$getItems->fetch_assoc()){ ?>
                                <tr>
                                    <td><?php echo $newItems['item_code']; ?></td>
                                    <td><?php echo $newItems['item_description']; ?></td>
                                    <td><?php echo $newItems['material']; ?></td>
                                    <td><?php echo $newItems['finish']; ?></td>
                                </tr>
                            <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <!-- Start Row -->
            <div class="row">




            </div>
            <!-- End Row -->
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include("footer.php"); ?>
