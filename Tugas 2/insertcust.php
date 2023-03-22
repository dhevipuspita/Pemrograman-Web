<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('connection.php'); 

  $status = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $customerNumber = $_POST['customerNumber'];
      $customerName = $_POST['customerNama'];
      $contactLastName = $_POST['contactLastName'];
      $contactFirstName = $_POST['contactFirstName'];
      $phone = $_POST['phone'];
      $addressLine1 = $_POST['addressLine1'];
      $addressLine2 = $_POST['addressLine2'];
      $city = $_POST['city'];
      $state = $_POST['state'];
      $postalCode = $_POST['postalCode'];
      $country = $_POST['country'];
      $salesRepEmployeeNumber = $_POST['salesRepemployeeNumber'];
      $creditLimit = $_POST['creditLimit'];
      
      //query SQL
      $query = "INSERT INTO customers (customerNumber, customerName, contactLastName, contactFirstName, phone, addressLine1, addressLine2, city, state, postalCode, country, salesRepEmployeeNumber, creditLimit) values ('$customerNumber', '$customerName', '$contactLastName', '$contactFirstName', '$phone', '$addressLine1', '$addressLine2', '$city', '$state', '$postalCode', '$country', '$salesRepEmployeeNumber', '$creditLimit')"; 

      //eksekusi query
      $result = mysqli_query(connection(),$query);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tabel</title>
    <!-- load css boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>

  <body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Classic Models</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          <a class="nav-link active" aria-current="page" href="customers.php">Customers</a>
          <a class="nav-link active" aria-current="page" href="products.php">Products</a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Insert</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="insertcust.php">Insert Customer</a></li>
            <li><a class="dropdown-item" href="insertproduct.php">Insert Product</a></li>
          </ul>
        </li>
        </div>
      </div>
  </div>
</nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          
          <?php 
              if ($status=='ok') {
                echo '<br><br><div class="alert alert-success" role="alert">Data Mahasiswa berhasil disimpan</div>';
              }
              elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">Data Mahasiswa gagal disimpan</div>';
              }
           ?>

          <h2 style="margin: 30px 0 30px 0;">Insert Customer</h2>
          <form action="insertcust.php" method="POST">
            
            <div class="form-group">
              <label>customerNumber</label>
              <input type="text" class="form-control" placeholder="" name="customerNumber" required="required">
            </div>
            <div class="form-group">
              <label>customerName</label>
              <input type="text" class="form-control" placeholder="" name="customerName" required="required">
            </div>
            <div class="form-group">
              <label>contactLastName</label>
              <input type="text" class="form-control" placeholder="" name="contactLastName" required="required">
            </div>
            <div class="form-group">
              <label>contactFirstName</label>
              <input type="text" class="form-control" placeholder="" name="contactFirstName" required="required">
            </div>
            <div class="form-group">
              <label>phone</label>
              <input type="text" class="form-control" placeholder="" name="phone" required="required">
            </div>
            <div class="form-group">
              <label>addressLine1</label>
              <input type="text" class="form-control" placeholder="" name="addressLine1" required="required">
            </div>
            <div class="form-group">
              <label>addressLine2</label>
              <input type="text" class="form-control" placeholder="" name="addressLine1" required="required">
            </div>
            <div class="form-group">
              <label>city</label>
              <input type="text" class="form-control" placeholder="" name="city" required="required">
            </div>
            <div class="form-group">
              <label>state</label>
              <input type="text" class="form-control" placeholder="" name="state" required="required">
            </div>
            <div class="form-group">
              <label>postalCode</label>
              <input type="text" class="form-control" placeholder="" name="postalCode" required="required">
            </div>
            <div class="form-group">
              <label>country</label>
              <input type="text" class="form-control" placeholder="" name="country" required="required">
            </div>
            <div class="form-group">
              <label>salesRepEmployeeNumber</label>
              <select class="form-select" id="">
                <option selected>Pilih salah satu</option>
                <option value="1002">1002</option>
                <option value="1056">1056</option>
                <option value="1076">1076</option>
                <option value="1088">1088</option>
                <option value="1102">1102</option>
                <option value="1143">1143</option>
                <option value="1165">1165</option>
                <option value="1166">1166</option>
                <option value="1188">1188</option>
                <option value="1216">1216</option>
                <option value="1286">1286</option>
                <option value="1323">1323</option>
                <option value="1337">1337</option>
                <option value="1370">1370</option>
                <option value="1401">1401</option>
                <option value="1501">1501</option>
                <option value="1504">1504</option>
                <option value="1611">1611</option>
                <option value="1612">1612</option>
                <option value="1619">1619</option>
                <option value="1621">1621</option>
                <option value="1625">1625</option>
                <option value="1702">1702</option>
              </select>
            </div>
            <div class="form-group">
              <label>creditLimit</label>
              <input type="text" class="form-control" placeholder="" name="creditLimit" required="required">
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </main>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  </body>
</html>