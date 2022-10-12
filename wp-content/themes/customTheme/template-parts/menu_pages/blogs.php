<section class="blogs">
    <div class="container">
        <div class="row">
            <?php 
            while (have_posts()) {
                $imgPath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium');
                the_post();
                ?>
            <div class="col">
                <div class="card">
                    <img src="<?php echo $imgPath[0]?>" alt="">
                    <p><?php the_excerpt()?></p>
                </div>
            </div>
            <?php }
            ?>
        </div>
    </div>
</section>