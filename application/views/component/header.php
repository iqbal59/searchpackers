<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <!-- font awesome 5 free -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Poppins font from Google -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('assets/app.css');?>">

    <link href="<?php echo base_url('assets/style.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/select2.min.css');?>" rel="stylesheet" media="all">
    <style>
    .ss-process-image1 {
        float: left;
        margin-right: 15px;
    }

    .ss-process-content .hdng1 {
        font-size: 15px;
        font-weight: 600
    }

    .ss-process-content .hdng2 {
        font-size: 13px;
        font-weight: 500
    }

    .ss-process {
        background-color: #f8f9fa;
        margin: 10px 0px;
    }

    .ss-process-item {
        position: elative;
        padding: 15px 20px;
        background: #fff;
    }

    .ss-fp-hero1 {
        padding: 15px 0px;
    }

    .ss-process-content ul li {
        font-size: 13px;
    }

    #how-it-works h2 {
        font-size: 22px;
    }

    #why-us h2 {
        font-size: 22px;
    }

    #our-services h2 {
        font-size: 22px;
    }

    .testimonial_box .lower_box p {
        font-size: 12px;
    }

    .ss-page-content h2 {
        margin: 20px 0px;
        text-align: center;
        font-size: 22px;
        font-weight: 600;
        letter-spacing: 0px;
        word-wrap: break-word;
    }

    .testimonial_box .upper_box {
        background-color: #247c77;
        color: #fff;
        padding: 15px 10px
    }

    .testimonial_box .customer_name {
        font-weight: 500;
        font-size: 16px;
    }

    .testimonial_box .lower_box span {
        float: left;
        width: 100%;
        padding: 10px;
        text-align: left;
    }

    .ss-process-customer-image {
        position: absolute;
        right: 0px;
        bottom: 0px;
        top: 50%;
        width: 101px;
        height: 101px;
    }

    @media (max-width:767.98px) {
        .ss-process-image1 {
            float: left;
            width: 100%;
            margin: 0px;
            text-align: center;
        }

        .ss-process-content .hdng1 {
            float: left;
            width: 100%;
            margin: 0px;
            text-align: center;
        }

        .ss-process-content .hdng2 {
            float: left;
            width: 100%;
            margin: 0px;
            text-align: center;
        }
    }
    </style>

    <title>SearchPackers</title>
</head>

<body>

    <?php if ($this->session->flashdata('success')): ?>
    <div class="m-b-15">
        <div class="alert alert-success alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <p>
                <i class="icon fa fa-check"></i>
                <?php echo $this->session->flashdata('success'); ?>
            </p>
        </div>
    </div>
    <?php endif; ?>

    <!--print custom error message-->
    <?php if ($this->session->flashdata('error')): ?>
    <div class="m-b-15">
        <div class="alert alert-danger alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <p>
                <i class="icon fa fa-times"></i>
                <?php echo $this->session->flashdata('error'); ?>
            </p>
        </div>
    </div>
    <?php endif; ?>
    <!--Hero ====================================== -->
    <header class="hero container-fluid border-bottom">
        <nav class="hero-nav container px-4 px-lg-0 mx-auto">
            <ul class="nav w-100 list-unstyled align-items-center p-0">
                <li class="hero-nav__item">
                    <img class="hero-nav__logo" src="assets/imgs/logo-search.png">
                </li>
                <li id="hero-menu" class="flex-grow-1 hero__nav-list hero__nav-list--mobile-menu ft-menu">
                    <ul
                        class="hero__menu-content nav flex-column flex-lg-row ft-menu__slider animated list-unstyled p-2 p-lg-0">
                        <li class="flex-grow-1">
                            <ul class="nav nav--lg-side list-unstyled align-items-center p-0">
                                <li class="hero-nav__item">
                                    <a href="#" class="hero-nav__link active"><strong>+91-9871XXXXX</strong></a>
                                </li>
                                <li class="hero-nav__item">
                                    <a href="#" class="hero-nav__link">Register your Business</a>
                                </li>
                                <li class="hero-nav__item">
                                    <a href="#" class="hero-nav__link">Agent Login</a>
                                </li>
                                <li class="hero-nav__item">
                                    <a href="#serivces" class="hero-nav__link">Services</a>
                                </li>

                                <li class="hero-nav__item">
                                    <a href="#product" class="hero-nav__link">How it Works</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <button onclick="document.querySelector('#hero-menu').classList.toggle('ft-menu--js-show')"
                        class="ft-menu__close-btn animated">
                        <svg class="bi bi-x" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd"
                                d="M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </li>
                <li class="d-lg-none flex-grow-1 d-flex flex-row-reverse hero-nav__item">
                    <button onclick="document.querySelector('#hero-menu').classList.toggle('ft-menu--js-show')"
                        class="text-center px-2">
                        <i class="fas fa-bars"></i>
                    </button>
                </li>
            </ul>
        </nav>
        <div class="hero__content container mx-auto">
            <div class="row px-0 mx-0 align-items-center">
                <div class="col-lg-6 px-0">
                    <h1 class="hero__title mb-3">
                        Most Reliable<br /><span class="highlight">TRANSPORTATION</span> &amp; Packing-Moving Solutions
                    </h1>
                    <p class="hero__paragraph mb-5">
                        Get Free Instant Quotes from Verified Packers And Movers
                    </p>
                    <div class="hero__btns-container">
                        <a class="hero__btn btn btn-primary mb-2 mb-lg-0" href="javascript:void(0)" data-toggle="modal"
                            data-target="#leadmodalwizard">
                            Get Quotes
                        </a>
                        <!-- <a class="hero__btn btn btn-secondary mx-lg-3" href="#">
              Go Premium
            </a> -->
                    </div>
                </div>
                <div class="col-lg-5 mt-5 mt-lg-0 mx-0">
                    <div class="hero__img-container">
                        <img src="assets/imgs/img-1.png" class="hero__img w-100">
                    </div>
                </div>
            </div>
        </div>
    </header>



    <div class="modal fade" id="leadmodalwizard" tabindex="-1" role="dialog" aria-labelledby="lmwizardtitle"
        aria-hidden="true">
        <div class="modal-dialog col-md-10 col-lg-6" role="document">
            <div class="modal-content ss-lm-wizard">
                <form method="post" action="<?php echo base_url('postenquiry');?>">


                    <?php  echo form_open('home/postenquiry', array('role'=>'form')); ?>
                    <input type="hidden" id="refrence_url" name="refrence_url" value="#">
                    <div class="modal-header ss-lm-wizard-header">
                        <div class="ss-lm-wizard-header-content">
                            <button type="button" class="btn-back" aria-label="Back"><i
                                    class="far fa-arrow-alt-circle-left"></i></button>
                            <div class="ss-lm-wizard-title" id="lmwizardtitle">Get Estimates</div>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><i
                                    class="far fa-times-circle"></i></button>
                        </div>
                        <div class="ss-lm-wizard-navigation">
                            <ul class="nav ss-lm-wizard-navigation-pills">
                                <li><a href="#lmmovingtype" data-toggle="tab" role="tab" aria-controls="lmmovingtype"
                                        aria-selected="true">Moving Type</a></li>
                                <li><a href="#lmmovingsize" data-toggle="tab" role="tab" aria-controls="lmmovingsize"
                                        aria-selected="true">Moving Size</a></li>
                                <li><a href="#lmmovingfrom" data-toggle="tab" role="tab" aria-controls="lmmovingfrom"
                                        aria-selected="true">Moving From</a></li>
                                <li><a href="#lmmovingto" data-toggle="tab" role="tab" aria-controls="lmmovingto"
                                        aria-selected="true">Moving To</a></li>
                                <li><a href="#lmmovingdate" data-toggle="tab" role="tab" aria-controls="lmmovingdate"
                                        aria-selected="true">Moving Date</a></li>
                                <li><a href="#lmmovingitmes" data-toggle="tab" role="tab" aria-controls="lmmovingitmes"
                                        aria-selected="true">Moving Items</a></li>
                                <li><a href="#lmservicequality" data-toggle="tab" role="tab"
                                        aria-controls="lmservicequality" aria-selected="true">Service Quality</a></li>
                                <li><a href="#lmcustomerdetails" data-toggle="tab" role="tab"
                                        aria-controls="lmcustomerdetails" aria-selected="true">Customer Details</a></li>
                            </ul>
                        </div>
                        <div class="ss-lm-wizard-progress progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                aria-valuemax="100" style="width: 12.5%;"></div>
                        </div>
                    </div>
                    <div class="modal-body ss-lm-wizard-body">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="lmmovingtype">
                                <div class="ss-lm-wizard-body-title">Where do you want to shift?</div>
                                <div class="form-group">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="lm_lead_withincity"
                                            name="lm_lead_type" value="0">
                                        <label class="custom-control-label" for="lm_lead_withincity"><span>Within
                                                City</span></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="lm_lead_outsidecity"
                                            name="lm_lead_type" value="1">
                                        <label class="custom-control-label" for="lm_lead_outsidecity"><span>Outside
                                                City</span></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="lm_lead_international"
                                            name="lm_lead_type" value="2">
                                        <label class="custom-control-label"
                                            for="lm_lead_international"><span>International</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="lmmovingsize">
                                <div class="ss-lm-wizard-body-title">What do you want to shift?</div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="lm_lead_home"
                                            name="lm_lead_needs[]" value="1">
                                        <label for="lm_lead_home"
                                            class="custom-control-label"><span>Household</span></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="lm_lead_vehicle"
                                            name="lm_lead_needs[]" value="2">
                                        <label for="lm_lead_vehicle"
                                            class="custom-control-label"><span>Car</span></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="lm_lead_vehicle2"
                                            name="lm_lead_needs[]" value="3">
                                        <label for="lm_lead_vehicle2"
                                            class="custom-control-label"><span>Bike</span></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="lm_lead_office"
                                            name="lm_lead_needs[]" value="4">
                                        <label for="lm_lead_office"
                                            class="custom-control-label"><span>Office</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="lmmovingfrom">
                                <div class="ss-lm-wizard-body-title">Moving From?</div>
                                <div class="form-group">
                                    <label for="lm_moving_from">Moving From (City)</label>
                                    <input type="text" class="form-control" id="lm_moving_from" name="lm_moving_from"
                                        placeholder="Moving From" onfocus="geolocate()" autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <label for="lm_moving_from_locality">Moving From (Locality)</label>
                                    <input type="text" class="form-control" id="lm_moving_from_locality"
                                        name="lm_moving_from_locality" placeholder="Moving From (Locality)">
                                </div>
                            </div>
                            <div class="tab-pane" id="lmmovingto">
                                <div class="ss-lm-wizard-body-title">Moving To (Destination)?</div>
                                <div class="form-group">
                                    <label for="lm_moving_to">Moving To (City)</label>
                                    <input type="text" class="form-control" id="lm_moving_to" name="lm_moving_to"
                                        placeholder="Moving To" required>
                                </div>
                                <div class="form-group">
                                    <label for="lm_moving_to_locality">Moving To (Locality)</label>
                                    <input type="text" class="form-control" id="lm_moving_to_locality"
                                        name="lm_moving_to_locality" placeholder="Moving To (Locality)">
                                </div>
                            </div>
                            <div class="tab-pane" id="lmmovingdate">
                                <div class="ss-lm-wizard-body-title">When do you want to move?</div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control ss-lm-datepicker" id="lm_lead_moving_date"
                                        name="lm_lead_moving_date">
                                    <div class="docs-datepicker-container ss-lm-wizard-datepicker-container"></div>
                                </div>
                            </div>
                            <div class="tab-pane" id="lmmovingitmes">
                                <div class="ss-lm-wizard-body-title">Mention Your Items List</div>
                                <div class="form-group">
                                    <label for="lm_moving_items">Moving Items (Optional)</label>
                                    <textarea class="form-control" id="lm_moving_items" name="lm_moving_items"
                                        placeholder="What items you would like to move?" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="lmservicequality">
                                <div class="ss-lm-wizard-body-title">Service Quality</div>
                                <div class="form-group">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input"
                                            id="lm_service_quality_economical" name="lm_service_quality" value="0">
                                        <label class="custom-control-label"
                                            for="lm_service_quality_economical"><span>Economical - Normal
                                                Quality</span></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input"
                                            id="lm_service_quality_superior" name="lm_service_quality" value="1">
                                        <label class="custom-control-label"
                                            for="lm_service_quality_superior"><span>Premium- Superior
                                                Quality</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="lmcustomerdetails">
                                <div class="ss-lm-wizard-body-title">Your Details</div>
                                <div class="form-group">
                                    <label for="lm_lead_name">Your Name</label>
                                    <input type="text" class="form-control" id="lm_lead_name" name="lm_lead_name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="lm_lead_phone">Phone Number</label>
                                    <input type="tel" class="form-control" id="lm_lead_phone" name="lm_lead_phone"
                                        placeholder="Phone Number" required>
                                </div>
                                <div class="form-group">
                                    <label for="lm_lead_email">Email Address</label>
                                    <input type="email" class="form-control" id="lm_lead_email" name="lm_lead_email"
                                        placeholder="Email Address">
                                </div>
                                <div class="ss-lm-accept">
                                    <span>By submitting request, you accept our <a href="#" target="_blank"
                                            rel="noopener">Terms & Conditions</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer ss-lm-wizard-footer">
                        <div class="float-right">
                            <button type="button" class="btn btn-next">Next</button>
                            <button type="submit" class="btn btn-submit" name="lm_submit">Submit</button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
            </div>
        </div>
    </div>