<?php
include_once(dirname(__FILE__) . '/class/include.php');
$banner = new Banner(5);

$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$ACTIVITY = new Activities($id);
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
    <head>
       
        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title><?php echo $ACTIVITY->title; ?> |Sri Lanka Suomi Travels</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
          <meta name="description" content="<?php echo $ACTIVITY->description;?>" http-equiv="description" />
        <meta name="keywords" content="suomi travel activities, things to do in sri lanka , excursion, excursion in srilnaka , activities in sri lanka,<?php echo $ACTIVITY->title;?>" http-equiv="keywords" />


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

    </head>

    <body class="stretched">

        <!-- Document Wrapper
        ============================================= -->
        <div id="wrapper" class="clearfix">
            <?php include './header.php'; ?>
            <?php include './banner.php'; ?>

            <div class="container bgcolor-grey  "style="padding-top:30px;padding-bottom: 30px;">    
                <div class="row">
                    <div class="col-md-8 carousel-type-2">

                        <div id="transport_photos" class="galleria-slider">
                            <?php
                            $ACTIVITY_PHOTO = ActivitiesPhoto::getActivitiesPhotosById($id);
                            foreach ($ACTIVITY_PHOTO as $activity_photo) {
                                ?>
                                <a href="upload/activity/gallery/<?php echo $activity_photo['image_name']; ?>">
                                    <img src="upload/activity/gallery/<?php echo $activity_photo['image_name']; ?>" data-title="" >
                                </a>
                            <?php }
                            ?>

                        </div> 

                        <div class="">
                            <h3 class="center" style="font-size: 24px;"><?php echo $ACTIVITY->title; ?></h3>

                            <p class="center"><?php echo $ACTIVITY->description; ?></p>

                            <div class="clearfix"></div>
                        </div>


                    </div>
                    <div class="col-md-4">
                        <h3 class="center" style="margin-bottom:4px;">More Activities</h3>
                        <div class="clearfix"></div>
                        <div class="row more-back-col">

                        </div>
                    </div>

                    <div class="col-md-4">

                        <div class="clearfix"></div>
                        <div class="row " style="margin-left:15px;margin-right: 15px; ">
                            <?php
                            $ACTIVITY = Activities::all();
                            foreach ($ACTIVITY as $key=> $activity) {
                                if($key< 6){
                                ?>
                                <div class="row more-back-col item1">
                                    <a href="activity-view.php?id=<?php echo $activity['id']; ?>">
                                        <div class="col-md-8 " >
                                            <h3 class="center"><?php echo $activity["title"]; ?></h3>
                                            <p class="center">
                                                <?php echo substr($activity["description"], 0, 80); ?> 
                                            </p>
        <!--                                    <a  href="activity-view.php?id=<?php echo $activity['id']; ?>"><h5 class="center">Read More>>></h5></a>-->
                                        </div>
                                        <div class="col-md-4" style="padding-right:5px!important;padding-left:0px!important;padding-top:5px;padding-bottom: 5px;">
                                            <img src="upload/activity/<?php echo $activity["image_name"]; ?>"   alt=""/>
                                        </div>
                                    </a>
                                </div>
                            <?php }}
                            ?>
                        </div>
                    </div>
                </div>
            </div>





            <?php include './footer.php'; ?>

        </div>

        <script type="text/javascript" src="js/functions.js"></script>
        <script src="view/galleria.js" type="text/javascript"></script>
        <script src="view/galleria.classic.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $('#transport_photos').galleria({
                responsive: true,
                height: 500,
                autoplay: 7000,
                lightbox: true,
                showInfo: true,

                imageCrop: true,
            });
        </script>
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