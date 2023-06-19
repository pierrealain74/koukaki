<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<footer id="colophon" class="site-footer">
  <div class="oscar">
    <h2 class="titre_oscar">
      Fleurs d’oranger & chats errants est nominé aux Oscars Short Film Animated de 2022 !
    </h2>
    <img src="<?php echo get_template_directory_uri() . '/assets/images/oscar.png'; ?>" alt="oscar pour le studio koukaki" class="imgRight">
  </div>
  <ul class="footer-links">
    <li><a href="#">Mentions Légales</a></li>
    <li><a href="#">STUDIO KOUKAKI</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
</footer>

<!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
