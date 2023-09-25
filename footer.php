</main>
    <footer>
    <?php 
        wp_nav_menu ([
        'theme_location' => 'footer',
        'container' => false,
        'container_aria_label' => 'menu du footer',
        ])
    ?>
    </footer>
<?php wp_footer() ?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>