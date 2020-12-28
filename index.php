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



                <!-- index first section-->
                <section class="main-section rtl IRANSansNormal  text-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <div class="carousel-container">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="./uploads/gallery/001.jpg" alt="First slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>برگزاري اردوي تيم ملي کوراش در بجنورد</h5>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./uploads/gallery/002.jpg" alt="Second slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>ارسال 1500 دقيقه فيلم در مسابقات مجازي ساندا و تالو قهرماني کشور</h5>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./uploads/gallery/003.jpg" alt="Third slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>تايچى چوان در ليست ميراث ناملموس فرهنگى بشريت از سوى يونسکو قرار گرفت</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="cpanel smart-card">
                                    <div class="cpanel-header">سامانه کارت هوشمند</div>
                                    <div class="cpanel-body text-center">
                                        <p>
                                            جهت ثبت نام و یا ورود به سامانه از کدملی استفاده نمائید.

                                        </p><br>
                                        <form>
                                            <div class="form-group">
                                                <label for="nationcode" class="bold">کدملی ورزشکار</label>
                                                <input type="text" class="form-control text-center ltr" id="nationcode" name="nationcode">
                                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                        anyone else.</small> -->
                                            </div>
                                            <button type="submit" class="btn btn-danger">ورود به سامانه</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row mt-5 text-center rtl">
                            <div class="col-md-2 col-sm-6 col-6">
                                <div class="Tours-item">
                                    <i class="fa fa-gem fa-2x"></i>
                                    <h6>دان</h6>
                                    <a href="#" class="btn btn-danger rounded-lg btn-sm">ثبت نام</a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6 col-6">
                                <div class="Tours-item">
                                    <i class="fab fa-algolia fa-2x"></i>
                                    <h6>داوری</h6>
                                    <a href="#" class="btn btn-danger rounded-lg btn-sm">ثبت نام</a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6 col-6">
                                <div class="Tours-item">
                                    <i class="fa fa-whistle fa-2x"></i>
                                    <h6>مربیگری</h6>
                                    <a href="#" class="btn btn-danger rounded-lg btn-sm">ثبت نام</a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6 col-6">
                                <div class="Tours-item">
                                    <i class="fa fa-dungeon fa-2x"></i>
                                    <h6>کارگاه</h6>
                                    <a href="#" class="btn btn-danger rounded-lg btn-sm">ثبت نام</a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6 col-6">
                                <div class="Tours-item">
                                    <i class="fas fa-award fa-2x"></i>
                                    <h6>مربیگری عملی</h6>
                                    <a href="#" class="btn btn-danger rounded-lg btn-sm">ثبت نام</a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6 col-6">
                                <div class="Tours-item">
                                    <i class="fas fa-chalkboard-teacher fa-2x"></i>
                                    <h6>بازآموزی</h6>
                                    <a href="#" class="btn btn-danger rounded-lg btn-sm">ثبت نام</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


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