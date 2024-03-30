<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/stylephp.css">
</head>
<body>

<!-- // ვერ გავსტილე :( -->

 
<?php
if(isset($_POST['Username']) && isset($_POST['password']) && isset($_POST['Cpassword'])) {
  $Username = $_POST['Username'];
  $password = $_POST['password'];
  $Cpassword = $_POST['Cpassword'];

  if ($password === $Cpassword) {
      echo '<div class="true">
      <h1> კეთილი იყოს თქვენი მობრძანება <br/> ' . $Username . '</h1> 
 </div>';
  } else {
    echo '<div class="false">
               <h1> სამწუხაროდ პაროლი არ ემთხვევა, გაიმეორეთ კიდევ ერთხელ !!! </h1> 
          </div>';
  }
}
?>
    
</body>
</html>