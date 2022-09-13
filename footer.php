<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package first-impact-site
 */

?>


<footer id="colophon" class="site-footer">
        <div class="footerBox">
                <div class="socialMedia">
                        <a href="<?php the_field('social_media_url_1'); ?>" target="_blank">
                                <img src="<?php the_field('social_media_icon_1'); ?>" alt="Impact Zone GitHub">
                        </a>
                        <a href="mailto:<?php the_field('social_media_url_2'); ?>" target="_blank">
                                <img src="<?php the_field('social_media_icon_2'); ?>" alt="Impact Zone Email">
                        </a>
                        <a href="<?php the_field('social_media_url_3'); ?>" target="_blank">
                                <img src="<?php the_field('social_media_icon_3'); ?>" alt="Impact Zone Website">
                        </a>                                              
                </div>

                <p>&copy; Impact Zone </p>
                <p>   Water Scarcity 2022</p>

                <div class="icon-attribution">
                        <p>All icons sourced from flaticon</p>
                        <a href="https://www.flaticon.com/" target="_blank">
                                <img src="http://water-scarcity.local/wp-content/uploads/2022/09/flaticon-1.png" alt="FlatIcon Logo">
                        </a>
                </div>
        </div>	

        
</footer><!-- #colophon -->

</div><!-- #page -->



<?php wp_footer(); ?>
</body>

</html>