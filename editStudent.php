<?php
  session_start();
  if(isset($_SESSION['email'])){
  include('includes/header.php');
  include('includes/connection.php');
  $fname = "";
  $lname = "";
  $mother_name = "";
  $father_name = "";
  $dob = "";
  $gender = "";
  $category = "";
  $mobile = "";
  $class = "";
  $status = "";
  $address = "";
  if(isset($_POST['search_by_roll_no'])){
    $query = "select * from students where roll_no = '$_POST[roll_no]'";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
      $roll_no = $row['roll_no'];
      $fname = $row['fname'];
      $lname = $row['lname'];
      $mother_name = $row['mother_name'];
      $father_name = $row['father_name'];
      $dob = $row['dob'];
      $gender = $row['gender'];
      $category = $row['category'];
      $lname = $row['lname'];
      $mobile = $row['mobile'];
      $class = $row['class'];
      $status = $row['status'];
      $address = $row['address'];
    }
  }
  if(isset($_POST['search_by_name'])){
    $query = "select * from students where fname like '$_POST[name]'";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
      $roll_no = $row['roll_no'];
      $fname = $row['fname'];
      $lname = $row['lname'];
      $mother_name = $row['mother_name'];
      $father_name = $row['father_name'];
      $dob = $row['dob'];
      $gender = $row['gender'];
      $category = $row['category'];
      $mobile = $row['mobile'];
      $class = $row['class'];
      $status = $row['status'];
      $address = $row['address'];
    }
  }
  if(isset($_POST['update'])){
    $query = "update students set fname='$_POST[fname]',lname='$_POST[lname]',mother_name='$_POST[mother_name]',father_name='$_POST[father_name]',dob='$_POST[dob]',gender='$_POST[gender]',category='$_POST[category]',mobile=$_POST[mobile],class=$_POST[class],status='$_POST[status]',address='$_POST[address]' where roll_no = '$_POST[roll_no]'";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
      echo "<script type='text/javascript'>
        alert('Record updated successfully...');
        window.location.href = 'dashboard.php';
      </script>";
    }
    else{
      echo "<script type='text/javascript'>
        alert('Cannot update...Plz try again.');
        window.location.href = 'editStudent.php';
      </script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Student</title>
  </head>
  <body>
    <br>
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-4">
        <form action="" method="post">
          <div class="form-group">
            Roll No: <input type="text" name="roll_no" placeholder="Enter Roll No...">
            <input type="submit" name="search_by_roll_no" value="Search">
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
    <center><h4><u>Edit Student</u></h4><br></center>
    <div class="container">
    	<p style="color:red;">Attention:- * Mark input filed are mandatory.</p>
    	<form action="" method="POST">
    		<table class="table" style="">
    			<tr>
            <td>
    					<div class="form-group">
    					    <label for="name">Roll No:-(<span style="color:red;">*</span>)</label>
    					    <input type="text" class="form-control" name="roll_no" value="<?php echo $roll_no; ?>" id="roll_no">
      					</div>
    				</td>
    				<td>
    					<div class="form-group">
    					    <label for="name">First Name:-(<span style="color:red;">*</span>)</label>
    					    <input type="text" class="form-control" name="fname" value="<?php echo $fname; ?>" id="fname" required="">
      					</div>
    				</td>
            <td>
    					<div class="form-group">
    					    <label>Last Name:-(<span style="color:red;">*</span>)</label>
    					    <input type="text" class="form-control" name="lname" value="<?php echo $lname; ?>" id="lname" required="">
      					</div>
    				</td>
    				<td>
    					<div class="form-group">
    					    <label>Mather Name:-(<span style="color:red;">*</span>)</label>
    					    <input type="text" class="form-control" name="mother_name" value="<?php echo $mother_name; ?>" id="mother_name" required="">
      					</div>
    				</td>
            <td>
    					<div class="form-group">
    					    <label for="name">Father Name:-(<span style="color:red;">*</span>)</label>
    					    <input type="text" class="form-control" name="father_name" value="<?php echo $father_name; ?>" id="father_name" required="">
      					</div>
    				</td>
    			</tr>
    			<tr>
            <td>
    					<div class="form-group">
    					    <label>Date of Birth:-(<span style="color:red;">*</span>)</label>
    					    <input type="date" class="form-control" name="dob" value="<?php echo $dob; ?>" id="dob" required="">
      					</div>
    				</td>
            <td>
    					<div class="form-group">
    						<label>Gender:-(<span style="color:red;">*</span>)</label>
    						<select class="form-control" name="gender" id="gender" required="">
    	  						<option><?php echo $gender; ?></option>
    	  						<option>Male</option>
    	  						<option>Female</option>
    	  						<option>Transgender</option>
    						</select>
    					</div>
    				</td>
    				<td>
    					<div class="form-group">
    						<label>Category:-(<span style="color:red;">*</span>)</label>
    						<select class="form-control" name="category" id="category" required="">
    	  						<option><?php echo $category; ?></option>
    	  						<option>GEN</option>
    	  						<option>OBC</option>
    	  						<option>SC</option>
    	  						<option>ST</option>
    						</select>
    					</div>
    				</td>
    				<td>
    					<div class="form-group">
    					    <label>Mobile:-(<span style="color:red;">*</span>)</label>
    					    <input type="text" class="form-control" name="mobile" value="<?php echo $mobile; ?>" id="mobile" required="">
      					</div>
    				</td>
            <td>
    					<div class="form-group">
    					    <label>Class:-(<span style="color:red;">*</span>)</label>
                  <select class="form-control" name="class" id="class" required="">
      	  						<option><?php echo $class; ?></option>
      	  						<option>6</option>
      	  						<option>7</option>
      	  						<option>8</option>
      	  						<option>9</option>
                      <option>10</option>
      	  						<option>11</option>
      	  						<option>12</option>
      						</select>
      					</div>
    				</td>
          </tr>
          <tr>
            <td>
    					<div class="form-group">
    					    <label>Status:-(<span style="color:red;">*</span>)</label>
                  <select class="form-control" name="status" id="status" required="">
      	  						<option><?php echo $status; ?></option>
      	  						<option>Active</option>
      	  						<option>In-Active</option>
      						</select>
      					</div>
    				</td>
            <td colspan="3">
              <div class="form-group">
    					    <label>Address:-(<span style="color:red;">*</span>)</label>
    					    <textarea name="address" rows="4" cols="80" id="address"><?php echo $address; ?></textarea>
      					</div>
            </td>
            <td><br><br>
              <button type="submit" class="btn btn-primary" name="update">Update</button>
            </td>
          </tr>
        </form>
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
