<?php
//database connection
//include('config/database.php');


?>


<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>STUDENT REGISTRATION FORM</title>
</head>
<body>
<?php
//$object = new db_class;
//$object->connect();
?> 
<div class='bold-line'></div>
<div class='container'>
  <div class='window'>
    <div class='overlay'></div>
    <div class='content'>
      <div class='welcome'>Hello There!</div>
      <div class='subtitle'>REGISTRATION</div>
      <div class='input-fields'>
        <label>Fullname:</label>
        <input type='text' class='input-line full-width'></input>
        <label>Email:</label>
        <input type='email' class='input-line full-width'></input>
        <label>Password:</label>
        <input type='password' class='input-line full-width'></input>

        <label>Username:</label>
        <input type='text' class='input-line full-width'></input>
        <label>Phone Number:</label>
        <input type='number' class='input-line full-width'></input>
        <label>Confirm Password:</label>
        <input type='password' class='input-line full-width'></input>

        <label>Gender:</label>
        <input type='Checkbox' class='input-line full-width'>Male</input>
        <input type='Checkbox' class='input-line full-width'>Female</input>
      
      </div>
      <div class='spacing'>or continue with <span class='highlight'>Facebook</span></div>
      <div><button class='ghost-round full-width'>Create Account</button></div>
    </div>
  </div>
</div>

</body>
</html>