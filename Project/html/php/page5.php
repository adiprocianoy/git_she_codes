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
            $Product_Number=$_POST['Product_Number'];
			$first_name=$_POST['first_name'];
            $last_name=$_POST['last_name'];
			$address=$_POST['address'];
            $tel=$_POST['tel'];
			$mail=$_POST['mail'];		
			
			$sql="insert into `Details`(ID,Product_Number,first_name,last_name,address,tel,mail) 
            values('$ID','$Product_Number','$first_name','$last_name','$address','$tel','$mail')";

		if ($conn->query($sql)==FALSE)
        {
			echo "Can not add new user.  Error is: ".$conn->error;
        }
       // else
      //  {
      //      echo "works";
      //  }
			

		
				
 ?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.10, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-1-424x435.png" type="image/x-icon">
  <meta name="description" content="Web Page Creator Description">
  <title>page5</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  <script>
function alertUsermyFunction() {
  alert("Thank you very much! Your details have been received!");
}
</script>
  
</head>
<body>
  <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-1f">

    

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
     <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4">ADI.SHANEE.RAZ</a></span>            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-white display-4" href="index.html">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>HOME</a></li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" >
                        <span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        About Us
                    </a>
                </li></ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-success display-4">New-Year Sale! 
<br>25% off!
<br>Just for you!
<br>for more detailes
<br>03-6666
                    </a></div>
        </div>
    </nav>
</section>

<section class="engine"><a href="#">free amp templates</a></section><section class="mbr-section form1 cid-reok38hGJr" id="form1-22">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                    CONTACT FORM
                </h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">Hey, we are happy you chose to order the jewel
<div>Please fill out the following information:</div></h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                    
            
                    <form class="mbr-form" action="page5.php" method="post">
                        <div class="row row-sm-offset">
                                       <div class="col-md-4 multi-horizontal" data-for="Product_Number">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="Product_Number-form1-2h">Product Number </label>
                                           <select name="Product_Number">
                                            <option value="000">Personal Design</option>
                                            <option value="100">100</option>
                                            <option value="200">200</option>
                                            <option value="150">150</option>
                                            <option value="163">163</option>
                                             <option value="245">245</option>
                                            <option value="376">376</option>
                                            <option value="845">845</option>
                                            <option value="974">974</option>
                                            <option value="232">232</option>
                                            <option value="506">506</option>
                                            <option value="374">374</option>
                                            <option value="288">288</option>
                                            <option value="305">305</option>
                                            <option value="941">941</option>
                                           
                                          </select>
                              
                                </div>
                            </div>
                                        <div class="col-md-4 multi-horizontal" data-for="ID">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="name-form1-2h">ID</label>
                                    <input type="text" class="form-control" name="ID" data-form-field="ID" required="" id="ID-form1-2h">
                                </div>
                            </div>
                            
                            
                                    <div class="col-md-4 multi-horizontal" data-for="first_name">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="first_name-form1-22">First Name</label>
                                    <input type="text" class="form-control" name="first_name" data-form-field="first_name" required="" id="name-form1-22">
                                </div>
                            </div>
                            
                                    <div class="col-md-4 multi-horizontal" data-for="last_name">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="last_name-form1-22">Last Name</label>
                                    <input type="text" class="form-control" name="last_name" data-form-field="last_name" required="" id="name-form1-22">
                                </div>
                            </div>
                            
                            
                                <div class="col-md-4 multi-horizontal" data-for="address">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="address-form1-22">Address</label>
                                    <input type="text" class="form-control" name="address" data-form-field="address" required="" id="name-form1-22">
                                </div>
                            </div>
                            
                                                  <div class="col-md-4 multi-horizontal" data-for="tel">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="tel-form1-22">Phone</label>
                                    <input type="text" class="form-control" name="tel" data-form-field="tel" required="" id="name-form1-22">
                                </div>
                            </div>
                            
                     
                            
                                                  <div class="col-md-4 multi-horizontal" data-for="mail">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="mail-form1-22">E-mail</label> 
                                    <input type="email" class="form-control" name="mail" data-form-field="mail" required="" id="name-form1-22"  >
                                </div>
                            </div> 
                            
               
                            
                            
                        </div>
                        
                        <span class="input-group-btn">
                            <button href="page5.php" onclick="alertUsermyFunction()" type="submit" class="btn btn-primary btn-form display-4">SEND</button>
                    
                        </span>
                    </form>
                 
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>