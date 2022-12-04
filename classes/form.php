<?php
require_once('config/db_connection.php');
if(isset($_POST['username'])){
    $database_conn = new db_class;

    $username=$_POST['username'];
    $email=$_POST['email'];

    $sql="INSERT INTO user_login (username,email) VALUES ('$username','$email')";
    $prep =$database_conn->query($sql);
    $prep->execute();
    
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
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        
        <input type="text" name="username">
        <input type="text" name="email">
        <button type="submit">Save</button>

    </form>    



</body>
</html>