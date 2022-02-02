<?php get_header();?>

<!-- Testimonial -->
<?php get_template_part('template-part/content','bredcumb');?>

<section class="custom-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4><?php the_title();?></h4>
                <?php the_content();?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>