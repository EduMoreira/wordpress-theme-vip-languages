<?php
/*
Template Name: Contato
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
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="uppercase">Dúvidas ou sugestões?</h3>
                    <?php echo do_shortcode('[contact-form-7 id="4" title="Contato"]'); ?>
                </div>
                <div class="col-md-3">
                </div>
                <div class="col-md-3">
                    <h3 class="uppercase"></h3>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer();	?>