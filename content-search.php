<div class="entry-summary">
	<h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
	<p>
		<?php 
		   the_excerpt(); 
		   //the_content();
		?>
	</p>
    <a href="<?php echo get_permalink(); ?>" class="float-left read">Lire plus</a><br/>
</div><!-- .entry-summary -->