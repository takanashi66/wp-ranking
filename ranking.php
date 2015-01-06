<?php get_header(); ?>


<h1>アクセスランキング</h1>

<?php
	$args = array(
		'post_type'     => 'post',  //投稿タイプ
		'numberposts'   => 5,       //表示数
		'meta_key'      => 'post_views_count',
		'orderby'       => 'meta_value_num',
		'order'         => 'DESC',
	);
	$the_query = new WP_Query( $args );
?>

<?php if ( $the_query->have_posts() ) : ?>

	<ul>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<li>
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
				<span>
					<?php echo(get_post_views(get_the_ID())."views"); ?>
				</span>
			</li>

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	</ul>

<?php else : ?>
	<p>アクセスランキングはまだ集計されていません。</p>
<?php endif; ?>
<?php wp_reset_query(); ?>


<?php get_footer(); ?>