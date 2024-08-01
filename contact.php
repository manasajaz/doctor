<?php include('includes/header.php'); ?>

<!-- START PRELOADER -->
<div id="page-preloader">
    <div class="preloader-wrench"></div>
</div>
<!-- END PRELOADER -->

<?php include('includes/navbar.php'); ?>

<!-- START PAGE BANNER AND BREADCRUMBS -->
<section class="single-page-title-area" data-background="assets/images/heading.png">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="single-page-title">
                    <h2>Contact Us Page</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><span class="lnr lnr-home"></span></a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- end row-->
    </div>
</section>
<!-- END PAGE BANNER AND BREADCRUMBS -->

<!-- GOOGLE MAP -->
<div class="gmap_canvas">
    <iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14473.974521836442!2d67.02231131504881!3d24.915248357041275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33fbd469d9bcd%3A0x749325c6e39952f3!2sNazimabad%2C%20Karachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1722534870007!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <!-- <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=10004%2C%20Battery%20Park%2C%20New%20York%2C%20USA%20&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe> -->
</div>
<!-- END GOOGLE MAP -->

<!-- START CONTACT SECTION -->
<section id="contact" class="section-padding">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="contact-title">
                    <h4>You Have Any question? Simply Send Us Message</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                    <hr>
                </div>
                <div class="contact-form mt-4">
                    <form id="contact-form" class="form" name="enq" method="POST" action="send.php">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Name</label>
                                <span class="form-icon"><i class="icofont icofont-user-alt-5"></i></span>
                                <input name="name" class="form-control form-controlb" id="cname" required="required" type="text">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Email</label>
                                <span class="form-icon"><i class="icofont icofont-envelope"></i></span>
                                <input name="email" class="form-control form-controlb" id="cmail" required="required" type="email">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Number</label>
                                <span class="form-icon"><i class="icofont icofont-telephone"></i></span>
                                <input name="phone" class="form-control form-controlb" id="cnumber" required="required" type="text">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Subject</label>
                                <span class="form-icon"><i class="icofont icofont-ui-email"></i></span>
                                <input name="subject" class="form-control form-controlb" id="csubject" required="required" type="text">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea rows="6" name="message" class="form-control" id="cmessage" placeholder="Your Message Here..." required="required"></textarea>
                            </div>
                            <div class="form-group col-lg-12 mb0">
                                <div class="actions">
                                    <input value="Submit Message" name="submit" id="submitButton" class="btn btn-lg btn-contact-bg" title="Click here to submit your message!" type="submit">
                                    <img src="assets/images/ajax-loader.gif" id="loader" style="display:none" alt="loading" width="16" height="16">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 pl-lg-5 pl-md-5 pl-sm-2 pl-2 mt-lg-0 mt-md-0 mt-sm-3 mt-3">
                <div class="contact-title">
                    <h4>Get In Touch</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, na aliqua.</p>
                    <hr>
                </div>
                <div class="address-box mt-4">
                    <div class="single-address-box mb-3">
                        <span>Address:</span>
                        <p>10004, Battery Park, <br> New York, USA </p>
                    </div>
                    <div class="single-address-box mb-3">
                        <span>Phone & Fax:</span>
                        <p>+88-675-128763 </p>
                        <p>+88-675-128763 </p>
                    </div>
                    <div class="single-address-box">
                        <span>Inquires:</span>
                        <p>info@your_site.com</p>
                        <p>info@your_site.com</p>
                    </div>
                </div>
                <div class="free-quote-box mt-4">
                    <h6>Ask question</h6>
                    <h3>Support is ready</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy. </p>
                    <a href="#">Free quote <i class="icofont icofont-simple-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END CONTACT SECTION -->

<!-- SINGLE DOCTOR PROMO -->
<div class="single-doc-promo bg-theme mt-lg-5 mt-md-3 mt-sm-3 mt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="single-doc-promo-box-img">
                    <img class="img-fluid" src="assets/images/doc-promo.png" alt="">
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                <div class="single-doc-promo-box">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="single-doc-promo-content">
                                <h5>If you need any home service</h5>
                                <p>Feel free to call us 24hr emergency number</p>
                                <a href="#"><i class="icofont icofont-phone"></i>+88 315 67 39</a>
                            </div>
                        </div>
                        <div class="col-lg-3 mt-4">
                            <a href="#" class="single-doc-promo-btn fadeInUp animated">Call Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SINGLE DOCTOR PROMO -->

<?php include('includes/footer.php'); ?>