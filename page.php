<?php
get_header();

// Flexible content: Layout
if ( have_rows ( 'layout' ) ): ?>
    <div class="l-content-wrapper">
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
                ?>
                
                <div class="l-section hero">
                    <div class="l-row hero__row">
                        <div class="l-col hero__col hero__col--content">
                            <div class="copy hero__content">

                                <?php if ( !empty( $hero_heading ) ): ?>
                                    <h2 class="hero__title">
                                        <?php echo $hero_heading; ?>
                                    </h2>
                                <?php endif; ?>

                                <?php if ( !empty( $hero_body ) ): ?>
                                    <p class="hero__body">
                                        <?php echo $hero_body; ?>
                                    </p>
                                <?php endif; ?>

                                <?php if ( !empty( $hero_button_text ) ): ?>
                                    <button type="button" class="btn btn--black">
                                        <a href="<?php echo $hero_button_url; ?>">
                                            <?php echo $hero_button_text; ?>
                                        </a>
                                    </button>
                                <?php endif; ?>

                            </div>
                        </div>

                        <div class="l-col hero__col hero__col--image"></div>                
                    </div>
                </div>

            <?php endif;
            // End hero section
            ?>
        <?php endwhile; ?>
    </div>
<?php endif;

get_footer();