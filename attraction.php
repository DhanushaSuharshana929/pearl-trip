<?php
include_once(dirname(__FILE__) . '/class/include.php');
$banner = new Banner(7);
  $ATTRACTION = Attraction::all();
?>
<!DOCTYPE html>

<html dir="ltr" lang="en-US">

    <head>


        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Sri Lanka Suomi Travels | Attractions</title>
        <meta name="description" content="Suomi Travels has any lovely captions of Sri Lanaka which arrange to feel  beauty of Sri Lanka." http-equiv="description" />
        <meta name="keywords" content=" suomi travel attractions, places to visit in sri lanka ,excursion, excursion in srilnaka ,attractions in sri lanka<?php  foreach ($ATTRACTION as $attraction){echo ', '.$attraction['title'];}?>" http-equiv="keywords" />


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
    </head>

    <body class="stretched">

        <div id="wrapper" class="clearfix">



            <?php include './header.php'; ?>
            <?php include './banner.php'; ?>


            <section class="popular-packages bgcolor-grey " style="padding-top: 30px;">
                <div class="container">

                    <div class="row">
                        <?php
                      
                        foreach ($ATTRACTION as $attraction) {
                            ?>
                            <div class="col-md-3 col-sm-6">
                                <div class="single-package">
                                    <div class="package-image">
                                        <a href="attraction-view.php?id=<?php echo $attraction["id"]; ?>"><img src="upload/attraction/<?php echo $attraction["image_name"]; ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="package-content">
                                        <h3><?php echo substr($attraction["title"], 0, 22); ?></h3>
                                        <?php echo substr($attraction["description"], 0, 75); ?> 
                                        <div class="clearfix"></div>
                                        <a href="attraction-view.php?id=<?php echo $attraction["id"]; ?>" class="button button-small button-black button-reveal button-dark"><span>View More</span> <i class="icon-chevron-right"></i></a>                        			</figcaption>
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