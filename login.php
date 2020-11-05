<?php require_once 'controllers/authControllers.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/basic-style.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <title>Sign in & Sign up Form</title>
  </head>
  <body>

    <div class="signinContainer">
      <div class="signinFormContainer">
        <div class="signin-signup">
          <!-- signin -->
          <form action="login.php" method="post" class="sign-in-form">
            <h2 class="title">Sign in</h2>

            <?php if(count($errors)>0): ?>
            <div class="alert">
              <?php foreach($errors as $error): ?>
              <li><?php echo $error;  ?></li>
              <?php endforeach; ?>
            </div>
              <?php endif; ?>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password"  placeholder="Password" />
            </div>
            <input type="submit" value="Login" name="signin-btn" class="btnn solid" />
             <a  class="social-text" href="frogot.php">Frogot Your Password?  </a>  
          
          <!-- signup -->
          </form>
          
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="signupContent">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <a href="signup.php"><button class="btnn transparent" id="sign-up-btn">
            
              Sign up
            </button></a>
         
          </div>
          <img src="img/log.svg" class="im" alt="" />
        </div>
    </div>
    </div>



  </body>
</html>
