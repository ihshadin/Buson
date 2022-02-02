<?php get_header();?>
<main>
    
    <!-- Testimonial -->
    <?php get_template_part('template-part/content','bredcumb');?>

    <!-- Services Details Start -->
    <div class="services-details section-padding2">
        <div class="container">
            <div class="row">
                <div class="offset-xl-12">
                    <div class="s-detailsImg">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/gallery/services_details.jpg" alt="">
                    </div>
                </div>
                <div class="offset-xl-12">
                    <div class="s-details-caption">
                        <?php the_content();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Details End -->
</main>
<?php get_footer();?>