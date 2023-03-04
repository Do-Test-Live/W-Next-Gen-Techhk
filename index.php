<?php
include ("config/dbConfig.php");
$result = 0;
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $message = mysqli_real_escape_string($con, $_POST['message']);
    $contact = $con->query("INSERT INTO `contact`(`name`, `email`, `message`) VALUES ('$name','$email','$message')");
    if($contact){
        ?>
        <script>
            alert("Thank You! We have received your data and will contact with you soon.")
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Sorry! Something went wrong.")
        </script>
        <?php
    }
}

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <?php include('includes/css.php'); ?>
</head>

<body data-spy="scroll" data-offset="170" data-target=".navigation-area">

<div class="page-wrapper">
    <!-- Header -->
    <?php include('includes/header.php'); ?>
    <!-- End Site Header -->

    <!-- Sticky Header -->
    <?php include('includes/sticky.php'); ?>
    <!-- End Sticky Header ~-->

    <!-- Start Frontpage Banner Section -->
    <div id="home" class="frontpage-banner-section frontpage-banner-style-three">
        <div class="element-group">
            <div class="element one animation-moving-left-right-three"></div>
            <div class="element two"></div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="frontpage-banner-content">
                        <h2 class="hero-title w-100 aos-item mrb-0" data-aos="fade-left" data-aos-duration="300"
                            data-aos-once="true">YOUR 1 STOP <span class="text-gradient">TECH PARTNER</span></h2>
                        <h6 class="hero-title w-800 aos-item" style="font-size: 16px" data-aos="fade-left"
                            data-aos-duration="400"
                            data-aos-once="true"> We make everyone affordable to launch their project professionally.
                            Regardless you are an individual or enterprise, we will guide you along the way.</h6>
                        <!-- /.hero-title -->

                    </div><!-- /.hero-content-area -->
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-6">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-6">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <img class="radius-4 aos-item" data-aos="fade-right" data-aos-duration="700"
                                         data-aos-once="true" src="assets/images/hero-banners/hero-banner-2.jpg"
                                         alt="Thumb">
                                </div>
                                <!-- /.col-lg-12 col-md-12 -->
                            </div>
                        </div>
                        <div class="col-lg-7 col-6">
                            <img class="radius-4 aos-item" data-aos="fade-left" data-aos-duration="800"
                                 data-aos-once="true" src="assets/images/hero-banners/hero-banner-3.jpg" alt="Thumb">
                        </div>
                        <!-- /.col-lg-7 col-6 -->
                    </div>

                </div><!-- /.col-lg-6 -->
            </div>
        </div>
    </div>
    <!-- End Frontpage Banner Section -->

    <!--Blog section-->
    <div class="latest-news-block ptb-130" id="about_us">
        <div class="container ml-b-50">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title txt-center">
                        <h2 class="title-main aos-item" data-aos="fade-up" data-aos-duration="400" data-aos-once="true">
                            ABOUT <span class="text-gradient">Next Gen Tech</span></h2>
                        <h4>NextGen Tech offers premier web & App development and UI design services. We leverage your
                            brand uniqueness, strengths, and identity to develop aesthetic, user-friendly interfaces
                            that serve as a visual landmark for your brand to boost conversion rates, generate positive
                            impressions, and create thoughtful consumer interactive experiences.</h4>
                    </div>
                    <!-- /.section-title -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <article class="post post-grid style-two aos-item" data-aos="fade-up" data-aos-duration="300"
                             data-aos-once="true">
                        <div class="post-thumb-area">
                            <figure class="post-thumb">
                                <a href="javascript:void(0)">
                                    <img src="assets/images/blog/post/grid/1.jpg" alt="Blog Image"/>
                                </a>
                            </figure>
                            <!-- /.post-thumb -->
                        </div>
                        <!-- /.post-thumb-area -->

                        <div class="post-details">
                            <!--./ entry-meta-date -->
                            <h2 class="entry-title">
                                <a href="#">
                                    Web / APP Design
                                </a>
                            </h2>
                            <!-- /.entry-title -->
                            <p class="entry-description">
                                Regardless of what you’re looking for, we have user-friendly solutions with attractive
                                designs to build the type of website you need, including brand websites, simple
                                single-page websites, online e-commerce stores, and more. Our creative input and
                                data-driven methodology will ensure your website can reach all its KPIs without
                                sacrificing aesthetics or brand identity.
                            </p>
                        </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <article class="post post-grid style-two aos-item" data-aos="fade-up" data-aos-duration="400"
                             data-aos-once="true">
                        <div class="post-thumb-area">
                            <figure class="post-thumb">
                                <a href="javascript:void(0)">
                                    <img src="assets/images/blog/post/grid/2.jpg" alt="Blog Image"/>
                                </a>
                            </figure>
                            <!-- /.post-thumb -->
                        </div>
                        <!-- /.post-thumb-area -->

                        <div class="post-details">

                            <!--./ entry-meta-date -->
                            <h2 class="entry-title">
                                <a href="#">
                                    UI Design
                                </a>
                            </h2>
                            <!-- /.entry-title -->
                            <p class="entry-description">
                                We conceptualize and design stunning UI mockups with meticulous emphasis placed on
                                touchpoints, consumer journeys, and customer experiences. Our experience and insights from
                                working with the world’s leading brands allow us to approach our projects with an
                                unparalleled sense of understanding of how to make a successful UI design.
                            </p>

                        </div>
                        <!-- /.post-details -->
                    </article>
                    <!-- /.post -->
                </div>

                <!-- /.post-details -->
                </article>
                <!-- /.post -->
            </div>
            <!-- /.col-lg-4 -->


        </div>
    </div>
</div>
<!--Blog section-->

<!-- Start Services Block -->
<div class="services-block style-three ptb-130" id="serices">
    <div class="element-group">
        <div class="element one"></div>
        <div class="element two animation-moving-left-right-two"></div>
    </div>
    <div class="container ml-b-30">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-title txt-center">
                    <h2 class="title-main aos-item" data-aos="fade-up" data-aos-duration="400" data-aos-once="true">
                        <span class="text-gradient">Service</span> scope.</h2>
                </div>
                <!-- /.section-title -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 aos-item" data-aos="fade-up" data-aos-duration="600" data-aos-once="true">
                <div class="service-item style-one text-center">
                    <div class="service-icon">
                        <img src="assets/images/cyborg.png">
                    </div>
                    <!-- /.service-icon -->
                    <div class="service-info">
                        <h3 class="title">Technology</h3>
                        <ul>
                            <li>Website Customized</li>
                            <li>APP (IOS, Android)</li>
                            <li>Membership System</li>
                            <li>CRM / Database</li>
                        </ul>
                    </div>
                    <!-- /.service-info -->
                </div>
                <!-- /.service-item -->
            </div>
            <!-- /.col-lg-3 -->
            <!-- /.col-lg-3 -->
            <div class="col-lg-4 col-md-6 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                <div class="service-item style-one text-center">
                    <div class="service-icon">
                        <img src="assets/images/vector.png">
                    </div>

                    <!-- /.service-icon -->
                    <div class="service-info">
                        <h3 class="title">Design</h3>
                        <ul>
                            <li>Website Graphic</li>
                            <li>Brand Identity</li>
                            <li>Visual Communication</li>
                            <li>Social media posts</li>
                            <li>Banners</li>
                        </ul>
                    </div>
                    <!-- /.service-info -->
                </div>
                <!-- /.service-item -->
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-4 col-md-6 aos-item" data-aos="fade-up" data-aos-duration="900" data-aos-once="true">
                <div class="service-item style-one text-center">
                    <div class="service-icon">
                        <img src="assets/images/megaphone.png">
                    </div>
                    <!-- /.service-icon -->
                    <div class="service-info">
                        <h3 class="title">Marketing</h3>
                        <ul>
                            <li>Social Media management</li>
                            <li>Instagram/Facebook/Twitter</li>
                            <li>Campaigns</li>
                        </ul>
                    </div>
                    <!-- /.service-info -->
                </div>
                <!-- /.service-item -->
            </div>
            <!-- /.col-lg-3 -->
        </div>
    </div>
    <!-- /.container -->
</div>
<!--~~./ End Services Block ~~-->


<!-- Start Contact Block -->
<div id="contact" class="contact-form-block style-two ptb-130">
    <ul class="particle-shapes">
        <li class="dot-shape shape-one"></li>
        <li class="dot-shape shape-two"></li>
        <li class="dot-shape shape-three"></li>
        <li class="dot-shape shape-four"></li>
        <li class="dot-shape shape-five"></li>
    </ul>
    <div class="container ml-b-40">
        <div class="row justify-content-center mrb-80">
            <div class="col-md-10">
                <div class="text-feature-block ms-mrb-50 text-center">
                    <h4 class="sub-title color-primary aos-item" data-aos="fade-up" data-aos-duration="300"
                        data-aos-once="true">Let's Collaborate</h4>
                    <h2 class="title aos-item" data-aos="fade-up" data-aos-duration="400" data-aos-once="true">
                        Contact 📧 Us</h2>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-5">
                <div class="google-map md-mrb-50">
                    <img src="assets/images/contact/contact.png" alt="contact-img">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 offset-lg-1">
                <div class="contact-form-area">
                    <form id="contact_form" class="contact-form" action="#" method="post">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="name">Your Name </label>
                                    <input class="form-controller" id="name" name="name" type="text" required>
                                </div>
                            </div>
                            <!--./ col-lg-6-->
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="email">Your Email </label>
                                    <input class="form-controller" id="email" name="email" type="email" required>
                                </div>
                            </div>
                            <!--./ col-lg-6 -->
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Your Message </label>
                                    <textarea id="message" name="message" class="form-controller" rows="4"
                                              cols="50"></textarea>
                                </div>
                            </div><!-- /.col-12 -->
                            <div class="col-12 mrt-15">
                                <button type="submit" name="submit" class="btn btn-primary rounded-pill btn-gradient-three">Submit
                                    Mail
                                </button>
                            </div>
                            <!--./ col-lg-6 -->
                        </div><!-- /.row -->
                    </form><!-- /.contact-form -->
                </div><!-- /.contact-form-area -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!--~~./ End Contact Block ~~-->


<!-- Start Site Footer -->
<?php include('includes/footer.php'); ?>
<!--~./ End Site Footer ~-->
</div>
<!--~~./ End Page Wrapper ~~-->

<!-- All The JS Files  -->
<?php include('includes/js.php'); ?>
</body>


</html>