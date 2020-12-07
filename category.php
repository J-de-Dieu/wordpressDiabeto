<?php get_template_part('header'); ?>

    <section id="hero">
        <div class="carousel slide carousel-fade">
            <div class="carousel-inner">
                <div class="carousel-item active" style="background-image: url(<?php echo get_theme_file_uri('/images/respon-1.jpg'); ?>);">
                   <div class="container">
                    <!--<h2>Welcome to <span>Medicio</span></h2>-->
                       <h2 class="titre"><?php echo ucfirst($_GET['c']); ?></h2>
                    <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel.</p>
                    <!--<a href="#about" class="btn-get-started scrollto bouton">Lire plus</a>-->
                  </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-5">
   <!-- <div class="row">
        <div class="col-lg-12 my-3">
            <div class="pull-right">
                <div class="btn-group">
                    <button class="btn btn-info" id="list">
                        List View
                    </button>
                    <button class="btn btn-danger" id="grid">
                        Grid View
                    </button>
                </div>
            </div>
        </div>
    </div> -->
    <div id="products" class="row view-group">
                <?php 
                    $catquery = new WP_Query( array( 
					                            'category_name' => $_GET['c'],
                                                //'cat' => array(14),
                                                'order' => 'ASC',
                                                //'posts_per_page' => 3,
                                                ) 
                                            );
               ?>
        
               
                       
                            
                                            
                                             <?php
                                                 // the_content();
                                             ?>
                                            
                                       <!-- <a href="<?php //echo get_permalink(); ?>" class="float-left read">Lire plus</a>
                                        <a href="<?php //echo get_permalink(); ?>" class="float-right meta-chat"><span class="icon-chat"></span><?php //echo get_comments_number(); ?></a>-->
                                     
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
                        'Article-4' => '24000 Fcfa',
                        'Fraise' => '3100 Fcfa',
                        'Article-9' => '41000 Fcfa',
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
                
                 ?>

                
                
                 <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
                    <div class="item col-xs-4 col-lg-4 mb-5">
                        <div class="thumbnail card">
                            <div class="img-event">
                                <?php  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                
                                <!--<img class="group list-group-image img-fluid" src="http://placehold.it/400x250/000/fff" alt="" />-->
                                 <img class="group list-group-image img-fluid" src="<?php echo $url; ?>" alt="" />
                            </div>
                            <div class="caption card-body">
                                <h4 class="group card-title inner list-group-item-heading">
                                    <a href="<?php echo get_permalink(); ?>">
                                        <div class="tronquer font-weight-bold titre" title="<?php the_title(); ?>">
                                        <?php the_title(); ?>
                                        </div>
                                    </a>
                                </h4>
                                <p class="group inner list-group-item-text font-weight-light text-justify">
                                    Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                         <?php $titre = get_the_title(); ?>
                                         <?php //var_dump($titre); ?>
                                        <?php $ok = false; ?>
                                        <?php foreach($articles as $cle => $element): ?>
                                              
                                              <?php if( (strcmp($cle,$titre)==0) && ($ok == false)): ?>
                                                <p class="lead font-weight-light">
                                                    <?php   
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
                                    <div class="col-xs-12 col-md-6 pl-5">
                                        <a class="btn btn-success" href="<?php echo get_permalink(); ?>">Lire plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 <?php endwhile; ?> 
                 <?php wp_reset_postdata(); ?>
                 <!--<div class="tronquer" title="<?php //the_title(); ?>">
                                                           <?php //the_title(); ?>
                 </div>-->
                <!--<div class="item col-xs-4 col-lg-4 mb-5">
                    <div class="thumbnail card">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid" src="http://placehold.it/400x250/000/fff" alt="" />
                        </div>
                        <div class="caption card-body">
                            <h4 class="group card-title inner list-group-item-heading">
                                Product title</h4>
                            <p class="group inner list-group-item-text">
                                Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                        $21.000</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-xs-4 col-lg-4 mb-5">
                    <div class="thumbnail card">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid" src="http://placehold.it/400x250/000/fff" alt="" />
                        </div>
                        <div class="caption card-body">
                            <h4 class="group card-title inner list-group-item-heading">
                                Product title</h4>
                            <p class="group inner list-group-item-text">
                                Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                        $21.000</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-xs-4 col-lg-4 mb-5">
                    <div class="thumbnail card">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid" src="http://placehold.it/400x250/000/fff" alt="" />
                        </div>
                        <div class="caption card-body">
                            <h4 class="group card-title inner list-group-item-heading">
                                Product title</h4>
                            <p class="group inner list-group-item-text">
                                Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                        $21.000</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-xs-4 col-lg-4 mb-5">
                    <div class="thumbnail card">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid" src="http://placehold.it/400x250/000/fff" alt="" />
                        </div>
                        <div class="caption card-body">
                            <h4 class="group card-title inner list-group-item-heading">
                                Product title</h4>
                            <p class="group inner list-group-item-text">
                                Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                        $21.000</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-xs-4 col-lg-4 mb-5">
                    <div class="thumbnail card">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid" src="http://placehold.it/400x250/000/fff" alt="" />
                        </div>
                        <div class="caption card-body">
                            <h4 class="group card-title inner list-group-item-heading">
                                Product title</h4>
                            <p class="group inner list-group-item-text">
                                Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                        $21.000</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
        <script>
            jQuery(document).ready(function() {
            jQuery('#list').click(function(event){event.preventDefault();
            jQuery('#products .item').addClass('list-group-item');});
            jQuery('#grid').click(function(event){event.preventDefault();
            jQuery('#products .item').removeClass('list-group-item');
            jQuery('#products .item').addClass('grid-group-item');});
        });
        </script>
         
       <?php get_footer(); ?> 
    </body>
</html>
