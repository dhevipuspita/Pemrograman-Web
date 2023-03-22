<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('connection.php'); 

  $status = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $productCode = $_POST['productCode'];
      $productName = $_POST['productName'];
      $productLine = $_POST['productLine'];
      $productScale = $_POST['productScale'];
      $productVendor = $_POST['productVendor'];
      $productDescription = $_POST['productDescription'];
      $quantityInStock = $_POST['quantityInStock'];
      $buyPrice = $_POST['buyPrice'];
      $MSRP = $_POST['MSRP'];
      
      //query SQL
      $query = "INSERT INTO `products`(`productCode`,`productName`,`productLine`,`productScale`,`productVendor`,`productDescription`,`quantityInStock`,`buyPrice`,`MSRP`) values 
      (`$productCode`,`$productName`,`$productLine`,`$productScale`,`$productVendor`,`$productDescription`,`$quantityInStock`,`$buyPrice`,`$MSRP`)"; 

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

          <h2 style="margin: 30px 0 30px 0;">Insert Product</h2>
          <form action="insertcust.php" method="POST">
            
            <div class="form-group">
              <label>productCode</label>
              <input type="text" class="form-control" placeholder="" name="productCode" required="required">
            </div>
            <div class="form-group">
              <label>productName</label>
              <input type="text" class="form-control" placeholder="" name="productName" required="required">
            </div>
            <div class="form-group">
              <label>productLine</label>
              <select class="form-select" id="">
                <option value="">Pilih Salah Satu</option>
                <option value="Motorcycles">Motorcycles</option>
                <option value="Classic Cars">Classic Cars</option>
                <option value="Trucks and Buses">Trucks and Buses</option>
                <option value="Planes">Planes</option>
                <option value="Vintage Cars">Vintage Cars</option>
                <option value="Trains">Trains</option>
                <option value="Ships">Ships</option>

              </select>
            </div>
            <div class="form-group">
              <label>productScale</label>
              <input type="text" class="form-control" placeholder="" name="productScale" required="required">
            </div>
            <div class="form-group">
              <label>productVendor</label>
              <input type="text" class="form-control" placeholder="" name="productVendor" required="required">
            </div>
            <div class="form-group">
              <label>productDescription</label>
              <input type="text" class="form-control" placeholder="" name="productDescription" required="required">
            </div>
            <div class="form-group">
              <label>quantityInStock</label>
              <input type="text" class="form-control" placeholder="" name="quantityInStock" required="required">
            </div>
            <div class="form-group">
              <label>buyPrice</label>
              <input type="text" class="form-control" placeholder="" name="buyPrice" required="required">
            </div>
            <div class="form-group">
              <label>MSRP</label>
              <input type="text" class="form-control" placeholder="" name="MSRP" required="required">
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