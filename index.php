<?php
////header('location: /cgi-sys/suspendedpage.cgi');
include_once(dirname(__FILE__) . '/class/include.php');
$welcome_note = new Page(2);
$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}


$TOUR_PACKAGE = new TourPackage(NULL);
$types = $TOUR_PACKAGE->all();

$ACTIVITY = new Activities($id);



?>
<!DOCTYPE html>

<html dir="ltr" lang="en-US">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Sri Lanka Suomi Travels| Airport Transfer |Airport Drop & Pick up </title>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="Suomi Travels offer the lowest rates in Airport Pickup in Sri Lanka Colombo to any destination in the island." http-equiv="description" />
        <meta name="keywords" content="suomi travel, taxi in sri lanka, airport transfer, airport transfer in srilanka,departure, airport pickup, airport drop off, airport drop, hikkaduwa ,taxi srilanka ,taxi in hikkaduwa" http-equiv="keywords" />


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
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="css/footer.css" rel="stylesheet" type="text/css"/>


        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>

        <!--
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">-->

        <style>
            .cont {
                padding:0px!important;
                /*                position: relative;*/
                /*                padding-left: 5px!important;
                                padding-right:5px!important;*/

            }
            .hv-btn-index {
                position: absolute;
                /*                width: 335px;*/
                padding-left: 31%;
                left:0;
                top: 180px;
                text-align: center;
                opacity: 0;
                transition: opacity .35s ease;
            }

            .hv-btn-index a {
                /*                width: 200px;*/
                padding: 12px 48px;
                text-align: center;
                color: white;
                border: solid 2px white;
                z-index: 99999;
                background: #2098D1;
            }

            .cont:hover .hv-btn-index {
                opacity: 1;
            }

        </style>
    </head>
    <body class="stretched">

        <div id="wrapper" class="clearfix">
            <?php include './header.php'; ?>

            <?php include './slider.php'; ?>

            <div id="mb-grid-4" class=" nobottommargin notopmargin notoppadding   ">                                                          
                <div class="container  hidden-sm hidden-xs" style="padding:0px!important;">
                    <div class="clearfix bottommargin-sm" style="margin-bottom:5px!important;"></div>
                    <div class="cont col-md-3"  style="padding-right:4px!important;">
                        <div class="blog-compact-item">
                            <img  src="images/index-box-6.jpg" alt="">
                            <div class="hv-btn-index">
                                <a href="hikkaduwa.php" class="button button-small button-reveal  "><span class="uppercase">View More</span> <i class="icon-chevron-right"></i></a>
                            </div>
                            <div class="blog-compact-item-content blog-1 center" >
                                <h3 class="uppercase blog-2" style="font-size: 14px!important;"><a href="hikkaduwa.php">Hikkaduwa</a></h3>
                                <p style="font-size: 11px;">Beauty of Underwater World </p>
                            </div>
                        </div>
                    </div>
                    <div class="cont col-md-3"   style="padding-right:4px!important;">
                        <div class="blog-compact-item">
                            <img src="images/index-box9.jpg" alt="">
                            <div class="hv-btn-index">
                                <a href="airport-transfer.php" class="button button-small button-reveal "><span class="uppercase">View More</span> <i class="icon-chevron-right"></i></a>
                            </div>
                            <div class="blog-compact-item-content blog-1 center" >
                                <h3 class="uppercase blog-2" style="font-size: 14px!important;"><a href="airport-transfer.php">Airport Transfer</a></h3>
                                <p style="font-size: 11px;">Trustly And Comfortable Pick Up </p>

                            </div>
                        </div>
                    </div>

                    <div class="cont col-md-3"   style="padding-right:4px!important;" >
                        <div class="blog-compact-item">
                            <img src="images/index-5.jpg" alt="">
                            <div class="hv-btn-index">
                                <a href="tour-package.php?type=1" class="button button-small button-reveal  "><span class="uppercase">View More</span> <i class="icon-chevron-right"></i></a>
                            </div>
                            <div class="blog-compact-item-content blog-1 center">
                                    <h3 class="uppercase blog-2" style="font-size: 14px!important;"><a href="tour-package.php?type=1">One Day Tours</a></h3>
                                <p style="font-size: 11px;">Capture Beauty of SriLankan Nature</p>
                            </div>
                        </div>

                    </div>
                    <div class="cont col-md-3">
                        <div class="blog-compact-item">
                            <img src="images/index-box-1.jpg" alt="">
                            <div class="hv-btn-index">
                                <a href="tour-package.php?type=2" class="button button-small button-reveal  "><span class="uppercase">View More</span> <i class="icon-chevron-right"></i></a>
                            </div>
                            <div class="blog-compact-item-content blog-1 center">
                                <h3 class="uppercase blog-2" style="font-size: 14px!important;"><a href="tour-package.php?type=2">Round Tours</a></h3>
                                <p style="font-size: 11px;">Natural Brilliance of Sri Lanka</p>
                            </div>
                        </div>
                    </div>

                </div>                   
                <div class="container center visible-sm visible-xs" >

                    <div class="clearfix bottommargin-sm" style="margin-bottom:5px!important;"></div>
                    <div class="cont col-md-3" >
                        <div class="blog-compact-item">
                            <img src="images/index-box-6.jpg" alt="">
                            <div class="hv-btn-index">
                                <a href="hikkaduwa.php" class="button button-small button-reveal  "><span class="uppercase">View More</span> <i class="icon-chevron-right"></i></a>
                            </div>
                            <div class="blog-compact-item-content blog-1 center" >
                                <h3 class="uppercase blog-2 "style="font-size: 14px!important;"><a href="hikkaduwa.php">Hikkaduwa</a></h3>
                                <p style="font-size: 11px;">Beauty of Underwater World </p>
                            </div>
                        </div>

                    </div>
                    <div class="cont col-md-3"  >
                        <div class="blog-compact-item">
                            <img src="images/index-box9.jpg" alt="">

                            <div class="hv-btn-index">
                                <a href="airport-transfer.php" class="button button-small button-reveal "><span class="uppercase">View More</span> <i class="icon-chevron-right"></i></a>

                            </div>
                            <div class="blog-compact-item-content blog-1 center" >
                                <h3 class="uppercase blog-2" style="font-size: 14px!important;"><a href="airport-transfer.php">Airport Transfer</a></h3>
                                <p style="font-size: 11px;">Trustly And Comfortable Pick Up </p>

                            </div>

                        </div>
                    </div>

                    <div class="cont col-md-3"  >
                        <div class="blog-compact-item">
                            <img src="images/index-5.jpg" alt="">
                            <div class="hv-btn-index">
                                <a href="tour-package.php?type=1" class="button button-small button-reveal  "><span class="uppercase">View More</span> <i class="icon-chevron-right"></i></a>
                            </div>
                            <div class="blog-compact-item-content blog-1 center">
                                <h3 class="uppercase blog-2" style="font-size: 14px!important;"><a href="tour-package.php?type=1">One Day Tours</a></h3>
                                <p style="font-size: 11px;">Capture Beauty of SriLankan Nature</p>


                            </div>

                        </div>

                    </div>
                    <div class="cont col-md-3">
                        <div class="blog-compact-item">

                            <img src="images/index-box-1.jpg" alt="">
                            <div class="hv-btn-index">
                                <a href="tour-package.php?type=2" class="button button-small button-reveal  "><span class="uppercase">View More</span> <i class="icon-chevron-right"></i></a>

                            </div>
                            <div class="blog-compact-item-content blog-1 center">
                                <h3 class="uppercase blog-2" style="font-size: 14px!important;"><a href="tour-package.php?type=2">Round Tours</a></h3>
                                <p style="font-size: 11px;">Natural Brilliance of Sri Lanka</p>
                            </div>

                        </div>
                    </div>

                </div>                   

            </div>
            <div class="section nobottommargin notopmargin notoppadding bottompadding-lg">                                                          
                <div class="container item-blog  toppadding-sm" style="margin-top: 25px;"> 
                    <div class="col-md-6 col-sm-12">
                        <img src="upload/page/<?php echo $welcome_note->image_name; ?>" alt=""/>
                    </div>      
                    <div class="col-md-6 ol-sm-12" style="padding-right: 62px;"> 
                        <div id="welcom-title" class="item-title" style="margin-top:20px!important;padding-bottom: 30px;">

                            <h2 class="home-about-test">Welcome to </br>Sri Lanka Suomi Travels</h2> 

                        </div> 
                        <?php echo $welcome_note->description; ?>


                    </div>  

                </div>                   

            </div>
            <div class="section nobottommargin notopmargin notoppadding bottompadding-lg activity-bg"  style="padding-bottom: 0px !important;">                                                          

                <div id="oc-team-list" class="owl-carousel team-carousel">  
                    <div class="oc-item ">

                        <div class="team team-list clearfix">

                            <div class="team-image"><img src="images/index-activity/activity3.jpg" alt="" />

                                <div class="desc dark right">

                                    <div class="vertical-middle " style="margin-top: 20px;">

                                        <h3 class="serif ">Whale Watching</h3>
                                        <p style="padding-right: 45px;">
                                            Whale watching is mostly an amusing activity .
                                            Whale and Dolphin watching is one of the most 
                                            exciting water activities you can do in Sri Lanka
                                            during your holiday. Whale watching is the practice 
                                            of seeing whales and dolphins in their natural habitat.
                                            Mirissa is the best place to start your whale and 
                                            dolphin watching tour in Sri Lanka.The ideal locations 
                                            for Whale Watching 
                                            <!--                                        would be Dondra Point 
                                                                                    (accessible from Galle, Hikkaduwa and Mirissa) 
                                                                                    and Trincomalee while the sea off Kalpitiya teems
                                                                                    with an abundance of Dolphins.-->
                                        </p> 

                                        <a href="inquiry.php?activity=<?php echo '2';?>" class="button button-medium button-reveal button-black tright">  <span>Inquire Now</span>  

                                            <i class="icon-chevron-right"></i></a>                                       

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>    
                    <div class="oc-item">

                        <div class="team team-list clearfix">

                            <div class="team-image">
                                <img src="images/index-activity/activity1.jpg" alt="" />

                                <div class="desc dark right">

                                    <div class="vertical-middle">

                                        <h3 class="serif">Wild Life Safari</h3>
                                        <p style="padding-right: 45px;">
                                            Sri Lanka is a fantastic location to observe a variety of wild life which has bio-diversity .The most popular national parks for a safari in Sri Lanka are Yala National Park in the south east, Wilpattu in the North West and Udawalawe in the south. Yala National Park and Wilpattu National Park in Sri Lanka are well known for their spectacular year-round Leopard sighting opportunities.
                                        </p> 

                                        <a href="inquiry.php?activity=<?php echo '1';?>" class="button button-medium button-reveal button-black tright">  <span>Inquire Now</span>  

                                            <i class="icon-chevron-right"></i></a>                                       

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>    

                    <div class="oc-item">

                        <div class="team team-list clearfix">

                            <div class="team-image"><img src="images/activity5.jpg" alt="" />

                                <div class="desc dark right">

                                    <div class="vertical-middle">

                                        <h3 class="serif">Water Rafting</h3>



                                        <p style="padding-right: 45px;">
                                            Water Rafting in the Adventure Experience activity in Sri Lanka. Kelani River in Kitulgala covering 5 major rapids and 4 minor rapids. The distance covered is around 4 KM. The river and its surrounding will make you feel enchanted, with a memorable experience during your White Water Rafting Tour in Kitulagala. 
                                            A mere 2 hour drive from Colombo-Nuwara Eliya road, Kitulgala is a Rain


                                        </p>  
                                        <a href="inquiry.php?activity=<?php echo '3';?>" class="button button-medium button-reveal button-black tright">  <span>Inquire Now</span>  
                                            <i class="icon-chevron-right"></i></a>          
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                    </div>                                                                                               
                    <div class="oc-item"> 
                        <div class="team team-list clearfix"> 
                            <div class="team-image">
                                <img src="images/index-activity/activity4.jpg" alt="" /> 
                                <div class="desc dark right"> 
                                    <div class="vertical-middle"> 
                                        <h3 class="serif">Diving</h3> 
                                        <p style="padding-right: 45px;">
                                            Scuba Diving sites in Sri Lanka that spread out across the Western, Southern and Eastern coasts of the island. These locations are of such variety and beauty enabling even amateur scuba divers as well as the experienced ones revel in the opportunities presented. Scuba diving is one of fastest growing sports in the Sri Lanka.Hikkaduwa and Unawatuna have safe diving places. 
                                        </p>  
                                        <a href="inquiry.php?activity=<?php echo '4';?>" class="button button-medium button-reveal button-black tright">
                                            <span>Inquire Now</span>  
                                            <i class="icon-chevron-right"></i>
                                        </a>      
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                    </div>    
                </div>
                <div class="row activity-item" >
                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <h3 >Awesome Things to Do in Sri Lanka.....</h3>

                        <p  style="">Wildlife Safari, Water Sports, Hiking, Boat Safari, Camping, Cycling Tour & Many More...</p>

                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12"  style="padding-left: 185px;padding-top: 20px;padding-bottom: 25px;">

                        <a href="activity.php" class="button button-small button-black button-reveal button-dark tright"><span>View More</span> <i class="icon-chevron-right"></i></a>                        			</figcaption>

                    </div>
                </div>
            </div>
            <div class=" nobottommargin notopmargin notoppadding  bgcolor-grey" style="padding-bottom: 40px!important; padding-top: 20px !important;">                                                          

                <div class="item-blog container  center">
                    <div class="text-center item-title" >
                        <div class="boder-title">
                            <h3>Select Your Package</h3>
                        </div>
                    </div>

                    <div class="clearfix bottommargin-sm" style="margin-bottom:0px!important;"></div>
                    <div id="tour-package" class="owl-carousel">
                        <?php
                        $TOUR_PACKAGE = TourPackage::all();
                        foreach ($TOUR_PACKAGE as $key => $tour_package) {
                            if ($key == 9) {
                                break;
                            }
                            ?>
                            <div class="home-tour-packages"> 
                                <a href="tour-package-view.php?id=<?php echo $tour_package['id']; ?>">
                                    <img src="./upload/tour-package/<?php echo $tour_package['image_name']; ?>" alt="">
                                    <img src="images/tour-header.png" class="tour-desing-img"/>
                                </a> 
                                <h3 class="serif"><?php echo $tour_package['title']; ?></h3>
                                <p><?php echo substr($tour_package['short_description'], 0, 250); ?></p>
                                <a href="tour-package-view.php?id=<?php echo $tour_package['id']; ?>" class="button button-small button-black button-reveal button-dark tright"><span>View More</span> <i class="icon-chevron-right"></i></a>                        			</figcaption>

                            </div>


                            <?php
                        }
                        ?>
                    </div>

                </div>                   

            </div>
            <div class="section nobottommargin notopmargin notoppadding" style="padding-bottom: 40px!important; padding-top: 20px !important;">                                                          

                <div class="container item-blog center">
                    <div class="text-center item-title" >
                        <div class="boder-title">
                            <h3 >Guest Feedback</h3>
                        </div>
                    </div>
                    <div class="row" style="padding-top:20px!important;">
                        <div class="col-md-12">
                            <div id="testimonial-slider" class="owl-carousel">
                                <?php
                                $COMMENTS = Comments::activeComments($id);
                                foreach ($COMMENTS as $comments) {
                                    ?>
                                    <div class="testimonial">
                                        <div class="pic">
                                            <img src="upload/comments/<?php echo $comments["image_name"]; ?>" alt="">
                                        </div>

                                        <?php echo substr($comments["comment"], 0, 200); ?>   

                                        <h3 class="testimonial-title"> <?php echo $comments["name"]; ?>  - <?php echo $comments["title"]; ?> </h3>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>

                        </div>
                    </div>
                    <a href="geust-comments.php" class="button button-medium button-reveal button-black button-dark tright ">

                        <span>View All </span> <i class="icon-chevron-right"></i></a>
                </div>
            </div>


        </div>  
        <script type="text/javascript">
            jQuery(document).ready(function ($) {

                var ocTeam = $("#oc-team-list");
                ocTeam.owlCarousel({

                    responsive: {

                        0: {items: 1},

                        600: {items: 1},

                        1000: {items: 1}

                    },

                    margin: 30,

                    nav: false,

                    dots: true,

                    mouseDrag: false,

                    touchDrag: false,

                    pullDrag: false,

                    freeDrag: false,

                    smartSpeed: 4000,

                    loop: true,

                    navRewind: true,

                    autoplay: true

                });



            });
        </script> 
        <script type="text/javascript">

            jQuery(document).ready(function ($) {
                var ocTeam = $("#testimonial-slider");
                ocTeam.owlCarousel({

                    responsive: {

                        0: {items: 1},

                        600: {items: 1},

                        1000: {items: 3}

                    },

                    margin: 30,

                    nav: false,

                    dots: true,

                    mouseDrag: false,

                    touchDrag: false,

                    pullDrag: false,

                    freeDrag: false,

                    smartSpeed: 2000,

                    loop: true,

                    navRewind: true,

                    autoplay: true

                });



            });

        </script> 
        <script type="text/javascript">
            jQuery(document).ready(function ($) {

                var ocTeam = $("#tour-package");

                ocTeam.owlCarousel({

                    responsive: {

                        0: {items: 1},

                        600: {items: 1},

                        1000: {items: 3}

                    },

                    margin: 30,

                    nav: false,

                    dots: false,

                    mouseDrag: false,

                    touchDrag: false,

                    pullDrag: false,

                    freeDrag: false,

                    smartSpeed: 2000,

                    loop: true,

                    navRewind: true,

                    autoplay: true

                });



            });
        </script> 
        <script type="text/javascript" src="js/functions.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/pikaday.js"></script> 

        <?php include './footer.php'; ?>


    </body>
</html>