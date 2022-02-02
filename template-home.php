<?php
/* 
Template Name: Home Page
*/
get_header();
?>
<main>
    <!-- slider Area Start-->
    <div class="slider-area ">
        <div class="slider-active">

            <?php
                $args = array(
                    'post_type' => 'slider',
                    'posts_per_page' => 3
                );
                $query = new WP_Query($args);
                while($query->have_posts()){
                    $query->the_post();

                    $slider_subtitle = get_field('slider_subtitle');
                    $slider_button_text = get_field('slider_button_text');
                    $slider_button_url = get_field('slider_button_url');

            ?>
                    <div class="single-slider slider-height d-flex align-items-center" style="background-image:url('<?php the_post_thumbnail_url(); ?>')">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-10 mx-auto">
                                    <div class="hero__caption">

                                        <?php
                                            if($slider_subtitle){
                                        ?>
                                            <p><?php echo $slider_subtitle; ?></p>
                                        <?php
                                            }
                                        ?>
                                        <h1><?php the_title();?></h1>
                                        <!-- Hero-btn -->
                                        <div class="hero__btn">

                                        <?php
                                            if($slider_button_text){
                                        ?>
                                            <a href="<?php the_field('slider_button_url'); ?>" class="btn hero-btn"><?php the_field('slider_button_text'); ?></a>
                                        <?php
                                            }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
                wp_reset_postdata();
            ?>
        </div>
    </div>
    <!-- slider Area End-->

    <!-- About Trusted -->
    <?php get_template_part('template-part/content','about');?>

    <!-- services Area -->
    <?php get_template_part('template-part/content','services');?>

    <!-- Request Back Start -->
    <div class="request-back-area section-padding30">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-8 mx-auto text-center">
                    <div class="request-content">
                        <?php
                            $callback_title = get_field('callback_title', 'option');
                            $callback_desc = get_field('callback_desc', 'option');
                            $cb_button_text = get_field('cb_button_text', 'option');
                            $cb_button_url = get_field('cb_button_url', 'option');
                        ?>
                        <h3><?php echo $callback_title;?></h3>
                        <p><?php echo $callback_desc;?></p>
                        <a href="<?php echo $cb_button_url;?>" class="btn trusted-btn"><?php echo $cb_button_text;?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Request Back End -->
    
    <!-- Completed Cases Start -->
    <div class="completed-cases section-padding3">
        <div class="container">
            <div class="row">
                <!-- slider Heading -->
                <div class="col-xl-4 col-lg-4 col-md-8">
                    <div class="single-cases-info mb-30">
                    <?php
                        $caseinfo_title = get_field('caseinfo_title', 'option');
                        $caseinfo_desc = get_field('caseinfo_desc', 'option');
                        $ci_button_text = get_field('ci_button_text', 'option');
                        $ci_button_url = get_field('ci_button_url', 'option');
                    ?>
                    <h3><?php echo $caseinfo_title;?></h3>
                    <p><?php echo $caseinfo_desc;?></p>
                    <a href="<?php echo $ci_button_url;?>" class="btn trusted-btn"><?php echo $ci_button_text;?></a>
                    </div>
                </div>
                <!-- OwL -->
                <div class="col-xl-8 col-lg-8 col-md-col-md-7">
                    <div class=" completed-active owl-carousel"> 

                        <?php
                            $args = array(
                                'post_type' => 'case',
                                'post_per_page' => 2
                            );
                            $query = new WP_Query($args);
                            while($query->have_posts()){
                                $query->the_post();

                                $sub_title = get_field('case_subtitle');
                        ?>
                            <div class="single-cases-img">
                                <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                                <!-- img hover caption -->
                                <div class="single-cases-cap">
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
                                    <?php the_excerpt(); ?>
                                    <?php
                                        if($sub_title){
                                    ?>
                                        <span><?php echo $sub_title; ?> </span>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>

                        <?php
                            }
                            wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Completed Cases end -->

    <!-- Teams -->
    <?php get_template_part('template-part/content','team');?>

    <!-- testimonial -->
    <?php get_template_part('template-part/content','testimonial');?>

    <!-- blog -->
    <?php get_template_part('template-part/content','blog');?>

</main>
<?php get_footer();?>