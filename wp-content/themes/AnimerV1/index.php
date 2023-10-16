<?php get_header() ?>

<div class="hero">
</div>

<section class="recommendation">
    <div class="container">
        <h2>Recommendation</h2>
        <div class="grid grid-cols-1 grid-cols-lg-2">
            <?php 
                $q = new WP_Query([
                    'post_type' => 'anime',
                    'posts_per_page' => 4,
                    'orderby' => 'meta_value_num',
                    'order' => 'desc',
                    'meta_key' => 'view_count'
                ]);

                while($q->have_posts()) : $q->the_post()
            ?>
                <div class="card">
                    <a href="<?php the_permalink() ?>">
                        <div class="card-head">
                            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                        </div>
                        <div class="card-body">
                            <h3><?php the_title()?></h3>
                        </div>
                    </a>
                </div>
            <?php endwhile ?>
        </div>
    </div>
</section>

<section class="recents">
    <div class="container">
        <h2>Recents</h2>
        <div class="grid grid-cols-1 grid-cols-lg-2">
            <?php 
                $q = new WP_Query([
                    'post_type' => 'anime',
                    'posts_per_page' => 4
                ]);

                while($q->have_posts()) : $q->the_post()
            ?>
                <div class="card">
                    <a href="<?php the_permalink() ?>">
                        <div class="card-head">
                            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                        </div>
                        <div class="card-body">
                            <h3><?php the_title()?></h3>
                        </div>
                    </a>
                </div>
            <?php endwhile ?>
        </div>
    </div>
</section>


<?php get_footer() ?>