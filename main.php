  <div class="container">
        <div class="row">
            <div class="col-md-4 mt-5">
                    <div class="banner-box banner-box1 ">
                    <div class="banner-box-inner">
                    <div class="text-center font-weight-bold titre mb-3" style="font-size: 25px;">Prévention en santé</div>
                    <div id="module" class="text-justify font-weight-light">
                        <span class="collapse" id="collapseExample" aria-expanded="false">
                            <p>Nous donnons des conseils allant dans le sens des actions préventives, menées dans le but d’éviter ou de réduire l’apparition, le développement et la gravité des accidents, maladies et handicaps, pouvant toucher tout ou une partie de la population<!--<span id="dots">...</span>-->.</p>
                            <p>Le champ de la prévention santé regroupe la prévention primaire, secondaire et tertiaire.</p>
                            <p>Les divers acteurs de la prévention santé mettent en place des mesures législatives, financières, éducatives ou comportementales, pour préserver le capital santé des individus.</p>
                            <!--<p onclick="myFunction()" id="myBtn">Lire plus</p>-->
                        </span>
                        <a role="button" class="collapsed lien" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"></a>
                    </div>
                    </div>
                    </div>
            </div>
            
            <div class="col-md-4 mt-5">
            <div class="banner-box-inner">
            <div class="text-center font-weight-bold titre mb-3" style="font-size: 25px;">Santé et environnement</div>
                   <div id="module-1" class="text-justify font-weight-light">
                        <span class="collapse" id="collapseExample-1" aria-expanded="false">
                            <p>Un environnement propre est essentiel pour la santé humaine et le bien-être. Les interactions entre l'environnement et la santé humaine sont extrêmement complexes et difficiles à évaluer et l'application du principe de précaution devient de ce fait particulièrement utile.</p>
                            <p>Les effets sur la santé qui sont les mieux connus concernent la pollution de l'air ambiant, la mauvaise qualité de l'eau et l'hygiène publique insuffisante.</p>
                            <p>Le changement climatique, l'appauvrissement de la couche d'ozone, la perte de biodiversité et la dégradation des sols peuvent également affecter la santé humaine.</p>
                            <!--<p onclick="myFunction()" id="myBtn">Lire plus</p>-->
                        </span>
                        <a role="button" class="collapsed lien" data-toggle="collapse" href="#collapseExample-1" aria-expanded="false" aria-controls="collapseExample-1"></a>
                    </div>
            </div>
            </div>
            
            <div class="col-md-4 mt-5">
            <div class="banner-box-inner">
            <div class="text-center font-weight-bold titre mb-3" style="font-size: 25px;">Soins et maladies</div>
                    <div id="module-2" class="text-justify font-weight-light">
                        <span class="collapse" id="collapseExample-2" aria-expanded="false">
                            <p>Beaucoup de personnes à travers le monde souffrent des maladies chroniques. Pour améliorer la prise en charge de chacun de ces personnes malades, la plate-forme Diabéto a mis en place une meilleure coordination des professionnels qui ont pour objectif majeur, de proposer des soins efficaces pour la bonne traitement des malades sans renoncer aux exigences prioritaires de bonnes pratiques.</p>
                            <p>La plate-forme Diabète entend promouvoir les parcours de soins permettant un accompagnement personnalisé et coordonné des malades. C’est là que la plate-forme Diabète identifie une voie sûre de la qualité soignante et porteuse d’une optimisation des dépenses de santé.</p>
                            <p>La plate-fonne a ainsi élaboré une nouvelle gamme de productions « les parcours de soins » dont elle publie aujourd’hui les guides et outils pour 4 premières maladies.</p>
                            <!--<p onclick="myFunction()" id="myBtn">Lire plus</p>-->
                        </span>
                        <a role="button" class="collapsed lien" data-toggle="collapse" href="#collapseExample-2" aria-expanded="false" aria-controls="collapseExample-2"></a>
                    </div>
            </div>
            </div>
            </div>
        </div>
<!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container-fluid" data-aos="fade-up">
           <div class="row no-gutters">
               
               <div class="col-md-1"></div>
                <div class="col-md-3">
                   <div class="content"> 
                        
			             <ul class="list-group">
                             <li class="list-group-item item-premier">
                                 <div class="row">
                                        <div class="col-md-6 col-sm-12 col-sms-6 col-smb-12">
                                            <h5 class="text-center font-weight-bold text-nowrap titre">
    	                                      Articles populaires
                                            </h5>
                                        </div>
                                 </div> 
                             </li>
                             <?php 
                             
                                 $catquery = new WP_Query( array( 
                                                                //'category_name' => 'categorie-1',
                                                                //'orderby' => 'comment_count',
                                                                'order' => 'ASC',
                                                                'comment_count' => array(
                                                                    'value' => 1,
                                                                    'compare' => '>=',
                                                                ),
                                                                'posts_per_page' => 5,
                                                                ) 
                                                         );
                              ?>
                             <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
                                    <li class="list-group-item">
                                        <div class="row">
                                             <?php 
                                                //global $post;
                                                //$commentaire = get_comments_number($catquery->ID);
                                                //var_dump($commentaire);
                                             ?>
                                            <?php //if($post->comment_count >=1) : ?>
                                            <div class="col-md-6 col-sm-12 col-sms-6 col-smb-12">
                                                <div class=" border w-100 h-100 text-center">
                                                    <?php  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                                    <a href="#">
                                                         <!--<img class="img-responsive" src="http://demo.posthemes.com/pos_orion/24-small_default/faded-short-sleeve-tshirts.jpg" alt="Fusce Aliquam">-->
                                                         <img class="img-responsive img-thumbnail" src="<?php echo $url ?>"  alt="Fusce Aliquam">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-sms-6 col-smb-12">
                                                <b>
                                                    <a href="<?php echo get_permalink();  ?>">
                                                        <div class="tronquer font-weight-bold titre hevor" title="<?php the_title(); ?>">
                                                           <?php the_title(); ?>
                                                        </div>
                                                    </a>
                                                </b>
                                                <div class="pt-5">
                                                     <a href="<?php echo get_permalink();  ?>" class="h6 font-weight-light lien"><span class="icon-calendar"></span> June 25, 2019</a>
                                                </div>
                                            </div>
                                            <?php //endif; ?>
                                        </div> 
                                    </li>
                             <?php endwhile; ?> 
                             <?php wp_reset_postdata(); ?>   
				         </ul>
		                 
		            </div> 

                </div>
                <div class="col-md-7 bloc">
                    
                    
                    <div class="container">
                        
                        <div class="row justify-content-center mb-5 border-bottom">
                            <!--<div class="col-md-3"></div>--> 
                            <div class="col-md-12 mt-3 mb-2">
                              <h2 class="text-left font-weight-bold titre">Les articles recens</h2>
                            </div>
                            <!--<div class="col-md-3"></div>-->
                        </div>
                    
                        <div class="row ustify-content-center">
                            
                            
                                <?php
                                //$recent_posts = array( 'numberposts' => '4' );
                                $recent_posts = wp_get_recent_posts(array(
                                    'numberposts' => 3,
                                    //'posts_per_page' => 3,
                                    'post_status' => 'publish',
                                    'category__not_in' => array( 8 )
                                ));
                                foreach($recent_posts as $post) : ?>
                                    <div class="col-md-4">
                                        <div class="bordure-verte">
                                            <?php  $url = wp_get_attachment_url( get_post_thumbnail_id($post['ID']) ); ?>
                                            <a href="" class="block-20" style="background-image: url(<?php echo $url; ?>);">
                                            </a>
                                            <div class="text pt-1 pb-4 px-4">
                                                  <div class="meta">
                                                      <div><a href="#"><?php echo date( 'F j. Y', strtotime($post['post_date']) ); ?></a></div>
                                                       <!--<div><a href="#">Sept. 06, 2019</a></div>-->
                                                  </div>
                                                  <b class="heading">
                                                      <a href="<?php echo get_permalink($post['ID']) ?>">
                                                           <div class="tronquer titre hevor" title="<?php echo $post['post_title']; ?>">
                                                                  <?php echo $post['post_title']; ?>
                                                           </div>
                                                      </a>
                                                  </b>
                                                    <!--<p>Lorem ipsum dolor sit amet</p>-->
                                                    <p class="font-weight-light text-justify" style="font-size:13px;">
                                                        <?php 
                                                              echo wp_trim_words( $post['post_content'], 5, '...' );
                                                            //echo wp_trim_words( get_the_content(), 8, '...' );
                                                        ?>
                                                        
                                                    </p>
                                                    <p class="clearfix">
                                                    <a href="<?php echo get_permalink($post['ID']) ?>" class="float-left lire font-weight-light">Lire plus</a>
                                                    <a href="#" class="float-right meta-chat"><span class="icon-chat"></span><?php echo get_comments_number( $post['ID'] ); ?> </a>
                                                    </p>
                                             </div>
                                        </div>
                                    </div>
                                <?php endforeach; wp_reset_query(); ?>
                            
                        </div>
                    </div> 
                   <div class="row">
                       <div class="col-md-12">
                           <p class="text-justify pl-3 pr-3 mt-4 font-weight-light">
                            Bienvenue sur Diabéto, votre pharmacie et parapharmacie en ligne pour le Sénégal. Commandez facilement en ligne des médicaments sans ordonnance et des cosmétiques, puis recevez-les directement à votre domicile. Profitez d’une navigation facile et agréable grâce à nos différents espaces qui vous permettront de trouver rapidement ce dont vous avez besoin pour vous et toute votre famille. Produits santé et d’hygiène, cosmétiques, maternité et bébé ou encore produits diététiques et minceur sont à votre disposition et ce à des prix attractifs.
                           </p>
                       </div>
                   </div>
                </div>
                <div class="col-md-1"></div>
               
               
           </div> 
          
           <div class="row">
               <div class="col-md-12 mt-5 mb-5"></div>
           </div>
          
           <div class="row no-gutters">
               
               <div class="col-md-1"></div>
                <div class="col-md-3">
                   <div class="content"> 
                        
			             <ul class="list-group">
                             <li class="list-group-item item-premier">
                                 <div class="row">
                                        <div class="col-md-6 col-sm-12 col-sms-6 col-smb-12">
                                            <h5 class="text-center font-weight-bold text-nowrap titre">
    	                                      Produits populaires
                                            </h5>
                                        </div>
                                 </div> 
                             </li>
                             <?php 
                             
                                 $catquery = new WP_Query( array( 
                                                                'post_type' => 'produit',
                                                                'order' => 'ASC',
                                                                'posts_per_page' => 5,
                                                                ) 
                                                         );
                              ?>
                             <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <?php
                                               $id_prod = get_the_ID();
                                               $edit_post = add_query_arg('parametre', $id_prod, get_permalink( get_page_by_path( 'produit' ) ));
                                            ?>
                                            <div class="col-md-6 col-sm-12 col-sms-6 col-smb-12">
                                                <div class=" border w-100 h-100 text-center">
                                                    <?php  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                                    <a href="<?php echo $edit_post; ?>">
                                                        <img class="img-responsive img-thumbnail" src="<?php  echo $url ?>"  alt="Fusce Aliquam">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-sms-6 col-smb-12">
                                                
                                                <b>
                                                    <a href="<?php echo $edit_post; ?>">
                                                        <div class="tronquer font-weight-bold titre hevor" title="<?php the_title(); ?>">
                                                           <?php the_title(); ?>
                                                        </div>
                                                    </a>
                                                </b>
                                                <div class="pt-5">
                                                     <a href="#" class="h6 font-weight-light lien"><span class="icon-calendar"></span> June 25, 2019</a>
                                                </div>
                                            </div>
                                        </div> 
                                    </li>
                             <?php endwhile; ?> 
                             <?php wp_reset_postdata(); ?>   
						     
				         </ul>
		                 
		            </div> 

                </div>
                <div class="col-md-7 bloc">
                    
                    
                    <div class="container">
                        
                        <div class="row justify-content-center mb-5 border-bottom">
                            <!--<div class="col-md-3"></div>--> 
                            <!--<div class="col-md-6 text-center mt-4">-->
                            <div class="col-md-12 text-center mt-3 mb-2">
                              <h2 class="text-left font-weight-bold titre">Les produits</h2>
                            </div>
                            <!--<div class="col-md-3"></div>-->
                        </div>
                    
                        <div class="row ustify-content-center mb-4">
                            
                            <?php 
                              $args = array( 
                                      'post_type' => 'produit',
                                      /*'date_query' => array(
                                            array(
                                                'after' => date( 'Y-m-d h:i', time() ),
                                            )
                                        ),*/
                                      'posts_per_page' => 4 );
                              $the_query = new WP_Query( $args ); 
                            ?>
                            
                            <?php if ( $the_query->have_posts() ) : ?>
                                  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                         <?php   $do_not_duplicate[] = $post->ID; ?>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                                            <div class="bordure-verte img-container"> 
                                                <?php  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                                <?php
                                                       $id_prod = get_the_ID();
                                                       $edit_post = add_query_arg('parametre', $id_prod, get_permalink( get_page_by_path( 'produit' ) ));
                                                ?>
                                                <a href="<?php echo $edit_post; ?>" class="images-thumbnail" style="background-image: url(<?php echo $url; ?>);">
                                                 <div class="overlay">
                                                    <span class="text-nowrap"><?php the_title(); ?></span>
                                                 </div>
                                                </a>
                                            </div>
                                        </div>        
                                  <?php endwhile; ?>
                                  <?php wp_reset_postdata(); ?>
                            <?php else:  ?>
                            <p><?php _e( 'Désolé, aucun article ne correspond à vos critères.' ); ?></p>
                            <?php endif; ?>
                              
                        </div>
                        
                          <div class="row ustify-content-center mb-4">
                              
                            <?php 
                              $args = array( 
                                      'post_type' => 'produit',
                                      /*'date_query' => array(
                                            array(
                                                'after' => date( 'Y-m-d h:i', time() ),
                                            )
                                        ),*/
                                      'posts_per_page' => 4, 
                                      'post__not_in' => $do_not_duplicate 
                               );
                              $the_query = new WP_Query( $args ); 
                            ?>
                            
                            <?php if ( $the_query->have_posts() ) : ?>
                                  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                         <?php   $do_not_duplicate[] = $post->ID; ?>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                                            <div class="bordure-verte img-container"> 
                                                <?php  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                                <?php
                                                       $id_page = get_the_ID();
                                                       $edit_post = add_query_arg('parametre', $id_page, get_permalink( get_page_by_path( 'produit' ) ));
                                                ?>
                                                <a href="<?php echo $edit_post; ?>" class="images-thumbnail" style="background-image: url(<?php echo $url; ?>);">
                                                 <div class="overlay">
                                                    <span class="text-nowrap"><?php the_title(); ?></span>
                                                 </div>
                                                </a> 
                                                 
                                            </div>
                                        </div>        
                                  <?php endwhile; ?>
                                  <?php wp_reset_postdata(); ?>
                            <?php else:  ?>
                            <p><?php _e( 'Désolé, aucun article ne correspond à vos critères.' ); ?></p>
                            <?php endif; ?>
                            
                         </div>
                        
                          <div class="row ustify-content-center mb-4">
                             <?php 
                              $args = array( 
                                      'post_type' => 'produit', 
                                      'posts_per_page' => 2,
                                      /*'date_query' => array(
                                            array(
                                                'after' => date( 'Y-m-d h:i', time() ),
                                            )
                                        ),*/
                                      'post__not_in' => $do_not_duplicate );
                              $the_query = new WP_Query( $args ); 
                            ?>
                            
                            <?php if ( $the_query->have_posts() ) : ?>
                                  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                         <?php   $do_not_duplicate[] = $post->ID; ?>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                                            <div class="bordure-verte img-container"> 
                                                <?php  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                                <?php
                                                       $id_page = get_the_ID();
                                                       $edit_post = add_query_arg('parametre', $id_page, get_permalink( get_page_by_path( 'produit' ) ));
                                                ?>
                                                <a href="<?php echo $edit_post; ?>" class="images-thumbnail" style="background-image: url(<?php echo $url; ?>);">
                                                 <div class="overlay">
                                                    <span class="text-nowrap"><?php the_title(); ?></span>
                                                 </div>
                                                </a> 
                                                 
                                            </div>
                                        </div>        
                                  <?php endwhile; ?>
                                  <?php wp_reset_postdata(); ?>
                            <?php else:  ?>
                            <p><?php _e( 'Désolé, aucun article ne correspond à vos critères.' ); ?></p>
                            <?php endif; ?> 
                            <?php
                              $_SESSION['ids'] = $do_not_duplicate;
                            ?>
                              <?php //var_dump($_SESSION['prenom']); //wp_redirect( get_permalink( get_page_by_path( 'produit' ), 301 ); exit; ?>
                          </div>
                        
                    </div> 
                </div>
                <div class="col-md-1"></div>
               
               
           </div>
           
            
      </div>
    </section><!-- Fin Featured Services Section --> 
    