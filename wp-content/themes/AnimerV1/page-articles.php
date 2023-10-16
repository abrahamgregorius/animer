<?php get_header() ?>

<div class="container">
    <h1 class="page-title"><?php the_title() ?></h1>

    <?php
    $q = new WP_Query([
        'post_type' => 'article'
    ]) ;
    
    while($q->have_posts()) : $q->the_post()
    ?>

    <div class="article">
        <h1 class="post-title">
            <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
        </h1>
        <p><?php the_excerpt() ?></p>
    </div>

    <?php endwhile ?>

</div>

<?php get_footer() ?>