<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="/favicon.ico">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">

<script src="http://code.jquery.com/jquery-2.0.0.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
 
	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header" role="banner">

				<div id="inner-header" class="wrap clearfix">

		<div class="container logo-head">
        <div class="row">
          <div class="col-lg-9 col-sm-9">         
            <div class="logo">
            <div class="title">
              <h1>The Vincent Library</h1>
              <span>Saint Thomas More: The Catholic Chapel & Center at Yale University</span>
          </div>
        </div></div>
          <div class="col-lg-3 col-sm-3 visible-lg"> 
           <a href="/contact-us/"> <button class="btn btn-primary btn-large pull-right" style="margin: 40px 0;font-size: 20px;">Ask A Librarian</button></a>
          </div>
      </div>


      </div>


				<div class="container">
					<div class="row">
						<div class="col-12">

             

					<nav role="navigation">
						<?php bones_main_nav(); ?>
					</nav>
				</div>
				</div>
				</div>
				
<?php if ($_SERVER['REQUEST_URI'] == "/") { ?>

<?php echo do_shortcode('[promoslider]') ?>

<?php
 /* 
<div id="carousel-example-generic" class="carousel slide">
   <div class="container">
            <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
              <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
          </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="http://stmlibrary.org/wp-content/uploads/2013/10/jpeg.jpg" alt="">
                    <div class="carousel-caption">
                      <h4></h4>
                      <p>The Vincent Library (STM) was a gift of Fay Vincent, Jr. ’63 LL.B. in honor of Fay Vincent ’31; it houses our general collection. The general collection also includes Classics in Western Spirituality (CWSeries) Reference books (Ref.), Spiritual Guides (SpGuides), and Prayer Guides (Prayer)</p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="http://stmlibrary.org/wp-content/uploads/2013/10/main-slide-2.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>The Reading Room</h4>
                      <p>The Reading Room, at the street end of the library, displays newspapers and journals representing a variety of Christian perspectives, and contains a collection of fiction and poetry by Catholic and other writers.</p>
                    </div>
                  </div>
                  <div class="item">
                     <img src="http://stmlibrary.org/wp-content/uploads/2013/10/jpeg-1.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>The Vincent Library</h4>
                      <p>The resources of the library are open to all Yale students, faculty, and staff and to members of the Saint Thomas More community. Students are welcome to use the space for study as well.</p>
                    </div>
                  </div>

            <div class="item">
                     <img src="http://stmlibrary.org/wp-content/uploads/2013/11/stm4.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>The Vincent Library</h4>
                      <p>The resources of the library are open to all Yale students, faculty, and staff and to members of the Saint Thomas More community. Students are welcome to use the space for study as well.</p>
                    </div>
                  </div>


                </div>
           <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
              <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
              <span class="icon-next"></span>
            </a>
              </div>
  </div>*/
?>

 
<? } ?>

				</div> <?php // end #inner-header ?>

			</header> <?php // end header ?>