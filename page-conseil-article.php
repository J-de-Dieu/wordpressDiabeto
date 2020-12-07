<?php get_template_part('header'); ?>
<?php get_template_part('slider'); ?> 

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <!--<div class="input-group mb-5 mt-5">-->
                <?php 
                
                    add_filter( 'get_search_form', 'mon_formulaire_recherche_1' );
                    get_search_form();
                    remove_filter( 'get_search_form', 'mon_formulaire_recherche_1' );

                ?>
              <!--<input type="text" class="form-control input-recherche" placeholder="Recherche" aria-label="Recherche" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary bouton-recherche" type="button">Recherche</button>
              </div>-->
            <!--</div>-->
        </div>
    </div>
     
     
   <div class="row">
       
     <?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
     <?php $query = new WP_Query( array(
			'category_name'   => 'blog',
            'posts_per_page' => 3,
			'paged' => $paged
		      ) ); ?>
        <!-- the loop -->
        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="item col-xs-4 col-lg-4 mb-5">
                <div class="thumbnail card">
                     <div class="img-event">
                          <?php  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                          <img class="group list-group-image img-fluid" src="<?php echo $url; ?>" alt="" />
                     </div>
                    <div class="caption card-body">
                            <?php
                                $id_blog = get_the_ID();
                                $edit_post = add_query_arg('b', $id_blog, get_permalink( get_page_by_path( 'blog' ) ));
                            ?>
                            <h4 class="group card-title inner list-group-item-heading titre">
                                <div class="tronquer titre hevor" title="<?php the_title(); ?>">
                                <a href="<?php echo $edit_post; //get_permalink(get_page_by_path( 'blog' )); ?>">
                                  <?php the_title(); ?>
                                </a>
                                </div>
                            </h4>
                        
                        <p class="group inner list-group-item-text font-weight-light text-justify">
                                   <!-- Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. -->
                                    <?php //echo wp_trim_words( get_the_content(), 13, '...' ); ?>
                                    <?php 
                            
                                        $excerpt = get_the_excerpt(); 
 
                                        $excerpt = substr( $excerpt, 0, 35 ); // Only display first 260 characters of excerpt
                                        //$result = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
                                        echo $excerpt.'...';
                                        //echo $result;
                                      //the_excerpt(); 
                                    ?>
                        </p>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <!--<p class="lead">
                                            $21.000
                                        </p>-->
                                    </div>
                                    <div class="col-xs-12 col-md-6 pl-5">
                                        <a class="btn btn-success" href="<?php echo $edit_post; //get_permalink(get_page_by_path( 'blog' )); ?>">Lire plus</a>
                                    </div>
                                </div>
                    </div>
                
                <?php //the_excerpt(); ?>
                <?php //the_content(); ?>
                </div>
            </div>
        <?php endwhile;
       
             //montheme_pagination();
             //echo paginate_links();
            /*function aquila_pagination(){

                  $allowed_tags = [
                      'span' => [
                           'class' => []
                       ],
                      
                       'a' => [
                            'class' => [],
                            'href' => [],
                        ]
                  ];

              $args = [
                   'before_page_number' => '<span class="bon border border-secondary mr-2 mb-2">',
                   'after_page_number' => '</span>',
              ];
                
                
                var_dump($args);

                printf('<nav class="Aquila-pagination clearfix" >%s</nav>', wp_kses( paginate_links($args), $allowed_tags ) );
            }

            aquila_pagination();*/
       
            echo paginate_links( array(
            'total' => $query->max_num_pages,
            'mid_size' => 2,
            /*'before_page_number' => '<li class="page-item" ><a class="page-link">',
            'after_page_number' => '</a></li>',*/
            'prev_text' => __( '<', 'textdomain' ),
            'next_text' => __( '>', 'textdomain' )
             ));
             
            /*the_posts_pagination( array(
                'total' => $query->max_num_pages,
                'mid_size'  => 2,
                'prev_text' => __( '<', 'textdomain' ),
                'next_text' => __( '>', 'textdomain' ),
            ) );*/
        
        //next_posts_link( __( 'Older Entries', 'textdomain' ), $the_query->max_num_pages );
        //previous_posts_link( __( 'Newer Entries', 'textdomain' ) );
        wp_reset_postdata();
 else : ?>
 <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
 <?php endif; ?>
     
   </div>
     
</div>


<?php get_footer(); ?> 