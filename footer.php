<footer>
       <!-- Footer Start-->
       <div class="footer-area footer-padding">
           <div class="container">
               <div class="row d-flex justify-content-between">
                   <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                      <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                            <?php
                                $footer_group = get_field('footer_group', 'option');
                                $url = home_url();
                            ?>
                             <!-- logo -->
                            <div class="footer-logo">
                                <a href="<?php echo $url;?>"><img src="<?php echo $footer_group['footer_logo']['url']; ?>" alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p><?php echo $footer_group['topbar_address']; ?></p>
                               </div>
                            </div>
                            <!-- social -->
                            <div class="footer-social">
                                <?php
                                    
                                    foreach($footer_group['footer_social_account'] as $single_group){
                                ?>
                                        <a href="<?php echo $single_group['footer_social_link'];?>"><i class="<?php echo $single_group['footer_social_icon'];?>"></i></a>
                                <?php
                                    };
                                ?>
                            </div>
                        </div>
                      </div>
                   </div>
                   <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                                <?php if(is_active_sidebar('footer-1')){
                                    dynamic_sidebar('footer-1');
                                    } 
                                ?>
                           </div>
                       </div>
                   </div>
                   <?php if(is_active_sidebar('footer-2')){
                    ?>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <?php
                                    dynamic_sidebar('footer-2');
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php
                        } 
                    ?>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                                <?php
                                    $footer_contact = get_field('footer_contact', 'option');
                                ?>
                               <h4><?php echo $footer_contact['contact_title'];?></h4>
                               <ul>
                                    <li><a href="#"><?php echo $footer_contact['contact_number'];?></a></li>
                                    <li><a href="#"><?php echo $footer_contact['contact_email'];?></a></li>
                                    <li><a href="#"><?php echo $footer_contact['contact_address'];?></a></li>
                                </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- footer-bottom aera -->
       <div class="footer-bottom-area footer-bg">
           <div class="container">
               <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                            <?php
                                    $footer_copywrite = get_field('footer_copywrite', 'option');
                                ?>
                                <?php echo $footer_copywrite;?>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
       </div>
       <!-- Footer End-->
   </footer>

        <?php wp_footer();?>
        
    </body>
</html>