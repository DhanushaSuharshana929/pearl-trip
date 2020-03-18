<?php
include_once(dirname(__FILE__) . '/class/include.php');
$banner = new Banner(3);
$TOUR_PACKAGE_OBJ = new TourPackage(NULL);
$type = '';
if (isset($_GET['type'])) {
    $type = $_GET['type'];
    if ($type == '1') {
        $TOUR_PACKAGE = $TOUR_PACKAGE_OBJ->selectOneDayTours();
    } else {
        $TOUR_PACKAGE = $TOUR_PACKAGE_OBJ->selectRoundTours();
    }
} else {
    $TOUR_PACKAGE = $TOUR_PACKAGE_OBJ->all();
}
?>
<!DOCTYPE html>

<html dir="ltr" lang="en-US">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Sri Lanka Suomi Travels | Tour Packages</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
         <meta name="description" content="Suomi Travels  can arrange exclusive tours which let you discover the best of Sri Lanka." http-equiv="description" />
        <meta name="keywords" content=" suomi travel tour packages, tour packages ,tours in sri lanka , one day tour , round tours ,round tours in sri lanka, private drivers,beach tours in sri lanka,wild life safari in sri lanka" http-equiv="keywords" />


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

    </head>

    <body class="stretched">

        <div id="wrapper" class="clearfix">



            <?php include './header.php'; ?>
            <?php include './banner.php'; ?>


            <div class="container  nobottommargin notopmargin notoppadding  bgcolor-grey " style="padding-bottom: 30px!important;" >                                                          
                <div class="clearfix bottommargin-sm"></div> 
                <?php
                foreach ($TOUR_PACKAGE as $tour_package) {
                    ?> 
                    <div class="col-md-4">
                        <div class=" home-tour-packages" style="margin-bottom: 80px;"> 
                            <a href="tour-package-view.php?id=<?php echo $tour_package['id']; ?>">
                                <img src="./upload/tour-package/<?php echo $tour_package['image_name']; ?>" alt="">
                                <img src="images/tour-header.png" class="tour-desing-img"/>
                            </a> 
                            <h3 class="serif text-center"><?php echo $tour_package['title']; ?></h3>
                            <p><?php echo substr($tour_package['short_description'], 0, 250); ?></p>
                            <div class="text-center">
                                <a href="tour-package-view.php?id=<?php echo $tour_package['id']; ?>" class="button button-small button-black button-reveal button-dark"><span>View More</span> <i class="icon-chevron-right"></i></a>                        			</figcaption>
                            </div> 
                        </div>
                    </div> 
                    <?php
                }
                ?> 
            </div>
            <?php include './footer.php'; ?>
        </div>

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