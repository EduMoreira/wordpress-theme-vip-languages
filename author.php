<?php
/*
The template for displaying Author Archive pages
*/
?>
<?php get_header(); ?>
    <section id="banner">
    </section>
    <section id="author">
        <div class="inner">
            <?php 
              $user_id = get_the_author_meta('ID');
              $user_image = false;
              if (function_exists('get_field')) {
                $attachment_id = get_field('user_options_author_photo', 'user_'.$user_id);
                if ($attachment_id) {
                  $user_image = wp_get_attachment_image_src($attachment_id, 'author-photo');
                }
              } // end if function
              if ($user_image) {
                $user_image = '<img src="'.$user_image[0].'" width="'.
                              $user_image[1].'" height="'.$user_image[2].
                              '" alt="'.$user_name.'" />';
              }
              if (!$user_image) {
                $user_name = get_the_author();
                $user_email = get_the_author_meta('user_email');
                $user_image = get_avatar($user_email, 300, NULL, $user_name);
              }
            ?>
            <div class="author-info">
              <div class="author-image" itemprop="image">
                <?php echo $user_image; ?>
              </div>
              <div class="author-description" itemprop="description">
                <h1 itemprop="name"><?php echo get_the_author(); ?></h1>
                <?php 
                  $description = false;
                  if (function_exists('get_field')) {
                    $description = get_field('user_options_detailed_bio', 'user_'.$user_id);
                  } // end if function
                  if (!$description) {
                    $description = get_the_author_meta('description');
                  }
                ?>
                <p itemprop="description"><?php echo $description; ?></p>
              </div>
            </div>
        </div>
    </section>
<?php get_footer();	?>