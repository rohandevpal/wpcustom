<?php
//get your logo img
$site_logo = get_header_image();
?>
<section class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="<?php echo  site_url()?>">
                                <img src="<?php echo $site_logo?>" alt="" width="100px">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <?php 
                                //call menu 
                                wp_nav_menu(array(
                                    'theme_location'=>'Primary-manu',
                                    'menu_class' => 'navbar',
                                ));                          
                                ?>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>