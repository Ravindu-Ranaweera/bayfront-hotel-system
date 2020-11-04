<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<title>Bayfront-Home</title>
</head>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&display=swap');
	*{
		box-sizing: border-box;
		margin: 0;
		padding: 0;
	}

	body{
		background: #fff;
		color: black;
		font-size: 15px;
		line-height: 1.5;
	}
	a{
		text-decoration: none;
		color: #262626;
	}
	ul{
		list-style: none;
	}
	.container{
		position: relative;
	}
	.navbar{
		width: 1000%;
		max-width: 1450px;
		position: fixed;
		background: rgba(255, 255, 255, 0.5); 
		left: 0; 
		right: 0; 
		margin-left: auto; 
		margin-right: auto; 
		
	}
	/*nav*/

	.main-nav{
		display: flex;
		align-items: center;
		justify-content: space-between;
		height: 60px;
		position: relative;


	}
	.main-menu{
		margin-top: 30px;
		margin-bottom: 20px;
	}
	.main-nav .logo{
		width: 120px;
		position: absolute;
		left: 50%;
		top: 0;
		transform: translateX(-50%);
	}
	.main-nav ul{
		font-size: 25px;
		font-weight: bold;
		font-family: 'Playfair Display', serif;
		text-align: right;
		
	}
	.main-nav ul li{
		padding: 0 30px;
		float: none;
		display: inline-block;
	}
	.main-nav ul li:nth-child(1),
	.main-nav ul li:nth-child(2),
	.main-nav ul li:nth-child(3){
		float: left;
	}
	.main-nav ul li a{
		padding: 2px;
	}
	.main-nav ul li a:hover{
		border-bottom: 2px solid #262626;
	}
	.main-nav ul.main-menu{
		flex: 1;
	}
.bg{
    /* The image used */
    background-image: url('1.jpg');*/
	position: absolute;
	  /* Full height */
	  
	  /* Center and scale the image nicely */
	  background-position: center;
	  background-repeat: no-repeat;
	  background-size: cover; 
}
.bg img{
	width: 100%;
	height: 100%;
}








section {
  width: 100%;
  display: inline-block;
  background: #333;
  height: 3px;
  text-align: center;
  font-size: 25px;
  font-weight: 700;
  /*text-decoration: underline;*/
}
.footer-logo{
	width: 120px;
	height: 140px;
}
.footer-distributed{
    background: #666;
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
    box-sizing: border-box;
    width: 100%;
    text-align: left;
    font: bold 16px sans-serif;
    padding: 55px 50px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
    display: inline-block;
    vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
    width: 40%;
}

/* The company logo */

.footer-distributed h3{
    color:  #ffffff;
    font: normal 36px 'Playfair Display', serif;
    margin: 0;
}

.footer-distributed h3 span{
    color:  lightseagreen;
}

/* Footer links */

.footer-distributed .footer-links{
    color:  #ffffff;
    margin: 20px 0 12px;
    padding: 0;
}

.footer-distributed .footer-links a{
    display:inline-block;
    line-height: 1.8;
  font-weight:400;
    text-decoration: none;
    color:  inherit;
}

.footer-distributed .footer-company-name{
    color:  #222;
    font-size: 14px;
    font-weight: normal;
    margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
    width: 35%;
}

.footer-distributed .footer-center i{
    background-color:  #33383b;
    color: #ffffff;
    font-size: 25px;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    text-align: center;
    line-height: 42px;
    margin: 10px 15px;
    vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
    font-size: 17px;
    line-height: 38px;
}

.footer-distributed .footer-center p{
    display: inline-block;
    color: #ffffff;
  font-weight:400;
    vertical-align: middle;
    margin:0;
}

.footer-distributed .footer-center p span{
    display:block;
    font-weight: normal;
    font-size:14px;
    line-height:2;
}

.footer-distributed .footer-center p a{
    color:  lightseagreen;
    text-decoration: none;;
}

.footer-distributed .footer-links a:before {
  content: "|";
  font-weight:300;
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

/* Footer Right */

.footer-distributed .footer-right{
    width: 20%;
}

.footer-distributed .footer-company-about{
    line-height: 20px;
    color:  #92999f;
    font-size: 13px;
    font-weight: normal;
    margin: 0;
}

.footer-distributed .footer-company-about span{
    display: block;
    color:  #ffffff;
    font-size: 14px;
    font-weight: bold;
    margin-bottom: 20px;
}

.footer-distributed .footer-icons{
    margin-top: 25px;
}

.footer-distributed .footer-icons a{
    display: inline-block;
    width: 35px;
    height: 35px;
    cursor: pointer;
    background-color:  #33383b;
    border-radius: 2px;

    font-size: 20px;
    color: #ffffff;
    text-align: center;
    line-height: 35px;

    margin-right: 3px;
    margin-bottom: 5px;
}

.footer-icons a:hover{
    color: #16d5cc;
    /*background-color: #fff;*/
    /*border: 2px solid #16d5cc;*/
}
.fa-map-marker:hover{
    color: blue;
}
/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

    .footer-distributed{
        font: bold 14px sans-serif;
    }

    .footer-distributed .footer-left,
    .footer-distributed .footer-center,
    .footer-distributed .footer-right{
        display: block;
        width: 100%;
        margin-bottom: 40px;
        text-align: center;
    }

    .footer-distributed .footer-center i{
        margin-left: 0;
    }


</style>
<body>
	<div class="container">
		<div class="navbar">
		
		<!-- nav bar -->
			<nav class="main-nav">
				
				<div class="logo">
					<a href="#"><img src="logo.png" alt="logo" class="logo"></a>
				</div>
				
				<ul class="main-menu">
					<li><a href="#">Home</a></li>
					<li><a href="#">Room & Lifestyle</a></li>
					<li><a href="#">Dining</a></li>
					<li><a href="#">Surf</a></li>
					<li><a href="#">Activities</a></li>
					<li><a href="#">Login/Signup</a></li>
				</ul>
			</nav>
		</div>

		<div class="bg">
			<img src="2.jpg" alt=" " class="">
		</div>
	</div>



	   <section></section>
<footer class="footer-distributed">

            <div class="footer-left">
			<img src="logo.png" alt="logo" class="footer-logo">

                <p class="footer-links">
                    <a href="#" class="link-1">Home</a>
                
                    <a href="#">Pricing</a>
                
                    <a href="#">About</a>
                    
                    <a href="#">Location</a>
                    
                    <a href="#">Contact</a>
                </p>

                <p class="footer-company-name">© 2020 Bayfront All Rights Reserved.</p>
            </div>

            <div class="footer-center">

                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>502, Bypass road</span> Weligama, Sri Lanka</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>+94 76 729 3945</p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="bayfrontweli45@gmail.com">bayfrontweli45@gmail.com</a></p>
                </div>

            </div>

            <div class="footer-right">

                <p class="footer-company-about">
                    <span>About the company</span>
                    Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
                </p>

                <div class="footer-icons">

                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>

                </div>

            </div>

        </footer>
	
</body>
</html>