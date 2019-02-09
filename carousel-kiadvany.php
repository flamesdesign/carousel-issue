<div class="carousel-wrapper kiadvany">
    <div class="card">
     <h2 class="redlabel"><?php wts_kiadvanyok_text(); ?></h2>

        <div id="myCarousel" class="carousel slide" data-ride="carousel"> 

            <div class="carousel-inner" role="listbox">

           <!--LOOP ACTIVE ITEMS-->      

            <?php wp_reset_postdata();

             $the_query = new WP_Query(array(
                        'post_type' => 'kiadvany_box', 
                        'posts_per_page' => 1 
                        )); 
        ?>

              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="carousel-item active">
                    <h4 class="card-title"><?php the_title(); ?></h4>
                    <p><?php the_field('leiras'); ?></p>
                    <a href="<?php the_field('link'); ?>" class="readmore"><i class="fas fa-angle-right"></i><?php readmore_text(); ?></a>
                </div><!--item-active--> 
                <?php endwhile; wp_reset_postdata(); ?>

        <!--LOOP ITEMS-->    
              <?php  
               $the_query = new WP_Query(array(
                        'post_type' => 'kiadvany_box', 
                        'posts_per_page' => 5, 
                        'offset' => 1 
                        )); 

            ?>       

                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                   <div class="carousel-item">
                            <h4 class="card-title"><?php the_title(); ?></h4>
                             <p><?php the_field('leiras'); ?></p>
                            <a href="<?php echo home_url(); ?><?php the_field('link'); ?>" class="readmore"><i class="fas fa-angle-right"></i><?php readmore_text(); ?></a>
                </div><!--item-active-->
                <?php endwhile; wp_reset_postdata(); ?>

        </div>  

           <div class="carousel-control-wrapper hidden">
           <a class="carousel-control-prev" data-target="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" data-target="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>  
        
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
          </ol>
        
    </div> <!--card--> 
</div><!--carousel-wrapper-->
