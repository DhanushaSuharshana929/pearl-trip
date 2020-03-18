<?php
include_once(dirname(__FILE__) . '/class/include.php');

$banner = new Banner(2);
$ACTIVITY = Activities::all();
?>
<!DOCTYPE html>

<html dir="ltr" lang="en-US">

    <head>


        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Sri Lanka Suomi Travels</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="Suomi Travels  can arrange activities  which let you discover the best of Sri Lanka." http-equiv="description" />
        <meta name="keywords" content="suomi travel activities, things to do in sri lanka , excursion, excursion in srilnaka , activities in sri lanka,<?php  foreach ($ACTIVITY as $activity){echo ', '.$activity['title'];}?>" http-equiv="keywords" />



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
    </head>

    <body class="stretched">
        <div id="wrapper" class="clearfix">

            <?php include './header.php'; ?>
            <?php include './banner.php'; ?>
            <section class="popular-packages  bgcolor-grey" style="padding-top: 30px;">
                <div class="container">

                    <div class="row">
                        <?php
                        foreach ($ACTIVITY as $activity) {
                            ?>
                            <div class="col-md-3 col-sm-6">
                                <div class="single-package">
                                    <div class="package-image">
                                        <a href="activity-view.php?id=<?php echo $activity['id']; ?>"><img src="upload/activity/<?php echo $activity["image_name"]; ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="package-content">
                                        <h3><?php echo substr($activity["title"], 0, 22); ?></h3>
                                        <?php echo substr($activity["description"], 0, 75); ?> 
                                        <div class="clearfix"></div>
                                        <a href="activity-view.php?id=<?php echo $activity['id']; ?>" class="button button-small button-black button-reveal button-dark"><span>View More</span> <i class="icon-chevron-right"></i></a>                        			</figcaption>
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
        </div>

        <script type="text/javascript">



        </script>
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