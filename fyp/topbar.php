<?php
session_start();
    $id=$_SESSION['id'];

     include('conn.php');
    $query=mysqli_query($con, "select * from users where id='$id'");
    $num=mysqli_fetch_array($query);
    ?>
<!--header area start-->
<header>
  <label for="check">
    <i class="fas fa-bars" id="sidebar_btn"></i>
  </label>
  <div class="left_area">
    <h3>Financial <span>Planner</span></h3>
  </div>
  <div class="right_area">
  
    <a href="#" class="logout_btn">Balance</a>
  </div>
  <div class ="balance">
  Tsh <b><?php echo $num['balance'] ?></b>
    </div>
    <?php $con->close(); ?>
<button width="30" height="30" style = "float:right; margin-right:30px; margin-top:-27px" onclick = "openForm()">+</button>
<div class="form-popup" id="myForm">
  <form action="balacedata.php" method = "POST" class="form-container">
  

    <labels><b>Add amount</b></label>
    <input type="number" placeholder="" name="balance" required>


    <button type="submit" class="btn">Add</button>
    <button type="button" class="btn cancel" onclick="closeForm()">cancel</button>
  </form>
</div>
</header>
<html>


<!DOCTYPE html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=number], .form-container input[type=password] {
  width: 90%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=number]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #073d80;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 47%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>


<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>