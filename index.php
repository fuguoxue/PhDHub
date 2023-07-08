<!DOCTYPE html>
<!-- saved from url=(0055)http://pd4phd.engineering.nyu.edu/tracks/leadership.php -->
<html lang="en" class=" js ">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Leadership Workshops - Professional Development for PhD Students | NYU Tandon School of Engineering</title>

    <!--Favicon-->
    <link rel="icon" type="image/gif" href="http://pd4phd.engineering.nyu.edu/images/favicon.png">

    <!--Stylesheets-->
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/bootsnav.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/et-line-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/justified-gallery.min.css">
    <link rel="stylesheet" href="./css/layers.css">
    <link rel="stylesheet" href="./css/magnific-popup.css">
    <link rel="stylesheet" href="./css/navigation.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="./css/settings.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/swiper.min.css">
    <link rel="stylesheet" href="./css/themify-icons.css">


    <!--Google Analytics-->
    <script async="" src="./js/analytics.js"></script>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', '', 'auto');
        ga('send', 'pageview');
    </script>
    <!--Search Engine Optimization-->
    <meta name="description" content="">
    <meta name="author" content="Dhruv Avdhesh">
    <meta name="robots" content="index">

    <style id="fit-vids-style">
        .fluid-width-video-wrapper {
            width: 100%;
            position: relative;
            padding: 0;
        }

        .fluid-width-video-wrapper iframe,
        .fluid-width-video-wrapper object,
        .fluid-width-video-wrapper embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>


<body>
    <!-- Connect to XAMPP local server -->
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "leadership";

    $db = new mysqli($servername, $username, $password, $databasename);

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Wrong!";
        exit;
    }
    ?>
    <header>
        <nav class="navbar navbar-default bootsnav nav-box-width navbar-top on menu-center no-full">
            <div class="container-fluid nav-header-container">
                <div class="row">
                    <!-- PhD Logo -->
                    <div class="col-lg-2 col-md-4 col-xs-8 no-padding-left">
                        <a href="http://pd4phd.engineering.nyu.edu/" title="Fellowship Opportunities" class="logo"><img src="./images/pd4phd.png" class="logo-light default" alt="Fellowship Opportunities" data-no-retina=""></a>
                    </div>
                    <!-- Tandon Logo -->
                    <div class="col-lg-2 text-right no-padding-right" id="tandon-logo">
                        <a href="https://engineering.nyu.edu/" title="NYU Tandon School of Engineering" class="logo" target="_blank"><img src="./images/logo.png" class="logo-light default" alt="NYU Tandon School of Engineering" data-no-retina=""></a>
                    </div>
                    <!-- Menu Bar -->
                    <div class="col-lg-8 col-md-8 col-xs-4 accordion-menu xs-no-padding-right" style="padding-right: 0;">
                        <!-- Hamburger Menu -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                            <span class="sr-only">toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Dropdown Menu -->
                        <div align="right" style="padding: 0;">
                            <div class="navbar-collapse collapse" id="navbar-collapse-toggle-1">
                                <ul id="accordion" class="nav navbar-nav navbar-center no-margin" data-in="fadeIn" data-out="fadeOut">
                                    <li class="dropdown simple-dropdown" style="text-align:center;">
                                        <a href="http://pd4phd.engineering.nyu.edu/tracks">Tracks&nbsp;<span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="dropdown"><a class="dropdown-toggle" style="font-size:14px;" data-toggle="dropdown" href="http://pd4phd.engineering.nyu.edu/tracks/digital-literacy.php">Digital Literacy for Research</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown" style="text-align:center;"><a href="http://pd4phd.engineering.nyu.edu/schedule">Schedule</a></li>

                                    <li class="dropdown simple-dropdown" style="text-align:center;"><a href="http://pd4phd.engineering.nyu.edu/archive">Archive&nbsp;<span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu" style="top: 72px;">
                                            <li class="dropdown"><a class="dropdown-toggle" style="font-size:14px;" data-toggle="dropdown" href="http://pd4phd.engineering.nyu.edu/archive/mentoring-dissertation.php">Mentoring and Dissertation</a></li>
                                            <li class="dropdown"><a class="dropdown-toggle" style="font-size:14px;" data-toggle="dropdown" href="http://pd4phd.engineering.nyu.edu/archive/leadership.php">Leadership Workshops</a></li>
                                            <li class="dropdown"><a class="dropdown-toggle" style="font-size:14px;" data-toggle="dropdown" href="http://pd4phd.engineering.nyu.edu/archive/digital-literacy.php">Digital Literacy</a></li>
                                            <li class="dropdown"><a class="dropdown-toggle" style="font-size:14px;" data-toggle="dropdown" href="http://pd4phd.engineering.nyu.edu/archive/teamwork.php">Teamwork</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown" style="text-align:center;"><a href="http://pd4phd.engineering.nyu.edu/contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Breadcrumb -->
    <section class="wow fadeIn bg-light-gray padding-10px-tb page-title-small top-space" style="margin-top: 72px; visibility: visible; animation-name: fadeIn;">
        <div class="row" style="padding: 0 50px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 display-table xs-margin-5px-top" style="height: 21px;">
                <div align="left" class="display-table-cell vertical-align-middle breadcrumb">
                    <ul class="xs-text-center sm-text-center">
                        <li><a href="https://nyu.edu/" class="text-extra-dark-gray" target="_blank">NYU</a></li>
                        <li><a href="https://engineering.nyu.edu/" class="text-extra-dark-gray" target="_blank">Tandon School of Engineering</a></li>
                        <li><a href="http://pd4phd.engineering.nyu.edu/" class="text-extra-dark-gray">Professional Development for PhD Students</a></li>
                        <li><a href="http://pd4phd.engineering.nyu.edu/tracks" class="text-extra-dark-gray">Tracks</a></li>
                        <li><a href="#" class="text-extra-dark-gray">Leadership Workshops</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Workshops -->
    <section class="wow fadeIn padding-100px-tb" style="visibility: visible; animation-name: fadeIn;">
        <div class="container">
            <!-- Title -->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center center-col">
                    <h3 class="font-weight-700 letter-spacing-minus-1 text-extra-dark-gray margin-seven-bottom margin-five-top">Leadership Workshops</h3>
                </div>
            </div>
            <!-- Two columns -->
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 center-col">
                <!-- Column 1: Workshops -->
                <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">                    
                    <?php
                    $sql = "select * from workshops where Status = 'Scheduled' order by Year asc, StartMonth asc, StartDate asc";
                    $result = $db->query($sql);
                    $records = array();
                    while ($row = $result->fetch_assoc()) {
                        $records[] = $row;
                    };
                    $num_workshops = count($records);
                    ?>
                    <h5 class="padding-15px-left sm-text-center xs-text-center" id="scheduled">Scheduled Workshops</h5>
                    <?php
                    for ($index = 0; $index < $num_workshops; $index++) {
                        $name = $records[$index]["Name"];
                        $lecturer = $records[$index]["Lecturer"];
                        $date = $records[$index]["Date"];
                        $time = $records[$index]["Time"];
                        $venue = $records[$index]["Venue"];
                        $image_url = $records[$index]["ImageURL"];
                        $brochure_url = $records[$index]["BrochureURL"];
                        $status = $records[$index]["Status"];

                        if ($brochure_url == 'NULL') {
                            if ($index % 2 == 0) {
                                echo "<div class='row'>";
                                echo "<div class='container col-lg-12 col-md-12 col-sm-12 col-xs-12'>";
                                echo "<div class='col-lg-6 col-md-12 col-sm-12 col-xs-12 blog-post-style5 margin-30px-bottom' style='visibility: visible; animation-name: fadeInUp;'>";
                                echo "<div class='blog-post bg-white'>";
                                echo "<div class='blog-post-images overflow-hidden'>";
                                echo "<a href='#' target='_blank'>";
                                echo "<img src='$image_url' alt='$name' data-no-retina=''></a>";
                                echo "</div>";
                                echo "<div class='post-details inner-match-height padding-15px-all'>";
                                echo "<a href='#' target='_blank' class='post-title display-block'>$name</a>";
                                echo "<div class='author'><span class='text-medium-gray text-uppercase display-inline-block' style='font-size: 14px; font-weight: 400;'>by <a class='text-medium-gray'>$lecturer</a></span></div>";
                                echo "<div class='separator-line-horrizontal-full bg-medium-gray margin-10px-tb'></div>";
                                echo "<p align='justify'><strong>Date:</strong> $date<br><strong>Time:</strong> $time<br><strong>Venue:</strong> $venue</p>";
                                echo "<div class='margin-10px-top' align='center'>";
                                echo "<a href='#' class='btn btn-deep-pink btn-small align-top sm-no-margin-right btn-rounded disabled' target='_blank'>Brochure</a>";
                                echo "</div></div></div>";
                                echo "<div style='height: 30px'></div></div>";
                            } else {
                                echo "<div class='col-lg-6 col-md-12 col-sm-12 col-xs-12 blog-post-style5 margin-30px-bottom' style='visibility: visible; animation-name: fadeInUp;'>";
                                echo "<div class='blog-post bg-white'>";
                                echo "<div class='blog-post-images overflow-hidden'>";
                                echo "<a href='#' target='_blank'>";
                                echo "<img src='$image_url' alt='$name' data-no-retina=''></a>";
                                echo "</div>";
                                echo "<div class='post-details inner-match-height padding-15px-all'>";
                                echo "<a href='#' target='_blank' class='post-title display-block'>$name</a>";
                                echo "<div class='author'><span class='text-medium-gray text-uppercase display-inline-block' style='font-size: 14px; font-weight: 400;'>by <a class='text-medium-gray'>$lecturer</a></span></div>";
                                echo "<div class='separator-line-horrizontal-full bg-medium-gray margin-10px-tb'></div>";
                                echo "<p align='justify'><strong>Date:</strong> $date<br><strong>Time:</strong> $time<br><strong>Venue:</strong> $venue</p>";
                                echo "<div class='margin-10px-top' align='center'>";
                                echo "<a href='#' class='btn btn-deep-pink btn-small align-top sm-no-margin-right btn-rounded disabled' target='_blank'>Brochure</a>";
                                echo "</div></div></div></div>";
                                echo "</div></div>";
                            }
                        } else {
                            if ($index % 2 == 0) {
                                echo "<div class='row'>";
                                echo "<div class='container col-lg-12 col-md-12 col-sm-12 col-xs-12'>";
                                echo "<div class='col-lg-6 col-md-12 col-sm-12 col-xs-12 blog-post-style5 margin-30px-bottom' style='visibility: visible; animation-name: fadeInUp;'>";
                                echo "<div class='blog-post bg-white'>";
                                echo "<div class='blog-post-images overflow-hidden'>";
                                echo "<a href='$brochure_url' target='_blank'>";
                                echo "<img src='$image_url' alt='$name' data-no-retina=''></a>";
                                echo "</div>";
                                echo "<div class='post-details inner-match-height padding-15px-all'>";
                                echo "<a href='$brochure_url' target='_blank' class='post-title display-block'>$name</a>";
                                echo "<div class='author'><span class='text-medium-gray text-uppercase display-inline-block' style='font-size: 14px; font-weight: 400;'>by <a href='$brochure_url' class='text-medium-gray'>$lecturer</a></span></div>";
                                echo "<div class='separator-line-horrizontal-full bg-medium-gray margin-10px-tb'></div>";
                                echo "<p align='justify'><strong>Date:</strong> $date<br><strong>Time:</strong> $time<br><strong>Venue:</strong> $venue</p>";
                                echo "<div class='margin-10px-top' align='center'>";
                                echo "<a href='$brochure_url' class='btn btn-deep-pink btn-small align-top sm-no-margin-right btn-rounded' target='_blank'>Brochure</a>";
                                echo "</div></div></div></div>";
                            } else {
                                echo "<div class='col-lg-6 col-md-12 col-sm-12 col-xs-12 blog-post-style5 margin-30px-bottom' style='visibility: visible; animation-name: fadeInUp;'>";
                                echo "<div class='blog-post bg-white'>";
                                echo "<div class='blog-post-images overflow-hidden'>";
                                echo "<a target='_blank'>";
                                echo "<img href='$brochure_url' src='$image_url' alt='$name' data-no-retina=''></a>";
                                echo "</div>";
                                echo "<div class='post-details inner-match-height padding-15px-all'>";
                                echo "<a href='$brochure_url' target='_blank' class='post-title display-block'>$name</a>";
                                echo "<div class='author'><span class='text-medium-gray text-uppercase display-inline-block' style='font-size: 14px; font-weight: 400;'>by <a href='$brochure_url' class='text-medium-gray'>$lecturer</a></span></div>";
                                echo "<div class='separator-line-horrizontal-full bg-medium-gray margin-10px-tb'></div>";
                                echo "<p align='justify'><strong>Date:</strong> $date<br><strong>Time:</strong> $time<br><strong>Venue:</strong> $venue</p>";
                                echo "<div class='margin-10px-top' align='center'>";
                                echo "<a href='$brochure_url' class='btn btn-deep-pink btn-small align-top sm-no-margin-right btn-rounded' target='_blank'>Brochure</a>";
                                echo "</div></div></div></div>";
                                echo "</div></div>";
                            }
                        }
                    }
                    if ($num_workshops % 2 != 0) {
                        echo "<div class='col-lg-6 col-md-12 col-sm-12 col-xs-12 blog-post-style5 margin-30px-bottom' style='visibility: visible; animation-name: fadeInUp;'>";
                        echo "<div class='blog-post bg-white'>";
                        echo "<div class='blog-post-images overflow-hidden'>";
                        echo "</div></div></div>";
                        echo "</div></div>";
                    }
                    ?>
                    <!-- Get Upcoming Workshops -->
                    <?php
                    $sql = "select * from workshops where Status = 'Upcoming' order by Year asc, StartMonth asc, StartDate asc";
                    $result = $db->query($sql);
                    $records = array();
                    while ($row = $result->fetch_assoc()) {
                        $records[] = $row;
                    };
                    $num_workshops = count($records);
                    ?>
                    <h5 class="padding-15px-left sm-text-center xs-text-center" id="upcoming">Upcoming Workshops</h5>
                    <?php
                    for ($index = 0; $index < $num_workshops; $index++) {
                        $name = $records[$index]["Name"];
                        $lecturer = $records[$index]["Lecturer"];
                        $date = $records[$index]["Date"];
                        $time = $records[$index]["Time"];
                        $venue = $records[$index]["Venue"];
                        $image_url = $records[$index]["ImageURL"];
                        $brochure_url = $records[$index]["BrochureURL"];
                        $status = $records[$index]["Status"];

                        if ($brochure_url == NULL) {
                            if ($index % 2 == 0) {
                                echo "<div class='row margin-30px-bottom'>";
                                echo "<div class='container col-lg-12 col-md-12 col-sm-12 col-xs-12'>";
                                echo "<div class='col-lg-6 col-md-12 col-sm-12 col-xs-12 blog-post-style5 last-paragraph-no-margin xs-margin-30px-bottom' style='visibility: visible; animation-name: fadeInUp;'>";
                                echo "<div class='blog-post bg-white'>";
                                echo "<div class='blog-post-images overflow-hidden'>";
                                echo "<a href='$brochure_url' target='_blank'>";
                                echo "<img src='$image_url' alt='$name' data-no-retina=''></a>";
                                echo "</div>";
                                echo "<div class='post-details inner-match-height padding-15px-all'>";
                                echo "<a href='$brochure_url' target='_blank' class='post-title display-block'>$name</a>";
                                echo "<div class='author'><span class='text-medium-gray text-uppercase display-inline-block' style='font-size: 14px; font-weight: 400;'>by <a href='#' class='text-medium-gray'>$lecturer</a></span></div>";
                                echo "<div class='separator-line-horrizontal-full bg-medium-gray margin-10px-tb'></div>";
                                echo "<p align='justify'><strong>Date:</strong> $date<br><strong>Time:</strong> $time<br><strong>Venue:</strong> $venue</p>";
                                echo "<div class='margin-10px-top' align='center'>";
                                echo "<a href='$brochure_url' class='btn btn-deep-pink btn-small align-top sm-no-margin-right btn-rounded disabled' target='_blank'>Brochure</a>";
                                echo "</div></div></div></div>";
                            } else {
                                echo "<div class='col-lg-6 col-md-12 col-sm-12 col-xs-12 blog-post-style5 last-paragraph-no-margin xs-margin-30px-bottom' style='visibility: visible; animation-name: fadeInUp;'>";
                                echo "<div class='blog-post bg-white'>";
                                echo "<div class='blog-post-images overflow-hidden'>";
                                echo "<a href='$brochure_url' target='_blank'>";
                                echo "<img src='$image_url' alt='$name' data-no-retina=''></a>";
                                echo "</div>";
                                echo "<div class='post-details inner-match-height padding-15px-all'>";
                                echo "<a href='$brochure_url' target='_blank' class='post-title display-block'>$name</a>";
                                echo "<div class='author'><span class='text-medium-gray text-uppercase display-inline-block' style='font-size: 14px; font-weight: 400;'>by <a href='#' class='text-medium-gray'>$lecturer</a></span></div>";
                                echo "<div class='separator-line-horrizontal-full bg-medium-gray margin-10px-tb'></div>";
                                echo "<p align='justify'><strong>Date:</strong> $date<br><strong>Time:</strong> $time<br><strong>Venue:</strong> $venue</p>";
                                echo "<div class='margin-10px-top' align='center'>";
                                echo "<a href='$brochure_url' class='btn btn-deep-pink btn-small align-top sm-no-margin-right btn-rounded disabled' target='_blank'>Brochure</a>";
                                echo "</div></div></div></div>";
                                echo "</div></div>";
                            }
                        } else {
                            if ($index % 2 == 0) {
                                echo "<div class='row margin-30px-bottom'>";
                                echo "<div class='container col-lg-12 col-md-12 col-sm-12 col-xs-12'>";
                                echo "<div class='col-lg-6 col-md-12 col-sm-12 col-xs-12 blog-post-style5 last-paragraph-no-margin xs-margin-30px-bottom' style='visibility: visible; animation-name: fadeInUp;'>";
                                echo "<div class='blog-post bg-white'>";
                                echo "<div class='blog-post-images overflow-hidden'>";
                                echo "<a target='_blank'>";
                                echo "<img src='$image_url' alt='$name' data-no-retina=''></a>";
                                echo "</div>";
                                echo "<div class='post-details inner-match-height padding-15px-all'>";
                                echo "<a target='_blank' class='post-title display-block'>$name</a>";
                                echo "<div class='author'><span class='text-medium-gray text-uppercase display-inline-block' style='font-size: 14px; font-weight: 400;'>by <a href='#' class='text-medium-gray'>$lecturer</a></span></div>";
                                echo "<div class='separator-line-horrizontal-full bg-medium-gray margin-10px-tb'></div>";
                                echo "<p align='justify'><strong>Date:</strong> $date<br><strong>Time:</strong> $time<br><strong>Venue:</strong> $venue</p>";
                                echo "<div class='margin-10px-top' align='center'>";
                                echo "<a href='#' class='btn btn-deep-pink btn-small align-top sm-no-margin-right btn-rounded' target='_blank'>Brochure</a>";
                                echo "</div></div></div></div>";
                            } else {
                                echo "<div class='col-lg-6 col-md-12 col-sm-12 col-xs-12 blog-post-style5 last-paragraph-no-margin xs-margin-30px-bottom' style='visibility: visible; animation-name: fadeInUp;'>";
                                echo "<div class='blog-post bg-white'>";
                                echo "<div class='blog-post-images overflow-hidden'>";
                                echo "<a target='_blank'>";
                                echo "<img src='$image_url' alt='$name' data-no-retina=''></a>";
                                echo "</div>";
                                echo "<div class='post-details inner-match-height padding-15px-all'>";
                                echo "<a target='_blank' class='post-title display-block'>$name</a>";
                                echo "<div class='author'><span class='text-medium-gray text-uppercase display-inline-block' style='font-size: 14px; font-weight: 400;'>by <a href='#' class='text-medium-gray'>$lecturer</a></span></div>";
                                echo "<div class='separator-line-horrizontal-full bg-medium-gray margin-10px-tb'></div>";
                                echo "<p align='justify'><strong>Date:</strong> $date<br><strong>Time:</strong> $time<br><strong>Venue:</strong> $venue</p>";
                                echo "<div class='margin-10px-top' align='center'>";
                                echo "<a href='#' class='btn btn-deep-pink btn-small align-top sm-no-margin-right btn-rounded' target='_blank'>Brochure</a>";
                                echo "</div></div></div></div>";
                                echo "</div></div>";
                            }
                        }
                    }
                    if ($num_workshops % 2 != 0) {
                        echo "<div class='col-lg-6 col-md-12 col-sm-12 col-xs-12 blog-post-style5 last-paragraph-no-margin xs-margin-30px-bottom' style='visibility: visible; animation-name: fadeInUp;'>";
                        echo "<div class='blog-post bg-white'>";
                        echo "<div class='blog-post-images overflow-hidden'>";
                        echo "</div></div></div>";
                        echo "</div></div>";
                    }
                    ?>
                </div>
                <!-- Column 2: Internal Links, Register, and Notification -->
                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 padding-35px-lr" style="vertical-align: top; ">                    
                    <!-- Internal Links -->
                    <div class="row center-col">
                        <h6 class="text-extra-large margin-10px-bottom no-padding-left">Content on This Page: </h6>
                        <ul class="text-large internal-link-list padding-20px-left">
                            <li><a href="scheduled">Scheduled Workshops</a></li>
                            <li><a href="upcoming">Upcoming Workshops</a></li>
                        </ul>
                    </div>

                    <!-- Register -->
                    <div class="row">
                        <div align="center"><a href="https://forms.gle/eri3Wfz4xoHJ8Roj6" class="btn btn-deep-pink btn-extra-large align-top sm-no-margin-right" target="_blank">Register</a></div>
                    </div>

                    <!-- Notification -->
                    <div class="row margin-30px-top">
                        <div class="col-md-12 col-sm-12 center-col">
                            <div class="alert alert-info alert-dismissable">
                                <a href="http://pd4phd.engineering.nyu.edu/tracks/leadership.php#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <p align="justify"><strong>Kindly note: </strong>
                                </p>
                                <ul class="padding-15px-left" style="text-align: justify;">
                                    <li>The students will need to attend all the workshops in the track they choose.</li>
                                    <li>Registration limited to first 50 doctoral students.</li>
                                </ul>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer-standard-dark bg-white border-top-extra-dark-gray">
        <div class="footer-widget-area padding-two-tb xs-padding-20px-tb">
            <div class="container">
                <div class="row equalize xs-equalize-auto">
                    <div class="col-md-4 col-sm-4 col-xs-12 widget sm-margin-30px-bottom xs-text-center" style="height: 200px;">
                        <div align="center"><img class="footer-logo margin-30px-bottom" src="./images/logo-color.png" alt="NYU Tandon School of Engineering" data-no-retina=""></div>
                        <div align="center"><img class="footer-logo-2 margin-10px-bottom" src="./images/nyu-tandon.png" alt="NYU Tandon School of Engineering" data-no-retina=""></div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 widget padding-45px-left sm-padding-15px-left sm-margin-30px-bottom xs-text-center" style="height: 200px;">
                        <div align="center">
                            <div class="widget-title text-extra-dark-gray text-uppercase margin-20px-bottom font-weight-600 text-large">Address</div>
                            <div class=" display-block width-80">Tandon School of Engineering<br>New York University<br>6 MetroTech Center<br>Brooklyn, NY 11201</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 widget padding-45px-left sm-padding-15px-left xs-text-center" style="height: 200px;">
                        <div align="center">
                            <div class="widget-title text-extra-dark-gray text-uppercase margin-20px-bottom font-weight-600 text-large">Contact</div>
                            <div class="display-block width-80 footer-contact"><strong><a href="http://pd4phd.engineering.nyu.edu/contact/">Contact Us</a></strong></div>
                            <div class="display-block width-80 footer-contact"><strong><a href="tel:+1 (646) 997-3600">+1 (646) 997 - 3600</a></strong></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-light-gray-footer padding-15px-tb text-center xs-padding-20px-tb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 text-left text-medium xs-text-center sm-margin-15px-bottom display-inline">
                        <div class="social-icon-style-8">
                            <ul class="small-icon no-margin-bottom no-margin-top">
                                <li class="text-large text-extra-dark-gray font-weight-600" style="vertical-align:middle;">FOLLOW US</li>
                                <li class="small-icon-li"><a href="https://www.facebook.com/nyutandon" target="_blank"><img src="http://engineering.nyu.edu/themes/custom/tandon/images/icon-facebook.png" alt="icon-facebook"></a></li>
                                <li class="small-icon-li"><a href="https://twitter.com/nyutandon" target="_blank"><img src="http://engineering.nyu.edu/themes/custom/tandon/images/icon-twitter.png" alt="icon-twitter"></a></li>
                                <li class="small-icon-li"><a href="https://www.instagram.com/nyutandon" target="_blank"><img src="http://engineering.nyu.edu/themes/custom/tandon/images/icon-instagram.png" alt="icon-instagram"></a></li>
                                <li class="small-icon-li"><a href="https://www.youtube.com/nyutandon" target="_blank"><img src="http://engineering.nyu.edu/themes/custom/tandon/images/icon-youtube.png" alt="icon-youtube"></a></li>
                                <li class="small-icon-li"><a href="https://www.linkedin.com/nyutandon" target="_blank"><img src="http://engineering.nyu.edu/themes/custom/tandon/images/icon-linkedin.png" alt="icon-linkedin"></a></li>
                                <li class="small-icon-li"><a href="https://www.tiktok.com/nyutandon" target="_blank"><img src="http://engineering.nyu.edu/themes/custom/tandon/images/icon-tiktok.png" alt="icon-tiktok"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-right text-small xs-text-center display-inline">
                        <a href="#" class="text-dark-gray font-weight-500" style="vertical-align:middle;">© NYU Tandon 2023</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/modernizr.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="./js/skrollr.min.js"></script>
    <script type="text/javascript" src="./js/smooth-scroll.js"></script>
    <script type="text/javascript" src="./js/jquery.appear.js"></script>
    <script type="text/javascript" src="./js/bootsnav.js"></script>
    <script type="text/javascript" src="./js/jquery.nav.js"></script>
    <script type="text/javascript" src="./js/wow.min.js"></script>
    <script type="text/javascript" src="./js/page-scroll.js"></script>
    <script type="text/javascript" src="./js/swiper.min.js"></script>
    <script type="text/javascript" src="./js/jquery.count-to.js"></script>
    <script type="text/javascript" src="./js/jquery.stellar.js"></script>
    <script type="text/javascript" src="./js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="./js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="./js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="./js/classie.js"></script>
    <script type="text/javascript" src="./js/hamburger-menu.js"></script>
    <script type="text/javascript" src="./js/counter.js"></script>
    <script type="text/javascript" src="./js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="./js/equalize.min.js"></script>
    <script type="text/javascript" src="./js/skill.bars.jquery.js"></script>
    <script type="text/javascript" src="./js/justified-gallery.min.js"></script>
    <script type="text/javascript" src="./js/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="./js/instafeed.min.js"></script>
    <script type="text/javascript" src="./js/retina.min.js"></script>
    <script type="text/javascript" src="./js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="./js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="./js/moment.min.js"></script>
    <script type="text/javascript" src="./js/moment.recur.min.js"></script>
    <script type="text/javascript" src="./js/calendar.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>




</body>

</html>