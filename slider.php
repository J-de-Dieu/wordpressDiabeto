<!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">
        
          <?php
            $recent_posts = wp_get_recent_posts(array(
                'numberposts' => 3,
                'post_status' => 'publish',
                'category__not_in' => array( 8 )
            ));
            $i = 1;
            foreach($recent_posts as $post) : ?>
                 <?php if ( $i == 1 ) : ?>
                   <div class="carousel-item active" style="background-image: url(<?php echo get_theme_file_uri('assets/img/slide/slide-'.$i.'.jpg'); ?>);">
           
                       <div class="container">
                    
                           <h2 class="font-weight-bold titre"><?php echo $post['post_title'] ?></h2>
                            <p class="font-weight-light">
                                <?php 
                                    echo wp_trim_words( $post['post_content'], 20, '...' );
                                ?>
                            </p>
                            <a href="<?php echo get_permalink($post['ID']) ?>" class="btn-get-started scrollto bouton">Lire plus</a>
               
                       </div>
                   </div>
                 <?php else : ?>
                     <div class="carousel-item" style="background-image: url(<?php echo get_theme_file_uri('assets/img/slide/slide-'.$i.'.jpg'); ?>);">
           
                       <div class="container">
                   
                           <h2 class="font-weight-bold titre"><?php echo $post['post_title'] ?></h2>
                            <p class="font-weight-light">
                                <?php 
                                    echo wp_trim_words( $post['post_content'], 20, '...' );
                                ?>
                            </p>
                            <a href="<?php echo get_permalink($post['ID']) ?>" class="btn-get-started scrollto bouton">Lire plus</a>
               
                       </div>
                   </div>
                 <?php endif; ?>
                  
         <?php $i++; endforeach; wp_reset_query(); ?>
        <!-- Slide 1 -->
        <!--<div class="carousel-item active" style="background-image: url(<?php //echo get_theme_file_uri('assets/img/slide/slide-1.jpg'); ?>);">
          <div class="container">
            <h2>Welcome to <span>Medicio</span></h2>
            <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel.</p>
            <a href="#about" class="btn-get-started scrollto">Lire plus</a>
          </div>
        </div>-->

        <!-- Slide 2 -->
        <!--<div class="carousel-item" style="background-image: url(<?php echo get_theme_file_uri('assets/img/slide/slide-2.jpg'); ?>);">
          <div class="container">
            <h2>Lorem Ipsum Dolor</h2>
            <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel.</p>
            <a href="#about" class="btn-get-started scrollto">Lire plus</a>
          </div>
        </div>-->

        <!-- Slide 3 -->
        <!--<div class="carousel-item" style="background-image: url(<?php echo get_theme_file_uri('assets/img/slide/slide-3.jpg'); ?>);">
          <div class="container">
            <h2>Sequi ea ut et est quaerat</h2>
            <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel.</p>
            <a href="#about" class="btn-get-started scrollto">Lire plus</a>
          </div>
        </div>-->

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- Fin Hero -->