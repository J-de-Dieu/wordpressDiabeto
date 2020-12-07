<?php get_template_part('header'); ?>
<?php get_template_part('slider'); ?> 
<section class="ftco-section">
         <div class="container">
              <div class="row">
                   <div class="col-lg-8 ftco-animate">

               <?php 
					  if($wp_query->found_posts)
						 echo '<h2 class="mb-3">Résultat de la recherche pour: '. urldecode(substr($query_string,2)).'</h2>';
					  else
						 echo "<h2>L'article que vous recherchez n'existe pas!!!</h2>";
				?>
			   
				<?php
					  wp_parse_str($query_string, $search_query );

						if ( have_posts() ) {

							while (have_posts() ) {
								
								the_post();
								get_template_part( 'content', 'search' );
									
							}
							echo '<p>Le nombre d\'articles trouvés est:'.$wp_query->found_posts.'</p>'; 
							the_posts_navigation();

						} else {
							// no posts found
						}
			  ?>
                           
                  </div>
                  
                  <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
                <?php 
	              get_search_form();
	            ?>
              
            </div>
            <div class="sidebar-box ftco-animate">
            	<h3>Catégorie</h3>
              <ul class="categories">
                <?php 
                  
                  
                    $categories = get_categories();
                   
                    foreach($categories as $category) {
                        $count = $category->category_count;
                        echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '<span>('.$count.')</span></a></li>';
                    }
                  
                ?>
              </ul>
            </div>
                      
            
            
             <div class="sidebar-box ftco-animate mb-4">
              <h5>Popular Articles</h5>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h6 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h6>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 25, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h6 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h6>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 25, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                <div class="text">
                  <h6 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h6>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 25, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
                      
                   
               <!--<div class="sidebar-box ftco-animate">
              <h3>Articles Populaires</h3>-->
              <?php 
                   
                    //$query_args = array( 
						//'cat' => array(19),
                        /*'post_type' => 'post',
                        'posts_per_page' => 3
                    
                    );
                    $myQuery = new WP_Query($query_args);*/

                    // Vérifiez que nous avons trouvé des $elements à afficher
                   /* if ($myQuery->posts) {
                        foreach ($myQuery->posts as $key => $elements) {
                         ?>
                          <?php if($elements->comment_count >=1) : ?>
                          <div class="block-21 mb-4 d-flex">
                              <?php  $url = wp_get_attachment_url( get_post_thumbnail_id($elements->ID) ); ?>
                              <a class="blog-img mr-4" style="background-image: url('<?php echo $url; ?>');"></a>
                              <div class="text">
                                  <h3 class="heading">
                                      <a href="#">
                                             <?php echo $elements->post_title; ?>
                                      </a>
                                  </h3>
                                  <div class="meta">
                                      
                                      <?php
		                                 $edit_post = add_query_arg('c', $elements->post_date, 'http://localhost:8888/THEME/article/' );
                                      ?>
                                      <div>
                                          <a href="<?php echo $edit_post; ?>">
                                              <span class="icon-calendar"></span>
                                              <?php echo $elements->post_date; ?>
                                              
                                          </a>
                                      </div>
                                      <div><span class="icon-person"></span><?php echo $elements->post_author; ?></div>
                                      <div><span class="icon-chat"></span><?php echo $elements->comment_count; ?></div>
                                  </div>
                              </div>
                          </div>
                         <?php endif; ?>
                         <?php
                        }
                    }else{
                        echo 'No results!'; die;
                    }*/
              ?>
                
                
            <!--</div>-->
              

            <div class="sidebar-box ftco-animate">
              <h3>Tag</h3>
              <ul class="tagcloud m-0 p-0">  
                  <?php
                    
                    $tags = get_tags();
                    $total = count($tags);
                    
                    for($i=0; $i<$total; $i++){
					   echo '<a href="'. get_tag_link($tags[$i]->term_id) .'" class="tag-cloud-link">'.($tags[$i]->name).'</a>';
                    }
                    
                  ?>   
              </ul>
            </div>
          </div>
                  
            </div>
        </div>
</section>
<?php get_footer(); ?>
