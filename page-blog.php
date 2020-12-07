<?php get_template_part('header'); ?>
<div class="row pt-5 mt-5">
    <!--<div class="col-md-4 col-sm-4 col-lg-4 col-12 pt-5"></div>
    <div class="col-md-4 col-sm-4 col-lg-4 col-12 pt-5"></div>
    <div class="col-md-4 col-sm-4 col-lg-4 col-12 pt-5"></div>-->
</div>
<article class="container box mt-5 mb-5">
    <div class="row p-3">
        <?php $query = new WP_Query( array(
            'p' => $_GET['b'],
			/*'category_name'   => 'blog'
            'posts_per_page' => 1
			'paged' => $paged*/
		      ) ); ?>
         <div class="col-md-12">
           <?php while($query->have_posts()) : $query->the_post(); ?>
             <h1 class="pt-3">
                 <?php the_title(); ?>
             </h1>
             <p class="datetime">
                <time datetime="2020-11-25T11:56:55+01:00">
                    Publié : <?php the_time('l j F Y'); ?>
                    <!--<svg aria-hidden="true" height="14" width="14"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#symbol-clock2"></use></svg>Publié le 25/11/20 à 11h56-->
                </time>
   <!--  —&nbsp;<time datetime="2020-11-25T11:56:55+01:00">Mis à jour le 25/11/20 à 11h56</time>  -->
             </p>
           <?php endwhile; ?> 
           <?php wp_reset_postdata(); ?>
             <!--Coronavirus en Paca : Les infirmiers vont finalement pouvoir reprendre les cours-->
         </div>
    </div>
    
    <div class="row p-3">
        <div class="col-md-8">
            <div class="row">
                <?php $query = new WP_Query( array('p' => $_GET['b'] ) ); ?>
                <?php while($query->have_posts()) : $query->the_post(); ?>
                <div class="col-md-12">
                    <?php  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                    <!--<img class="img-fluid" src="https://img.20mn.fr/LGYxVOuDSCeWySsghiBW-Q/960x614_pecheur-dakar-senegal.jpg">-->
                    <img class="img-fluid" src="<?php echo $url; ?>">
                </div>
                <?php endwhile; ?> 
                <?php wp_reset_postdata(); ?>
            </div>
        </div> 
        
        <div class="col-md-4">
             <div class="blo">
                 <p class="block-title font-weight-bold p-2" style="color:white;">À lire aussi</p>
             </div>
             
             <aside class="row">
                  <?php 
                    $not = $_GET['b'];
                    $query = new WP_Query( array(
                            'post__not_in' => array($not),
                            'category_name'   => 'blog',
                            'posts_per_page' => 3
                         ) ); ?>
                 <div class="col-md-12">
                      <ul class="list-group list-group-flush pt-4">
                          <?php while($query->have_posts()) : $query->the_post(); ?>
                          <li class="list-group-item hov pb-0" id="list-group-item">
                              
                              <?php
                                 $id_blog = get_the_ID();
                                 $edit_post = add_query_arg('b', $id_blog, get_permalink( get_page_by_path( 'blog' ) ));
                              ?>
                              <a href="<?php echo $edit_post; ?>">
                                   <div class="row">
                                   <figure class="media col-md-6">
                                      <div class="media-wrap">
                                          <?php  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                          
                                          <img width="120" height="78" class="img-responsive img-thumbnail" src="<?php  echo $url ?>"  alt="Fusce Aliquam">
                                          
                                      </div>
                                   </figure>
                                   <div class="col-md-6">
                                       <p class="font-weight-light" style="font-size:12px;">  
                                           <?php the_time('l j F Y'); ?>
                                       </p>
                                      <p class="font-weight-light" style="font-size:11px;"><?php echo wp_trim_words( get_the_content(), 8, '...' ); ?></p>
                                   </div>
                                  </div>
                              </a>
                             
                          </li>
                          
                          
                          <?php endwhile; ?> 
                          <?php wp_reset_postdata(); ?>
                      </ul>
                 </div>
           </aside>
        </div>    
    </div>
    
        <div class="row p-3 pb-5 mt-4">
                     <?php $query = new WP_Query( array('p' => $_GET['b'] ) ); ?>
                     <?php while($query->have_posts()) : $query->the_post(); ?>
                     <div class="col-md-12">
                        <?php the_content(); ?>   
                     </div>
                     <?php endwhile; ?> 
                     <?php wp_reset_postdata(); ?>   
        </div>

        
</article>
<?php get_footer(); ?> 