<!DOCTYPE html>
<html lang="en">

<?php include('inc/head.php') ?>

<body>
<div class="loader">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

<div class="body-container container-fluid">

    <!--=================== menu Button show in small screens ====================-->
    <a class="menu-btn" href="javascript:void(0)">
        <i class="ion ion-grid"></i>
    </a>
    <!--=================== menu Button end====================-->

    <div class="row justify-content-center">
        <!--=================== side menu ====================-->

        <?php include('inc/sidemenu.php') ?>
        
        <!--=================== side menu end====================-->

        <!--=================== content body ====================-->
        <div class="col-lg-10 col-md-9 col-12 body_block  align-content-center">
            <div>
<!--=================== image card start here  (has two section left and right )====================-->
                <div class="img_card">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-7 content_section">
                            <div class="content_box">
                                <div class="content_box_inner">
                                    <div class="row justify-content-center">
<!--=================== services boxes start here  ====================-->
                                        <div class="col-md-6 col-12">
                                            <div class="img_box_one text-left">
                                                <img src="assets/img/icons/typo.png" alt="services icon">
                                                <div class="content">
                                                    <h5>
                                                        Web Design
                                                    </h5>
                                                    <p>
                                                    Let's be honest and cut through the marketing fluff. You need a website that looks amazing and actually works. Bottom line, that's what I do
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="img_box_one text-left">
                                                <img src="assets/img/icons/flask.png" alt="services icon">
                                                <div class="content">
                                                    <h5>
                                                        Software/System development
                                                    </h5>
                                                    <p>
                                                        I will define, design, test and implement any software application or system you want.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="img_box_one text-left">
                                                <img src="assets/img/icons/compass.png" alt="services icon">
                                                <div class="content">
                                                    <h5>
                                                        S.E.O Optimization
                                                    </h5>
                                                    <p>
                                                    search engine optimization. I will make you site be ranked top by all search engines(google,bing,etc). It will now start getting traffic from the free, organic, editorial and “natural” search results on search engines.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="img_box_one text-left">
                                                <img src="assets/img/icons/satelite.png" alt="services icon">
                                                <div class="content">
                                                    <h5>
                                                        Web Hosting
                                                    </h5>
                                                    <p>
                                                        Already have a website? Well i can assist you to deploy it by helping you get a domain name and a hosting package at apocket friendly fee.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
 <!--=================== services boxes end here  ====================-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-5 img_section" style="background-image: url('img/image4.jpg');"></div>
                    </div>
                </div>
<!--=================== image card end here ====================-->
            </div>
        </div>
        <!--=================== content body end ====================-->
    </div>
</div>


<script src="assets/all/all2.js"></script>
</body>
</html>