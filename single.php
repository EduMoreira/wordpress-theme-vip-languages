<?php get_header(); ?>
<head>
    <meta name="description" content="<?php the_field('descript'); ?>">
    <title><?php the_title(); ?></title>
</head>
<main>
    <section id="banner">
        <div class="background">
            <div class="content--wrapper">
                <div class="content">
                    <h1 class="uppercase"><?php the_title(); ?></h1>
                    <h2 class="uppercase"><?php the_field('subtitle'); ?></h2>
                </div>
            </div>
        </div>
    </section>
    <section id="article">
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8 paper">
                    <div class="<?php echo get_field('pdf_file')?'download':'hidden-md-up hidden-xs-down'; ?>">
                        <a target="_blank" href="<?php the_field('pdf_file'); ?>">
                            <img class="file-type" src="<?php bloginfo('template_url'); ?>/img/icons/pdf.svg">
                            <spam class="btn btn-green">Download</spam>
                        </a>
                    </div>
                    <?php the_field('video'); ?>
                    <?php the_field('content'); ?>
                </div>
                <div class="offset-md-2 col-md-8 comments">
                    <?php comments_template( '', true ); ?>
                </div>
            </div>
        </div>  
    </section>
</main>
<?php get_footer(); ?>