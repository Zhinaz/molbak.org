<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Files</title>
  
  <link rel="shortcut icon" href="/images/favicon.ico"/>
  <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
  <!-- Optional Bootstrap theme -->
  <link rel="stylesheet" href="dist/css/custom-bootstrap.css">
</head>

<body>
  <?php include 'includes/upper-body.php';?>
  
  <div class="panel panel-primary">
    <div class="panel-body" style="text-align:center">
      <?php
      $servername = "mysql.molbak.org";
      $username = "molbak_org";
      $password = "oojaNumime02";
      $dbname = "molbak_org_db";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      } 

      $sql = "SELECT dinner_item FROM dinner ORDER BY RAND() LIMIT 1";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo "You shoud make " . "<h1>" . $row["dinner_item"]. "</h1>" . " for dinner!" ;
          }
      } else {
          echo "0 results";
      }
      $conn->close();
      ?>
    </div>
  </div>

  <?php include 'includes/lower-body.php';?>
</body>
</html>