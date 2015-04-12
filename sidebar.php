<?php
/*
 * The Sidebar containing the news and announcements area.
 */
?>
<aside class="recent-news" role="region">

	<?php
		$args = array(
			'post_type'				=> 'announcements',
		   	'posts_per_page'      	=> '-1',
		   	'orderby'				=> 'meta_value',
		   	'order'					=> 'DEC',  //  Newest at the top
		   	'status'					=> 'published'
		);

		$query = new WP_Query($args);
		if ($query->have_posts()) : while($query->have_posts()) : $query->the_post();
	?>

	<div class="news-item">
		<h3><?php the_field('announcement_header'); ?></h3>
		<div class="news-divider"></div>
		<p><?php the_field('announcement_content'); ?></p>
		<span class="announcement-time-stamp">( Posted: <?php the_time('F d, Y'); ?> )</span>
	</div>  <!-- .news-item -->

	<?php
		endwhile; endif;
		wp_reset_query();
	?>

</aside>  <!-- .recent-news -->