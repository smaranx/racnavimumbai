<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="utf-8">
	<title>Team 2021-22</title>
	<link rel="shortcut icon" href="images/roundLogo.png">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- css-include -->
  <link rel="stylesheet" href="https://demo.voidcoders.com/htmldemo/fitgear/main-files/assets/css/animate.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- boorstrap -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<!-- style -->
	<link rel="stylesheet" type="text/css" href="assets/css/team.css">

</head>
<!-- /end of head -->

<body>
<style>

section {
    padding: 60px 0;
}
a, a:hover, a:focus, a:active {
    text-decoration: none;
    outline: none;
}
ul {
    margin: 0;
    padding: 0;
    list-style: none;
}
.img-fluid{
    width: 350px;
    height: 350px;
}
.info{
    width: 350px;
}

.site-heading h2 {
  display: block;
  font-weight: 700;
  margin-bottom: 10px;
  text-transform: uppercase;
}

.site-heading h2 span {
  color: #ff5a6e;
}

.site-heading h4 {
  display: inline-block;
  padding-bottom: 20px;
  position: relative;
  text-transform: capitalize;
  z-index: 1;
}

.site-heading h4::before {
  background: #ff5a6e none repeat scroll 0 0;
  bottom: 0;
  content: "";
  height: 2px;
  left: 50%;
  margin-left: -25px;
  position: absolute;
  width: 50px;
}

.site-heading h2 span {
  color: #ff5a6e;
}

.site-heading {
  margin-bottom: 60px;
  overflow: hidden;
  margin-top: -5px;
}

.team-area .single-item {
  margin-bottom: 30px;
}

.team-area .item .thumb {
  position: relative;
  overflow: hidden;
  z-index: 1;
}

.team-area .item .thumb::after {
  background: #232323 none repeat scroll 0 0;
  content: "";
  height: 100%;
  left: 0;
  opacity: 0;
  position: absolute;
  top: 0;
  transition: all 0.35s ease-in-out;
  -webkit-transition: all 0.35s ease-in-out;
  -moz-transition: all 0.35s ease-in-out;
  -ms-transition: all 0.35s ease-in-out;
  -o-transition: all 0.35s ease-in-out;
  width: 100%;
}

.team-area .team-items .item:hover .thumb::after {
  opacity: 0.7;
}

.team-area .item .thumb .overlay {
  top: -100%;
  left: 0;
  padding: 20px;
  position: absolute;
  text-align: center;
  -webkit-transition: all 0.35s ease-in-out;
  -moz-transition: all 0.35s ease-in-out;
  -ms-transition: all 0.35s ease-in-out;
  -o-transition: all 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
  width: 100%;
  z-index: 1;
}

.team-area .item:hover .thumb .overlay {
  top: 50%;
  transform: translate(-50%, -50%);
  left: 50%;
}

.team-area .item .thumb .overlay p {
  color: #ffffff;
}

.team-area .item .thumb .overlay h4 {
  color: #ffffff;
  display: inline-block;
  position: relative;
  text-transform: uppercase;
}

.team-area .item .thumb img {
  -webkit-transition: all 0.35s ease-in-out;
  -moz-transition: all 0.35s ease-in-out;
  -ms-transition: all 0.35s ease-in-out;
  -o-transition: all 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}

.team-area .item:hover .thumb img {
  opacity: .6;
}

.team-area .item .thumb .social li {
  display: inline-block;
}

.team-area .item .thumb .social li a {
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  color: #ffffff;
  display: inline-block;
  height: 40px;
  line-height: 40px;
  margin: 0 2px;
  text-align: center;
  width: 40px;
}

.team-area .info {
  background: #ffffff none repeat scroll 0 0;
  -moz-box-shadow: 0 0 10px #cccccc;
  -webkit-box-shadow: 0 0 10px #cccccc;
  -o-box-shadow: 0 0 10px #cccccc;
  box-shadow: 0 0 10px #cccccc;
  padding: 40px 20px 20px;
  position: relative;
  text-align: center;
  z-index: 9;
}

.team-area .info .message {
  height: 50px;
  line-height: 40px;
  margin-left: -25px;
  margin-top: -25px;
  position: absolute;
  text-align: center;
  top: 0;
  width: 50px;
}

.team-area .info .message a {
  background: #000 none repeat scroll 0 0;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  -moz-box-shadow: 0 0 10px #cccccc;
  -webkit-box-shadow: 0 0 10px #cccccc;
  -o-box-shadow: 0 0 10px #cccccc;
  box-shadow: 0 0 10px #cccccc;
  box-sizing: border-box;
  color: #ff5a6e;
  display: inline-block;
  font-size: 20px;
  height: 50px;
  line-height: 50px;
  width: 50px;
}

.team-area .info .message a i {
  font-weight: 500;
}

.team-area .info h4 {
  font-weight: 600;
  margin-bottom: 5px;
  text-transform: capitalize;
}

.team-area .info span {
  color: #ff5a6e;
  font-family: "Poppins",sans-serif;
  font-weight: 600;
  text-transform: uppercase;
}

.team-area .social li.facebook a {
  background-color: #00b6f1;
}

.team-area .social li.instagram a {
  background-color: #bd081c;
}

.team-area .social li.linkedin a {
  background-color: #3b5998;
}
</style>
<!--div id="preloader"></div-->

<!-- Nav Bar Loading -->

<?php
     include("nav.php"); 
    ?> 

<!--About us-->
<section id="team" class="team-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-heading text-center">
                        <h2>Our <span>Team</span></h2>
                        <h4>Meet our awesome and expert team members</h4>
                    </div>
                </div>
            </div>
                <div class="row team-items">
                    <!--president-->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/amarjeet.jpg" alt="Thumb">
                                <div class="overlay">
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="https://www.facebook.com/amarjeetchauhan19"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://instagram.com/born_civilengineer?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="https://www.linkedin.com/in/amarjeet-chauhan-24191a13a"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Rtn. Rtr.Amarjeet Chauhan</h4>
                                <span>President</span>
                            </div>
                        </div>
                    </div>
                    <!--secratery-->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/sharmeen.jpg" alt="Thumb">
                                <div class="overlay">
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href=""><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://instagram.com/sharmeeeennn?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="https://www.linkedin.com/in/sharmeen-nayakavadi-30888b1aa"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Rtr.Sharmeen Nayakavadi</h4>
                                <span>Secretary</span>
                            </div>
                        </div>
                    </div>
                    <!--jt.secratery-->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/shreya.jpg" alt="Thumb">
                                <div class="overlay">
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="#"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://instagram.com/shreya.pp"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Rtr.Shreya Patil</h4>
                                <span>Jt.Secretary</span>
                            </div>
                        </div>
                    </div>
                    <!--finance director-->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/pratiksha.jpeg" alt="Thumb">
                                <div class="overlay">
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="https://www.facebook.com/profile.php?id=100005672956630"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://instagram.com/Pratiksha_chavan07"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="https://www.linkedin.com/in/pratiksha-chavan"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Rtr.Pratiksha Chavan</h4>
                                <span>Chairwomen Finance</span>
                            </div>
                        </div>
                    </div>
                    <!--vice president-->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/prem.webp" alt="Thumb">
                                <div class="overlay">
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="https://m.facebook.com/prem.nadar.35"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://instagram.com/pstnadar005"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="https://www.linkedin.com/in/pst-nadar-47593155"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Rtr.Prem Nadar</h4>
                                <span>Vice President</span>
                            </div>
                        </div>
                    </div>
                    <!--vide president-->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/amarjaa.jpeg" alt="Thumb">
                                <div class="overlay">
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="#"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://instagram.com/-amarja"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="https://www.linkedin.com/in/amarja-pawar"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Rtr.Amarjaa Pawar</h4>
                                <span>Vice President</span>
                            </div>
                        </div>
                    </div>
                    <!--club mentor-->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/megha.jpg" alt="Thumb">
                                <div class="overlay">
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="https://www.facebook.com/megha.menon.248"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://www.instagram.com/megha__menon/?hl=en"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="https://www.linkedin.com/in/megha-menon/"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Rtr.Megha Menon</h4>
                                <span>Club Mentor</span>
                            </div>
                        </div>
                    </div>
                    <!--trs chairwomen-->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/isha.jpeg" alt="Thumb">
                                <div class="overlay">
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="https://www.facebook.com/isha.jain.5243817"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://instagram.com/_ishajainn?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="http://linkedin.com/in/isha-jain-8836301a0"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Rtr.Isha Jain</h4>
                                <span>TRS Chairwomen</span>
                            </div>
                        </div>
                    </div>
                    <!--trs chairwomen-->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/zunn.jpg" alt="Thumb">
                                <div class="overlay">
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="https://m.facebook.com/profile.php?ref=bookmarks"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://instagram.com/zunindenial?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Rtr.Zunaira Dongre</h4>
                                <span>TRS Chairwomen</span>
                            </div>
                        </div>
                    </div>
                     <!--jt.finance-->
                     <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/abbas.jpeg" alt="Thumb">
                                <div class="overlay">
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="#"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://instagram.com/_abbas_niyazi_23_/"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href=#"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Rtr.Abbas Niyazi</h4>
                                <span>Jt.Finance Dirctor</span>
                            </div>
                        </div>
                    </div>
                    <!--zrr-->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/kingshuk.jpg" alt="Thumb">
                                <div class="overlay">
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="https://www.facebook.com/kingshuk.mazumder.9"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://instagram.com/iamkingshuk_?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="https://www.linkedin.com/in/kingshuk-mazumder-5683b9195"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Rtr.Kingshuk Mazumder</h4>
                                <span>Zonal Rotaract Representative</span>
                            </div>
                        </div>
                    </div>
                    <!--club service-->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/rashi.jpeg" alt="Thumb">
                                <div class="overlay">
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="#"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://www.instagram.com/singh._.rashi_/"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="https://www.linkedin.com/in/rashi-singh-96547b1aa/"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Rtr.Rashi Singh</h4>
                                <span>Director of Club Service</span>
                            </div>
                        </div>
                    </div>
                    <!--community service-->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/sandhya.jpg" alt="Thumb">
                                <div class="overlay">
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="https://www.facebook.com/profile.php?id=100008043151925"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://instagram.com/sandhyagupta159?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="https://www.linkedin.com/in/sandhya-gupta-804995192"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Rtr.Sandhya Gupta</h4>
                                <span>Director of Community Services</span>
                            </div>
                        </div>
                    </div>
                    <!--community services-->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/simrn.jpg" alt="Thumb">
                                <div class="overlay">
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="https://www.facebook.com/smoka.simi"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://www.instagram.com/___.simmie.___?r=nametag"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="https://www.linkedin.com/in/simran-arora-hr"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Rtr.Simran Arora</h4>
                                <span>Director of Community Services</span>
                            </div>
                        </div>
                    </div>
                    <!--ED-->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/sak.jpg" alt="Thumb">
                                <div class="overlay">
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="https://www.facebook.com/sakshi.salekar"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://instagram.com/sakshisalekar.19?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="https://www.linkedin.com/in/sakshi-salekar-aa80081b4"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Rtr.Sakshi Salekar</h4>
                                <span>Director of Entrepreneurship Development </span>
                            </div>
                        </div>
                    </div>
                    <!--ED-->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/sonia.jpg" alt="Thumb">
                                <div class="overlay">
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="https://www.facebook.com/profile.php?id=100054237723129"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://www.instagram.com/sonia_sharmaa1525/"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="https://www.linkedin.com/in/sonia-sharma-04095a1b6/"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Rtr.Sonia Sharma</h4>
                                <span>Director of Entrepreneurship Development </span>
                            </div>
                        </div>
                    </div>
                    <!--PD-->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/rutika.jpg" alt="Thumb">
                                <div class="overlay">
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="https://www.facebook.com/rutika.dethe.96"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="http://instagram.com/rutikadethe"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="https://www.linkedin.com/in/rutika-dethe-4734581b3"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Rtr.Rutika Dethe</h4>
                                <span>Director of Professional Development </span>
                            </div>
                        </div>
                    </div>
                    <!--PD-->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/bansri.webp" alt="Thumb">
                                <div class="overlay">
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="https://www.facebook.com/bansri.shah.581"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://instagram.com/bansrishah_03?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Rtr.Bansri Shah</h4>
                                <span>Director of Professional Development </span>
                            </div>
                        </div>
                    </div>
                    <!--ISD-->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/aditi.jpeg" alt="Thumb">
                                <div class="overlay">
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="https://www.facebook.com/profile.php?id=100067549206397"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://instagram.com/adxti.10?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="https://www.linkedin.com/in/aditi-mishra-538a1b210"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Rtr.Aditi Mishra</h4>
                                <span>Director of International Services</span>
                            </div>
                        </div>
                    </div>
                    <!--sports-->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/raxx.jpeg" alt="Thumb">
                                <div class="overlay">
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="https://www.facebook.com/raowl.27/"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://www.instagram.com/raowl_27/"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="https://www.linkedin.com/in/rahul-gupta-677a401b3"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Rtr.Rahul Gupta (Raxx)</h4>
                                <span>Director of Sports</span>
                            </div>
                        </div>
                    </div>
                    <!--sports-->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/zenn.jpg" alt="Thumb">
                                <div class="overlay">
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="https://www.facebook.com/profile.php?id=100007748434590"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://instagram.com/rahxl.11_?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Rtr.Rahul Gupta (Zen)</h4>
                                <span>Director of Sports</span>
                            </div>
                        </div>
                    </div>
                    <!--prm-->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/dangg.jpg" alt="Thumb">
                                <div class="overlay">
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="https://www.facebook.com/anjali.dang.1422"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://instagram.com/itsanjalidang?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Rtr.Anjali Dang</h4>
                                <span>Director of PR & Marketing</span>
                            </div>
                        </div>
                    </div>
                    <!--prm-->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/riddhi.jpg" alt="Thumb">
                                <div class="overlay">
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="#"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Rtr.Riddhi Galaiya</h4>
                                <span>Director of PR & Marketing</span>
                            </div>
                        </div>
                    </div>
                    <!--editorials-->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/ade.jpg" alt="Thumb">
                                <div class="overlay">
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="https://www.facebook.com/adeeba.allabax"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://instagram.com/__the__silent__girl?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Rtr.Adeeba Allabax</h4>
                                <span>Director of Editorials</span>
                            </div>
                        </div>
                    </div>
                    <!--editorials-->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/anjali.jpg" alt="Thumb">
                                <div class="overlay">
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="#"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://instagram.com/anjalikaldate_?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Rtr.Anjali Kaldate</h4>
                                <span>Director of Editorials</span>
                            </div>
                        </div>
                    </div>
                    <!--creatives-->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/krish.jpg" alt="Thumb">
                                <div class="overlay">
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="https://www.facebook.com/profile.php?id=100015357048511"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://instagram.com/krishna_agrawal_ak"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="https://www.linkedin.com/in/krishna-agrawal-8206b8221"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Rtr.Krishna Agarwal</h4>
                                <span>Director of Creatives</span>
                            </div>
                        </div>
                    </div>
                    <!--creatives-->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/smarn.jpg" alt="Thumb">
                                <div class="overlay">
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="https://www.facebook.com/smaran.ummadishetty/"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://instagram.com/smarxn"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="https://www.linkedin.com/in/smaran-ummadishetty-24905717b/"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Rtr.Smaran Ummadishetty</h4>
                                <span>Director of Creatives</span>
                            </div>
                        </div>
                    </div>
                    <!--creatives-->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/sadi.jpg" alt="Thumb">
                                <div class="overlay">
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="#"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://www.instagram.com/sadiiiyyyaaa/"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Rtr.Sadiya Mulla</h4>
                                <span>Director of Creatives</span>
                            </div>
                        </div>
                    </div>
                    <!--social media-->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/raksha.jpeg" alt="Thumb">
                                <div class="overlay">
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="https://www.facebook.com/raksha.patel.12139862"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://www.instagram.com/ofcourse.cute/"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="https://www.linkedin.com/in/raksha-patel-56773a154"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Rtr.Raksha Patel</h4>
                                <span>Director of Social Media</span>
                            </div>
                        </div>
                    </div>
                    <!-- zonal co-ordinate-->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/sharvary.jpg" alt="Thumb">
                                <div class="overlay">
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="https://www.facebook.com/sharvary.rahatade"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://www.instagram.com/iam_sharvary"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Rtr.Sharvary Rahatde</h4>
                                <span>Zonal Co-ordinator</span>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
<!--footer-->
    <?php
     include("footer.php"); 
    ?>    
</body> 
</html>