<?php
  session_start();
  if(isset($_SESSION['email'])){
  include('includes/header.php');
  include('includes/connection.php');
  $fname = "";
  $lname = "";
  $dob = "";
  $gender = "";
  $email = "";
  $mobile = "";
  $subject = "";
  $status = "";
  $address = "";
  if(isset($_POST['search_by_id'])){
    $query = "select * from teachers where id = '$_POST[id]'";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
      $id = $row['id'];
      $fname = $row['fname'];
      $lname = $row['lname'];
      $dob = $row['dob'];
      $gender = $row['gender'];
      $email = $row['email'];
      $mobile = $row['mobile'];
      $subject = $row['subject'];
      $status = $row['status'];
      $address = $row['address'];
    }
  }
  if(isset($_POST['search_by_name'])){
    $query = "select * from teachers where fname like '$_POST[name]'";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
      $id = $row['id'];
      $fname = $row['fname'];
      $lname = $row['lname'];
      $dob = $row['dob'];
      $gender = $row['gender'];
      $email = $row['email'];
      $mobile = $row['mobile'];
      $subject = $row['subject'];
      $status = $row['status'];
      $address = $row['address'];
    }
  }
  if(isset($_POST['delete'])){
    $query = "delete from teachers where id = '$_POST[id]'";
    $query_run = mysqli_query($connection,$query);
    echo $query;
    if($query_run){
      echo "<script type='text/javascript'>
        alert('Record deleted successfully...');
        window.location.href = 'dashboard.php';
      </script>";
    }
    else{
      echo "<script type='text/javascript'>
        alert('Cannot delete...Plz try again.');
        window.location.href = 'deleteTeacher.php';
      </script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete Teacher</title>
  </head>
  <body>
    <br>
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-4">
        <form action="" method="post">
          <div class="form-group">
            Teacher ID: <input type="text" name="id" placeholder="Enter ID...">
            <input type="submit" name="search_by_id" value="Search">
          </div>
        </form>
      </div>
      <div class="col-md-4">
        <form action="" method="post">
          <div class="form-group">
            Name: <input type="text" name="name" placeholder="Enter Name...">
            <input type="submit" name="search_by_name" value="Search">
          </div>
        </form>
      </div>
      <div class="col-md-2"></div>
    </div>
    <hr>
    <center><h4><u>Delete Teacher</u></h4><br></center>
    <div class="row">
      <div class="col-md-4 m-auto block">
        <form action="" method="POST">
          <div class="form-group">
            <label for="name">Teacher ID:</label>
            <input type="text" class="form-control" name="id" value="<?php echo $id; ?>" id="id" required="">
          </div>
          <div class="form-group">
            <label for="name">First Name:</label>
            <input type="text" class="form-control" name="fname" value="<?php echo $fname; ?>" id="fname" disabled>
          </div>
          <div class="form-group">
            <label for="name">Last Name:</label>
            <input type="text" class="form-control" name="lname" value="<?php echo $lname; ?>" id="lname" disabled>
          </div>
          <div class="form-group">
            <label for="name">DOB:</label>
            <input type="date" class="form-control" name="dob" id="dob" value="<?php echo $dob; ?>" disabled>
          </div>
          <div class="form-group">
            <label>Gender:</label>
            <select class="form-control" name="gender" id="gender" disabled>
                <option><?php echo $gender; ?></option>
                <option>Male</option>
                <option>Female</option>
                <option>Transgender</option>
            </select>
          </div>
          <div class="form-group">
            <label for="name">Email ID:</label>
            <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" id="email" disabled>
          </div>
          <div class="form-group">
            <label for="name">Mobile No:</label>
            <input type="text" class="form-control" name="mobile" value="<?php echo $mobile; ?>" id="mobile" disabled>
          </div>
          <div class="form-group">
            <label for="name">Subject:</label>
            <input type="text" class="form-control" name="subject" value="<?php echo $subject; ?>" id="subject" disabled>
          </div>
          <div class="form-group">
            <label>Status:</label>
            <select class="form-control" name="status" id="status" disabled>
                <option><?php echo $status; ?></option>
                <option>Active</option>
                <option>In-Active</option>
            </select>
          </div>
          <div class="form-group">
            <label>Address:</label>
            <textarea name="address" rows="4" cols="80" id="address" disabled><?php echo $address; ?></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-lg btn-primary" name="delete">Delete</button>
          </div>
        </form>
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
