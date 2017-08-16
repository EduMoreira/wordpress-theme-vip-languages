<?php
/*
Template Name: Início
*/
?>

<?php get_header(); ?>

<main>

	<!--Carousel-->
	<section id="banner" class="carousel">
		<div>
			<div>
				<div id="carousel" class="carousel slide" data-ride="carousel">
					<?php if( have_rows('carousel') ): ?>
						<div class="carousel-inner" role="listbox">
							<?php $count = 0; ?>
							<?php while( have_rows('carousel') ): the_row(); $count++; ?>
								<div class="carousel-item<?php if($count == 1) echo ' active' ?> background" data-index="<?php echo $count; ?>" style="background-image: url(<?php the_sub_field('carousel_item_background'); ?>);">
									<div class="content">
										<div class="spot">
											<h1><?php the_sub_field('carousel_item_title') ?></h1>
											<h2><?php the_sub_field('carousel_item_subtitle') ?></h2>
											<p><a href="<?php the_sub_field('carousel_item_link'); ?>" class="btn btn-<?php the_sub_field('carousel_item_button_color'); ?>"><?php the_sub_field('carousel_item_button_title'); ?></a></p>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	<!--/Carousel-->

	<section id="welcome">
		<div class="container">
			<div class="row">

				<div class="col-md-6">
					<h3><?php the_field('welcome_title'); ?></h3>
					<p><?php the_field('welcome_text'); ?></p>
				</div>

				<div class="col-md-6">
					<?php the_field('welcome_mov'); ?>
				</div>

			</div>
		</div>
	</section>

	<section id="classroom">

		<div class="container">

		<div class="row">

				<div class="col-md-5">
					<h3><?php the_field('classroom_title'); ?></h3>
					<?php the_field('classroom_text'); ?>
					<ul>
						<?php if( have_rows('classroom') ): ?>
							<?php while ( have_rows('classroom') ) : the_row(); ?>
								<li>
									<h4><?php the_sub_field('title'); ?></h4>
									<img src="<?php the_sub_field('icon'); ?>" class="alignleft" alt="">
									<?php the_sub_field('text'); ?>
								</li>				
							<?php endwhile; ?>
						<?php endif; ?>
					</ul>
				</div>

				<div class="col-md-7">
					<div>

						<h3><?php the_field('highlight_title'); ?></h3>
						<?php the_field('highlight_text'); ?>

						<ul class="scroll">
							<?php if( have_rows('highlight') ): ?>
								<?php while ( have_rows('highlight') ) : the_row(); ?>
									<li class="card">
										<div class="background" style="background-image: url(<?php the_sub_field('cover'); ?>);">
											<h5><?php the_sub_field('title'); ?></h5>
										</div>
										<?php the_sub_field('text'); ?>
										<a href="<?php the_sub_field('url'); ?>" class="btn btn-green" target=_blanck>Ver mais</a>
									</li>				
								<?php endwhile; ?>
							<?php endif; ?>
						</ul>

					</div>
				</div>

			</div>
		</div>
		

	</section>

</main>

<?php get_footer();	?>