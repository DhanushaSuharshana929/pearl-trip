<?php
include_once(dirname(__FILE__) . '/class/include.php');
$about = new Page(3);
$banner = new Banner(10);
?>
<!DOCTYPE html>

<html dir="ltr" lang="en-US">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Sri Lanka Suomi Travels | Suomi Travels About Us </title>

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


    </head>

    <body class="stretched">

        <div id="wrapper" class="clearfix">
            <?php include './header.php'; ?>
            <?php include './banner.php'; ?>


            <div class="section nobottommargin notopmargin notoppadding bottompadding-lg " style="padding-top:30px!important;padding-bottom: 30px!important;">                                                          
                <div class="container toppadding-sm">
                    <div class="col-md-4" >
                        <img src="images/about.png" alt=""/>
                    </div>      
                    <div class="col-md-8">
                        <?php echo $about->description; ?>
                    </div>      
                </div>                   

            </div>
            <?php include './footer.php'; ?>
        </div>
        <script type="text/javascript" src="js/functions.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/pikaday.js"></script>

        <script>
            var pickerDefault = new Pikaday(                    {

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
        <script>

            $(".randbg").RandBG();

        </script>

    </body>
</html>