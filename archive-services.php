<?php
get_header();

$args = array(
    'post_type'       => 'services',
    'post_status'     => 'publish',
    'posts_per_page'  => -1,
    'display_limit'   => -1,
);

$query = new WP_Query($args);

// Render the cards section
if ($query->have_posts()) : ?>
    <div class="l-content-wrapper">
        <div class="l-section card">
            <div class="l-container card__row">
                <div class="card__items">
                    <?php while ($query->have_posts()) :
                        $query->the_post();

                        $service_background_color = get_field('home_page_column_color');
                        $service_icon = get_field('service_icon');
                        $service_description = get_field('service_description');
                    ?>

                        <div class="card__item card__item--<?php echo $service_background_color; ?>">
                            <div class="card__item__head">
                                <?php if (!empty($service_icon)) : ?>
                                    <div class="card__item__icon-wrapper">
                                        <img
                                            src="<?php echo $service_icon['url']; ?>"
                                            alt="Service Icon"
                                            class="card__item__icon"
                                        />
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="card__item__body">
                                <div class="card__item__content copy">
                                    <h3 class="card__item__title">
                                        <?php the_title(); ?>
                                    </h3>

                                    <?php if (!empty($service_description)) : ?>
                                        <p class="card__item__excerpt">
                                            <?php echo $service_description; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="card__item__footer">
                                <a href="<?php the_permalink(); ?>">
                                    <button type="button" class="btn btn--black">
                                        Learn more
                                    </button>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif;

get_footer();
