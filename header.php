<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
<title><?php hybrid_document_title(); ?></title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); // wp_head ?>


<script type='text/javascript' src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js'></script>
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
<!--[if lt IE 9]>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.2.0/respond.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
<![endif]-->
</head>

<body <?php hybrid_body_attributes(); ?>>
	<?php get_template_part( 'menu', 'primary' ); // Loads the menu-primary.php template. ?>
	<div id="container">

		<header id="header">

			<hgroup id="branding">
				<h1 id="site-title"><a href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
			</hgroup><!-- #branding -->

		</header><!-- #header -->

		<?php if ( get_header_image() ) echo '<img class="header-image" src="' . esc_url( get_header_image() ) . '" alt="" />'; ?>

		<?php get_template_part( 'menu', 'secondary' ); // Loads the menu-secondary.php template. ?>

		<div id="main">

			<?php get_template_part( 'breadcrumbs' ); // Loads the breadcrumbs.php template. ?>