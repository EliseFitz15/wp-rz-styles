<?php
/**
 * The template for displaying the home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 */

get_header();

// front page data
$intro              = get_post_meta( $post->ID, '_raizlabs_front_page_intro', true );
$philosophy_page    = get_post_meta( $post->ID, '_raizlabs_front_page_philosophy_page', true );
$cta                = get_post_meta( $post->ID, '_raizlabs_front_page_cta', true );

?>

<div id="page-wrapper">

    <div id="page">
        <div class="atf">
            <div class="atf-text">
                <h3 class="we-create">We create</h3>
                <h2 class="what-we-create">
                    <span class="value-prop"
                        data-text-1="Mobile Brands"
                        data-text-2="Unique Experiences"
                        data-text-3="Elegant Solutions"
                        data-text-4="Inspired Products"
                        data-text-5="Great Software"
                    >
                        <!-- Yup. -->
                        <span>G</span><span>r</span><span>e</span><span>a</span><span>t</span><span> </span><span>S</span><span>o</span><span>f</span><span>t</span><span>w</span><span>a</span><span>r</span><span>e</span>
                    </span>
                </h2>
                <div class="hr"></div>
            </div>
            <div class="atf-buttons">
                <div class="button work">
                    <a href="/portfolio">View our work</a>
                </div>
                <div class="button contact">
                    <a href="/contact">Let's chat</a>
                </div>
            </div>
            <div class="atf-downarrow">
                <div id="chevron"></div>
            </div>
        </div>

        <div class="container" id="scroll-on-chevron-click">
            <?php if ( $intro ) : ?>
                <div class="home_intro" id="intro">
                    <?php echo apply_filters( 'the_excerpt', do_shortcode($intro) ); ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="shaded">
            <div class="container group">

                <div class="products_img"><img src="/wp-content/uploads/2015/10/img-products-v3.jpg" width="632" height="534" /></div>

                <div class="products_copy">
                    <h1 class="kavaitl">We ship products.</h1>
                    <?php
                    if ( intval( $philosophy_page ) ) :
                        $excerpt = raizlabs_get_post_excerpt( $philosophy_page );
                        echo apply_filters( 'the_excerpt', $excerpt ); ?>
                        <p><a href="/work" class="button hellip">Read More</a></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    <?php raizlabs_front_logos(); ?>
    <?php raizlabs_ls_p(); ?>
    <div class="container" id="cta-container">
        <?php if ( $cta ) : ?>
            <div class="home_cta" id="cta">
                <?php echo apply_filters( 'the_excerpt', do_shortcode($cta) ); ?>
                <p><a href="/contact" class="button hellip transparent">Let's Work Together</a></p>
            </div>
        <?php endif; ?>
    </div>

<?php get_footer(); ?>
