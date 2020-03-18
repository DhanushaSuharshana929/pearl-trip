<?php
include_once(dirname(__FILE__) . '/class/include.php');

$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$banner = new Banner(13);

?>
<!DOCTYPE html>

<html dir="ltr" lang="en-US">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Sri Lanka Suomi Travels |Guest Comments</title>

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
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="css/footer.css" rel="stylesheet" type="text/css"/>


        <!-- External JavaScripts

        ============================================= -->

        <script type="text/javascript" src="js/jquery.js"></script>

        <script type="text/javascript" src="js/plugins.js"></script>


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
        <link href="css/geust-comment.css" rel="stylesheet" type="text/css"/>

    </head>



    <body class="stretched">

        <div id="wrapper" class="clearfix">
            <?php include './header.php'; ?>

            <?php include './banner.php'; ?>
            <div class="section bgcolor-grey nobottommargin notopmargin notoppadding bottompadding-md  " style="padding-top: 10px!important;padding-bottom: 10px!important;">                                                          


                <div class="container" style="margin-top:30px;margin-bottom: 30px;">
                    <div class="row">
                        <div class="col-md-7">
                            <?php
                            $COMMENTS = Comments::activeComments($id);
                            foreach ($COMMENTS as $comments) {
                                ?>
                                <div class="col-md-3 center">
                                    <img class="img-round-geust" src="upload/comments/<?php echo $comments["image_name"]; ?>" alt="">
                                </div>
                                <div class="col-md-9">
                                    <h3 class="geust-title"> <?php echo $comments["name"]; ?></h3><span> <?php echo $comments["title"]; ?></span>
                                    <p>
                                        <?php echo $comments["comment"]; ?>
                                    </p>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="col-md-5"  >
                            <h3>Add Your Comment</h3>
                            <form class="form-horizontal"  method="post" action="control-panel/post-and-get/comment.php" enctype="multipart/form-data"> 
                                <div class="col-md-12">

                                    <div class="form-group form-float">
                                        <label class="label-name">Name</label>
                                        <div class="form-line">

                                            <input type="text" id="name" class="geust-com-input form-control" placeholder="Name" autocomplete="off" name="name" required="true" style="color:000!important;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">

                                    <div class="form-group form-float">
                                        <label class="label-name" >Title</label>
                                        <div class="form-line">
                                            <input type="text" id="title" class="geust-com-input form-control" placeholder="Title"  autocomplete="off" name="title" required="true">

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">  

                                    <div class="form-group form-float">
                                        <label class="label-name" >Profile</label>
                                        <div class="form-line">
                                            <input type="file" id="image" class="geust-com-input form-control" name="image"  required="true">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <label class="label-name">Comment</label>
                                        <div class="form-line">
                                            <textarea id="description" placeholder="Comment" name="comment" class="geust-com-input form-control" rows="5"></textarea> 
                                            <input type="hidden" value="0" name="active" />
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-12" style="margin-top:20px;"> 
                                    <button type="submit" name="create" class="button button-medium button-reveal button-black button-dark tright" > <span>CREATE</span> <i class="icon-chevron-right"></i></button>
                                </div>

                            </form>
                        </div>
                    </div>


                </div>
            </div>

            <?php include './footer.php'; ?>
        </div>  

        <script type="text/javascript" src="js/functions.js"></script>

        <script src="js/modernizr.js"></script>

        <script src="js/pikaday.js"></script>




    </body>

</html>