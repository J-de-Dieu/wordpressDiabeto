<?php //session_start(); ?>
<?php get_template_part('header'); ?>
<?php get_template_part('slider'); ?> 
<?php 
 
   $produits = array(
 
      'Paracetamol' => '350 Fcfa', 
      'Quinine' => '250 Fcfa', 
      'Nivaquine' => '450 Fcfa', 
      'Chloroquine' => '550 Fcfa',
      'Fervex' => '750 Fcfa',
      'Dolirhume' => '2250 Fcfa',
      'Tylenol' => '3250 Fcfa',
      'Humex' => '2150 Fcfa',
      'Actifed Rhume' => '1300 Fcfa',
      'Fervex Rhume' => '2300 Fcfa',
      'Eucreas' => '2500 Fcfa',
      'Amlodipine Mylan' => '4500 Fcfa',
      'Irbesartan' => '6750 Fcfa',
      'Lisinopril' => '4750 Fcfa',
      'Voltarène Emulgel' => '3450 Fcfa',
      'Smecta' => '7450 Fcfa',
      'Imodium Duo' => '4900 Fcfa',
      'Artesunate  Amodiaquine Winthrop' => '9450 Fcfa'
   );

   $quantite = array(
 
      'Paracetamol' => '150', 
      'Quinine' => '105', 
      'Nivaquine' => '40', 
      'Chloroquine' => '55',
      'Fervex' => '51',
      'Dolirhume' => '22',
      'Tylenol' => '32',
      'Humex' => '21',
      'Actifed Rhume' => '30',
      'Fervex Rhume' => '201',
      'Eucreas' => '27',
      'Amlodipine Mylan' => '43',
      'Irbesartan' => '67',
      'Lisinopril' => '44',
      'Voltarène Emulgel' => '35',
      'Smecta' => '71',
      'Imodium Duo' => '90',
      'Artesunate  Amodiaquine Winthrop' => '77'
   );


?> 
 <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Produits préférés et efficaces</h2>
          <p class="font-weight-light">Soucieux du bien-être et de la santé de tous, quelques soient les profils, Diabéto vous offre une large sélection de produits adaptés aux situations de chacun. Elle met à votre disposition une grande gamme de médicaments sans ordonnance pour répondre à tous les besoins du quotidien : douleurs et fièvre, troubles digestifs, soins bucco-dentaires ou encore soins gynécologiques.</p>
        </div>

        <div class="row">
            <?php
                   // 1. On définit les arguments pour définir ce que l'on souhaite récupérer
                    $args = array(
                        'p' => $_GET['parametre'],
                        'post_type' => 'Produit',
                    );

                   // 2. On exécute la WP Query
                    $my_query = new WP_Query( $args );

                // 3. On lance la boucle !


            if ( $my_query->have_posts() ) : while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                   <div class="col-lg-6" data-aos="fade-right">
                          <?php  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                          <img src="<?php echo $url; ?>" class="img-fluid bordure-verte" alt="">
                   </div>
                   <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3><?php the_title(); ?></h3>
                        <!--<p class="font-italic text-justify">-->
                           <div class="row">
                            <div class="col-md-12">
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
                             </div>
                            </div>
                            <div class="row pt-5">
                                <div class="col-md-12">
                                    <?php $titre = get_the_title(); ?>
                                          <?php $ok = false; ?>
                                          <?php foreach($produits as $cle => $element): ?>
                                                     
                                                <?php if( (strcmp($cle,$titre)==0) && ($ok == false)): ?>
                                                      <p class="lead font-weight-light">
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
                                </div>
                            </div>
                            <div class="row pt-4">
                                 <div class="col-md-5">
                                     
                                     <?php $titre = get_the_title(); ?>
                                            <?php $ok_Q = false; ?>
                                                  <?php foreach($quantite as $i => $quantit): ?>
                                                                
                                                         <?php if( (strcmp($i,$titre)==0) && ($ok_Q == false)): ?>
                                                               <?php
                                                                  echo 'Qté en Stock: '.$quantit ;
                                                                  $ok_Q = true;
                                                               ?>
												
                                                         <?php endif; ?>
                                          
                                                         <?php if($ok_Q): ?>
                                                            <?php break;  ?>
                                                         <?php endif; ?>
                                          
                                                 <?php endforeach; ?>
                                      
                                 </div>
                                 <div class="col-md-7">
                                     <button type="submit" class="float-right btn btn-success">
                                                               <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg> 
                                                               Ajouter au panier
                                    </button>
                                 </div>
                            </div>
                            <?php //the_content(); ?>
                           <!--</p>-->
                        <!--<p class="lead font-weight-light pt-3">1230 Fcfa</p>-->
                  </div>
            <?php endwhile; else : ?>
                <p><?php esc_html_e( 'Désolé, aucun article ne correspond à vos critères.' ); ?></p>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
          
        </div>

      </div>
    </section><!-- End About Us Section -->
    <section id="about" class="about pt-0">
        <div class="container">
        <div class="row">
         <div class="col-md-12">
            <?php
                   
                    $args = array(
                        'p' => $_GET['parametre'],
                        'post_type' => 'Produit',
                    );

                    $my_query = new WP_Query( $args );

                


            if ( $my_query->have_posts() ) : while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
             <p class="font-italic text-justify">
                    <?php the_content(); ?>
             </p>
             <?php endwhile; else : ?>
                <p><?php esc_html_e( 'Désolé, aucun article ne correspond à vos critères.' ); ?></p>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            
            </div>
        </div>
        </div>
    </section>


    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallerie</h2>
          <p class="font-weight-light">Le catalogue de Diabéto comprend une large sélection de produits issus de marques et de laboratoires réputés : Vichy, La Roche Posay, Bioderma, Nuxe, Roger Gallet, Mustela ou encore Oenebiol, parmi tant d’autres. Notre engagement est d’offrir à nos clients les meilleurs marques et produits pour garantir une qualité optimale et prendre soin de vous et de votre famille en toute confiance. </p>
        </div>
            
        <div class="owl-carousel gallery-carousel" data-aos="fade-up" data-aos-delay="100">
            <?php 
                foreach($_SESSION['ids'] as $cle => $element){
                       $tab[] = $element;   
                }
            ?>
            
            <?php
                  
                   // 1. On définit les arguments pour définir ce que l'on souhaite récupérer
                    $args = array(
                        'post__not_in' => $tab,
                        'post_type' => 'Produit',
                        'posts_per_page' => 8
                    );

                   // 2. On exécute la WP Query
                    $my_query = new WP_Query( $args );

                // 3. On lance la boucle !


            if ( $my_query->have_posts() ) : while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                          <?php  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                          <?php
                                $id_post = get_the_ID();
                                 $edit_post = add_query_arg('parametre', $id_post, get_permalink( get_page_by_path( 'produit' ) ));
                          ?>
                          <!--<a href="<?php echo $edit_post; ?>" class="venobox" data-gall="gallery-carousel">-->
                          <a href="<?php echo $edit_post; ?>" class="vnobox" data-gall="gallery-carousel">
                              <img src="<?php echo $url; ?>" alt="">
                          </a>
            <?php endwhile; else : ?>
                <p><?php esc_html_e( 'Désolé, aucun article ne correspond à vos critères.' ); ?></p>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            
        </div>

      </div>
    </section><!-- End Gallery Section -->

<?php get_footer(); ?> 