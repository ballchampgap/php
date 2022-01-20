
<?php
require 'connect.php';
//รับค่าไอดีที่จะแก้ไข
$ProductID = mysqli_real_escape_string($con,$_GET['ProductID']);

//query ข้อมูลจากตาราง: 
$sql = "SELECT * FROM Products WHERE ProductID='$ProductID' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);

//https://devbanban.com/?p=259

?>

<!DOCTYPE html>
<html>

<head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Product</title>
    <meta charset="UTF-8">
<style>
a:link {
  color: pink;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

.bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    
</style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Products</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
        </li>
      </ul>
    </div>
  </div>
</nav>
<main class="container">
  <div class="bg-light p-5 rounded">
  <hr><br>
<form action= "#" method="POST">
<h1>
<?php echo $ProductName; ?>
</h1>
<input type="hidden" name = "ProductID" value="<?php echo $ProductID; ?>" />


<label>ProductName*</label><br>
<input name="pname" type="text" id="pname" size="40" value="<?php echo $ProductName; ?>" required> <br>

<label>Picture*</label><br>
<input name="pic" type="text" id="pic" size="40" value="<?php echo $Picture; ?>" required> <br>

<label>Category*</label><br>
<input name="category" type="text" id="category" size="40" value="<?php echo $Category; ?>" required> <br>

<label>ProductDescription*</label><br>
<input name="pdest" type="text" id="pdest" size="40" value="<?php echo $ProductDescription; ?>" required> <br>

<label>Price*</label><br>
<input name="price" type="number" id="price" value="<?php echo $Price; ?>" required> <br>

<label>QuantityStock*</label><br>
<input name="qstock" type="number" id="qstock"  value="<?php echo $QuantityStock; ?>" required> <br>

<br>

<input type="submit" value="Delete" onClick="this.form.action='frmDel.php'; submit()">  

<input type="submit" value="Save"   onClick="this.form.action='frmUpd.php'; submit()">


<input type="reset" value="Cancel">
</form>


</div>
</main>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      
  

</body>
</html>

