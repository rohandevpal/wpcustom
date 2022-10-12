<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head()?>
    <title>Rohan's Theme</title>
</head>

<body <?php body_class('newClass')?>>
    <?php
if(function_exists('wp_body-open')){
    wp_body_open( );
}
?>
    <div class="mainHeader">
        <?php 
    get_template_part('template-parts/header/nav'); //get_template_part help us to get the template data ( as in core php web make includes in wordpress we run get_template_parts()); you can reuse the code at multiple places
    ?>
    </div>