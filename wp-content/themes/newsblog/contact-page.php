<?php get_header(); ?>
<?php /* Template Name: Conatct Page */?>
<div class="w3l-contact-10 py-5" id="contact">
    <div class="form-41-mian pt-lg-4 pt-md-3 pb-md-4">
        <div class="container">
            <div class="heading">
                <h3 class="category-title mb-3">Contact us </h3>
                <p class="mb-md-5 mb-4">If you have a question regarding our services, feel free
                    to contact us using the form below.</p>
            </div>
            <div class="row">
                <div class="col-lg-8 form-inner-cont">
                   <?php the_content();?>
</div>

                <div class="col-lg-4 contacts-5-grid-main section-gap mt-lg-0 mt-5">
                    <div class="contacts-5-grid">
                        <h3 class="section-title-left mb-4"> Advertise with us</h3>
                        <div class="map-content-5">
                        <?php
                    $address = get_post_meta(get_the_ID(), 'address_info', true);
                      $phone_num = get_post_meta(get_the_ID(), 'phone_num', true);
                      $Email = get_post_meta(get_the_ID(), 'Email', true);
                     
                      ?>
                            <section class="tab-content">
                                <div class="contact-type">
                                    <div class="address-grid mb-4">
                                        <h6>Address</h6>
                                        <p><?php echo esc_html($address)?></p>
                                    </div>
                                    <div class="address-grid mb-4">
                                        <h6>Email Address</h6>
                                        <a href="mailto:mail@example.com" class="link1"><?php echo esc_html($Email)?></a>

                                    </div>
                                    <div class="address-grid">
                                        <h6>Phone Number</h6>
                                        <a href="tel:+12 324-016-695" class="link1"><?php echo esc_html($phone_num)?></a>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //contacts-5-grid -->
    </div>
</div>

<div class="contacts-sub-5">
    <?php 
$google = get_post_meta(get_the_ID(), 'Google', true);
?>
<?php echo ($google)?>
        
</div

<?php get_footer();?>