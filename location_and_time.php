<?php
require_once 'dbh.php';
include("sidebar.php");
$getAreas = $mysqli->query('SELECT *, a.id AS area_id
FROM areas a
LEFT JOIN location_and_time lat ON a.id = lat.location
WHERE lat.location IS NULL
') or die ($mysqli->error);
$getTravelTime = $mysqli->query('SELECT *
FROM areas a
    JOIN location_and_time lat ON a.id = lat.location
    JOIN province p on a.province = p.id
    ') or die ($mysqli->error);
?>
<title>Location and Time</title>
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
                <h1 class="h3 mb-0 text-gray-800">Location and Time</h1>
            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- Content Column -->
                <div class="col-lg-12 mb-4">

                    <!-- Project Card Example -->
                    <div class="card shadow mb-4">
                        <form action="process_province.php" method="POST" class="mb-1">
                            <div class="card-body">

                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>City</th>
                                        <th>Travel Time (in mins.)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <select class="form-control" name="area">
                                                <?php while($newAreas=$getAreas->fetch_assoc()){ ?>
                                                <option value="<?php echo $newAreas['area_id']; ?>"><?php echo $newAreas['city']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="number" name="travel_time" class="form-control">
                                        </td>
                                    </tr>
                                    <tr>

                                    </tr>
                                    </tbody>

                                </table>
                                <button type="submit" class="btn btn-primary btn-sm mb-1 float-right" name="save_location_and_time"><i class="far fa-save"></i> Save</button>
                        </form>
                    </div>
                </div>
                <!-- Content Column -->
                <div class="col-lg-12 mb-4">

                    <!-- Project Card Example -->
                    <div class="card shadow mb-12" style="padding: 2%;">
                        <table class="table table-bordered" id="dataTable">
                            <thead>
                            <tr>
                                <th>Province</th>
                                <th>City</th>
                                <th>Travel Time (in mins.)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php while($newTravelTime=$getTravelTime->fetch_assoc()){ ?>
                            <tr>
                                <td><?php echo $newTravelTime['province_name']; ?></td>
                                <td><?php echo strtoupper($newTravelTime['city']); ?></td>
                                <td><?php echo strtoupper($newTravelTime['hours']); ?></td>
                            </tr>
                            <?php } ?>
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
