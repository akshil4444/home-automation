
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Home automation </title>



<!-- Favicon -->
<link rel="shortcut icon" href="title.jpg" type="image/png">

<!-- Bootstrap css -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">


<!-- Animate css -->
<link rel="stylesheet" href="css/animate.css">

<!-- Fontawesome css -->
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- magnific-popup css -->
<link rel="stylesheet" href="css/magnific-popup.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">


<!-- progress bar Stylesheet -->

  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/cssprogress.css">


</script>
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- PRE LOADER -->
<div class="preloader">

     <div class="sk-spinner sk-spinner-wordpress">
          <span class="sk-inner-circle"></span>
     </div>

</div>



<!-- Navigation Section -->
<div class="navbar custom-navbar navbar-fixed-top" role="navigation">
     <div class="container">

          <!-- NAVBAR HEADER -->
          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <!-- lOGO TEXT HERE -->
               <a href="index.html" class="navbar-brand"><span class="font-playfair">Akshil </span> Shah</span>
			   </a>

          </div>





     </div>
</div>



<!-- Home Section -->
<section id="contact" class="parallax-section">
     <div id="particles-js"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <div class="home-thumb">
					<form action="index.php" method="POST" ">
        				<div align="left" class="col-md-10">
        					  <input type="submit" class="form-control" value="Party time" name="allon">
        				</div>

          					<div class="col-md-6 col-sm-4" >
                          <input type="submit" class="form-control" value="Main Room Light On" name="led1on"  >
                    </div>

							     <div class="col-md-4 col-sm-6">
                          <input type="submit" class="form-control" value="Main room light off" name="led1off" >

                    </div>


                    <div class="col-md-6 col-sm-6" >
                          <input type="submit" class="form-control" value="Children room light on" name="led2on" >
                    </div>

							      <div class="col-md-4 col-sm-6">
                           <input type="submit" class="form-control" value="Children room light off" name="led2off">
                    </div>


                    <div class="col-md-6 col-sm-6" >
                                   <input type="submit" class="form-control" value="Drawing room light on " name="led3on" >
                     </div>
							       <div class="col-md-4 col-sm-6">
                                   <input type="submit" class="form-control" value="Drawing room light off" name="led3off ">
                     </div>

                     <div class="col-md-6 col-sm-6" >
                                   <input type="submit" class="form-control" value="Kitchen Room light on " name="led4on" >
                     </div>
                     <div class="col-md-4 col-sm-6">
                                   <input type="submit" class="form-control" value="Kitchen room light on" name="led4off ">
                     </div>

                     <div align="left" class="col-md-10">
                    <input type="submit" class="form-control" value="Good Night" name="alloff">
                </div>

										</div>


               </div>

          </div>
     </div>
	<h4> Initial version  </h4>

	</form>
</section>
         <?php
         $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 17 out");
         if(isset($_GET['led1on'])){
                 $gpio_led1on = shell_exec("/usr/local/bin/gpio -g write 17 1");
                 echo "LED of mainroom is off";
         }
         else if(isset($_GET['led1off'])){
                 $gpio_led1off = shell_exec("/usr/local/bin/gpio -g write 17 0");
                 echo "LED of mainroom is off";
         }
         $setmode24 = shell_exec("/usr/local/bin/gpio -g mode 24 out");
         if(isset($_GET['led2on'])){
                 $gpio_led2on = shell_exec("/usr/local/bin/gpio -g write 24 1");
                 echo "LED of childrenroom is on ";
         }
         else if(isset($_GET['led2off'])){
                 $gpio_led2off = shell_exec("/usr/local/bin/gpio -g write 24 0");
                 echo "LED of childrenroom is off";
         }

         $setmode14 = shell_exec("/usr/local/bin/gpio -g mode 14 out");
         if(isset($_GET['led3on'])){
                 $gpio_led3on = shell_exec("/usr/local/bin/gpio -g write 14 1");
                 echo "Drawing room light on";
         }
         else if(isset($_GET['led3off'])){
                 $gpio_led3off = shell_exec("/usr/local/bin/gpio -g write 14 0");
                 echo "Drawing room light off ";
         }

         $setmode18 = shell_exec("/usr/local/bin/gpio -g mode 18 out");
         if(isset($_GET['led4on'])){
                 $gpio_led4on = shell_exec("/usr/local/bin/gpio -g write 18 1");
                 echo "Kitchen room light on";
         }
         else if(isset($_GET['led4off'])){
                 $gpio_led4off = shell_exec("/usr/local/bin/gpio -g write 18 0");
                 echo "Kitchen room light off ";
         }

         if(isset($_GET['allon'])){
                 $gpio_led4on = shell_exec("/usr/local/bin/gpio -g write 18 1");
                 $gpio_led3on = shell_exec("/usr/local/bin/gpio -g write 18 1");
                 $gpio_led2on = shell_exec("/usr/local/bin/gpio -g write 18 1");
                 $gpio_led1on = shell_exec("/usr/local/bin/gpio -g write 18 1");
                 echo "Lets Party!";
         } 

         if(isset($_GET['alloff'])){
                 $gpio_led4off = shell_exec("/usr/local/bin/gpio -g write 18 0");
                 $gpio_led3off = shell_exec("/usr/local/bin/gpio -g write 18 0");
                 $gpio_led2off = shell_exec("/usr/local/bin/gpio -g write 18 0");
                 $gpio_led1off = shell_exec("/usr/local/bin/gpio -g write 18 0");
                 echo "Good night! ";
         ?>



<!-- Footer Section -->
<footer>
     <div class="container">
          <div class="row">

               <div class="col-md-23 col-sm-23">
                    <div class="wow fadeInUp footer-copyright" data-wow-delay="0.2s">
                         <p class="font-playfair" > <a href="https://www.akshil.in"> © AKSHIL Shah | All Rights Reserved. </a></p>
                    </div>

               </div>

          </div>
     </div>
</footer>



<!-- SCRIPTS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/particles.min.js"></script>
<script src="js/app.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>