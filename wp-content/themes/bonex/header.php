<!DOCTYPE html>
<html lang="sk">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
    <!--OG-->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="" />
    <meta name="description" content="">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@websiteName" />
    <meta name="twitter:domain" content="" />
    <meta name="twitter:image:src" content="https://websiteUrl.com/img/og-image.jpg" />
    <meta name="twitter:description" content="" />
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="images/favicons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/favicons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/favicons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/favicons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="images/favicons/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="images/favicons/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="images/favicons/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="images/favicons/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="images/favicons/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="images/favicons/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="images/favicons/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="images/favicons/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="images/favicons/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="images/favicons/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="images/favicons/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="images/favicons/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="images/favicons/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="images/favicons/mstile-310x310.png" />
    <meta name="theme-color" content="#ffffff"><!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Structured Data -->
    <!--Analytics-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="ly-layout">
        <header class="ly-header">
            <nav class="navbar md-navbar navbar-expand-lg navbar-light">
                <div class="container">
				<?php the_custom_logo();?>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<?php wp_nav_menu( 
   array( 
        'theme_location' => 'menu-1', 
        'menu_id' => 'primary-menu', 
        'menu_class'=>'navbar-nav' 
    ) 
); ?> 
                        <div class="nav-contact">
                            <ul>
                                <li>
                                    <a href=""><i class="icon-smartphone"></i>+421 0909 9029</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>