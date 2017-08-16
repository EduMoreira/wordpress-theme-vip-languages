<?php
/*
Template Name: Professores
*/
?>
<?php get_header(); ?>
<main>
    <section id="banner">
        <!--<div class="background" style="background-image:url(<?php the_field('cover'); ?>);">
			<div class="content--wrapper">
				<div class="content center">
					<?php the_title( '<h1 class="uppercase">', '</h1>' ); ?>
				</div>
			</div>
		</div>-->
    </section>
    <section id="about">
		<?php
		// Set the Current Author Variable $curauth
		$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
		?>
		<div class="author-profile-card">
			<h2>About: <?php echo $curauth->nickname; ?></h2>
			<div class="author-photo">
			<?php echo get_avatar( $curauth->user_email , '90 '); ?>
			</div>
			<p><strong>Website:</strong> <a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a><br />
			<strong>Bio:</strong> <?php echo $curauth->user_description; ?></p>
		</div>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>
		<?php the_excerpt(); ?>
		<?php endwhile; 
		// Previous/next page navigation.
		the_posts_pagination();
		else: ?>
		<p><?php _e('No posts by this author.'); ?></p>
		<?php endif; ?>
	</section>
</main>
<?php get_footer();	?>