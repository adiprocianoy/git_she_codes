<?php
 		
			$server_name="localhost";
			$user_name="shaneemo";
			$password="sw8Qup&u1r";
			$database_name="shaneemo_Costumers";

			//create connection
			header('Content-Type: text/html; charset=utf-8');
			$conn=new mysqli($server_name,$user_name,$password,$database_name);
			$conn->query("SET NAMES 'utf8'");

			//check the connection
			if ($conn->connect_error){
				die("Connection failed: ".$conn->connect_error);
			}
			
            $ID=$_POST['ID'];
			$Type=$_POST['Type'];
            $Material=$_POST['Material'];
			$Color=$_POST['Color'];
            $Statement=$_POST['Statement'];
			
			$sql="insert into `Types`(ID,Type,Material,Color,Statement) values('$ID','$Type','$Material','$Color','$Statement')";

		if ($conn->query($sql)==FALSE)
        {
			echo "Can not add new user.  Error is: ".$conn->error;
        }
        //else
      //  {
       //     echo "Thank you! The information received successfully";

       // }
			

		
				
 ?>


<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-1-424x435.png" type="image/x-icon">
  <meta name="description" content="Site Builder Description">
  <title>Design</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
<script>
function alertUserFunction() {
  alert("Thanks for filling in the details!Please proceed to the Payment screen!");
}
</script>
  
  
</head>
<body>
  <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-w">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="#">
                         <img src="assets/images/logo-1-424x435.png" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="#">ADI.SHANEE.RAZ</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-white display-4" href="index.html">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>HOME</a></li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="#">
                        <span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        About Us
                    </a>
                </li></ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-success display-4" href="#m">New-Year Sale! 
<br>25% off!
<br>Just for you!
<br>for more detailes
<br>03-2451728</a></div>
        </div>
    </nav>
</section>

<section class="engine"><a href="#">bootstrap responsive templates</a></section><section class="header1 cid-rcXu87pxGj mbr-parallax-background" id="header1-y">

    

    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(73, 70, 70);">
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1"><span style="font-weight: normal;">Design your own jewelry</span></h1>
                
                <p class="mbr-text align-center pb-3 mbr-fonts-style display-5"><em><strong>
                    Watch video<br> choose a jewelry <br>start designing
                </strong></em></p>
                <div class="mbr-section-btn align-center"><a class="btn btn-md btn-black display-7" href="page5.php">
                        After you've filled out and send the details below<br>click here to pay!!<br></a></div>
            </div>
        </div>
    </div>

</section>

<section class="cid-rcXWplTvtN" id="video1-z">

    
    
    <figure class="mbr-figure align-center container">
        <div class="video-block" style="width: 66%;">
            <div><iframe class="mbr-embedded-video" src="https://www.youtube.com/embed/6H6-4mgq6os?rel=0&amp;amp;showinfo=0&amp;autoplay=1&amp;loop=0" width="1280" height="720" frameborder="0" allowfullscreen></iframe></div>
        </div>
    </figure>
</section>

<section class="features17 cid-rcY4EGURSy" id="features17-12">
    
    

    
    <div class="container-fluid">
        <div class="media-container-row">
            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <a href="page5.php"><img src="assets/images/mbr-3-752x501.jpg" alt="Mobirise" title=""></a>
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">
                            Necklaces<br>
                        </h4>
                        
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <a href="page5.php"><img src="assets/images/mbr-752x500.jpg" alt="Mobirise" title="100"></a>
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">
                            Earrings
                        </h4>
                        
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <a href="page5.php"><img src="assets/images/mbr-2-752x501.jpg" alt="Mobirise" title=""></a>
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">
                            Bracelets
                        </h4>
                        
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <a href="page5.php"><img src="assets/images/mbr-752x504.jpg" alt="Mobirise" title=""></a>
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">
                            Rings
                        </h4>
                        
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</section>

<section class="mbr-section form1 cid-reBgj5oRNc" id="form1-2h">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">And now it's time to choose ..</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5"></h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                    
            
                  <form class="mbr-form" action="page2.php" method="post">
                        <div class="row row-sm-offset">
                            
                            
                          
                            <div class="col-md-4 multi-horizontal" data-for="Type">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="Type-form1-2h">Type</label>
         
                                           <select name="Type">
                                            <option value="Necklace">Necklace</option>
                                            <option value="bracelet">bracelet</option>
                                            <option value="Earrings">Earrings</option>
                                            <option value="Ring">Rings</option>
                                          </select>
                                </div>
                            </div>
                            
                            
                                   <div class="col-md-4 multi-horizontal" data-for="Material">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="Material-form1-2h">Material</label>
                                           <select name="Material">
                                            <option value="Silver">Silver</option>
                                            <option value="Gold">Gold</option>
                                            <option value="Platinum">Platinum</option>
                                            <option value="White gold">White gold</option>
                                          </select>
                                </div>
                            </div>
                            
                            
                                   <div class="col-md-4 multi-horizontal" data-for="Color">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="Type-form1-2h">Color</label>
         
                                           <select name="Color">
                                            <option value="Black">Black</option>
                                            <option value="Pink">Pink</option>
                                            <option value="Blue">Blue</option>
                                            <option value="Green">Green</option>
                                          </select>
                                </div>
                            </div>
                               
                              <div class="col-md-4 multi-horizontal" data-for="Statement">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="name-form1-2h">Statement (Until 20 characters) </label>
                                    <input type="text" class="form-control" name="Statement" data-form-field="Statement" required="" id="name-form1-2h" Maxlength=20>
                                </div>
                            </div>
                            
                                      <div class="col-md-4 multi-horizontal" data-for="ID">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="name-form1-2h">ID</label>
                                    <input type="text" class="form-control" name="ID" data-form-field="ID" required="" id="name-form1-2h">
                                </div>
                            </div>
                            
                           
                        </div>
                             
                        <span class="input-group-btn"><button href="page5.php" onclick="alertUserFunction()" type="submit" class="btn btn-primary btn-form display-4">SEND </button></span>
           
                    </form>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>