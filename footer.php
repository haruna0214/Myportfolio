<!-- footer  -->
<footer>
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'footer-menu',
        )
    );
    ?>
    <p class="copyright">&copy;<?php bloginfo('name'); ?></p>
</footer>
<!-- footer  -->

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="js/slick.js"></script>
<script src="js/main.js"></script> -->
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<?php wp_footer(); ?>
</body>

</html>
