<?php
include_once(dirname(__FILE__) . '/class/include.php');

$banner = new Banner(4);


$tour = '';
if (isset($_GET['tour'])) {
    $tour = $_GET['tour'];
}
$activity = '';
if (isset($_GET['activity'])) {
    $activity = $_GET['activity'];
}

?>

<!DOCTYPE html>

<html dir="ltr" lang="en-US">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Sri Lanka Suomi Travels | Inquiry </title>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="Suomi Travels are committed to understanding your idea of a perfect holiday – what you love to do, where you would like to stay and how much you want to travel around the Sri Lanka." http-equiv="description" />
        <meta name="keywords" content="suomi travel sri lanka,suomi travel about us, suomi travel , suomi travel in hikkaduwa, hikkaduwa ,tour in hikkaduwa ,tour in sri lanka" http-equiv="keywords" />

        <!-- Stylesheets

        ============================================= -->

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
        <link href="booking-form/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">   
    </head>

    <body class="stretched">

        <div id="wrapper" class="clearfix">
            <?php include './header.php'; ?>
            <?php include './banner.php'; ?>

            <section class="bgcolor-grey" style="padding:  30px  20px 20px 20px;" > 
                <div class="panel panel-default container"  >
                    <div class="panel-body">
                        <div class="wrapper-inner" >
                            <div class="row">

                                <div class="contact-form " >
                                    <div class="row form-group">
                                        <div class="col-xs-12 col-sm-6">
                                            <label>Your Name</label>
                                            <span id="star">*</span>
                                            <input type="text" name="txtFullName" id="txtFullName" class="form-control input-validater">
                                            <span id="spanFullName"></span>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <label>Your Email</label>
                                            <span id="star">*</span>
                                            <input type="text" name="txtEmail" id="txtEmail" class="form-control input-validater">
                                            <span id="spanEmail" ></span>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-xs-12 col-sm-6">
                                            <label>Your Country</label>
                                            <span id="star">*</span>
                                            <input type="text" name="txtCountry"  id="txtCountry" class="form-control input-validater">
                                            <span id="spanCountry" ></span>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <label>Your Contact Numbers</label>
                                            <span id="star">*</span>
                                            <input type="text" name="txtPhone" id="txtPhone" class="form-control input-validater">
                                            <span id="spanPhone" ></span>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-xs-12 col-sm-6">
                                            <label>Arrival Date</label>
                                            <span id="star">*</span>
                                            <input type="text" name="txtAdate" id="txtAdate" class="form-control input-validater datepicker">

                                            <span id="spanAdate"></span>
                                        </div>

                                        <div class="col-xs-12 col-sm-6">
                                            <label>Departure Date</label>
                                            <span id="star">*</span>
                                            <input type="text" name="txtDdate" id="txtDdate"  class="form-control input-validater datepicker">
                                            <span id="spanDdate"></span>
                                        </div>

                                    </div>
                                    <div class="row form-group">
                                        <div class="col-xs-12 col-sm-6">
                                            <label>Number of Adults</label>
                                            <span id="star">*</span>

                                            <input type="number" name="txtAdult" value="<?php echo $adults; ?>" id="txtAdult" min="0" class="form-control">

                                            <span id="spanAdult" ></span>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <label>Number of Children</label>
                                            <span id="star">*</span>
                                            <input type="number" name="txtChildren" min="0" value="<?php echo $child; ?>" id="txtChildren" class="form-control">   
                                            <span id="spanChildren" ></span>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-xs-12 col-sm-6">
                                            <label >Room Category</label>
                                            <span id="star">*</span>
                                            <select name="txtRooms" id="txtRooms" class="form-control third form-control input-validater">
                                                <option selected="selected" value=""> --Please Select-- </option>
                                                <option value="Standard Double Room">Standard Double Room</option>
                                                <option value="Deluxe Double Room">Deluxe Double Room</option>
                                            </select>
                                            <span id="spanRooms"></span>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <label>Meal type</label>
                                            <span id="star">*</span>
                                            <select  id="txtMealtype" name="txtMealtype" placeholder="Meal type" class="form-control input-validater" >
                                                <option value=""> -- Please Select a Meal -- </option>
                                                <option value="">Meal Type</option>
                                                <option value="Bed and Breakfast"> Bed and Breakfast</option>
                                                <option value="Bed and Breakfast"> Half Board</option>
                                                <option value="Bed and Breakfast"> Full Board</option>

                                            </select>
                                            <span id="spanMealtype" ></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Tour Package</label>
                                        <span id="star">*</span>
                                        <select name="txtPackage" id="txtPackage" class="form-control">
                                            <option> -- Please Select a Package -- </option>

                                            <?php
                                            if (count(TourPackage::all()) > 0) {
                                                foreach (TourPackage::all() as $key => $package) {
                                                    if ($package['id'] == $tour) {
                                                        ?>
                                                        <option value="<?php echo $package['title']; ?>" selected><?php echo $package['title']; ?></option>
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <option value="<?php echo $package['title']; ?>"><?php echo $package['title']; ?></option>
                                                        <?php
                                                    }
                                                    ?>

                                                    <?php
                                                }
                                            } else {
                                                ?>
                                                <b style="padding-left: 15px;">No packages in the database.</b> 
                                                <?php
                                            }
                                            if (count(Activities::all()) > 0) {
                                                foreach (Activities::all() as $key => $activities) {
                                                    if($key<4){
                                                    if ($p['id'] == $activity) {
                                                        ?>
                                                        <option value="<?php echo $activities['title']; ?>" selected><?php echo $activities['title']; ?></option>
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <option value="<?php echo $activities['title']; ?>"><?php echo $activities['title']; ?></option>
                                                        <?php
                                                    }
                                                    ?>

                                                    <?php
                                                    }
                                                }
                                            } else {
                                                ?>
                                                <b style="padding-left: 15px;">No activities in the database.</b> 
                                                <?php
                                            }
                                            ?>
                                        </select>
                                        <span id="spanPackage" ></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Your Message</label>
                                        <span id="star">*</span>
                                        <textarea name="txtMessage"  id="txtMessage" rows="6" class="form-control" placeholder="write message here" required></textarea>
                                        <span id="spanMessage" ></span>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-xs-12 col-sm-6 row">
                                            <div class="col-sm-6">
                                                <label for="comment">Security Code:</label>
                                                <span id="star">*</span> 
                                                <input type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Enter the security code >> ">
                                                <span id="capspan" ></span> 
                                            </div>
                                            <div class="col-sm-6"> 
                                                <?php include("./booking-form/captchacode-widget.php"); ?> 
                                            </div>  
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="col-sm-4">
                                                <div class="div-check" style="margin-top: 25px;">
                                                    <img src="booking-form/img/checking.gif" id="checking"/>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 text-right" style="margin-top: 20px">
                                                <button type="submit" id="btnSubmit" class="button button-small button-black button-reveal button-dark"><span>SEND YOUR INQUIRE</span> <i class="icon-chevron-right"></i></button>



                                            </div> 
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

        <script src="booking-form/scripts.js" type="text/javascript"></script>
        <script>



            var pickerDefault = new Pikaday(
                    {

                        field: document.getElementById('datepicker-arrive'),

                        theme: 'dark-theme'

                    });



            var pickerTheme = new Pikaday(
                    {

                        field: document.getElementById('datepicker-depart'),

                        theme: 'dark-theme'

                    });
        </script>
        <script src="js/rand.bg.js"></script> 
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function () {
                $(".datepicker").datepicker();
            });
        </script>
        <script>

            $(".randbg").RandBG();

        </script>

    </body>

</html>