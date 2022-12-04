<?php
//database connection
// include('config/db_connection.php');
require_once('config/db_connection.php');
?>

<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>USER REGISTRATION FORM</title>
</head>
<body>
<?php
//read 
$database_conn = new db_class;

$sql="SELECT * FROM user_login";

$database_conn->query($sql);

$results =$database_conn->fetch_obj();

//insert
if(isset($_POST['username'])){
  $username=$_POST['username'];
  $email=$_POST['email'];

  $sql="INSERT INTO user_login (username,email) VALUES ('$username','$email')";
  $prep =$database_conn->query($sql);
  $prep->execute();
}
//update

//delete

?> 

<div class="flex-container">

<div class="flex-box1">
  <div class="new-user flex-box">
    <h2>Create new user</h2>
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
  </div>
</div>

<div class="flex-box2">
      <div class="table flex-box">
        <h2>USERS list</h2>
        <table class="table text-center">
          <thead>
            <tr class="bg-dark text-white">
              <th>ID</th>
              <th>USERNAME</th>
              <th>EMAIL</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($results as $row) {?>
            <tr>
              <td>
              <?php echo $row['id']; ?>
              </td>
              <td>
              <?php echo $row['username']; ?>
              </td>
              <td>
              <?php echo $row['email']; ?>
              </td>
              <td>
              <a class='btn btn-primary btn-sm' href='update.php?id=$row[id]'>Update</a>
              <a class='btn btn-danger btn-sm'>Delete</a>
              </td>
              </tr>
            <?php }
            ?>
          </tbody>
        </table>
      </div>
    </div>

  </div>

</body>
</html>