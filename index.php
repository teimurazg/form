<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="./asets/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>Form</title>
    </head>

    <body>

        <h1 class="Welcome">Welcome</h1>

        <div class="body">
            <div class="wrapper">
                <form action="./login.php"
                method="POST">
                  <h1>Login</h1>
                  <div class="input-box">
                      <input name="Username" type="text" placeholder="Username" required>
                      <i class='bx bxs-user'></i>
                  </div>
      
                  <div class="input-box">
                      <input name="password" type="password" placeholder="Password" required>
                      <i class='bx bxs-lock-alt'></i>
                  </div>

                  <div class="input-box">
                      <input name="Cpassword" type="password" placeholder="Retry password" required>
                      <i class='bx bxs-lock-alt'></i>
                  </div>
      
                  <div class="remember">
                      <label for=""><input type="checkbox">Remember me</label>
                      <a href="#">Forget Password?</a>
                  </div>
      
                  <button type="submit" class="btn">Login</button>
      
                  <div class="register-link">
                      <p>Don't have an account? <a href="#">Register</a></p>
                  </div>
                  
                </form>  
              </div>
        </div>
    </body>
</html>