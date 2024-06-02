<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); 
    include('stylesheet-manager.php');
    $img = get_stylesheet_directory_uri().'/assets/img/global';
    $home_url = get_home_url();
    ?>
</head>
<body>
    
