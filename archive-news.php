<?php

get_header();

?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">

    <header class="page-header">
      <h1 class="page-title">
        <?php post_type_archive_title(); ?>
      </h1>
    </header>

    <?php if (have_posts()) : ?>
      <div class="entries-list">
        <?php while (have_posts()) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
              <h2 class="entry-title">
                <a href="<?php the_permalink(); ?>" rel="bookmark">
                  <?php the_title(); ?>
                </a>
              </h2>
            </header>

            <div class="entry-content">
              <div class="post-image">
                <?php the_post_thumbnail('medium'); ?>
              </div>
              <?php the_excerpt(); ?>
            </div>
          </article>
        <?php endwhile; ?>
      </div>
      <?php the_posts_navigation(); ?>
    <?php else : ?>
      <p><?php _e('Sorry, no posts found.', 'akash-labs'); ?></p>
    <?php endif; ?>

  </main>
</div>

<?php

get_sidebar();
get_footer();

?>