<?php get_header() ?>
<?php add_view_count(get_the_ID()) ?>

<div class="container">
    <img class="sa-image" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">

    <h1 class="s-title"><?php the_title() ?></h1>
    <div class="sa-terms">
    <h3 class="sa-term sa-view">Views: <?php echo get_view_count(get_the_ID()) ?></h3>
    <h3 class="sa-term sa-genre">Genre: </h3>
    <ul>
        <?php 
            $genres = get_the_terms(get_the_ID(), 'genre');

            if($genres == null) echo "No genre";
            else {

            foreach($genres as $genre) :
        ?>
    <li class="sa-item"><?php echo $genre->name ?></li>
    <?php endforeach; } ?>
    </ul>
    
    
    <h3 class="sa-term sa-season">Season: </h3>
    <ul>
        <?php 
            $seasons = get_the_terms(get_the_ID(), 'season');
            if($seasons == null) echo "No season";
            else {
            foreach($seasons as $season) :
        ?>
        <li class="sa-item"><?php echo $season->name ?></li>
        <?php endforeach; } ?>
        </ul>
    </div>

    <p class="sa-synopsis"><?php echo get_field('synopsis') ?></p>

    <h3 class="sec-title">Episodes</h3>
    <ul>
        <?php 
            $episodes = get_field('episode');
            
            if($episodes == null) {
                echo "No Episodes";
            } else {
            
            foreach($episodes as $episode) :
                ?>
                <a href="<?php echo get_permalink($episode->ID) ?>">
                    <p><?php echo $episode->post_title ?></p>
                </a>

            <?php endforeach;
        }?>

    </ul>
    
        <h3>Gallery</h3>
        
        <div class="gallery-wrap grid grid-cols-1 grid-cols-lg-2">
            <?php 

                
                if($query = get_field('gallery') == null) {
                    echo "No gallery";
                } else {
                
                $q = new WP_Query([
                    'post_type' => 'gallery',
                    'p' => get_field('gallery')[0]->ID
                ]);

            

                while($q->have_posts()) : $q->the_post();
            
                $images = get_field('images');
                foreach($images as $image):
            ?>
                <img class="gallery-item" src="<?php echo $image->guid ?>" alt="">
            
            <?php 
                endforeach;
                endwhile;
            } ?>
        </div>


</div>

<?php get_footer() ?>