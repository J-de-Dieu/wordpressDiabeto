<?php get_template_part('header'); ?>
<?php get_template_part('slider'); ?> 
<?php

$articles = array (
                        'Stéthoscope' => '2100 Fcfa',
                        'Glucomètre' => '3500 Fcfa',
                        'Mesure de température' => '1500 Fcfa',
                        'Oxymètre' => '1100 Fcfa',
                        'Thermomètre Médical Électronique à Sonde Flexible' => '10000 Fcfa',
                        'Tensiomètre Bras Electronique' => '5000 Fcfa',
                        'Tensiomètre automatique à bras AND UA 767 S' => '25000 Fcfa',
                        'Tensiomètre Electronique au Bras Omron M3' => '30000 Fcfa',
                        'Fraise' => '3100 Fcfa',
                        'Citron' => '500 Fcfa',
                        'Gel desinfectant Milton 450 ML + POMPE' => '4100 Fcfa',
                        'Gel Hydroalcoolique Bactimains' => '3400 Fcfa',
                        'Germaseptyl' => '1900 Fcfa',
                        'Bandes de fixation  strapping' => '1350 Fcfa',
                        'Compresses en non tissé non stériles 40g' => '380 Fcfa',
                        'Baume Saint Bernard' => '1150 Fcfa',
                        'Mediset Perfusion pose sur voie périphérique' => '4150 Fcfa',
                        'Lunettes à oxygène' => '17750 Fcfa',
                        'Masque à oxygène à haute concentration' => '27730 Fcfa',
                        'Tubulure à oxygène' => '2730 Fcfa',
                        'Protege matelas anti bactérien' => '45750 Fcfa',
                        'Couverture bactériostatique' => '53750 Fcfa',
                        'Oreiller bactériostatique de brancard' => '23750 Fcfa',
                        'Orange Bio Navelina' => '250 Fcfa',
                        'Diabliss' => '750 Fcfa'
                    );

$quantite = array (
                        'Stéthoscope' => '100',
                        'Glucomètre' => '50',
                        'Mesure de température' => '15',
                        'Oxymètre' => '110',
                        'Thermomètre Médical Électronique à Sonde Flexible' => '10',
                        'Tensiomètre Bras Electronique' => '53',
                        'Tensiomètre automatique à bras AND UA 767 S' => '25',
                        'Tensiomètre Electronique au Bras Omron M3' => '30',
                        'Article-4' => '24',
                        'Article-5' => '31',
                        'Article-9' => '41',
                        'Gel desinfectant Milton 450 ML + POMPE' => '41',
                        'Gel Hydroalcoolique Bactimains' => '71',
                        'Germaseptyl' => '19',
                        'Bandes de fixation  strapping' => '130',
                        'Compresses en non tissé non stériles 40g' => '80',
                        'Baume Saint Bernard' => '11',
                        'Mediset Perfusion pose sur voie périphérique' => '47',
                        'Lunettes à oxygène' => '17',
                        'Masque à oxygène à haute concentration' => '77',
                        'Tubulure à oxygène' => '27 Fcfa',
                        'Protege matelas anti bactérien' => '47',
                        'Couverture bactériostatique' => '75',
                        'Oreiller bactériostatique de brancard' => '37',
                        'Orange Bio Navelina' => '20',
                        'Fraise' => '32',
                        'Citron' => '53',
                        'Diabliss' => '750 Fcfa'
                    );

?> 

	<section class="ftco-section">
			<div class="container">
				<div class="row">
                  <div class="col-lg-8 ftco-animate">
                      
                       <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                  <div class="row mb-5"><div class="col-md-12"><h2 class="mt-3 font-weight-bold titre"><?php the_title(); ?></h2></div></div>
                                  <div class="row mb-5">
                                      <?php  $url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
                                      <div class="col-md-6">
                                          <img src="<?php echo $url; ?>" class="img-fluid" alt="Responsive image">
                                      </div>
                                      <div class="col-md-6">
                                          <div id="bloc_men_der" class="bloc_commande">
                                               <div class="pad_b_10">
                                                   <span class="gras">Quantité souhaitée</span>
                                               </div>
                                               <div class="pad_b_10">
                                                   <select class="custom-select" aria-label="Sélectionner une référence">
                                                       <option selected>0</option>
                                                       <option value="1" >1</option>
                                                       <option value="2" >2</option>
                                                       <option value="3" >3</option>
                                                       <option value="4" >4</option>
                                                       <option value="5" >5</option>
                                                   </select>
                                              <!--<h2 class="mt-3 font-weight-bold titre"><?php //the_title(); ?></h2>-->
                                               </div>
                                          </div>
                                          <?php $titre = get_the_title(); ?>
                                          <?php //var_dump($titre); ?>
                                          <?php $ok = false; ?>
                                          <?php foreach($articles as $cle => $element): ?>
                                                     
                                                <?php if( (strcmp($cle,$titre)==0) && ($ok == false)): ?>
                                          
                                                     <p class="lead font-weight-light pt-3">
                                                         Prix: <?php
                                                                  echo $element ;
                                                                  $ok = true;
                                                               ?>
                                                     </p>
                                                <?php endif; ?>
                                          
                                                <?php if($ok): ?>
                                                <?php break;  ?>
                                                <?php endif; ?>
                                          
                                          <?php endforeach; ?>
                                          <div class="row pt-3">
                                               
				                                    <div class="col-md-5">
                                                         <?php $titre = get_the_title(); ?>
                                                          <?php //var_dump($titre); ?>
                                                          <?php $ok_Q = false; ?>
                                                          <?php foreach($quantite as $i => $quantit): ?>
                                                                <?php //var_dump($i); ?>
                                                                <?php if( (strcmp($i,$titre)==0) && ($ok_Q == false)): ?>
                                                                 <?php
                                                                  echo 'Qté en Stock: '.$quantit ;
                                                                  $ok_Q = true;
                                                               ?>
														<!--Qté en Stock : 10-->
                                                                <?php endif; ?>
                                          
                                                                <?php if($ok_Q): ?>
                                                                   <?php break;  ?>
                                                                <?php endif; ?>
                                          
                                                          <?php endforeach; ?>
													</div>
													<div class="col-md-7">
														<!--<input type="hidden" name="products_id" value="9976">-->										<button type="submit" class="pr-4 btn btn-success">
                                                               <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg> 
                                                               Ajouter au panier
                                                        </button>
												    </div>
								          </div>
                                          
                                      </div>
                                  </div>
                             <!--<h2 class="mb-3 font-weight-bold titre"><?php //the_title(); ?></h2>-->
                            <!--<p class="font-weight-light text-justify">--><?php the_content(); ?><!--</p>-->
                            <?php endwhile; ?>
                       <?php endif; ?>
                    <!--<p>
                      <img src="images/image_2.jpg" alt="" class="img-fluid">
                    </p>
                    <div class="tag-widget post-tag-container mb-5 mt-5">

                    </div>-->
                    <div class="tag-widget post-tag-container mb-5 mt-5">
                      <div class="tagcloud">
                          <?php
                    
                            $tags = get_tags();
                            $total = count($tags);

                            for($i=0; $i<$total; $i++){
                               echo '<a href="'. get_tag_link($tags[$i]->term_id) .'" class="tag-cloud-link">'.($tags[$i]->name).'</a>'; 
                            }

                          ?>   
                        <!--<a href="#" class="tag-cloud-link">Food</a>
                        <a href="#" class="tag-cloud-link">Wine</a>
                        <a href="#" class="tag-cloud-link">Drink</a>
                        <a href="#" class="tag-cloud-link">Dish</a>-->
                      </div>
                    </div>

                    <div class="pt-5 mt-5">
                      <h3 class="mb-5 h4 font-weight-bold p-4 bg-light"><?php if(isset($c)) echo $c; ?> Commentaire<?php if(isset($c) && $c > 1) echo 's'; else echo ''; ?></h3>
                        <?php
                             if( comments_open() || get_comments_number() ) :
                                 comments_template();
                             endif;
                         ?>
                    </div>
                  </div> <!-- .col-md-8 -->

          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box mb-5">
                <?php 
	              get_search_form();
	            ?>
            </div>
            <div class="sidebar-box ftco-animate mb-4">
            	<h4 class="titre">Categories</h4>
                  <ul class="categories">
                      <?php 

                        $categories = get_categories();

                        foreach($categories as $category) {
                            $count = $category->category_count;
                            if( $category->name != "blog" && $category->name != "Non classé"){
                            echo '<li class="font-weight-light lien"><a class="lien" href="' . add_query_arg('c', $category->name, get_category_link($category->term_id)) . '">' . ucfirst($category->name) . '<span>('.$count.')</span></a></li>';
                            //echo '<li class="font-weight-light lien"><a class="lien" href="' . get_category_link($category->term_id) . '">' . $category->name . '<span>('.$count.')</span></a></li>';
                            }
                        }

                     ?>
               
                 </ul>
            </div>

            <div class="sidebar-box ftco-animate mb-4">
                <h4 class="titre">Articles Populaires</h4>
                <?php 
                   
                    $query_args = array( 
						'category_name' => 'Appareils de mesure',
                        'post_type' => 'post',
                        'posts_per_page' => 5
                    
                    );
                    $myQuery = new WP_Query($query_args);

                    // Vérifiez que nous avons trouvé des $elements à afficher
                    if ($myQuery->posts) {
                        foreach ($myQuery->posts as $key => $elements) {
                         ?>
                          <?php if($elements->comment_count >=1) : ?>
                          <div class="block-21 mb-4 d-flex">
                              <?php  $url = wp_get_attachment_url( get_post_thumbnail_id($elements->ID) ); ?>
                              <a class="blog-img mr-4" style="background-image: url('<?php echo $url; ?>');"></a>
                              <!--<img src="<?php //echo $url; ?>" width="100px" height="100px">-->
                              <div class="text">
                                  <h3 class="heading titre"><a class="font-weight-light lien" href="#"><?php echo $elements->post_title; ?></a></h3>
                                  <div class="meta">
                                      <div><a href="#"><span class="icon-calendar"></span><?php echo $elements->post_date; ?></a></div>
                                      <div><a href="#"><span class="icon-person"></span><?php echo $elements->post_author; ?></a></div>
                                      <div><a href="#"><span class="icon-chat"></span><?php echo $elements->comment_count; ?></a></div>
                                  </div>
                              </div>
                          </div>
                          <?php endif; ?>
                         <?php
                        }
                    }else{
                        echo 'No results!'; die;
                    }
              ?>

            </div>

            <div class="sidebar-box ftco-animate mb-4">
              <h4 class="titre">Tag</h4>
              <ul class="tagcloud m-0 p-0">
                 <?php
                    
                    $tags = get_tags();
                    $total = count($tags);
                    
                    for($i=0; $i<$total; $i++){
					   echo '<a class="lien" href="'. get_tag_link($tags[$i]->term_id) .'" class="tag-cloud-link">'.($tags[$i]->name).'</a>';
                    }
                    
                ?>   
                <!--<a href="#" class="tag-cloud-link">Dish</a>
                <a href="#" class="tag-cloud-link">Food</a>
                <a href="#" class="tag-cloud-link">Lunch</a>
                <a href="#" class="tag-cloud-link">Menu</a>
                <a href="#" class="tag-cloud-link">Dessert</a>
                <a href="#" class="tag-cloud-link">Drinks</a>
                <a href="#" class="tag-cloud-link">Sweets</a>-->
              </ul>
            </div>

            <!--<div class="sidebar-box ftco-animate mb-4">
            	<h5>Archives</h5>
              <ul class="categories">
              	<li><a href="#">January 2019 <span>(20)</span></a></li>
              	<li><a href="#">December 2018 <span>(30)</span></a></li>
              	<li><a href="#">Novemmber 2018 <span>(20)</span></a></li>
                <li><a href="#">September 2018 <span>(6)</span></a></li>
                <li><a href="#">August 2018 <span>(8)</span></a></li>
              </ul>
            </div>-->


            <!--<div class="sidebar-box ftco-animate">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>-->
          </div><!-- END COL -->
        </div>
			</div>
		</section>

<?php get_footer(); ?> 