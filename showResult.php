<?php
  session_start();
  if(isset($_SESSION['email'])){
  include('includes/connection.php');
  $query = "SELECT * from result INNER JOIN students ON result.roll_no = students.roll_no WHERE result.roll_no = '$_POST[roll_no]'";
  $query_run = mysqli_query($connection,$query);
  while($row = mysqli_fetch_assoc($query_run)){
    $roll_no = $row['roll_no'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $father_name = $row['father_name'];
    $dob = $row['dob'];
    $hindi1 = $row['hindi1'];
    $hindi2 = $row['hindi2'];
    $hindi3 = $row['hindi3'];
    $english1 = $row['english1'];
    $english2 = $row['english2'];
    $english3 = $row['english3'];
    $maths1 = $row['maths1'];
    $maths2 = $row['maths2'];
    $maths3 = $row['maths3'];
    $science1 = $row['science1'];
    $science2 = $row['science2'];
    $science3 = $row['science3'];
    $social_science1 = $row['social_sec1'];
    $social_science2 = $row['social_sec2'];
    $social_science3 = $row['social_sec3'];
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <title>Result Page</title>
    <?php
    ?>

  </head>
  <body><br><br>
    <div class="row">
      <div class="col-md-8 m-auto block">
        <center>
          <table class="table bordered">
            <tr>
              <h2>Vellore Institute of Techonlogy (S.L.A.SH.)</h2>
            </tr>
            <tr>
              <td>Name: <?php echo $fname . " " . $lname;?></td>
              <td>Roll No: <?php echo $roll_no; ?></td>
            </tr>
            <tr>
              <td>Father's Name: <?php echo $father_name; ?></td>
              <td>Date of Birth: <?php echo $dob; ?></td>
            </tr>
          </table><br>
          <table class="table bordered">
            <tr>
              <th>Subject</th>
              <th style="padding:15px;">Test1 Marks</th>
              <th style="padding:15px;">Test2 Marks</th>
              <th style="padding:15px;">Test3 Marks</th>
              <th style="padding:15px;">Total Maks</th>
            </tr>
            <tr>
              <td>Maths</td>
              <td><?php echo $maths1; ?></td>
              <td><?php echo $maths2; ?></td>
              <td><?php echo $maths3; ?></td>
              <td><?php echo $maths1+$maths2+$maths3; ?></td>
            </tr>
            <tr>
              <td>Hindi</td>
              <td><?php echo $hindi1; ?></td>
              <td><?php echo $hindi2; ?></td>
              <td><?php echo $hindi3; ?></td>
              <td><?php echo $hindi1+$hindi2+$hindi3; ?></td>
            </tr>
            <tr>
              <td>English</td>
              <td><?php echo $english1; ?></td>
              <td><?php echo $english2; ?></td>
              <td><?php echo $english3; ?></td>
              <td><?php echo $english1+$english2+$english3; ?></td>
            </tr>
            <tr>
              <td>Science</td>
              <td><?php echo $science1; ?></td>
              <td><?php echo $science2; ?></td>
              <td><?php echo $science3; ?></td>
              <td><?php echo $science1+$science2+$science3; ?></td>
            </tr>
            <tr>
              <td>Social Science</td>
              <td><?php echo $social_science1; ?></td>
              <td><?php echo $social_science2; ?></td>
              <td><?php echo $social_science3; ?></td>
              <td><?php echo $social_science1+$social_science2+$social_science3; ?></td>
            </tr>
          </table>
        </center>
      </div>
    </div><br><br>
    <center>
      <button type="button" class="btn btn-primary" name="button">Download</button>
      <button type="button" class="btn btn-danger" name="button">Print Result</button>
    </center>
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
