<?php
include_once(dirname(__FILE__) . '/class/include.php');

$banner = new Banner(1);
?>
<!DOCTYPE html>

<html dir="ltr" lang="en-US">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Sri Lanka Suomi Travels | Services |ri Lanka Suomi Travels Airport Transfer</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

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
        <link href="css/activity-new.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="js/plugins.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

    </head>

    <body class="stretched">

        <div id="wrapper" class="clearfix">
            <?php include './header.php'; ?>
            <?php include './banner.php'; ?>

            <section class="popular-packages bgcolor-grey " style="padding-top: 30px;">
                <div class="container">

                    <div class="row">
                        <?php
                        $SERVICE = Service::all();
                        foreach ($SERVICE as $service) {
                            ?>
                            <div class="col-md-3 col-sm-6">
                                <div class="single-package">
                                    <div class="package-image"> 
                                        <?php
                                        if ($service['id'] == 3) {
                                            ?>
                                            <a href="tour-package.php">
                                                <img src="upload/service/<?php echo $service["image_name"]; ?>" alt="">
                                            </a>
                                        <?php 
                                        }elseif ($service['id'] == 2) {
                                         ?>
                                        <a href="airport-transfer.php">
                                                <img src="upload/service/<?php echo $service["image_name"]; ?>" alt="">
                                            </a>
                                            <?php
                                        } else {
                                            ?>
                                            <a href="">
                                                <img src="upload/service/<?php echo $service["image_name"]; ?>" alt="">
                                            </a>
                                            <?php
                        }
                                        ?> 
                                    </div>
                                    <div class="package-content">
                                        <h3><?php echo $service["title"]; ?></h3>
                                        <?php echo $service["description"]; ?>
                                        <div class="clearfix"></div>
                                    </div> 
                                </div>
                            </div> <!-- single package end -->
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </section> 
            <?php include './footer.php'; ?>

            <!-- Footer Scripts -->

            <script type="text/javascript" src="js/functions.js"></script>

            <script src="js/modernizr.js"></script>





            <!-- Calendar Script -->    

            <script src="js/pikaday.js"></script>

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



            <!-- Random Backgrounds -->

            <script src="js/rand.bg.js"></script> 

            <script>

                $(".randbg").RandBG();

            </script>




    </body>

</html>