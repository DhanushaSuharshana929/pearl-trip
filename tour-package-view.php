<?php
include_once(dirname(__FILE__) . '/class/include.php');
$banner = new Banner(8);

$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$TOUR_PACKAGE = new TourPackage($id);
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $TOUR_PACKAGE->title;?> | Sri Lanka Suomi Travels</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
          <meta name="description" content="<?php echo $TOUR_PACKAGE->description;?> " http-equiv="description" />
        <meta name="keywords" content="<?php echo $TOUR_PACKAGE->title;?> , suomi travel tour packages, tour packages ,tours in sri lanka , one day tour , round tours ,round tours in sri lanka, private drivers,beach tours in sri lanka,wild life safari in sri lanka" http-equiv="keywords" />

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

        <link rel="stylesheet" href="css/responsive.css" type="text/css" />
        <link href="css/footer.css" rel="stylesheet" type="text/css"/>

        <!-- External JavaScripts
        ============================================= -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <link href="css/simplelightbox.min.css" rel="stylesheet" type="text/css"/>
        <style>
            .gall-padding{
                padding-left:3px!important;
                padding-right:3px!important;
                margin-top: 5px!important;
            }
        </style>
    </head>

    <body class="stretched">

        <!-- Document Wrapper
        ============================================= -->
        <div id="wrapper" class="clearfix">
            <?php include './header.php'; ?>
            <?php include './banner.php'; ?>      


            <div class="container bgcolor-grey" style="padding-bottom: 30px;padding-top:30px;">
               <div style="margin-left: 27%;">
                      <a href="inquiry.php?tour=<?php echo $id;?>" class="button button-small button-black button-reveal button-dark tright  " style="margin-top:10px;"><span>Inquire Now</span> <i class="icon-chevron-right"></i></a> </figcaption>
               </div>
                <div class="row">
                  <div class="col-md-8">
                         
                        <?php
                        $TOUR_DATES = TourDate::getTourDatesById($id);
                        foreach ($TOUR_DATES as $key => $tour_date) {
                            ?>
                            <div class="col-md-12 uppercase" >
                                <h3 style="border-bottom: 1px solid #757575;display: block;">  <?php echo $tour_date["title"]; ?></h3>
                            </div>
                            <div class="col-md-12">
                                <p >
                                    <?php echo $tour_date["description"]; ?>
                                </p>
                            </div>

                            <div class="col-md-12 gallery"  style="margin-bottom:10px;" >
                                <?php
                                $DateId = $tour_date['id'];
                                $TOUR_DATES_PHOTOS = TourDatePhoto::getTourDatePhotosById($DateId);
                                foreach ($TOUR_DATES_PHOTOS as $key => $tour_date_photo) {
                                    if ($key < 4) {
                                        ?>
                                        <div class="col-md-3 gall-padding">
                                            <a href="upload/tour-package/date/gallery/<?php echo $tour_date_photo["image_name"]; ?>" class="big"><img src="upload/tour-package/date/gallery/thumb/<?php echo $tour_date_photo["image_name"]; ?>" /></a>
                                        </div>

                                        <?php
                                    }
                                }
                                ?>

                            </div>

                            <?php
                        }
                        ?>
                    </div>


                    <div class="col-md-4">
                        <h3 class="center" style="margin-bottom:4px;">More Tour Packages</h3>

                        <div class="row " style="margin-left:15px;margin-right: 15px; ">
                            <?php
                            $TOUR_PACKAGE = TourPackage::all();
                            foreach ($TOUR_PACKAGE as $key => $tour_package) {
                                if ($key < 8) {
                                    ?>
                                    <div class="row more-back-col item1" style="margin-top:20px!important;">


                                        <a href="tour-package-view.php?id=<?php echo $tour_package['id']; ?>">
                                            <div class="col-md-8 "  >
                                                <h3 class="center"><?php echo $tour_package['title']; ?></h3>
                                                <p class="center">
                                                    <?php echo substr($tour_package['description'], 0, 80); ?>
         <!--                                        <a  href="attraction-view.php?id=<?php echo $attraction["id"]; ?>"><h5 class="center">Read More>>></h5></a>-->
                                            </div>
                                            <div class="col-md-4" style="padding-right:5px!important;padding-left:0px!important;padding-top:5px;padding-bottom: 5px;">
                                                <img src="upload/tour-package/<?php echo $tour_package['image_name']; ?>"   alt=""/>
                                            </div>
                                        </a>

                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>

                </div>

            </div>       


            <?php include './footer.php'; ?>   
        </div>


        <!-- Footer Scripts -->
        <script type="text/javascript" src="js/functions.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="css/simple-lightbox.js" type="text/javascript"></script>
        <script>
            $(function () {
                var $gallery = $('.gallery a').simpleLightbox();

                $gallery.on('show.simplelightbox', function () {
                    console.log('Requested for showing');
                })
                        .on('shown.simplelightbox', function () {
                            console.log('Shown');
                        })
                        .on('close.simplelightbox', function () {
                            console.log('Requested for closing');
                        })
                        .on('closed.simplelightbox', function () {
                            console.log('Closed');
                        })
                        .on('change.simplelightbox', function () {
                            console.log('Requested for change');
                        })
                        .on('next.simplelightbox', function () {
                            console.log('Requested for next');
                        })
                        .on('prev.simplelightbox', function () {
                            console.log('Requested for prev');
                        })
                        .on('nextImageLoaded.simplelightbox', function () {
                            console.log('Next image loaded');
                        })
                        .on('prevImageLoaded.simplelightbox', function () {
                            console.log('Prev image loaded');
                        })
                        .on('changed.simplelightbox', function () {
                            console.log('Image changed');
                        })
                        .on('nextDone.simplelightbox', function () {
                            console.log('Image changed to next');
                        })
                        .on('prevDone.simplelightbox', function () {
                            console.log('Image changed to prev');
                        })
                        .on('error.simplelightbox', function (e) {
                            console.log('No image found, go to the next/prev');
                            console.log(e);
                        });
            });
        </script>

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