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
<div class="header">
    <div class="top_header">
        <div class="wrapper">
            <div class="contaier-fluid">
                <div class="row">
                    <div class="promo">
                        <span class="text-white">Lorem Ipsum Dolor Etal Momo Hehe <?php echo file_get_contents($img.'/gift.svg'); ?></span>
                    </div>
                    <div class="promo_form">
                        <?php echo do_shortcode('[contact-form-7 id="d948308" title="Untitled"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo $home_url; ?>">
                <img src="<?php echo $img; ?>/logo.png" alt="CODE HAVOC">
                <span>CODE</span>HAVOC
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <?php wp_nav_menu(array(
                    'theme_location' => 'primary', // Use your registered menu location
                    'menu_class' => 'd-flex align-item-center',
                    'container' => false,
                ));?>
                </div>
            </div>
        </div>
    </nav>
</div>
    
