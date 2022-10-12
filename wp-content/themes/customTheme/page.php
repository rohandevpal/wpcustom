<?php
//call header
get_header();
// echo "rohan";
//post 
the_post();
?>
<div class="container">
    <div class="row">
        <div class="col">
            
        <?php 
        //get the title of the page 
        // the_title(); 
    
        //get the image using image path
        $imgPath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium');

        print_r($imgPath);
        ?>
        <img src="<?php echo $imgPath[0]?>" alt="">
        <?php
        //get the thumbnail with img tag
        // the_post_thumbnail('medium');
        the_content(); // get the content of the page
        ?>  

        </div>
    </div>
</div>
<?php
//call footer
get_footer()
?>