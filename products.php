<?php
require_once 'dbh.php';
include("sidebar.php");

$getCategory = $mysqli->query('SELECT * FROM product_category') or die ($mysqli->error);

$getProduct = $mysqli->query('SELECT pc.name AS category_name, p.name AS product_name, p.product_code, p.company_name
FROM product p
JOIN product_category pc
ON pc.id = p.category') or die ($mysqli->error);

?>
<title>Products</title>
<script type="text/javascript">
    $(document).ready(function() {
        $('#categoryDataTable').DataTable(
            {
                "order": [[ 0, "asc" ]],
                "pageLength": 100
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
                <h1 class="h3 mb-0 text-gray-800">Products</h1>
            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- Content Column -->
                <div class="col-lg-12 mb-4">

                    <!-- Project Card Example -->
                    <div class="card shadow mb-4">
                        <form action="process_product.php" method="POST" class="mb-1">
                            <div class="card-body">

                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Company</th>
                                        <th>Category</th>
                                        <th>Product Code</th>
                                        <th>Product Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" name="company" required>
                                        </td>
                                        <td>
                                            <select class="form-control" name="category">
                                                <?php while($newCategory=$getCategory->fetch_assoc()){ ?>
                                                    <option value="<?php echo $newCategory['id']; ?>"><?php echo $newCategory['name']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="product_code" placeholder="00001010101" required>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="product" placeholder="Mouse Acer" required>
                                        </td>

                                    </tr>
                                    <tr>

                                    </tr>
                                    </tbody>

                                </table>
                                <button type="submit" class="btn btn-primary btn-sm mb-1 float-right" name="save_product"><i class="far fa-save"></i> Save</button>
                        </form>
                    </div>
                </div>
                <!-- Content Column -->
                <div class="col-lg-12 mb-4">

                    <!-- Project Card Example -->
                    <div class="card shadow mb-12" style="padding: 2%;">
                        <table class="table" id="categoryDataTable">
                            <thead>
                            <tr>
                                <th>Company</th>
                                <th>Category Name</th>
                                <th>Product Code</th>
                                <th>Product Description</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php while($newProduct=$getProduct->fetch_assoc()){ ?>
                                <tr>
                                    <td><?php echo $newProduct['company_name']; ?></td>
                                    <td><?php echo $newProduct['category_name']; ?></td>
                                    <td><?php echo $newProduct['product_code']; ?></td>
                                    <td><?php echo $newProduct['product_name']; ?></td>
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
