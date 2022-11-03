<?php
/**
 * Title: Footer credits.
 * Slug: internationalisedtheme/credits
 */
?>
<!-- wp:paragraph -->
<p>
<?php
    printf(
        /* translators: %s: Coffee. */
        esc_html__( 'Proudly powered by %s.', 'internationalisedtheme' ),
        '<a href="' . esc_url( __( 'https://en.wikipedia.org/wiki/Coffee/', 'internationalisedtheme' ) ) . '">Coffee</a>'
    );
    ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>
    <?php 
    
    printf( 
        /* translators: %s: the current year value */
        __('Copyright %s', 'internationalisedtheme'), 
        date('Y') 
    ); 
    ?> 
</p>
<!-- /wp:paragraph -->
