<?php
require_once 'dbh.php';
include("sidebar.php");

$getProvinces = $mysqli->query('SELECT * FROM province') or die ($mysqli->error);

$getAreas = $mysqli->query('SELECT * FROM areas a
JOIN province p
ON p.id = a.province') or die ($mysqli->error);
?>
<title>Areas</title>
<script type="text/javascript">
    $(document).ready(function() {
        $('#areaDataTable').DataTable(
            {
                "order": [[ 0, "asc" ]],
                "pageLength": 50
            }
        );
    } );
</script>
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
                <h1 class="h3 mb-0 text-gray-800">Areas / City</h1>
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
                                        <th>Province</th>
                                        <th>City / Area</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <select class="form-control" name="province" required>
                                                <?php while($newProvince=$getProvinces->fetch_assoc()){ ?>
                                                <option value="<?php echo $newProvince['id']; ?>"><?php echo $newProvince['province_name']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="city" placeholder="Angeles" required>
                                        </td>

                                    </tr>
                                    <tr>

                                    </tr>
                                    </tbody>

                                </table>
                                <button type="submit" class="btn btn-primary btn-sm mb-1 float-right" name="save_city"><i class="far fa-save"></i> Save</button>
                        </form>
                    </div>
                </div>
                <!-- Content Column -->
                <div class="col-lg-12 mb-4">

                    <!-- Project Card Example -->
                    <div class="card shadow mb-12" style="padding: 2%;">
                        <table class="table" id="areaDataTable">
                            <thead>
                            <tr>
                                <th>Province</th>
                                <th>City</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php while($newAreas=$getAreas->fetch_assoc()){ ?>
                                <tr>
                                    <td><?php echo $newAreas['province_name']; ?></td>
                                    <td><?php echo $newAreas['city']; ?></td>
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
