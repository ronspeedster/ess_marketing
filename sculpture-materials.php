<?php
require_once 'dbh.php';
include("sidebar.php");
$getItems = $mysqli->query('SELECT * FROM item') or die ($mysqli->error);
$getSculptureMaterials = $mysqli->query('SELECT * FROM sculpture_materials') or die ($mysqli->error);

$getItemSculptureMaterials = $mysqli->query('SELECT i.item_code, i.item_description, ism.item_value, sm.description
FROM item_sculpture_material ism
JOIN item i
ON i.id = ism.item_id
JOIN sculpture_materials sm
ON sm.id = ism.sculpture_id') or die ($mysqli->error);
?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#itemSculptureMaterials').DataTable({
            "order": [[ 2, "asc" ]],
            "pageLength": 50
        } );
    } );
</script>
<title>Sculpture Materials</title>
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
                <h1 class="h3 mb-0 text-gray-800">Sculpture Materials</h1>
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
                                        <th>Sculpture Materials</th>
                                        <th>Value</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <select class="form-control" name="item_code" required>
                                                <option value="">---</option>
                                                <?php while ($newItems = $getItems->fetch_assoc()){ ?>
                                                    <option value="<?php echo $newItems['id'];?>"><?php echo $newItems['item_code']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" name="sculpture_material" required>
                                                <option value="">---</option>
                                                <?php while ($newSculptureMaterials = $getSculptureMaterials->fetch_assoc()){ ?>
                                                    <option value="<?php echo $newSculptureMaterials['id'];?>"><?php echo $newSculptureMaterials['description']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="number" name="item_value" class="form-control" step="0.00001"  required>
                                        </td>
                                    </tr>
                                    </tbody>

                                </table>
                                <button type="submit" class="btn btn-primary btn-sm mb-1 float-right" name="save_sculpture_materials"><i class="far fa-save"></i> Save</button>
                        </form>
                    </div>
                </div>
                <!-- Content Column -->
                <div class="col-lg-12 mb-4">

                    <!-- Project Card Example -->
                    <div class="card shadow mb-12" style="padding: 2%;">
                        <table class="table" id="itemSculptureMaterials">
                            <thead>
                            <tr>
                                <th>Item Code</th>
                                <th>Description</th>
                                <th>Sculpture Materials</th>
                                <th>Value</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php while($newItemSculptureMaterials=$getItemSculptureMaterials->fetch_assoc()){ ?>
                                <tr>
                                    <td><?php echo $newItemSculptureMaterials['item_code']; ?></td>
                                    <td><?php echo $newItemSculptureMaterials['item_description']; ?></td>
                                    <td><?php echo $newItemSculptureMaterials['description']; ?></td>
                                    <td><?php echo $newItemSculptureMaterials['item_value']; ?></td>
                                </tr>
                            <?php }?>
                            </tbody>
                        </table>
                        <a href="sculpture_materials_consolidated.php" target="_blank" style="text-align: center;">Show consilidated information</a>
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
