<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 */
?>
<?php get_header(); ?>

    <section id="content" role="main">
        <nav id="portfolio-nav">
            <a href="#" class="platform active" data-filter="all">All</a>
            <?php
            $platforms = get_terms( 'platform' );
            if ( !empty( $platforms ) ) :
                foreach ( $platforms as $platform ) : ?>
                   <a href="#" class="platform" data-filter="<?php esc_attr_e( $platform->slug ); ?>"><?php esc_html_e( $platform->name ); ?></a>
                <?php endforeach;
            endif;
            ?>
        </nav>
        <section id="portfolio-items">
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="portfolio-item-<?php the_ID() ?>" class="portfolio-item-container <?php raizlabs_the_terms( 'platform', ' ', true ); ?> <?php raizlabs_the_terms( 'portfolio_cat', ' ', true ); ?>" data-platforms="<?php raizlabs_the_terms( 'platform', ',', true ); ?>">
                    <div class="container">
                        <a href="<?php the_permalink(); ?>">
                            <div class="text">
                                <h2><?php the_title(); ?></h2>
                                <span class="platforms"><?php raizlabs_the_terms( 'platform' ); ?></span>
                                <?php if ( $excerpt = get_the_excerpt() ) : ?>
                                    <div class="work-excerpt"><p><?php echo $excerpt; ?></p></div>
                                <?php endif; ?>
                            </div>
                            <div class="image">
                                <?php the_post_thumbnail( 'full' ); ?>
                            </div>
                        </a>
                    </div>
                </article>
            <?php endwhile; // end of the loop. ?>
        </section>
    </section><!-- #content -->


<?php get_footer(); ?>
