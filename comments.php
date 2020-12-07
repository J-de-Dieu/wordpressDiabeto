<?php //comments_template() ?>
<ul class="comment-list">
<?php 
    //wp_list_comments(); 
    wp_list_comments( array( 'callback' => 'my_comments_callback' ) );
?>
</ul>
<div class="comment-form-wrap pt-5">
 <?php
    
       $comments_args = array(
           
                          'fields' => apply_filters(
                               'comment_form_default_fields', array(
                                   
                                   'author' => '<div class="form-group">' . '<label for="name">' . __( 'Nom' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) . '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"  class="form-control" /></div>',
           
                                   'email' => '<div class="form-group"><label for="email">' . __( 'Adresse Mail' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) . '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" class="form-control" /></div>',

                                   'url' => '<div class="form-group"><label for="url">' . __( 'Website' ) . '</label>' . '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" class="form-control"/></div>'
                                   
                               )
                          ),
						  'class_form' => 'p-4 p-md-5 bg-light',
						  //'id_submit'         => 'submit',
						  'class_submit' => 'btn py-3 px-4 btn-primary',
                          // changer le titre du bouton d'envoi
                          'label_submit'=>'Valider',
		   
                         // changer le titre de la section réponse
                         'title_reply'=>' <h3 class="mb-5 h4 font-weight-bold p-4 bg-light">laissez un commentaire</h3>',
		                 'logged_in_as' => '',
		              
		                 // suppression du texte à afficher avant l'ensemble des champs de commentaire"
		                 'comment_notes_before' => '',
		   
                         // suppression du texte à afficher après l'ensemble des champs de commentaire"
                         'comment_notes_after' => '',
		   
                         // redefine your own textarea (the comment body)
                         'comment_field' => '<div class="form-group"><label for="message">' . _x( 'Message', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true" cols="30" rows="10" class="form-control"></textarea></div>',
		                 //Submit Button ID
                         'id_submit' =>' <div class="form-group">'. __( 'comment-submit' ).'</div>',
                   );
       
                         comment_form( $comments_args );
?>
</div>
<?php //comment_form(); ?>