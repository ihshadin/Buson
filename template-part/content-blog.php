
<!-- Recent Area Start -->
<div class="recent-area section-paddingt">
    <div class="container">
        <!-- section tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <h2><?php echo esc_html__('Our Recent News', 'buson'); ?></h2>
                </div>
            </div>
        </div>
        <div class="row">

            <?php
                $args = array(
                    'post_type' => 'post',
                    'post_per_page' => 3
                );
                $query = new WP_Query($args);
                while($query->have_posts()){
                    $query->the_post();
            ?>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-recent-cap mb-30">
                        <div class="recent-img">
                            <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title();?>">
                        </div>
                        <div class="recent-cap">
                            <span>
                                <?php
                                    $cats = get_the_category();
                                    foreach($cats as $cat) {
                                        echo $cat->name. ', ';
                                    }
                                ?>
                            </span>
                            <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                            <p><?php echo get_the_date('M, d, Y');?></p>
                        </div>
                    </div>
                </div>
            <?php
                }
                wp_reset_postdata();
            ?>
        </div>
    </div>
</div>
<!-- Recent Area End-->
