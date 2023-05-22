<?php

require "./include/data.php";

?>

<?php

require "./include/db.php";

?>


<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Job Listing - Work24hr</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="manifest" href="site.php" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--<link rel="stylesheet" href="assets/css/bootstrap.min.css" />-->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/price_rangs.css" />
    <link rel="stylesheet" href="assets/css/flaticon.css" />
    <link rel="stylesheet" href="assets/css/slicknav.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="assets/css/themify-icons.css" />
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://work24hr.com/assets/css/style.css" />

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <style>
        .accordion {
            font-size: 1rem;
            border: 1px solid #eee;
            margin: 0 auto;
            border-radius: 5px;
        }

        .accordion-header,
        .accordion-body {
            background: white;
        }

        .accordion-header {
            padding: 1.5em 1.5em;
            background: white;
            color: #1f213f;
            cursor: pointer;
            font-size: .9em;
            letter-spacing: .1em;
            transition: all .3s;
            font-weight: 800;
        }

        .accordion__item {
            border-bottom: 1px solid #eee;
        }

        .accordion__item .accordion__item {
            border-bottom: 1px solid rgba(0, 0, 0, 0.08);
        }

        .accordion-header:hover {
            background: #ff6601;
            position: relative;
            z-index: 5;
        }

        .accordion-body {
            background: #fcfcfc;
            color: #353535;
            display: none;
        }

        .accordion-body__contents {
            padding: 1.5em 1.5em;
            font-size: .85em;
        }

        .accordion__item.active:last-child .accordion-header {
            border-radius: none;
        }

        .accordion:first-child>.accordion__item>.accordion-header {
            border-bottom: 1px solid transparent;
        }

        .accordion__item>.accordion-header:after {
            content: "\f3d0";
            font-family: IonIcons;
            font-size: 1.2em;
            float: right;
            position: relative;
            top: -2px;
            transition: .3s all;
            transform: rotate(0deg);
        }

        .accordion__item.active>.accordion-header:after {
            transform: rotate(-180deg);
        }

        .accordion__item.active .accordion-header {
            background: #ff6601;
        }

        .accordion__item .accordion__item .accordion-header {
            background: #ff6601;
            color: #fff;
        }

        @media screen and (max-width: 1000px) {


            .accordion {
                width: 100%;
            }

        }

        #loading {
            text-align: center;
            background: url("./loader.gif") no-repeat center;
            height: 150px;
        }

        a {
            text-decoration: none !important;
        }
    </style>
</head>

<body>
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="" />
                </div>
            </div>
        </div>
    </div>

    <header>

        <div class="header-area header-transparrent">
            <div class="headder-top header-sticky">

                <div class="container">


                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <div class="logo">
                                <a href="index.php"><img src="assets/img/logo/logo.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <div class="main-menu">

                                    <nav class="d-none d-lg-block">

                                        <ul id="navigation">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="job_listing.php">Find Jobs </a></li>
                                            <li><a href="about.php">About</a></li>
                                            <!--<li>-->
                                            <!--    <a href="#">Page</a>-->
                                            <!--    <ul class="submenu">-->
                                            <!--        <li><a href="blog.php">Blog</a></li>-->
                                            <!--        <li><a href="single-blog.php">Blog Details</a></li>-->
                                            <!--        <li><a href="elements.php">Elements</a></li>-->
                                            <!--        <li><a href="job_details.php">job Details</a></li>-->
                                            <!--    </ul>-->
                                            <!--</li>-->
                                            <!--<li><a href="contact.php">Contact</a></li>-->
                                        </ul>
                                    </nav>
                                </div>

                                <div class="header-btn d-none f-right d-lg-block">
                                    <a href="./registration.php" class="btn head-btn1">Register</a>
                                    <a href="./employer-login.php" class="btn head-btn2">Login</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="slider-area">
            <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Jobs In Ghana</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>






        <div class="job-listing-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="row container">
                            <div class="col-12">
                                <div class="small-section-tittle2 mb-45">
                                    <div class="ion">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="12px">
                                            <path fill-rule="evenodd" fill="rgb(27, 207, 107)" d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z" />
                                        </svg>
                                    </div>
                                    <h4>Filter Jobs</h4>
                                </div>
                            </div>
                        </div>



                        <div class="job-category-listing mb-50">




                            <div class="single-listing">
                                <div class="accordion js-accordion">
                                    <div class="accordion__item js-accordion-item active">
                                        <div class="accordion-header js-accordion-header">Job Type</div>
                                        <div class="accordion-body js-accordion-body">
                                            <div class="accordion-body__contents">
                                                <div class="select-Categories">
                                                    <label class="container">
                                                        Contract
                                                        <input type="checkbox" class="common_selector jobtype" value="Contract" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Full Time
                                                        <input type="checkbox" class="common_selector jobtype" value="Full Time" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Internship & Graduate
                                                        <input type="checkbox" class="common_selector jobtype" value="Internship & Graduate" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Part Time
                                                        <input type="checkbox" class="common_selector jobtype" value="Part Time" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>

                                            </div>

                                        </div </div><!-- end of accordion body -->
                                    </div><!-- end of accordion item -->
                                    <div class="accordion__item js-accordion-item ">
                                        <div class="accordion-header js-accordion-header">Industry</div>
                                        <div class="accordion-body js-accordion-body">
                                            <div class="accordion-body__contents">
                                                <div class="select-Categories">

                                                    <label class="container">
                                                        Advertisement, Media & Communications
                                                        <input type="checkbox" class="common_selector industry" value="Advertisement, Media & Communications" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Agriculture, Fishing & Forestry
                                                        <input type="checkbox" class="common_selector industry" value="Agriculture, Fishing & Forestry" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Automotive & Aviation
                                                        <input type="checkbox" class="common_selector industry" value="Automotive & Aviation" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Banking, Finance & Insurance
                                                        <input type="checkbox" class="common_selector industry" value="Banking, Finance & Insurance" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Construction
                                                        <input type="checkbox" class="common_selector industry" value="Construction" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Education
                                                        <input type="checkbox" class="common_selector industry" value="Education" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Energy & Utilities
                                                        <input type="checkbox" class="common_selector industry" value="Energy & Utilities" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Enforcement & Security
                                                        <input type="checkbox" class="common_selector industry" value="Enforcement & Security" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Entertainment, Events & Sport
                                                        <input type="checkbox" class="common_selector industry" value="Entertainment, Events & Sport" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Government
                                                        <input type="checkbox" class="common_selector industry" value="Government" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Healthcare
                                                        <input type="checkbox" class="common_selector industry" value="Healthcare" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Hospitality & Hotel
                                                        <input type="checkbox" class="common_selector industry" value="Hospitality & Hotel" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        IT & Telecoms
                                                        <input type="checkbox" class="common_selector industry" value="IT & Telecoms" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Law & Compliance
                                                        <input type="checkbox" class="common_selector industry" value="Law & Compliance" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Manufacturing & Warehousing
                                                        <input type="checkbox" class="common_selector industry" value="Manufacturing & Warehousing" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Mining, Energy & Metals
                                                        <input type="checkbox" class="common_selector industry" value="Mining, Energy & Metals" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        NGO, NPO & Charity
                                                        <input type="checkbox" class="common_selector industry" value="NGO, NPO & Charity" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Real Estate
                                                        <input type="checkbox" class="common_selector industry" value="Real Estate" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Recruitment
                                                        <input type="checkbox" class="common_selector industry" value="Recruitment" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Retail, Fashion & FMCG
                                                        <input type="checkbox" class="common_selector industry" value="Retail, Fashion & FMCG" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Shipping & Logistics
                                                        <input type="checkbox" class="common_selector industry" value="Shipping & Logistics" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Tourism & Travel
                                                        <input type="checkbox" class="common_selector industry" value="Tourism & Travel" />
                                                        <span class="checkmark"></span>
                                                    </label>

                                                </div>
                                            </div>

                                        </div><!-- end of accordion body -->
                                    </div><!-- end of accordion item -->
                                    <div class="accordion__item js-accordion-item">
                                        <div class="accordion-header js-accordion-header">Location</div>
                                        <div class="accordion-body js-accordion-body">
                                            <div class="accordion-body__contents">
                                                <div class="select-Categories">

                                                    <label class="container">
                                                        Accra and Tema Region
                                                        <input type="checkbox" class="common_selector location" value="Accra and Tema Region" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Brong-Ahafo Region
                                                        <input type="checkbox" class="common_selector location" value="Brong-Ahafo Region" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Central Region
                                                        <input type="checkbox" class="common_selector location" value="Central Region" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Eastern Region
                                                        <input type="checkbox" class="common_selector location" value="Eastern Region" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Kumasi & Ashanti Region
                                                        <input type="checkbox" class="common_selector location" value="Kumasi & Ashanti Region" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Outside Ghana
                                                        <input type="checkbox" class="common_selector location" value="Outside Ghana" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Remote (Work From Home)
                                                        <input type="checkbox" class="common_selector location" value="Remote (Work From Home)" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Enforcement & Security
                                                        <input type="checkbox" class="common_selector location" value="Enforcement & Security" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Entertainment, Events & Sport
                                                        <input type="checkbox" class="common_selector location" value="Entertainment, Events & Sport" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Rest Of Ghana
                                                        <input type="checkbox" class="common_selector location" value="Rest Of Ghana" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Takoradi & Western Region
                                                        <input type="checkbox" class="common_selector location" value="Takoradi & Western Region" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Temale & Northern Region
                                                        <input type="checkbox" class="common_selector location" value="Temale & Northern Region" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Upper East Region
                                                        <input type="checkbox" class="common_selector location" value="Upper East Region" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Upper West Region
                                                        <input type="checkbox" class="common_selector location" value="Upper West Region" />
                                                        <span class="checkmark"></span>
                                                    </label>

                                                </div>
                                            </div>

                                        </div><!-- end of accordion body -->
                                    </div><!-- end of accordion item -->

                                    <div class="accordion__item js-accordion-item">
                                        <div class="accordion-header js-accordion-header">Job Function</div>
                                        <div class="accordion-body js-accordion-body">
                                            <div class="accordion-body__contents">
                                                <div class="select-Categories">
                                                    <label class="container">
                                                        Accounting, Auditing & Finance
                                                        <input type="checkbox" class="common_selector jobFunction" value="Accounting, Auditing & Finance" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Building & Architecture
                                                        <input type="checkbox" class="common_selector jobFunction" value="Building & Architecture" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Community & Social Service
                                                        <input type="checkbox" class="common_selector jobFunction" value="Community & Social Service" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Consulting & Strategy
                                                        <input type="checkbox" class="common_selector jobFunction" value="Consulting & Strategy" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Creative & Design
                                                        <input type="checkbox" class="common_selector jobFunction" value="Creative & Design" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Customer Service & Support
                                                        <input type="checkbox" class="common_selector jobFunction" value="Customer Service & Support" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Driver & Transport Services
                                                        <input type="checkbox" class="common_selector jobFunction" value="Driver & Transport Services" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Engineering & Technology
                                                        <input type="checkbox" class="common_selector jobFunction" value="Engineering & Technology" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Estate Agents & Property Management
                                                        <input type="checkbox" class="common_selector jobFunction" value="Estate Agents & Property Management" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Farming & Agriculture
                                                        <input type="checkbox" class="common_selector jobFunction" value="Farming & Agriculture" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Food Services & Catering
                                                        <input type="checkbox" class="common_selector jobFunction" value="Food Services & Catering" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Health & Safety
                                                        <input type="checkbox" class="common_selector jobFunction" value="Health & Safety" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Hospitality & Leisure
                                                        <input type="checkbox" class="common_selector jobFunction" value="Hospitality & Leisure" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Human Resources
                                                        <input type="checkbox" class="common_selector jobFunction" value="Human Resources" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Legal Services
                                                        <input type="checkbox" class="common_selector jobFunction" value="Legal Services" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Management & Business Development
                                                        <input type="checkbox" class="common_selector jobFunction" value="Management & Business Development" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Marketing & Communications
                                                        <input type="checkbox" class="common_selector jobFunction" value="Marketing & Communications" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Medical & Pharmaceutical
                                                        <input type="checkbox" class="common_selector jobFunction" value="Medical & Pharmaceutical" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Quality Control & Assurance
                                                        <input type="checkbox" class="common_selector jobFunction" value="Quality Control & Assurance" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Research, Teaching & Training
                                                        <input type="checkbox" class="common_selector jobFunction" value="Research, Teaching & Training" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Sales
                                                        <input type="checkbox" class="common_selector jobFunction" value="Sales" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Software & Data
                                                        <input type="checkbox" class="common_selector jobFunction" value="Software & Data" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Supply Chain & Procurement
                                                        <input type="checkbox" class="common_selector jobFunction" value="Supply Chain & Procurement" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container">
                                                        Trades & Services
                                                        <input type="checkbox" class="common_selector jobFunction" value="Trades & Services" />
                                                        <span class="checkmark"></span>
                                                    </label>

                                                </div>
                                            </div>

                                        </div><!-- end of accordion body -->
                                    </div><!-- end of accordion item -->

                                    <div class="accordion__item js-accordion-item">
                                        <div class="accordion-header js-accordion-header">Order by</div>
                                        <div class="accordion-body js-accordion-body">
                                            <div class="accordion-body__contents">

                                                <div class="select-Categories">

                                                    <label class="container">
                                                        Latest
                                                        <input type="checkbox" checked class="common_selector latest" value="latest" />
                                                        <span class="checkmark"></span>
                                                    </label>

                                                </div>



                                            </div>

                                        </div><!-- end of accordion body -->
                                    </div><!-- end of accordion item -->

                                </div><!-- end of accordion -->

                            </div>



                            <!--<div class="single-listing">-->
                            <!--    <div class="select-Categories pb-50">-->
                            <!--        <div class="small-section-tittle2">-->
                            <!--            <h4>Posted Within</h4>-->
                            <!--        </div>-->
                            <!--        <label class="container">-->
                            <!--            Any-->
                            <!--            <input type="checkbox" />-->
                            <!--            <span class="checkmark"></span>-->
                            <!--        </label>-->
                            <!--        <label class="container">-->
                            <!--            Today-->
                            <!--            <input type="checkbox" checked="checked active" />-->
                            <!--            <span class="checkmark"></span>-->
                            <!--        </label>-->
                            <!--        <label class="container">-->
                            <!--            Last 2 days-->
                            <!--            <input type="checkbox" />-->
                            <!--            <span class="checkmark"></span>-->
                            <!--        </label>-->
                            <!--        <label class="container">-->
                            <!--            Last 3 days-->
                            <!--            <input type="checkbox" />-->
                            <!--            <span class="checkmark"></span>-->
                            <!--        </label>-->
                            <!--        <label class="container">-->
                            <!--            Last 5 days-->
                            <!--            <input type="checkbox" />-->
                            <!--            <span class="checkmark"></span>-->
                            <!--        </label>-->
                            <!--        <label class="container">-->
                            <!--            Last 10 days-->
                            <!--            <input type="checkbox" />-->
                            <!--            <span class="checkmark"></span>-->
                            <!--        </label>-->
                            <!--    </div>-->
                            <!--</div>-->


                            <!--<div class="single-listing pt-80">-->
                            <!--    <aside class="left_widgets p_filter_widgets price_rangs_aside sidebar_box_shadow">-->
                            <!--        <div class="small-section-tittle2 mt-5">-->
                            <!--            <h4>Filter Jobs</h4>-->
                            <!--        </div>-->


                            <!--        <div class="widgets_inner">-->
                            <!--            <div class="range_item">-->
                            <!--<input type="text" class="js-range-slider" value="" />-->
                            <!--                <div class="d-flex align-items-center">-->
                            <!--                    <div class="price_text">-->
                            <!--                        <p>Price :</p>-->
                            <!--                    </div>-->
                            <!--                    <div class="price_value d-flex justify-content-center">-->
                            <!--                        <input type="hidden" id="hidden_minimum_price" value="0">-->
                            <!--                        <input type="hidden" id="hidden_maximum_price" value="100000">-->
                            <!--<input type="text" class="js-input-from" id="amount" readonly />-->

                            <!--<span>to</span>-->
                            <!--<input type="text" class="js-input-to" id="amount" readonly />-->
                            <!--                        <p id="price_show">1000 - 10000</p>-->
                            <!--                        <div id="price_range"></div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </aside>-->
                            <!--</div>-->
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-8 col-md-8">
                        <section class="featured-job-area">
                            <div class="container">
                                <form action="" method="POST">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="count-job mb-35">



                                                <div class="input-group mt-3 mb-3">
                                                    <input type="text" class="form-control" name="search" id="search_textbox" placeholder="search Jobs" required />
                                                    <button type="submit" name="submit" class="btn btn-warning" id="search_button">Search</button>
                                                </div>


                                                <!--<div class="select-job-items">-->
                                                <!--    <span>Sort by</span>-->
                                                <!--    <select name="select">-->
                                                <!--        <option value="">None</option>-->
                                                <!--        <option value="">job list</option>-->
                                                <!--        <option value="">job list</option>-->
                                                <!--        <option value="">job list</option>-->
                                                <!--    </select>-->
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <div id="searchload">
                                    <?php
                                    $search = isset($_POST['search']) ? mysqli_real_escape_string($con, $_POST['search']) : '';

                                    // Check if a search is performed or not
                                    if (!empty($search)) {
                                        // Search query
                                        $q = "SELECT * FROM job_post j JOIN employers e ON j.emid = e.emid 
              WHERE jtitle LIKE '%$search%' OR jobfunction LIKE '%$search%'
              OR cindustry LIKE '%$search%' OR wtype LIKE '%$search%' OR loc LIKE '%$search%' OR mqualification LIKE '%$search%'
              OR joblevel LIKE '%$search%'";
                                        $result = mysqli_query($con, $q);
                                        $num = mysqli_num_rows($result);

                                        echo "Search Query: <b style='color:orange'>" . $search . "</b><br>";
                                        echo "Total: <span class='badge badge-info' style='background:orange'>" . $num . " </span> results found<br><br>";

                                        if ($num > 0) {
                                            foreach ($result as $row) {
                                    ?>
                                                <div class="single-job-items mb-30">
                                                    <div class="job-items">
                                                        <div class="company-img">
                                                            <a href="job_details.php?job=<?php echo $row['jobid']; ?>">
                                                                <img src="https://work24hr.com/employer/upload/<?php echo $row['companylogo']; ?>" style="" alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="job-tittle">
                                                            <a href="job_details.php?job=<?php echo $row['jobid']; ?>">
                                                                <h4><?php echo $row['jtitle']; ?></h4>
                                                            </a>
                                                            <ul>
                                                                <li><?php echo $row['jobfunction']; ?></li>
                                                                <li><i class="fas fa-map-marker-alt"></i>&nbsp;<?php echo $row['loc']; ?></li>
                                                                <li><?php echo " GH₵" . $row['msalary']; ?></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="items-link f-right">
                                                        <a href="job_details.php?job=<?php echo $row['jobid'] ?>"><?php echo $row['wtype'] ?></a>
                                                        <span>
                                                            <?php echo $row['date'] ?>
                                                        </span>
                                                    </div>
                                                </div>
                                            <?php
                                            }
                                        } else {
                                            echo '<center><h3>No Job Found</h3></center>';
                                        }
                                    } else {
                                        // Fetch all data
                                        $q = "SELECT * FROM job_post j JOIN employers e ON j.emid = e.emid";
                                        $result = mysqli_query($con, $q);
                                        $num = mysqli_num_rows($result);

                                        echo "Total: <span class='badge badge-info' style='background:orange'>" . $num . " </span> results found<br><br>";

                                        if ($num > 0) {
                                            foreach ($result as $row) {
                                            ?>
                                                <div class="single-job-items mb-30">
                                                    <div class="job-items">
                                                        <div class="company-img">
                                                            <a href="job_details.php?job=<?php echo $row['jobid']; ?>">
                                                                <img src="https://work24hr.com/employer/upload/<?php echo $row['companylogo']; ?>" style="" alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="job-tittle">
                                                            <a href="job_details.php?job=<?php echo $row['jobid']; ?>">
                                                                <h4><?php echo $row['jtitle']; ?></h4>
                                                            </a>
                                                            <ul>
                                                                <li><?php echo $row['jobfunction']; ?></li>
                                                                <li><i class="fas fa-map-marker-alt"></i>&nbsp;<?php echo $row['loc']; ?></li>
                                                                <li><?php echo " GH₵" . $row['msalary']; ?></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="items-link f-right">
                                                        <a href="job_details.php?job=<?php echo $row['jobid'] ?>"><?php echo $row['wtype'] ?></a>
                                                        <span>
                                                            <?php echo $row['date'] ?>
                                                        </span>
                                                    </div>
                                                </div>
                                    <?php
                                            }
                                        } else {
                                            echo '<center><h3>No Job Found</h3></center>';
                                        }
                                    }
                                    ?>
                                </div>


                                <div class="filter_data"></div>










                                <!--<div class="single-job-items mb-30">-->
                                <!--    <div class="job-items">-->
                                <!--        <div class="company-img">-->
                                <!--            <a href="#"><img src="assets/img/icon/job-list4.png" alt="" /></a>-->
                                <!--        </div>-->
                                <!--        <div class="job-tittle job-tittle2">-->
                                <!--            <a href="#">-->
                                <!--                <h4>Digital Marketer</h4>-->
                                <!--            </a>-->
                                <!--            <ul>-->
                                <!--                <li>Creative Agency</li>-->
                                <!--                <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>-->
                                <!--                <li>$3500 - $4000</li>-->
                                <!--            </ul>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--    <div class="items-link items-link2 f-right">-->
                                <!--        <a href="job_details.php">Full Time</a>-->
                                <!--        <span>7 hours ago</span>-->
                                <!--    </div>-->
                                <!--</div>-->
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <!--<div class="pagination-area pb-115 text-center">-->
        <!--    <div class="container">-->
        <!--        <div class="row">-->
        <!--            <div class="col-xl-12">-->
        <!--                <div class="single-wrap d-flex justify-content-center">-->
        <!--                    <nav aria-label="Page navigation example">-->
        <!--                        <ul class="pagination justify-content-start">-->
        <!--                            <li class="page-item active"><a class="page-link" href="#">01</a></li>-->
        <!--                            <li class="page-item"><a class="page-link" href="#">02</a></li>-->
        <!--                            <li class="page-item"><a class="page-link" href="#">03</a></li>-->
        <!--                            <li class="page-item">-->
        <!--                                <a class="page-link" href="#"><span class="ti-angle-right"></span></a>-->
        <!--                            </li>-->
        <!--                        </ul>-->
        <!--                    </nav>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </main>


    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>

    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/jquery.slicknav.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/price_rangs.js"></script>

    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/animated.headline.js"></script>
    <script src="assets/js/jquery.magnific-popup.js"></script>

    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>

    <script src="assets/js/contact.js"></script>
    <script src="assets/js/jquery.form.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/mail-script.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        var accordion = (function() {

            var $accordion = $('.js-accordion');
            var $accordion_header = $accordion.find('.js-accordion-header');
            var $accordion_item = $('.js-accordion-item');

            // default settings 
            var settings = {
                // animation speed
                speed: 400,

                // close all other accordion items if true
                oneOpen: false
            };

            return {
                // pass configurable object literal
                init: function($settings) {
                    $accordion_header.on('click', function() {
                        accordion.toggle($(this));
                    });

                    $.extend(settings, $settings);

                    // ensure only one accordion is active if oneOpen is true
                    if (settings.oneOpen && $('.js-accordion-item.active').length > 1) {
                        $('.js-accordion-item.active:not(:first)').removeClass('active');
                    }

                    // reveal the active accordion bodies
                    $('.js-accordion-item.active').find('> .js-accordion-body').show();
                },
                toggle: function($this) {

                    if (settings.oneOpen && $this[0] != $this.closest('.js-accordion').find('> .js-accordion-item.active > .js-accordion-header')[0]) {
                        $this.closest('.js-accordion')
                            .find('> .js-accordion-item')
                            .removeClass('active')
                            .find('.js-accordion-body')
                            .slideUp()
                    }

                    // show/hide the clicked accordion item
                    $this.closest('.js-accordion-item').toggleClass('active');
                    $this.next().stop().slideToggle(settings.speed);
                }
            }
        })();

        $(document).ready(function() {
            accordion.init({
                speed: 300,
                oneOpen: true
            });


            filter_data();

            function filter_data() {

                $('.filter_data').php('<div id="loading" style="">  </div>');
                var action = "fetch_data";

                var industry = get_filter('industry');
                var location = get_filter('location');
                var jobFunction = get_filter('jobFunction');
                var latest = get_filter('latest');
                var jobtype = get_filter('jobtype');

                $.ajax({

                    url: "./controller/fetch_data",
                    method: "POST",
                    data: {
                        action: action,
                        industry: industry,
                        location: location,
                        jobFunction: jobFunction,
                        latest: latest,
                        jobtype: jobtype
                    },
                    success: function(data) {
                        $('.filter_data').php(data);


                        let a = $('#searchload').text();
                        if (a == '' || a.trim() == '') {


                        } else {

                            $('.filter_data').hide();


                        }

                    }
                })
            }

            function get_filter(class_name) {

                var filter = [];
                $('.' + class_name + ':checked').each(function() {

                    filter.push($(this).val());

                });

                return filter;
            }

            $('.common_selector').click(function() {
                $('#searchload').php("");
                $('.filter_data').show();
                filter_data();
            })




        });

        // $('input[type="checkbox"]').on('change', function() {
        //   $('input[type="checkbox"]').not(this).prop('checked', false);
        // });

        // $('input[type="checkbox"]').on('change', function() {
        //   $(this).siblings('input[type="checkbox"]').prop('checked', false);
        // });
    </script>

</body>

</html>