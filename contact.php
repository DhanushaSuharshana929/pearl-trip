<?php
include_once(dirname(__FILE__) . '/class/include.php');

$banner = new Banner(4);

$adate = '';
$airport = '';
$flight = '';
$subject = '';

if (isset($_GET['subject'])) {
    $subject = $_GET['subject'];
}

if (isset($_POST['txtAdate'])) {
    $adate = $_POST['txtAdate'];
}

if (isset($_POST['txtAirport'])) {
    $airport = $_POST['txtAirport'];
}

if (isset($_POST['txtFlight'])) {
    $flight = $_POST['txtFlight'];
}
?>
<!DOCTYPE html>

<html dir="ltr" lang="en-US">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Sri Lanka Suomi Travels | Contact Us </title>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="Suomi Travels are committed to understanding your idea of a perfect holiday – what you love to do, where you would like to stay and how much you want to travel around the Sri Lanka." http-equiv="description" />
        <meta name="keywords" content="suomi travel sri lanka,suomi travel about us, suomi travel , suomi travel in hikkaduwa, hikkaduwa ,tour in hikkaduwa ,tour in sri lanka" http-equiv="keywords" />


        <link rel="icon" type="image/png" sizes="16x16" href="images/icons/1.PNG">
        <link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>

        <link href='https://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

        <link href='https://fonts.googleapis.com/css?family=Mr+De+Haviland' rel='stylesheet' type='text/css'>

        <link href='https://fonts.googleapis.com/css?family=Raleway:300,100' rel='stylesheet' type='text/css'>



        <link rel="stylesheet" href="../../../netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />



        <link rel="stylesheet" href="css/style.css" type="text/css" />

        <link rel="stylesheet" href="css/dark.html" type="text/css" />

        <link rel="stylesheet" href="css/font-icons.css" type="text/css" />

        <link rel="stylesheet" href="css/animate.css" type="text/css" />

        <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" /> 

        <link href="custom.css" rel="stylesheet" type="text/css"/>

        <link rel="stylesheet" href="css/responsive.css" type="text/css" />
        <link href="css/footer.css" rel="stylesheet" type="text/css"/>

        <script type="text/javascript" src="js/jquery.js"></script>

        <script type="text/javascript" src="js/plugins.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
        <link href="contact-form/style.css" rel="stylesheet" type="text/css"/>
        <link href="contact_style.css" rel="stylesheet" type="text/css"/>
        <link href="contact-form/jquery.datetimepicker.css" rel="stylesheet" type="text/css"/>
    </head>

    <body class="stretched">

        <div id="wrapper" class="clearfix">
            <?php include './header.php'; ?>
            <?php include './banner.php'; ?>

            <section class="contact-section style-two bgcolor-grey">
                <div class="container">
                    <div class="row ">

                        <!--Info Column-->
                        <div class="info-column col-lg-4 col-md-5 col-sm-12 col-xs-12">
                            <div class="inner-column wow fadeInLeft">

                                <ul style="padding-top: 37px;padding-bottom: 167px;">
                                    <li><span>Address</span>401D ,Galle Road, Wewala , <br> Hikkaduwa , Sri Lanka.</li>
                                    <li><span>Phone</span>Hasanka Wickramasekara<br>+ 94 77 546 0558</li>
                                    <li><span>Phone</span>Turin Wickramasekara<br>+ 94 777 873 704</li>
                                    <li><span>Email</span>info@srilankasuomitravels.com</li>

                                </ul>
                            </div>
                        </div>
                        <!--Form Column-->
                        <div class=" form-column col-lg-8 col-md-7 col-sm-12 col-xs-12">
                            <div class="inner-column contact-form-color" >

                                <!--Contact Form-->
                                <div class="contact-form">
                                    <div class="row form-group">
                                        <div class="col-xs-12 col-sm-6">
                                            <label>Your Name</label>
                                            <span class="star">*</span>
                                            <input type="text" name="txtFullName" id="txtFullName" class="form-control input-validater">
                                            <span id="spanFullName" ></span>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <label>Your Email</label>
                                            <span class="star">*</span>
                                            <input type="text" name="txtEmail" id="txtEmail" class="form-control input-validater">
                                            <span id="spanEmail" ></span>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-xs-12 col-sm-6">
                                            <label>Your Country</label>
                                            <span class="star">*</span>
                                            <input type="text" name="txtCountry"  id="txtCountry" class="form-control input-validater">
                                            <span id="spanCountry" ></span>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <label>Your Contact Numbers</label>
                                            <input type="text" name="txtPhone" id="txtPhone" class="form-control input-validater">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-xs-12 col-sm-12">
                                            <label>Subject</label>
                                            <span class="star">*</span>
                                            <input type="text" name="txtSubject"  id="txtSubject" class="form-control input-validater" value="">
                                            <span id="spanSubject" ></span>
                                        </div> 
                                    </div>
                                    <div class="row form-group">

                                        <div class="col-xs-12 col-sm-6">
                                            <label>Airport Transfer</label>
                                            <span id="star">*</span>

                                            <select  id="txtAirport" name="txtAirport" placeholder="Meal type" class="form-control input-validater" >
                                                <option value=""> -- Please Select -- </option>
                                                <option value="Airport Pickup"> Airport Pickup</option>
                                                <option value="Airport Drop off"> Airport Drop off</option>
                                            </select>
                                            <span id="spanAirport" ></span>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <label>Vehicle Type</label>
                                            <span id="star">*</span>
                                            <select  id="txtFlight" name="txtFlight" placeholder="Flight" class="form-control input-validater" >
                                                <option value=""> -- Please Select Your Vehicle Type -- </option>
                                                <option <?php if ($subject == 'Toyota Prius') echo 'selected'; ?> value="Toyota Prius">Toyota Prius</option>
                                                <option  <?php if ($subject == 'KDH Van') echo 'selected'; ?>  value="KDH Van">KDH Van</option>
                                                <option  <?php if ($subject == 'KDH Commuter') echo 'selected'; ?>  value="KDH Commuter">KDH Commuter</option>

                                            </select>
                                            <span id="spanFlight" ></span>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-xs-12 col-sm-6">
                                            <label>Booking Date & Time</label>
                                            <span id="star">*</span>
                                            <input type="text" name="txtAdate" id="txtAdate" value="<?php echo $adate; ?>" class="form-control input-validater datepicker">

                                            <span id="spanAdate"></span>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <label>Number of Passengers </label>
                                            <span id="star">*</span>
                                            <input type="number" name="txtPassengers" value="<?php echo $passengers; ?>" id="txtPassengers" min="0" class="form-control">
                                            <span id="spanPassengers" ></span>
                                        </div>


                                    </div>
                                    <div class="form-group">
                                        <label>Your Message</label>
                                        <span class="star">*</span>
                                        <textarea name="txtMessage"  id="txtMessage" rows="6" class="form-control" placeholder="write message here"></textarea>
                                        <span id="spanMessage" ></span>
                                    </div>
                                    <div class="row form-group">

                                        <div class="col-sm-8">
                                            <label>Security Code:</label>
                                            <span id="star">*</span> 
                                            <input type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Enter the security code >> ">
                                            <span id="capspan" ></span> 
                                        </div>
                                        <div class="col-sm-4"> 


                                            <img src="contact-form/Generate_Captcha_Code.php?rand=1847" id='captchaimg' alt="captcha" style=" margin-top: 17px;">  

                                            <a href='javascript: refreshCaptcha();' class="contact-detail">
                                                <div class="refreshbox">
                                                    <div class="refresh-img">        
                                                        <img style="border:none;" src="contact-form/img/refresh.png" alt="refresh" title="Click to change the code"/>
                                                    </div>
                                                </div>
                                            </a>

                                            <script language='JavaScript' type='text/javascript'>

                                                function refreshCaptcha() {
                                                    var img = document.images['captchaimg'];
                                                    var c = Math.round(Math.random() * 10000);
                                                    img.src = img.src.substring(0, img.src.lastIndexOf("?")) + "?rand=" + c;
                                                }

                                            </script>

                                        </div>  


                                        <div class="col-sm-12">
                                            <div class="div-check" >
                                                <img src="contact-form/img/checking.gif"  alt="checking" id="checking"/>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 ">
                                            <button type="submit" id="btnSubmit" class="theme-btn btn-style-two">SEND YOUR MESSAGE</button>
                                        </div> 

                                    </div> 
                                    <div id="dismessage" align="center"></div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <?php include './footer.php'; ?>
        </div>
        <script type="text/javascript" src="js/functions.js"></script>

        <script src="js/modernizr.js"></script>

        <script src="js/pikaday.js"></script>
        <script src="contact-form/jquery.datetimepicker.full.js" type="text/javascript"></script>
        <script src="contact-form/scripts.js" type="text/javascript"></script>

        <script>


                                                jQuery(document).ready(function () {
                                                    'use strict';

                                                    jQuery('#txtAdate, #search-from-date, #search-to-date').datetimepicker();
                                                });
        </script>


        <script src="js/rand.bg.js"></script> 

        <script>
                                                $(".randbg").RandBG();

        </script>

    </body>

</html>