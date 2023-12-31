
<div class="back">
    <a href="#navbar">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M11 16h2v-4.2l1.6 1.6L16 12l-4-4l-4 4l1.4 1.4l1.6-1.6V16Zm1 6q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22Zm0-2q3.35 0 5.675-2.325T20 12q0-3.35-2.325-5.675T12 4Q8.65 4 6.325 6.325T4 12q0 3.35 2.325 5.675T12 20Zm0-8Z"/></svg>
    </a>

</div>

<footer class="footer">
    <div class="copyright">
        Copyright © <?php echo date('Y') ?> - All rights reserved
    </div>

    <div class="socials">
        <?php
            $q = new WP_Query([
                'post_type' => 'social_media' 
            ]);

            while($q->have_posts()) : $q->the_post()
        ?>
        <a href="<?php echo get_field('link') ?>">
            <span><?php the_title() ?></span>
        </a>
        <?php endwhile ?>
    </div>
</footer>

<?php wp_footer() ?>
</body>
</html>