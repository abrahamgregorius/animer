<?php get_header() ?>    
    <section class="anime-list">
        <div class="container">
            <div class="title-section">
                <h1 class="page-title">Anime List</h1>

                <div class="sort">
                    <form method="GET">
                        <label for="sort">
                            Sort by: 
                        </label>
                        <select name="sort" id="sort">
                            <option value="meta_value_num">View Count</option>
                            <option value="title">Alphabetical</option>
                        </select>
                        <select name="order" id="sort">
                            <option value="asc">Ascending</option>
                            <option value="desc">Descending</option>
                        </select>
                        <button type="submit">Sort</button>
                    </form>
                </div>
            </div>
            <div class="grid grid-cols-1 grid-cols-lg-2">
                <?php 
                    $sortby = isset($_GET['sort']) ? $_GET['sort'] : 'title';
                    $order = isset($_GET['order']) ? $_GET['order'] : 'desc';
                    
                    $q = new WP_Query([
                        'post_type' => 'anime',
                        'posts_per_page' => 10,
                        'order' => "$order",
                        'orderby' => "$sortby",
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


<?php get_footer() ?>