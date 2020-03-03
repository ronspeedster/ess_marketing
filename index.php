<?php
  require_once 'dbh.php';
  include("sidebar.php");
  $getAccount = $mysqli->query('SELECT * FROM accounts ORDER BY account_name ASC') or die ($mysqli->error);
  $getCompany = $mysqli->query('SELECT * FROM product
GROUP BY company_name
ORDER BY company_name ASC ') or die($mysqli->error);
?>
<title>Dashboard</title>
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
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                  <form action="process_process.php" method="POST" class="mb-1">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Process: </h6><br/> <input type="text" class="form-control" placeholder="ex: D-2020-03-01-N-01" name="process_name"  required>
                </div>
                <div class="card-body">
                      <table class="table">
                          <thead>
                              <tr>
                                  <th>Account (Company)</th>
                                  <th>Product</th>
                              </tr>
                          </thead>
                          <!-- Form 1 -->
                          <tbody>
                              <tr>
                                  <td>
                                      <select class="form-control" required name="company1">
                                          <option disabled selected value="">(To) Company</option>
                                          <?php while($newAccount=$getAccount->fetch_assoc()){ ?>
                                            <option value="<?php echo $newAccount['id']; ?>"><?php echo $newAccount['id'].$newAccount['account_name']; ?></option>
                                          <?php } ?>
                                      </select>
                                  </td>
                                  <td>
                                      <select class="form-control" required name="product1">
                                          <option disabled selected value="">(From)Products to be generated later</option>
                                          <?php while($newProduct=$getCompany->fetch_assoc()){ ?>
                                          <option value="<?php echo $newProduct['id']; ?>"><?php echo $newProduct['company_name']; ?></option>
                                          <?php } ?>
                                      </select>
                                  </td>
                              </tr>

<?php
//$getAccount = $mysqli->query('SELECT * FROM accounts ORDER BY account_name ASC') or die ($mysqli->error);
//$getCompany = $mysqli->query('SELECT * FROM product GROUP BY company_name ORDER BY company_name ASC ') or die($mysqli->error);
?>
                              <!-- Form 2
                              <tr>
                                  <td>
                                      <select class="form-control" required name="company2">
                                          <option disabled selected value="">(To) Company</option>
                                          <?php while($newAccount=$getAccount->fetch_assoc()){ ?>
                                              <option value="<?php echo $newAccount['id']; ?>"><?php echo $newAccount['account_name']; ?></option>
                                          <?php } ?>
                                      </select>
                                  </td>
                                  <td>
                                      <select class="form-control" required name="product2">
                                          <option disabled selected value="">(From)Products to be generated later</option>
                                          <?php while($newProduct=$getCompany->fetch_assoc()){ ?>
                                              <option value="<?php echo $newProduct['id']; ?>"><?php echo $newProduct['company_name']; ?></option>
                                          <?php } ?>
                                      </select>
                                  </td>
                              </tr>
                              -->
<?php
//$getAccount = $mysqli->query('SELECT * FROM accounts ORDER BY account_name ASC') or die ($mysqli->error);
//$getCompany = $mysqli->query('SELECT * FROM product GROUP BY company_name ORDER BY company_name ASC ') or die($mysqli->error);
?>
                              <!-- Form 3
                              <tr>
                                  <td>
                                      <select class="form-control" required name="company3">
                                          <option disabled selected value="">(To) Company</option>
                                          <?php while($newAccount=$getAccount->fetch_assoc()){ ?>
                                              <option value="<?php echo $newAccount['id']; ?>"><?php echo $newAccount['account_name']; ?></option>
                                          <?php } ?>
                                      </select>
                                  </td>
                                  <td>
                                      <select class="form-control" required name="product3">
                                          <option disabled selected value="">(From)Products to be generated later</option>
                                          <?php while($newProduct=$getCompany->fetch_assoc()){ ?>
                                              <option value="<?php echo $newProduct['id']; ?>"><?php echo $newProduct['company_name']; ?></option>
                                          <?php } ?>
                                      </select>
                                  </td>
                              </tr>
                              -->
                          </tbody>

                      </table>
                    <button type="submit" class="btn btn-primary btn-sm mb-1 float-right" name="save_process"><i class="far fa-save"></i> Save</button>
                  </form>
                </div>
              </div>


            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php include("footer.php"); ?>
