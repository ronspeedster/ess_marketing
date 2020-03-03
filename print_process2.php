<?php
  require_once 'dbh.php';
  include("sidebar.php");
  $id = $_GET['id'];
  $getProcess = $mysqli->query("SELECT * FROM process WHERE id='$id' ") or die ($mysqli->error);
  $newProcess = $getProcess->fetch_array();
  $process_name = $newProcess['process_name'];
  $check_inventory = $newProcess['check_inventory'];
  $purchase_order = $newProcess['purchase_order'];
  $initial_invoicing_order = $newProcess['initial_invoicing_order'];
  $prepare_the_order = $newProcess['prepare_the_order'];
  $check_prepared_order = $newProcess['check_prepared_order'];
  $final_invoicing_printing = $newProcess['final_invoicing_printing'];
  $truck_loading = $newProcess['truck_loading'];
  $departure_date = $newProcess['departure_date'];
  $city = $newProcess['area'];
  $complete_address = $newProcess['complete_address'];
  $account_name = $newProcess['account_name'];
  $departure_time = $newProcess['departureTime'];
  $arrival_time = $newProcess['arrivalTime'];
  $process_date = $newProcess['process_date'];
  $product_company= $newProcess['product_company'];
?>
<title>Print Process</title>
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
            <h1 class="h3 mb-0 text-gray-800">Print Process</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <?php echo $process_name; ?>
                </div>
                <div class="card-body">
                    <h4>Processing Date: <?php echo $process_date; ?></h4><br/>
                    Check the Inventory: <?php echo $check_inventory; ?><br/>
                    Purchase Order: <?php echo $purchase_order; ?><br/>
                    Initial Invoicing of Order: <?php echo $initial_invoicing_order; ?><br/>
                    Prepare the Order: <?php echo $prepare_the_order; ?><br/>
                    Check the prepared order: <?php echo $check_prepared_order; ?><br/>
                    Final Invoicing and Printing: <?php echo $final_invoicing_printing; ?><br/>
                    Truck Loading: <?php echo $truck_loading; ?><br/><br/>

                    <h4>Departure Date: <?php echo $departure_date; ?></h4><br/>
                    City: <?php echo $city; ?><br/>
                    Complete Address: <?php echo $complete_address; ?><br/>
                    Account Name: <?php echo $account_name; ?><br/>
                    Departure Time: <?php echo $departure_time; ?><br/>
                    Arrival Time: <?php echo $arrival_time; ?><br/><br/>

                    <h4>Products:</h4><br/>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Product Code</th>
                                <th>Product Name</th>
                            </tr>
                        </thead>
                        <tbody>
                    <?php $getProducts = $mysqli->query(" SELECT * FROM product WHERE company_name='$product_company' ") or die ($mysqli->error);
                        while($newProducts=$getProducts->fetch_assoc()){ ?>
                            <tr>
                                <td><?php echo $newProducts['product_code']; ?></td>
                                <td><?php echo $newProducts['name']; ?></td>
                            </tr>
                    <?php } ?>
                        </tbody>
                    </table>
                </div>
              </div>


            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php include("footer.php"); ?>
