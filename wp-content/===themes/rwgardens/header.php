<!DOCTYPE html>
<html lang="en">
		<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<link rel="icon" type="<?php echo esc_url( get_template_directory_uri() ); ?>/image/png" sizes="32x32" href="images/favicon.png">
		<?php wp_head(); ?>
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" rel="stylesheet" type="text/css">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/magnific-popup.css" rel="stylesheet" type="text/css">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
		</head>
	 
  <body>
    <header>
        <div class="container">
            <div class="left-div">
                <p><?php echo $header_content = get_field("header_content",'option'); ?></p>
            </div>
            <div class="ryt-div">
                <ul>
                    <li><span><i class="fa fa-envelope-open" aria-hidden="true"></i></span><a href="mailto:<?php echo $email = get_field("email",'option'); ?>"><?php echo $email = get_field("email",'option'); ?></a></li>
					 <?php  $phone_numbers = get_field("phone_number",'option');
								$phone = preg_replace('/\D+/', '', $phone_numbers);
								?>
								
                    <li><span><i class="fa fa-phone" aria-hidden="true"></i></span><a href="tel:<?php echo $phone;?>"><?php echo $phone_numbers;?></a></li>
                </ul>
            </div>
            <div class="main-nav">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
							<?php		

							$logo = get_field("header_logo",'option');
							?>
							<a  class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img alt="logo" class="logo"   src="<?php echo  $logo;?>"></a>
                     </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                             <?php

			$defaults = array(
			'theme_location'  => '',
			'menu'            => 'main_menu',
			'container'       => '',
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => 'menu',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '%3$s',
			'depth'           => 0,
			'walker'          => ''
			);

			wp_nav_menu( $defaults );

			?>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
        </div>
    </header>
	