<?php
/*
Template Name: Sobre
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
		<div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8 paper">
                    <?php the_field('description'); ?>
                </div>
            </div>
    </section>
</main>
<?php get_footer();	?>