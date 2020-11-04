<?php require_once 'controllers/authControllers.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/login.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <title>Sign in & Sign up Form</title>
  </head>
  <body>


    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <!-- signin -->
         
          <form action="signup.php" method="post" class="sign-up-form">

            

            <h2 class="title">Sign up</h2>

            <?php if(count($errors)>0): ?>
            <div class="alert error" role="alert">
            <?php foreach($errors as $error): ?>
            
            <p><?php echo $error;  ?></p>
            <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="passwordConf" placeholder="Confirm Password" />
            </div>
            <input type="submit"  name="signup-btn" class="btn" value="Sign up" />
    
          </form>
        </div>
      </div>

      <div class="panels-container">
       
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <a href="login.php"><button class="btn transparent" id="sign-in-btn">Sign in</button> </a>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
