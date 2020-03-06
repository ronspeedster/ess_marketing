<?php
  require_once 'dbh.php';
  include("sidebar.php");
  $getProcess = $mysqli->query('SELECT * FROM process') or die ($mysqli->error);
?>
<title>View Processes</title>
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
            <h1 class="h3 mb-0 text-gray-800">View Processes</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h4>Processes</h4>
                </div>
                <div class="card-body">
                    <table id="dataTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Process Name</th>
                                <th>Account Name</th>
                                <th>Complete Address</th>
                                <th>Departure Date</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while($newGetProcess=$getProcess->fetch_assoc()){ ?>
                            <tr>
                                <td><?php echo $newGetProcess['id']; ?></td>
                                <td>
                                    <a target="_blank" href="print_process2.php?id=<?php echo $newGetProcess['id']; ?>">
                                    <?php echo $newGetProcess['process_name']; ?>
                                    </a>
                                </td>
                                <td><?php echo $newGetProcess['account_name']; ?></td>
                                <td><?php echo $newGetProcess['complete_address']; ?></td>
                                <td><?php echo $newGetProcess['departure_date']; ?></td>
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
