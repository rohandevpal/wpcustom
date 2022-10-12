<?php 
//add header
get_header();
get_sidebar();

?>

<section class="blogs">
    <div class="container pt-5 pb-5">
        <caption>
            <h2 class="text-center">Our Blogs</h2>
        </caption>
        <div class="row">
            <?php
                while (have_posts()) {
                    the_post();       
                   $img = wp_get_attachment_image_src( get_post_thumbnail_id(), "large" );
                //    print_r($img);
            ?>
            <div class="col-4 mt-3">
                <div class="card">
                    <img src="<?php echo $img[0]?>" alt="" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo the_title();?></h2>
                        <h5 class="pt-3"><?php echo get_the_date();?></h5>
                        <p class="card-text"><?php echo the_excerpt()?></p>
                        <button class="btn btn-success"><a class="text-white" href="<?php the_permalink()?>">Read
                                More</a></button>
                    </div>
                </div>
            </div>
            <?php }
            ?>
        </div>
    </div>
    <div class="pagination pb-5 pt-5 d-flex justify-content-center">
        <?php echo wp_pagenavi()?>
    </div>
</section>

<?php
//add footer
get_footer(); 
?>