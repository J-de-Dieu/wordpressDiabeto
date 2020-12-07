<?php 
    
    add_filter('show_admin_bar', '__return_false');
    function Insertion() {
	    wp_enqueue_style( 'style', get_stylesheet_uri() );
		
		wp_enqueue_style( 'styles', get_template_directory_uri() . '/styles/styles.css', array(), '1.1', 'all');
		wp_enqueue_style( 'personnaliser', get_template_directory_uri() . '/css/personnaliser.css', array(), '1.1', 'all');
		wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/bootstrap/dist/css/bootstrap.min.css', array(), '1.1', 'all');
		
		wp_enqueue_style( 'boxicons.min', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css', array(), '1.1', 'all');
		wp_enqueue_style( 'animate.min', get_template_directory_uri() . '/assets/vendor/animate.css/animate.min.css', array(), '1.1', 'all');
		wp_enqueue_style( 'owl.carousel.min', get_template_directory_uri() . '/assets/vendor/owl.carousel/assets/owl.carousel.min.css', array(), '1.1', 'all');
		wp_enqueue_style( 'animate.min', get_template_directory_uri() . '/assets/vendor/venobox/venobox.css', array(), '1.1', 'all');
		wp_enqueue_style( 'animate.min', get_template_directory_uri() . '/assets/vendor/aos/aos.css', array(), '1.1', 'all');
		wp_enqueue_style( 'css-style', get_template_directory_uri() . '/assets/css/css-style.css', array(), '1.1', 'all');
		
		
		wp_enqueue_style( 'icofont.min', get_template_directory_uri() . '/assets/vendor/icofont/icofont.min.css', array(), '1.1', 'all');
		wp_enqueue_style( 'bootstrap-datepicker', get_template_directory_uri() . '/css/bootstrap-datepicker.css', array(), '1.1', 'all');
	    wp_enqueue_style( 'jquery.timepicker', get_template_directory_uri() . '/css/jquery.timepicker.css', array(), '1.1', 'all');
		wp_enqueue_style( 'owl.theme.default.min', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '1.1', 'all');
		wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/css/flaticon.css', array(), '1.1', 'all');
		wp_enqueue_style( 'icomoon', get_template_directory_uri() . '/css/icomoon.css', array(), '1.1', 'all');
		wp_enqueue_style( 'ionicons.min', get_template_directory_uri() . '/css/ionicons.min.css', array(), '1.1', 'all');
		wp_enqueue_style( 'open-iconic-bootstrap.min', get_template_directory_uri() . '/css/open-iconic-bootstrap.min.css', array(), '1.1', 'all');
		wp_enqueue_style( 'aos', get_template_directory_uri() . '/css/aos.css', array(), '1.1', 'all');
		wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css', array(), '1.1', 'all');
		//wp_enqueue_style( 'costumer-style', get_template_directory_uri() . '/css/costumer-style.css', array(), '1.1', 'all');
		//wp_enqueue_style('font-awesome.min', 'http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
		
		wp_enqueue_script( 'jquery-3.5.1.slim.min', get_template_directory_uri() . '/bootstrap/js/dist/jquery-3.5.1.slim.min.js', array (), null, true);
		
		wp_enqueue_script( 'bootstrap.bundle.min', get_template_directory_uri() . '/bootstrap/dist/js/bootstrap.bundle.min.js', array (), null, true);
		wp_enqueue_script( 'jquery.easing.min', get_template_directory_uri() . '/assets/vendor/jquery.easing/jquery.easing.min.js', array (), null, true);
		wp_enqueue_script( 'validate', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array (), null, true);
		wp_enqueue_script( 'jquery.waypoints.min', get_template_directory_uri() . '/assets/vendor/waypoints/jquery.waypoints.min.js', array (), null, true);
		wp_enqueue_script( 'counterup.min', get_template_directory_uri() . '/assets/vendor/counterup/counterup.min.js', array (), null, true);
		wp_enqueue_script( 'owl.carousel.min', get_template_directory_uri() . '/assets/vendor/owl.carousel/owl.carousel.min.js', array (), null, true);
		wp_enqueue_script( 'venobox.min', get_template_directory_uri() . '/assets/vendor/venobox/venobox.min.js', array (), null, true);
		wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array (), null, true);
		wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array (), null, true);
		
		/*wp_enqueue_script( 'jquery-3.2.1.min', 'https://code.jquery.com/jquery-3.2.1.min.js', array(), null, true );*/
		wp_enqueue_script( 'bootstrap.min', '/dist/js/bootstrap.min.js', array(), null, true );
		wp_enqueue_script( 'jquery.min', get_template_directory_uri() . '/js/jquery.min.js', array (), null, true);
		
		wp_enqueue_script( 'modal', get_template_directory_uri() . '/bootstrap/js/dist/modal.js', array (), null, true );
		
	/*wp_enqueue_script( 'wpdocs-bootstrap-bundle-script', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js', array(), null, true );
    wp_enqueue_script( 'wpdocs-datatables-bootstrap-script', 'https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js', array(), null, true );
    wp_enqueue_script( 'wpdocs-jquery-datatables-script', 'https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js', array(), null, true );*/    
	
   }
   add_action('wp_enqueue_scripts', 'Insertion' );


   function mon_theme_post_thumbnails() {
      add_theme_support( 'post-thumbnails' );
    }
    add_action( 'after_setup_theme', 'mon_theme_post_thumbnails' );


   // =========== FORMULAIRE DE RECHERCHE PERSONNALISÉ
    add_filter('get_search_form', 'mon_formulaire_recherche');

	function mon_formulaire_recherche($html){
	 $html = '<form role="search" ' . $aria_label . 'method="get" class="search-form" action="' . esc_url( home_url( '/' ) ) . '">
                <div class="form-group">
                    <span class="icon icon-search">' . _x( '', 'label' ) . '</span>
                    <input type="search" class="form-control" placeholder="' . esc_attr_x( 'Recheche &hellip;', 'placeholder' ) . '" value="' . get_search_query() . '" name="s" />
                </div>
            </form>';
	 return $html;
	}


    function mon_formulaire_recherche_1( $html_1 ) {
		
		$html_1 = '<form role="search" ' . $aria_label . 'method="get" class="search-form" action="' . esc_url( home_url( '/' ) ) . '">
		 <div class="input-group mb-5 mt-5">
		<input type="text" class="form-control input-recherche" placeholder="' . esc_attr_x( 'Recheche &hellip;', 'placeholder' ) . '" value="' . get_search_query() . '" name="s" aria-label="Recherche" aria-describedby="basic-addon2">
		<div class="input-group-append">
             <button class="btn btn-outline-secondary bouton-recherche" type="submit">Recherche</button>
        </div>
		</div>
		</form>';
		
        return $html_1;
    }



    // Mise en forme CSS des champs input par défaut
        function mise_forme_css_champs($fields){
            
		      $fields['author'] = '<div class="form-group">' .'<label for="name">' . __( 'Nom' ) . '</label> ' . '<input id="author" placeholder="Votre nom de famille" name="author" type="text" value="' .
                esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' class="form-control"/>'.( $req ? '<span class="required">*</span>' : '' )  .
                '</div>';
		 
		      $fields['email'] = '<div class="form-group">' .'<label for="email">' . __( 'Adresse Mail' ) . '</label> ' . '<input id="email" placeholder="email@example.com" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                '" size="30"' . $aria_req . '  class="form-control" />'  .( $req ? '<span class="required">*</span>' : '' ) 
                 .
                '</div>';
		 
		      $fields['url'] = '<div class="form-group">' .'<label for="url">' . __( 'Website', 'domainreference' ) . '</label>' .'<input id="url" name="url" placeholder="http://adresse-de-ton-site-internet.com" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" class="form-control"/> ' .
               '</div>';
    
             return $fields;
		 
	 }
     add_filter('comment_form_default_fields','mise_forme_css_champs');
     

		// Changer la position par défaut des champs
		add_filter( 'comment_form_fields', 'changer_ordre_champ' );
		function changer_ordre_champ( $fields ) {
			$comment_field = $fields['comment'];
			unset( $fields['comment'] );
			$fields['comment'] = $comment_field;
			return $fields;
		}

        add_action( 'comment_form_logged_in_after', 'champ_input_apres_connexion' );
		//add_action( 'comment_form_after_fields', 'pmg_comment_tut_fields' );
		function champ_input_apres_connexion()
		{
			?>
            <div class="form-group">
			<label for="name"><?php _e( 'Nom *' ); ?></label>
			<input type="text" class="form-control" name="author" value="<?php esc_attr( $commenter['comment_author'] ); ?>" id="name">
			</div>
            <div class="form-group">
			<label for="email"><?php _e( 'Adresse Mail *' ); ?></label>
			<input type="email" class="form-control" name="email" id="email">
			</div>
			<?php
		}



		   // Cette fonction est destinée à céer le type personnalisé produit
		   function type_personnaliser() {
				$args = array(
					'public' => true,
					'rewrite' => array( 'slug' => 'produit' ),
					'has_archive' => true,
					'label'  => __( 'Produits', 'textdomain' ),
					'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
				);
				register_post_type( 'produit', $args );
			}
			add_action( 'init', 'type_personnaliser' );
            

           add_filter('get_comment_author', 'comments_filter_uprise', 10, 1);

			function comments_filter_uprise( $author = '' ) {
				$comment = get_comment( $comment_author_email );

				if ( !empty($comment->comment_author_email) ) {
					
					if (!empty($comment->comment_author_email)){
						
						//$commenter = wp_get_current_commenter();
						//$user->display_name;
						//var_dump($user->display_name);
						/*$user=get_user_by('email', $comment->comment_author_email);
						var_dump($user->first_name);
						$author=$user->first_name.' '.substr($user->last_name,0,1).'.';*/
						
					} else {
						
						$user = get_user_by( 'email', $comment->comment_author_email );
						$author = $user->first_name;
						
					}
					
				} else {
					
					$user=get_userdata($comment->user_id);
					$author=$user->first_name.' '.substr($user->last_name,0,1).'.';
					$author = $comment->comment_author;
					
				}
				//var_dump($author);
				return $author;
			}
      


       
       /* function montheme_pagination(){
			
           echo '<nav aria-label="Page navigation example">';
			echo '<ul class="pagination">';
              $pages = paginate_links(['type' => 'array']);
            
			   foreach($pages as $page){
				         $active = strpos($page, 'current');
						 echo '<li class="page-item">';
				         echo str_replace('page-numbers', 'page-link', $page);
						 echo '</li>';
				}
                var_dump($pages);
			echo '</ul>';
           echo '</nav>';
          }*/


            /*function personnaliser_longueur_excerpt( $length ) {
				return 10;
			}
			add_filter( 'excerpt_length', 'personnaliser_longueur_excerpt', 999 );*/


            function mytheme_post_thumbnails() {
			  add_theme_support( 'post-thumbnails' );
			}
			add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

			add_filter('comment_reply_link', 'twbs_reply_link_class');
			function twbs_reply_link_class($class){
				$class = str_replace("class='comment-reply-link", "class='comment-reply-link reply", $class);
				return $class;
			}

            // Ajout d'une classe à tous les contenus
            function wp_ajout_class_pour_content($content) {
				$content = str_replace('<p>', '<p class="font-weight-light text-justify">', $content);
				return $content;
			}
            
			add_filter('the_content', 'wp_ajout_class_pour_content', 9999);
			//add_filter('the_excerpt', 'wph_add_class_for_p_tag', 9999);
			
           function wp_ajout_class_pour_content_ul($content) {
             $content = str_replace('<ul>', '<ul class="font-weight-light text-justify">', $content);
		     return $content;
			}
            
			add_filter('the_content', 'wp_ajout_class_pour_content_ul', 9999);

			// Mise en forme CSS de la liste des commentaires
			function my_comments_callback( $comment, $args, $depth ) {
			$GLOBALS['comment'] = $comment;
			?>
			<!-- -->
			<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
				<div class="vcard bio testimonial-img">
					<img src="<?php echo get_theme_file_uri( 'images/avatar1.jpg' ); ?>"/>
				</div>

					<div class="comment-body">
						<?php printf( __( '<h3 class="fn">%s</h3>' ), get_comment_author_link() ); ?>
					<div class="meta mb-2">
					<?php echo '<time datetime="' . get_comment_date( 'c' ) . '">' . get_comment_date() . '</time>'; ?>
					</div>
						<p>
							<?php comment_text(); ?>
						</p>

					<p>
						<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reponse', 'twentyeleven' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
					</p>
				</div>
			</li>
			<?php
		}



