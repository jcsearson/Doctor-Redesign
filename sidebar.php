<?php
/*
 * The Sidebar containing the news and announcements area.
 */
?>
<aside class="recent-news" role="region">

	<?php
		$args = array(
		   	'posts_per_page'      	=> '-1',
		   	'orderby'				=> 'meta_value',
		   	'order'					=> 'ASC',
		   	'status'					=> 'published'
		);

		$query = new WP_Query($args);
		if ($query->have_posts()) : while($query->have_posts()) : $query->the_post();
	?>

	<div class="news-item">
		<h3><?php the_title(); ?></h3>
		<div class="news-divider"></div>
		<p><em><?php the_content(); ?></em></p>
	</div>  <!-- .news-item -->

	<?php
		endwhile; endif;
		wp_reset_query();
	?>

</aside>  <!-- .recent-news -->