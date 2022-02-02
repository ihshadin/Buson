<?php
/* 
Template Name: About Page
*/
get_header();
?>
<main>

    <!-- Testimonial -->
    <?php get_template_part('template-part/content','bredcumb');?>

    <!-- About Trusted -->
    <?php get_template_part('template-part/content','about');?>
    
    <!-- Testimonial -->
    <?php get_template_part('template-part/content','testimonial');?>

    <!-- Blog -->
    <?php get_template_part('template-part/content','blog');?>

</main>
<?php get_footer();?>