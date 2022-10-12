<?php 
//get header
get_header();
the_post();
?>
<!-- single product page -->
<section class="blog-detail">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="blog-content p-5">
                    <h2><?php echo the_title();?></h2>
                    <?php 
                    //get img path 
                    $imgpath = wp_get_attachment_image_src( get_post_thumbnail_id(), "large" );
                    ?>
                    <img src="<?php echo $imgpath[0]?>" alt="" class="img-fluid">
                    <div class="post-content">
                        <h5><?php the_date();?></h5>
                        <h6><?php the_author();?></h6>
                        <p><?php the_content();?></p>
                    </div>
                    <button class="btn btn-warning"><a class="text-white" href="<?php the_permalink(59)?>">Back to blogs</a></button>
                </div>
            </div>
        </div>
    </div>
</section>

<!--comments section in detail page -->
<section class="comments">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="comment-form">
                    <?php echo comments_template();?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
//get footer
get_footer();
?>