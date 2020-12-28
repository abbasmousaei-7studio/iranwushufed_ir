<?php
ob_start();
session_start();
require_once './control/connection.php';

require_once './control/DB.php';

require_once './control/PersianCalendar.php';

require_once './control/class.php';
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="فدراسیون ووشو جمهوری اسلامی ایران" />
        <meta name="keywords" content="فدراسیون ووشو جمهوری اسلامی ایران">
        <meta name="author" content="Abbas Mousaei">
        <meta name="robots" content="all">
        <title>فدراسیون ووشو جمهوری اسلامی ایران</title>

        <!-- favIcon -->
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">

        <!-- Add bootstrap core css to site -->
        <link rel="stylesheet" href="assets/bootstrap-4.5.2-dist/css/bootstrap.css">
        <!-- <link rel="stylesheet" href="assets/css/bootstrap-theme.css"> -->
        <!-- Add FontAwesome.Pro css to site -->
        <link rel="stylesheet" href="assets/FontAwesome.Pro.5.14.0.Web/css/all.css">


        <!-- Add main style css to site -->
        <link rel="stylesheet" href="assets/css/style.css">



        <style>
            /* .navbar-toggler {
            float: left !important;
            direction: ltr !important;
            text-align: left !important;
        } */
        </style>

        <?php
require './control/module1.php';
?>
    </head>

    <body>

        <?php
require './control/counter.php';

require './control/module2.php';
?>

            <?php
include './layouts/top-menu.php';
?>


                <div class="container-full text-right rtl" style="background: #eaedef;">
                    <div class="container">
                        <div class="breadcamp">
                            <a href="./"><i class="fa fa-map-marker-alt"></i> خانه</a> / &nbsp;
                            <span>اخبار</span>
                        </div>
                    </div>
                </div>


                <section class="sections rtl IRANSansNormal text-right">
                    <div class="container">
                        <div class="row mt-5">
                            <div class="col-md-8 col-sm-12">
                                <div class="cpanel">
                                    <div class="cpanel-header">جدیدترین اخبار</div>
                                    <div class="cpanel-body rtl">
                                        <div class="news">
                                            <div class="news-item clearfix">
                                                <img src="./uploads/gallery/01.jpg" alt="" />
                                                <div class="commentbody">
                                                    <h5><a href="">به مناسبت روز پرستار؛ تجليل فدراسيون ووشو از يک پرستار
                                                ووشوکار</a></h5>
                                                    <span><i class="fa fa-calendar"></i> 1399/09/28 &nbsp;| &nbsp;<i
                                                class="fa fa-clock"></i> 15:34</span>
                                                    <p>فدراسيون ووشو از يک پرستار که در رشته تاي‌چي ووشو فعاليت مي‌کند، تجليل کرد.
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="news-item clearfix">
                                                <img src="./uploads/gallery/02.jpg" alt="" />
                                                <div class="commentbody">
                                                    <h5><a href="">ارسال 1500 دقيقه فيلم در مسابقات مجازي ساندا و تالو قهرماني
                                                کشور</a>
                                                    </h5>
                                                    <span>1399/09/28</span>
                                                    <p>مسابقات مجازي ووشو قهرماني کشور در دو بخش تالو و ساندا با استقبال گسترده ورزشکاران از استان‌هاي مختلف همرشکاران از استان‌هاي مختلف

                                                    </p>

                                                </div>
                                            </div>
                                            <div class="news-item clearfix">
                                                <img src="./uploads/gallery/03.jpg" alt="" />
                                                <div class="commentbody">
                                                    <h5><a href="">تايچى چوان در ليست ميراث ناملموس فرهنگى بشريت از سوى يونسکو قرار
                                                گرفت</a></h5>
                                                    <span>1399/09/28</span>
                                                    <p>رشته ورزشى «تاي چي چوان» ووشو از سوى يونسکو ، رسماً در ليست ميراث فرهنکي ناملموس بشري شناخته شد.
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="news-item clearfix">
                                                <img src="./uploads/gallery/01.jpg" alt="" />
                                                <div class="commentbody">
                                                    <h5><a href="">به مناسبت روز پرستار؛ تجليل فدراسيون ووشو از يک پرستار
                                                ووشوکار</a></h5>
                                                    <span><i class="fa fa-calendar"></i> 1399/09/28 &nbsp;| &nbsp;<i
                                                class="fa fa-clock"></i> 15:34</span>
                                                    <p>فدراسيون ووشو از يک پرستار که در رشته تاي‌چي ووشو فعاليت مي‌کند، تجليل کرد.
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="news-item clearfix">
                                                <img src="./uploads/gallery/02.jpg" alt="" />
                                                <div class="commentbody">
                                                    <h5><a href="">ارسال 1500 دقيقه فيلم در مسابقات مجازي ساندا و تالو قهرماني
                                                کشور</a>
                                                    </h5>
                                                    <span>1399/09/28</span>
                                                    <p>مسابقات مجازي ووشو قهرماني کشور در دو بخش تالو و ساندا با استقبال گسترده ورزشکاران از استان‌هاي مختلف همراه بود. مسابقات مجازي ووشو قهرماني کشور در دو بخش تالو و ساندا با استقبال گسترده ورزشکاران از
                                                        استان‌هاي مختلف همراه بود. رشته ورزشى «تاي چي چوان» ووشو از سوى يونسکو ، رسماً در ليست ميراث فرهنکي ناملموس بشري شناخته شد.
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <?php
include './layouts/side-panel.php';
?>

                            </div>
                        </div>
                    </div>
                </section>




                <section>
                    <div style="height: 200px; "></div>
                </section>


                <div id="button">
                    <i class="fa fa-arrow-alt-up"></i>
                </div>

                <?php
include './layouts/footer.php';
    ?>





                    <!-- Add jquery js to document -->
                    <script src="assets/js/jquery-3.5.1.js "></script>
                    <!-- Add bootstrap js to document -->
                    <script src="assets/bootstrap-4.5.2-dist/js/bootstrap.js "></script>
                    <script src="assets/js/style.js "></script>



    </body>

    </html>