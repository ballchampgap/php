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
          <a class="nav-link" href="insert.php">Create a new Products</a>
        </li>
      </ul>
      <form class="d-flex" action = "" method="POST">
        <input class="form-control me-2"  placeholder="Search"  name="pname" type ="text" id="pname" value maxlength="20">
        <input type="submit" value ="Search">
        <input type="reset"> 
      </form>
    </div>
  </div>
</nav>

<main class="container">
  <div class="bg-light p-5 rounded">
  <hr><br>
    <table>
                <tr>
                    <th>Id</th>
                    <th>ProductName</th>
                    <th>Picture</th>
                    <th>Category</th>
                    <th>ProductDescription</th>
                    <th>Price</th>
                    <th>QuantityStock </th>
                </tr>

                <?php
                require 'connect.php';
                $text = null;
                if (isset($_POST["pname"])) {
                    $text = $_POST["pname"];
                }
                $query = "SELECT * FROM Products WHERE ProductName 
                LIKE '%" . $text . "%' OR Category LIKE '%" . $text . "%' OR ProductDescription LIKE '%" . $text . "%'";
                $result = mysqli_query($con, $query);         
                while ($row = mysqli_fetch_array($result)) 
                    {
                        $image = $row["Picture"];
                        $imageData = base64_encode(file_get_contents($image)); //เข้ารหัสสิ่งที่คุณส่งผ่านสตริง
                        //https://stackoverflow.com/questions/31793512/php-display-image-from-url-into-homepage
                        echo "<tr>";
                        echo "<td align='center'>" . $row["ProductID"] . "</td>";

                        echo "<td>" ." <a href= 'DelUpd.php?ProductID=$row[0]' > " . $row["ProductName"] . "</a>" . "</td>";

                        echo "<td><img style= 'width:70px;' src='data:image/jpeg;base64," .$imageData."'></td>";
                        echo "<td align='center'>" . $row["Category"] . "</td>";
                        echo "<td align='center'>" . $row["ProductDescription"] . "</td>";
                        echo "<td>" . $row["Price"] . "</td>";
                        echo "<td>" . $row["QuantityStock"] . "</td>";
                        echo "</tr>";

                    }
                
                echo "</table>";
                ?>              
            </table>
  </div>
</main>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      
  

</body>
</html>