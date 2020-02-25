<?php
require_once 'dbh.php';
include("sidebar.php");
$getItemSculMat = $mysqli->query('SELECT i.item_code, i.item_description, i.material, i.finish,
MAX(CASE WHEN (sm.id = 1) THEN ism.item_value ELSE NULL END ) AS sm1,
MAX(CASE WHEN (sm.id = 2) THEN ism.item_value ELSE NULL END ) AS sm2,
MAX(CASE WHEN (sm.id = 3) THEN ism.item_value ELSE NULL END ) AS sm3,
MAX(CASE WHEN (sm.id = 4) THEN ism.item_value ELSE NULL END ) AS sm4,
MAX(CASE WHEN (sm.id = 5) THEN ism.item_value ELSE NULL END ) AS sm5,
MAX(CASE WHEN (sm.id = 6) THEN ism.item_value ELSE NULL END ) AS sm6,
MAX(CASE WHEN (sm.id = 7) THEN ism.item_value ELSE NULL END ) AS sm7,
MAX(CASE WHEN (sm.id = 8) THEN ism.item_value ELSE NULL END ) AS sm8
FROM item_sculpture_material ism
JOIN item i
ON i.id = ism.item_id
JOIN sculpture_materials sm
ON sm.id = ism.sculpture_id
GROUP BY i.id') or die ($mysqli->error);


?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#itemSculptureMaterials').DataTable(
            {
                "order": [[ 2, "asc" ]],
                "pageLength": 50
            }
        );
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
                    <div class="card shadow mb-4" style="padding: 2%; overflow-x: auto;">
                        <table class="table" id="itemSculptureMaterials">
                            <thead>
                            <tr>
                                <th>Item Code</th>
                                <th>Item Description</th>
                                <th>Material</th>
                                <th>Finish</th>
                                <th>Styrofoam 1' x 4' x 8'</th>
                                <th>Micro Wax</th>
                                <th>Parafin Wax</th>
                                <th>Petroleum Jelly</th>
                                <th>Silicone Sealant Clear</th>
                                <th>Boral Plaster</th>
                                <th>PVC Pipe 4" X 10ft Orange</th>
                                <th>Orinary Plywood 1/4" (6mm)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php while($newItemSculMat=$getItemSculMat->fetch_assoc()){ ?>
                                <tr>
                                    <td><?php echo $newItemSculMat['item_code']; ?></td>
                                    <td><?php echo $newItemSculMat['item_description']; ?></td>
                                    <td><?php echo $newItemSculMat['material']; ?></td>
                                    <td><?php echo $newItemSculMat['finish']; ?></td>
                                    <td><?php echo $newItemSculMat['sm1']; ?></td>
                                    <td><?php echo $newItemSculMat['sm2']; ?></td>
                                    <td><?php echo $newItemSculMat['sm3']; ?></td>
                                    <td><?php echo $newItemSculMat['sm4']; ?></td>
                                    <td><?php echo $newItemSculMat['sm5']; ?></td>
                                    <td><?php echo $newItemSculMat['sm6']; ?></td>
                                    <td><?php echo $newItemSculMat['sm7']; ?></td>
                                    <td><?php echo $newItemSculMat['sm8']; ?></td>

                                </tr>
                            <?php }?>
                            </tbody>
                        </table>

                </div>

            </div>

            <!-- End Row -->
        </div>

    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

<?php include("footer.php");
?>
