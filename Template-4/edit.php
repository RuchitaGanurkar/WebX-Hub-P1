
<?php

$sql = "SELECT * FROM `users` WHERE `username`='WebX Hub'";
$result = mysqli_query($conn, $sql);

// Usage of WHERE Clause to Update Data
$sql = "UPDATE `users` SET `username` = 'FromWebX Hub' WHERE `email` = 'webx@gmail.com'";
$result = mysqli_query($conn, $sql);
echo var_dump($result);
if($result){
    echo "We updated the record successfully";
}
else{
    echo "We could not update the record successfully";
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Edit Template</title>
   </head>
<body>
  <div class="container">
    <div class="title">Edit</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">User Id</span>
            <input type="text" class="form-control" name="username" id="inputEmail4" placeholder="ashuto123" required>
          </div>
          <div class="input-box">
            <span class="details">Email Id</span>
            <input type="text"  class="form-control" name="email" id="inputEmail4" placeholder="test@a.in" required>
          </div>
          <div class="input-box">
            <span class="details">Change Phone</span>
            <input type="text" class="form-control" name="phone" id="inputPhone4" placeholder="" required>
          </div>
          <div class="input-box">
            <span class="details">Change Password</span>
            <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="" required>
          </div>
          <div class="input-box">
            <span class="details"></span>
            <input type="text" class="form-control" name="corporate" id="inputCorporate4" placeholder="Name of corporate" required>
          </div>
          <div class="input-box">
            <span class="details"></span>
            <input type="text" class="form-control" name="address" id="inputAddress4"  placeholder="Address" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Update">
        </div>
      </form>
    </div>
  </div>
</body>
</html>