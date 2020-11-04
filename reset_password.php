<?php require_once 'controllers/authControllers.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/login.css" />
	<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous" ></script>
	<title>Document</title>
</head>
<body>

	<div class="card card-3">
		<div class="raw">
			<ul class="list-unstyled multi-steps">
			    <li class="first"></li>
			    <li class="second" ></li>
			    <li class="third select"></li>
			 </ul>
	  	</div>
	  	<h1>Change Your Password </h1>
	  	<form action="reset_password.php" method="post">
			<?php if(count($errors)>0): ?>
				<div class="alert">
					<?php foreach($errors as $error): ?>
					<li><?php echo $error;  ?></li>
					<?php endforeach; ?>
				</div>
					<?php endif; ?>
				
				<div class="input-field">
					<i class="fas fa-lock"></i>
              <input type="password" name="password"  placeholder="Password" />
				</div>
                <div class="input-field">
					<i class="fas fa-lock"></i>
              <input type="password" name="passwordConf"  placeholder="Confirm Password" />
				</div>
				<div class="form-group">
					<button type="submit" name="reset-btn" class="btn">Confirm</button>
				</div>
			</form>
			
			
	</div>

	<div class="container">
		<div class="raw">
			
		</div>
	</div>  
</body>
</html>