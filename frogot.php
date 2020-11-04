<?php require_once 'controllers/authControllers.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/login.css">
	<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous" ></script>
	<title>Document</title>
</head>
<body>

	<div class="card card-3">
		<div class="raw">
			<ul class="list-unstyled multi-steps">
			    <li class="first select"></li>
          <li class="second"></li>
          <li class="third"></li>
			 </ul>
	  	</div>
			<form action="frogot.php" method="post">
			

				
                <h1>Reset Your Password</h1>
                <p>Enter your user account's verified email address and we will send you a password reset link.</p>
                <?php if(count($errors)>0): ?>
        <div class="alert error" role="alert">
          <?php foreach($errors as $error): ?>
          <p><?php echo $error;  ?></p>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
				
				 <div class="input-field">
	              <i class="fas fa-envelope"></i>
	              <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Email" />
	            </div>
				<div class="form-group">
					<button type="submit" name="frogot-password" class="btn">Send Link Reset Email</button>
				</div>
				
			</form>
		</div>
	
</body>
</html>