<li <?php hybrid_comment_attributes(); ?>>
  <div class="row">
    <div class="col-sm-2">
    	<?php echo hybrid_avatar(); ?>

    </div>
    <div class="col-sm-10">
    	<?php echo apply_atomic_shortcode( 'comment_meta', '<div class="comment-meta">[comment-author] [comment-published] [comment-permalink before="| "] [comment-edit-link before="| "]</div>' ); ?>

    	<div class="comment-content">
    		<?php comment_text(); ?>
    	</div><!-- .comment-content -->

    	<?php echo hybrid_comment_reply_link_shortcode( array() ); ?>

    </div>

  </div>



<?php /* No closing </li> is needed.  WordPress will know where to add it. */ ?>