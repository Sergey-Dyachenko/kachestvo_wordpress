<?php get_header(); ?>
        <div class="post-wrap">
            <div class="container" > 
                <?php if (have_posts()):while(have_posts()): the_post() ;?>
                        <div class="post-main">
                            <h1><? the_title() ;?></h1>
                             <div class="post">
                               <?php the_content() ;?> 
                             </div><!--end post-->
                        </div><!--end post-name-->
                     	<?php endwhile;?> 
                <?php   endif ;?>   
            </div> 
         </div>         
                     
<?php get_footer(); ?>