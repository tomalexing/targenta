<?php $postCount++;?>
<div <?php post_class( 'entry entry-' . $postCount ); ?> id="post-<?php the_ID(); ?>">
	<div class="entrytitle">
		<h2>
		<?php if ( ! is_single() ) : ?>
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		<?php else : ?>
			<?php the_title(); ?>
		<?php endif; ?>
		</h2>
		<h3><?php the_time( get_option( 'date_format' ) ); ?></h3>
	</div>
	<div class="entrybody">
		<?php the_content( __( 'Read the rest of this entry &raquo;', 'simpla' ) ); ?>
		<?php wp_link_pages(); ?>
	</div>

	<div class="entrymeta">
	<div class="postinfo">
		<span class="postedby"><?php printf( __( 'Posted by %1$s', 'simpla' ), get_the_author() ); ?></span><br />
		<?php if ( !is_page() ) { ?>
			<span class="filedto"><?php printf( __( 'Filed in %1$s', 'simpla' ), get_the_category_list( ', ' ) ); ?></span><br />
			<?php the_tags( '<span class="filedto">' . __( 'Tags: ', 'simpla' ), ', ', '</span><br />' ); ?>
		<?php } ?>
		<?php edit_post_link( __( 'Edit', 'simpla' ), '<span class="filedto">', '</span>' ); ?>
	</div>
	<?php comments_popup_link( __( 'Leave a Comment &#187;', 'simpla' ), __( '1 Comment &#187;', 'simpla' ), __( '% Comments &#187;', 'simpla' ), 'commentslink' ); ?>
	</div>

</div>
<div class="commentsblock">
	<?php comments_template(); ?>
</div>