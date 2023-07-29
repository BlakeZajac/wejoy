<?php
get_header();

// Flexible content: Layout
if ( have_rows ( 'layout' ) ): ?>
    <div class="l-container">
        <?php while ( have_rows ( 'layout' ) ):
            the_row();
            
            // Hero section
            if ( get_row_layout() == 'hero' ):

                $hero_heading       =   get_sub_field('hero_heading');
                $hero_body          =   get_sub_field('hero_body');
                $hero_button_text   =   get_sub_field('hero_button_text');
                $hero_button_url    =   get_sub_field('hero_button_url');
                $hero_image_one     =   get_sub_field('column_image_one');
                $hero_image_two     =   get_sub_field('column_image_two');
            
            endif;
            ?>
        <?php endwhile; ?>
    </div>
<?php endif;

get_footer();