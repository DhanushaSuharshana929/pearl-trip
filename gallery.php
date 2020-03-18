<?php
include_once(dirname(__FILE__) . '/class/include.php');
$banner = new Banner(13);
$photo_album =new PhotoAlbum(1);
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sri Lanka Suomi Travels | Gallery</title>
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

        <link rel="stylesheet" href="css/responsive.css" type="text/css" />
         <link href="css/footer.css" rel="stylesheet" type="text/css"/>

        <!-- External JavaScripts
        ============================================= -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <link href="css/simplelightbox.min.css" rel="stylesheet" type="text/css"/>
        <link href="custom.css" rel="stylesheet" type="text/css"/>
    </head>

    <body class="stretched">

        <!-- Document Wrapper
        ============================================= -->
        <div id="wrapper" class="clearfix">

            <?php include './header.php'; ?>
<?php include './banner.php'; ?>

            <div class="container bgcolor-grey" style="padding-top: 15px;padding-bottom: 15px;">

                <div class="gallery">
                      <?php
                    $PHOTO_ALBUM = AlbumPhoto::all();
                    foreach ($PHOTO_ALBUM as $photo_album) {
                        ?>
                    <div class="col-md-3 gallery-padding">
                        <a href="upload/photo-album/gallery/<?php echo $photo_album["image_name"];?>" class="big"><img src="upload/photo-album/gallery/thumb/<?php echo $photo_album["image_name"];?>" /></a>
                    </div>
                    <?php 
                    }
                    ?>
                
                   
                    <div class="clear"></div>



                </div>
                


            </div>
            <?php include './footer.php'; ?>
        </div>
            <!-- Footer Scripts -->
            <script type="text/javascript" src="js/functions.js"></script>
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
            <script src="js/modernizr.js"></script>




    </body>

</html>