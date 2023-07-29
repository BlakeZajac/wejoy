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
                
                $hero_sticker_image =   get_theme_file_uri('img/sticker-01.png');
                $hero_sticker_text  =   get_theme_file_uri('img/text-design-agency-circular.svg');
                $hero_sticker_icon  =   get_theme_file_uri('img/icon-star.svg');
                ?>
                
                <div class="l-section hero">
                    <div class="l-row hero__row">
                        <div class="l-col hero__col hero__col--content">
                            <div class="copy hero__content">

                                <?php if ( !empty( $hero_heading ) ): ?>
                                    <h1 class="hero__title">
                                        <?php echo $hero_heading; ?>
                                    </h1>
                                <?php endif; ?>

                                <?php if ( !empty( $hero_body ) ): ?>
                                    <p class="hero__body body-md">
                                        <?php echo $hero_body; ?>
                                    </p>
                                <?php endif; ?>

                                <?php if ( !empty( $hero_button_text ) ): ?>
                                    <a href="<?php echo $hero_button_url; ?>">
                                        <button type="button" clas="btn btn--black">
                                            <?php echo $hero_button_text; ?>
                                        </button>
                                    </a>
                                <?php endif; ?>

                            </div>
                        </div>

                        <div class="l-col hero__col hero__col--image">
                            <?php
                            $hero_image_one_alttext = get_post_meta( $hero_image_one, '_wp_attachment_image_alt', true );
                            $hero_image_two_alttext = get_post_meta( $hero_image_two, '_wp_attachment_image_alt', true );
                            ?>

                            <?php if ( !empty( $hero_image_one ) ): ?>
                                <div class="image-shape image-shape--1">
                                    <img
                                        src="<?php echo $hero_image_one['url']; ?>"
                                        alt="<?php echo $hero_image_one_alttext; ?>"
                                        class="image-shape__image"
                                    />
                                </div>
                            <?php endif; ?>

                            <div class="sticker hero__sticker">
                                <img
                                    src="<?php echo esc_url( $hero_sticker_image ); ?>"
                                    alt=""
                                    class="sticker__image"
                                />
                               
                               <img
                                    src="<?php echo esc_url( $hero_sticker_text ); ?>"
                                    alt=""
                                    class="sticker__text anim-rotate"
                                />

                                <img
                                    src="<?php echo esc_url( $hero_sticker_icon ); ?>"
                                    alt=""
                                    class="sticker__icon"
                                />
                            </div>

                            <?php if ( !empty( $hero_image_two ) ): ?>
                                <div class="image-shape image-shape--2">
                                    <img
                                        src="<?php echo $hero_image_two['url']; ?>"
                                        alt="<?php echo $hero_image_two_alttext; ?>"
                                        class="image-shape__image"
                                    />
                                </div>
                            <?php endif; ?>
                        </div>                
                    </div>
                </div>

            <?php endif;
            // End hero section
            ?>
        <?php endwhile; ?>
    </div>
<?php endif;

get_footer();