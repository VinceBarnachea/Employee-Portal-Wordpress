<?php get_header();?>
<?php
    if(have_posts()):while(have_posts()):the_post();   
?>

<style>
    .branches-banner-section{
        background-image: url('<?php echo the_post_thumbnail_url()?>');
        background-repeat: no-repeat;
    }
@media only screen and (max-width: 1023px) {
    .branches-banner-section{
        background-image: none;
        /* background-repeat: no-repeat;
        background-size: 100%;
        background-position: bottom; */
    }
}


</style>

<section class="branches-banner-section">
    
        <div class="contact-us-banner-col2-content">
            <h2 class="contact-us-banner-title">Get in touch with us</h2>
            <div class="contact-us-banner-paragraph">Feel free to contact us any time.  We'll get back to you as soon as we can.</div>

            <div class="select-branch-container">
                <select name="" id="select-branch">
                    <?php
                        $branch = new WP_Query([
                            'post_type'     =>      'branches',
                            'orderby'       =>      'name',
                            'order'         =>      'ASC',
                        ]);
                    ?>
                    <option value="https://soledestinations.com/contact-us/">Please select a branch</option>
                    <?php
                        if($branch->have_posts()){
                            while($branch->have_posts()){
                                $branch->the_post();?>

                    
                    <option value = "<?= the_permalink()?>"><?= the_title();?></option>
                    <?php
                            }
                        }
                    
                    ?>
                    <?php wp_reset_postdata();?>  
                </select>
                <div class="select-branch-icon-container">
                    <i class="fa-solid fa-angle-down"></i>
                </div>
            </div>
        </div>
</section>


<section class = "branch-contact-form-section">
    <div class="row branch-contact-form-row">
        <div class="col-lg-5 col-xs-12 branch-contact-form-col1">
            <img src="<?php echo get_field('branch_form_banner')?>" alt="" srcset="">
        </div>
        <div class="col-lg-7 col-xs-12 branch-contact-form-col2">
            <div class="branch-contact-form-container">
                <div class="branch-contact-form-title-container">
                    <h2 class="branch-contact-form-header"><?= the_title();?></h2>
                    <div class="branch-contact-form-paragraph">Need help? Feel free to drop us a line below.</div>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="278" title="Contact Us Page Form"]');?>
            </div>
        </div> 
    </div>
</section>

<?php
    if(have_rows('contact_information_fields')):
        while(have_rows('contact_information_fields')):the_row();
        $branchEmail = get_sub_field('email_address');
?>
<section class="branch-contact-details">
    <div class="row branch-contact-details-row">
        <div class="col-lg-6 col-xs-12 branch-contact-details-col">
            <div class="branch-contacts-container">
                <div class="branch-contact-icon">
                    <img src="https://soledestinations.com/wp-content/uploads/2023/10/Path-1695.png" alt="" srcset="">
                </div>
                <div class="branch-contact-content">
                    <span class="branch-contact-title">Contact Number</span>
                    <?php
                        if(have_rows('contact_numbers_repeater')):       
                    ?>
                    <div class="branch-contact-list row">
                        <?php while(have_rows('contact_numbers_repeater')):the_row();
                            $contact_numbers = get_sub_field('contact_number');
                        ?>
                        <div class="col-lg-6 col-xs-12 branch-contact-numbers"><?= $contact_numbers?></div>
                        <?php endwhile;?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12 branch-contact-details-col">
            <div class="branch-contacts-container">
                <div class="branch-contact-icon">
                    <img src="https://soledestinations.com/wp-content/uploads/2023/10/Group-1993.png" alt="" srcset="">
                </div>
                <div class="branch-contact-content">
                    <span class="branch-contact-title">Email</span>
                   
                    <div class="branch-contact-list">
                       
                        <div class="branch-contact-email"><?= $branchEmail?></div>
                       
                    </div>
           
                </div>
            </div>
        </div>
    </div>
</section>
<?php
        endwhile;
    endif;
?>

<section class="branch-iframe-container">
    <iframe class = "find-us-map" src="<?php echo get_field('sole_branch_iframe_source')?>" frameborder="0">
    </iframe>
</section>


<?php
   require(get_template_directory() . '/page-parts/travel-partners.php');
?>

<?php
    endwhile;
endif;
?>
<?php get_footer();?>