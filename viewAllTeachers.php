<?php
  session_start();
  if(isset($_SESSION['email'])){
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>All Teachers</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"></link>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <!-- CSS Files -->
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <div class="row">
      <div class="col-md-12"><br>
        <center><h4><u>List of All Teachers</u></h4></center><br>
        <table class="table">
          <tr>
            <th>S.No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>DOB</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Subject</th>
            <th>Status</th>
            <th>Address</th>
          </tr>
          <?php
            include('includes/connection.php');
            $query = "select * from teachers";
            $query_run = mysqli_query($connection,$query);
            $sno = 1;
            while($row = mysqli_fetch_assoc($query_run)){
              ?>
                <tr>
                  <td><?php echo $sno; $sno = $sno + 1; ?></td>
                  <td><?php echo $row['fname']; ?></td>
                  <td><?php echo $row['lname']; ?></td>
                  <td><?php echo $row['dob']; ?></td>
                  <td><?php echo $row['gender']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['mobile']; ?></td>
                  <td><?php echo $row['subject']; ?></td>
                  <td><?php echo $row['status']; ?></td>
                  <td><?php echo $row['address']; ?></td>
                </tr>
            <?php
          }
        ?>
        </table>
      </div>
    </div>
  </body>
</html>
<?php
}
else{
  echo "<script type='text/javascript'>
    window.location.href = 'index.php';
  </script>";
}
?>
