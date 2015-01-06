<?php get_header(); ?>


<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?> // ループ処理
		<h1><?php the_title(); ?></h1>
		<?php the_content( ); ?>

		<?php
			//アクセスカウンター
			set_post_views(get_the_ID());
		?>
	<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>