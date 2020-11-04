<?php 
	

require_once 'controllers/authControllers.php'; 

if(isset($_GET['token'])){
        $token =trim($_GET['token']);
        verifyUser($token);
}

if(isset($_GET['password-token'])){
	$passwordToken =trim($_GET['password-token']);
	echo $_GET['password-token'];
	resetPassword($passwordToken);
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/footer-style.css" />
    <link rel="stylesheet" type="text/css" href="css/basic-style.css" />
    <title>BAYFRONT HOTEL</title>
  </head>
  <body>
    <?php include("common/header-home.php"); ?>
    <div class="container">
      <?php include("common/service-section.php"); ?>
      <?php include("common/room-slider.php"); ?>

      <div class="activityContainer">

        <div class="activityRow activityOneTwo">
        	<div class="act activityOne">
          <div class="activity-img">
            <figure class="imgBlock">
              <img src="img/yoga1.jpg" alt="sample35" />
              <div class="title">
                <div>
                  <h4>Spa</h4>
                  <!-- <h6>Hikkaduwa</h6> -->
                </div>
              </div>
            </figure>
            <figure class="imgBlock">
              <img src="img/yoga2.png" alt="sample35" />
              <div class="title">
                <div>
                  <h4>Yoga</h4>
                  <!-- <h6>Hikkaduwa</h6> -->
                </div>
              </div>
            </figure>
            <!-- <img src="img/yoga1.jpg" alt=""> -->
            <!-- <img src="img/yoga2.png" alt=""> -->
          </div>
          <br />
          <div>
            <h1>SPA & YOGA</h1>

            <hr class="line-style" />
            <br />
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt
              autem, numquam, eligendi veniam dignissimos sunt. Repellendus, cum
              perspiciatis impedit, cumque debitis vero odit quas commodi
              aspernatur blanditiis, voluptatibus illum ipsum. ipsum dolor sit
              amet, consectetur adipisicing elit..
            </p>
            <a class="btn" href="landing.php?article=0">FIND OUT MORE<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
          </div>
        </div>

        <div class="act activityTwo">
          <div>
            <h1>FOOD & BEVERAGE</h1>
            <hr class="line-style" />
            <br />
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Inventore vero natus, esse dolores id sit beatae repudiandae? Ea
              molestias quo similique accusamus minima est explicabo commodi,
              praesentium temporibus dolore cumque. ipsum dolor sit amet,
              consectetur adipisicing elit. Voluptatum, quas quasi nulla aut
              blanditiis, minima omnis molestiae! Necessitatibus, adipisci nam
              id quis natus, adipisci nam id quis natusadipisci nam id quis
              natus, adipisci nam id quis natus.
            </p>
            <a class="btn" href="dining.php"
              >FIND OUT MORE
              <i class="fa fa-chevron-right" aria-hidden="true"></i
            ></a>
          </div>
          <br />
          <div class="activity-img">
            <figure class="imgBlock">
              <img src="img/dining1.jpg" alt="sample35" />
              <div class="title">
                <div>
                  <h4>Traditional Food</h4>
                  <!-- <h6>Hikkaduwa</h6>/ -->
                </div>
              </div>
            </figure>
            <figure class="imgBlock">
              <img src="img/dining2.jpg" alt="sample35" />
              <div class="title">
                <div>
                  <h4>Western Food</h4>
                  <!-- <h6>Hikkaduwa</h6> -->
                </div>
              </div>
            </figure>
          </div>
        </div>
        </div>

        <div class="activityRow activityThree">
          <dev class="activity2-text">
            <h1>EXPERIENCE <br />BAYFRONT WELIGAMA</h1>
            <hr class="line-style" />
            <br />
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora
              ad modi recusandae sint reiciendis officia libero, nostrum enim
              numquam amet velit! Inventore autem consequuntur expedita facere
              laborum repudiandae facilis quidem voluptates impedit unde nulla
              explicabo atque, consequatur. Sit culpa aliquam quo.
            </p>
            <a class="btn" href="activity.php"
              >FIND OUT MORE
              <i class="fa fa-chevron-right" aria-hidden="true"></i
            ></a>
          </dev>

          <div class="activity2-img">
            <div class="img1">
              <figure class="imgBlock">
                <img src="img/act1.jpg" alt="sample35" />
                <div class="title">
                  <div>
                    <h4>Diving</h4>
                    <h6>Hikkaduwa</h6>
                  </div>
                </div>
                <a href="landing.php?article=7"></a>
              </figure>
            </div>
            <div class="img2">
              <figure class="imgBlock">
                <img src="img/act2.jpg" alt="" class="img1" />
                <div class="title">
                  <div>
                    <h4>Hiking</h4>
                    <h6>Upper Country</h6>
                  </div>
                </div>
                <a href="landing.php?article=9"></a>
              </figure>
            </div>
            <div class="img3">
              <figure class="imgBlock">
                <img src="img/act3.jpg" alt="" class="img1" />
                <div class="title">
                  <div>
                    <h4>Train Ride</h4>
                    <h6>Ella</h6>
                  </div>
                </div>
                <a href="landing.php?article=8"></a>
              </figure>
            </div>
            <div class="img4">
              <figure class="imgBlock">
                <img src="img/act4.jpg" alt="" class="img1" />
                <div class="title">
                  <div>
                    <h4>Whale Watching</h4>
                    <h6>Mirissa</h6>
                  </div>
                </div>
                <a href="landing.php?article=6"></a>
              </figure>
            </div>
            <div class="img5">
              <figure class="imgBlock">
                <img src="img/act5.jpg" alt="" class="img1" />
                <div class="title">
                  <div>
                    <h4>Swinging On a Rope</h4>
                    <h6>Thalpe</h6>
                  </div>
                </div>
                <a href="landing.php?article=10"></a>
              </figure>
            </div>
          </div>
        </div>
      </div>

      <!-- <hr class="line-style"><br> -->

       <?php include("common/surf-block.php"); ?>
      <!-- 	
	<h1>Bayfront Gallery</h1> 
	<hr class="line-style"><br> -->

      <div id="gallery" class="container-fluid">
        <img src="other/15.jpg" class="img-responsive" />
        <img src="other/2.jpg" class="img-responsive" />
        <!-- <img src="other/3.jpg" class="img-responsive"> -->
        <!-- <img src="other/4.jpg" class="img-responsive"> -->
        <img src="other/17.jpg" class="img-responsive" />
        <img src="other/12.jpg" class="img-responsive" />
        <!-- <img src="other/7.jpg" class="img-responsive"> -->
        <img src="other/8.jpg" class="img-responsive" />
        <img src="other/9.jpg" class="img-responsive" />
        <img src="other/10.jpg" class="img-responsive" />
        <img src="other/11.jpg" class="img-responsive" />
        <img src="other/6.jpg" class="img-responsive" />
        <img src="other/13.jpg" class="img-responsive" />
        <img src="other/19.jpg" class="img-responsive" />
        <img src="other/1.jpg" class="img-responsive" />
        <!-- <img src="other/16.jpg" class="img-responsive"> -->
        <!-- <img src="other/5.jpg" class="img-responsive"> -->
        <img src="other/18.jpg" class="img-responsive" />
        <img src="other/20.jpg" class="img-responsive" />
        <img src="other/14.jpg" class="img-responsive" />
        <img src="other/21.jpg" class="img-responsive" />
        <img src="other/22.jpg" class="img-responsive" />
        <!-- <img src="other/23.jpg" class="img-responsive"> -->
        <!-- <img src="other/24.jpg" class="img-responsive"> -->
      </div>
      <!--   <br>
	<h1>Special shout-outs</h1> 
	<hr class="line-style"><br> -->
      <?php include("common/review-block.php"); ?>
      
    </div>
    <?php include("common/footer.php"); ?>

    <script>
      $(".hover").mouseleave(function () {
        $(this).removeClass("hover");
      });
    </script>
    <?php 
	

 