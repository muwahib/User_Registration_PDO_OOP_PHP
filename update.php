<?php
//show data
$id="";
$username="";
$email="";

if($_SERVER['REQUEST_METHOD'] == 'GET'){
  if(isset($GET['id'])){
      $id=$_GET['id'];
      $sql="SELECT * FROM user_login WHERE `id`='$id' LIMIT 1";
      $database_conn->query($sql);
      $row =$database_conn->fetch_obj();
  }
}
//update data
if(isset($_POST['submit'])){
  $database_conn = new db_class;

  $id=$_POST['id'];
  $username=$_POST['username'];
  $email=$_POST['email'];

  $sql="UPDATE user_login SET `username`='$username',`email`='$email' WHERE `id`='$id'";
  $row=$database_conn->query($sql);
  $row->execute();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="flex-box1">
  <div class="new-user flex-box">
    <h2>Create new user</h2>
    <?php
    if(isset($row)){?>
    <form action="index.php" method="POST">
    
      <input type="hidden" name="id" value="">
      <label>Username:</label>
      <input type="text" name="username" value="">
      <div class="error">
        <?php echo $errors['username'] ?? '' ?>
      </div>

      <label>Email:</label>
      <input type="text" name="email" value="">
      <div class="error">
        <?php echo $errors['email'] ?? '' ?>
      </div>
      <input type="submit">
    </form>
    <?php
    }else{
      echo("NO RECORD FOUND");
    }
    ?>
  </div>
</div>
</body>
</html>