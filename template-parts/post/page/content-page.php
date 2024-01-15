<?php 
/**
 *  Template part to display page content in page.php
 */

?>

<article id="post-<?php the_ID(); ?>">
  <?php the_title( '<h1 class="entry-title">', '</h1>' );  ?>

    <!-- Post thumbnail -->

  <?php 
    if(has_post_thumbnail()):
      the_post_thumbnail('full'); // full, Large, medium, custom size
    endif;
  ?>
  <div class="entry-content">
      <?php 
        the_content(); 

        wp_link_pages( array (
          'before' => '<div class="page-links">' . esc_html__('Pages:', 'ninestars'), 
          'after' => '</div>',
        ));
      ?>
  </div>

  <?php if ( get_edit_post_link()) : ?>
    <footer class="entry-footer">
      <?php 
        edit_post_link(
          sprintf(
            wp_kses(
              /* translators: %s: Nome of current post. Only visible to screen readers */
              __( 'Edit <span class="screen-render-text">%s</span>', 'ninestars' ),
              array(
                'span' => array(
                  'class' => array(),
                ),
              )
            ),
            get_the_title()
          ),
          '<span class="edit-link">',
          '</span>'
        );
      ?>
    </footer>
  <?php endif; ?>
</article>