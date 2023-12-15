<!DOCTYPE html>
<html lang="en"> 
<head>
   <!-- Meta -->
	<meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="Blog Site Template">
   <meta name="author" content="https://mplantamura.com">    
   <link rel="shortcut icon" href="./assets/images/logo.png"> 
    
<?php
   wp_head();
?>
</head> 

<body>
    
   <header class="header text-center">	    
	   <a class="site-title pt-lg-4 mb-0" href="index.html">MPlantamura</a>
	   <nav class="navbar navbar-expand-lg navbar-dark" >  
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<img class="mb-3 mx-auto logo" src="images/logo.png" alt="logo" >			
				
				<?php
					wp_nav_menu(
						array(
							'menu' => 'primary',
							'container' => '',
							'theme_location' => 'primary',
							'items_wrap' => '<ul id="" class="navbar-nav flex-column text-sm-center text-md-left">%3$s</ul>'
						)
					);
				?>

				<hr>
				<ul class="social-list list-inline py-3 mx-auto">
					<li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
				</ul>
			</div>
		</nav>
   </header>
	<div class="main-wrapper">
		<header class="page-title theme-bg-light text-center gradient py-5">
			<!-- Use the_title(); to update page title based on what you name the page. -->
			<h1 class="heading"><?php the_title(); ?></h1>
		</header>