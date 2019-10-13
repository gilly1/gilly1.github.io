<!DOCTYPE html>
<html lang="en">

        <?php include('inc/head.php') ?>
<body>
<div class="loader">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

<div class="body-container container-fluid">
    <a class="menu-btn" href="javascript:void(0)">
        <i class="ion ion-grid"></i>
    </a>
    <div class="row justify-content-center">
        <!--=================== side menu ====================-->

        <?php include('inc/sidemenu.php') ?>

        <!--=================== side menu end====================-->

        <!--=================== content body ====================-->
        <div class="col-lg-10 col-md-9 col-12 body_block  align-content-center">
            <div>
                <div class="img_card">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-7 content_section">
                            <!--=================== contact info and form start====================-->
                            <div class="content_box">
                                <div class="content_box_inner">
                                    <div>
                                        <h3>
                                            Get in touch with us
                                        </h3>
                                        <p>
                                            Consider gillyTech solutions because its time to level up
                                        </p>

                                        <ul class="nosyely_list pt50">
                                            <li>
                                                <div class="img_box_two">
                                                    <img src="assets/img/icons/satelite.png" alt="info list">
                                                    <div class="content align-items-center">
                                                        <p>
                                                            Mlolongo<br/>
                                                            Machakos, Kenya
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="img_box_two">
                                                    <img src="assets/img/icons/scheme.png" alt="info list">
                                                    <div class="content align-items-center">
                                                        <p>
                                                            <a href="mailto:gillycode@gmail.com">gillycode@gmail.com</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="img_box_two">
                                                    <img src="assets/img/icons/smartphone.png" alt="info list">
                                                    <div class="content align-items-center">
                                                        <p>
                                                            <a href="tel:=254757882231">+254757882231</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <!--=================== contact info and form end====================-->
                        </div>
                        <div class="col-md-6 col-5 img_section" style="background-color:#000;">
                            <!--map -->
                            <div id="map" data-lon="24.036176" data-lat=" 57.039986" class="map"></div>
                            <!--map end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=================== content body end ====================-->
    </div>
</div>

<script src="assets/all/all2.js"></script>
</body>
</html>