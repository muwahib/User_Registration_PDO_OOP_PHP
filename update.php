<?php
//database connection
require_once('config/db_connection.php');
//show data
$id="";
$username="";
$email="";

$database_conn = new db_class;
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $sql="SELECT * FROM user_login WHERE `id`='$id' LIMIT 1";
    $database_conn->query($sql);
    $row=$database_conn->fetch_obj()[0];
  }
}


//update data
if (isset($_POST['update'])) {
  $id=$_POST['id'];
  $username=$_POST['username'];
  $email=$_POST['email'];

  $sql="UPDATE user_login SET `username`='$username',`email`='$email' WHERE `id`='$id'";
  $row=$database_conn->query($sql);
  $row->execute();
}
?>

<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <title>USER Update FORM</title>
</head>

<body>
  <div class="flex-box1">
    <div class="new-user flex-box">
      <h2>Update user</h2>
      <?php
      if(!empty($row)){ ?>
        <form action="index.php?id=<?php echo $id?>" method="POST">
          <input type="hidden" name="id" value="<?php //echo $id?>">
          <label>Username:</label> 
          <input type="text" name="username" value="<?php echo $row['username']?>" >

          <label>Email:</label>
          <input type="text" name="email" value="<?php echo $row['email'] ?>" >
        
          <input type="submit" name="update">
        </form>
      <?php } else {
        echo ("NO RECORD FOUND");
      } ?>
    </div>
  </div>
</body>

</html>