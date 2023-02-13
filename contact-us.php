<?php
/**
 * Template Name: contact us
 */
get_header();?>



<!-- breadcrumb -->
<div class="mds_breadcrumb" style="background: url(assets/images/ban1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb_title ">
                    <div class="page-title-heading">
                        <h1 class="title">Contact Us</h1>
                    </div>

                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="index.html" class="text-white"><i
                                    class="fas fa-home"></i>&nbsp;&nbsp;Home</a>
                        </span>
                        <span class="seperator text-white">&nbsp; | &nbsp;</span>
                        <span class="text-theme">Contact Us</span>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<section class="pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact1">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class=" mb-3">
                                <span class="fw-bold text-red">Kathmandu</span>
                            </h2>
                        </div>
                    </div>
                    <div class="mycontact_info  a1"><span class="icon "> <i class="fa fa-phone-volume"></i></span>
                        <h6>Phone</h6>
                        <p><a
                                href="tel:905-766-9600"><?php echo $key_phone = get_post_meta( get_the_ID(), 'phone', true ); ?></a>
                        </p>
                    </div>
                    <div class="line_separator "></div>

                    <div class="mycontact_info  a1"><span class="icon "> <i class="fas fa-envelope"></i></span>
                        <h6>Email</h6>
                        <a
                            href="mailto:kathmandu@gmail.com"><?php echo $key_mail = get_post_meta( get_the_ID(), 'email', true ); ?></a>
                    </div>
                    <div class="line_separator "></div>
                    <div class="mycontact_info  a1"><span class="icon "> <i class="fas fa-map-marker-alt"></i></span>
                        <h6>Location</h6>
                        <?php echo $key_location = get_post_meta( get_the_ID(), 'location', true ); ?>
                    </div>

                    <div class="map1 pt-3">
                        <iframe src="<?php echo $key_map = get_post_meta( get_the_ID(), 'map', true );
                     ?>" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card d-flex justify-content-center mx-auto my-3 p-5">
                    <h6 class="text-muted">Get In Touch</h6>
                    <h5 class="card-title text-red fw-bold">Contact Us</h5>
                    <div class="form-row row">
                       <!-- form area -->
                       <?php echo do_shortcode('[contact-form-7 id="7" title="Contact form 1"]');?>
                </div>
            </div>

        </div>
    </div>
</section>
<?php get_footer();