<?php
/**
 * Template Name: Wiggle Test
 *
 * @package Wiggle_Doug
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<div id="primary" class="content-area wiggle">
	<main id="main" class="site-main">
		<header class="page-header">
			<h1 class="page-title">
				Multiline Headline - Here's how to achieve xxxx in yyyy
			</h1>
			<h2>(without zzzz, aaaa, or bbbb)</h2>
		</header><!-- .page-header -->

		<section class="wiggle__video-form">
			<div class="box-video">
				<figure>
					<video controls class="wiggle-video">
						<source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/video.mp4" type="video/mp4">
						<source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/flower.ogg" type="video/ogg">
						Sorry, your browser doesn't support embedded videos.
					</video>
					<figcaption>Watch this video to learn XXXX</figcaption>
				</figure>
			</div>
			<div class="box-form">
				<h3>Learn How To xxxx</h3>
				<!-- i usually use a contact form plugin and SMTP for forms -->
				<form class="wiggle-form" id="form">
					<div class="form-group">
						<input type="text" id="name-input" name="nameInput" autofocus>
						<label for="name-input">Name</label>
					</div>
					<div class="form-group">
						<input type="email" id="email-input" name="emailInput">
						<label for="email-input">Email</label>
					</div>
					<button type="submit">Yes! Show Me How To X!</button>
				</form>
			</div>
		</section>

		<section class="wiggle__work-with">
			<h3>Here's who we've worked with</h3>
			<div class="grid">
				<div class="box">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.jpg" alt="Logo of who we worked with 1">
				</div>
				<div class="box">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.jpg" alt="Logo of who we worked with 2">
				</div>
				<div class="box">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.jpg" alt="Logo of who we worked with 3">
				</div>
				<div class="box">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.jpg" alt="Logo of who we worked with 4">
				</div>
			</div>
		</section>

		<section class="wiggle__case-studies">
			<div class="wiggle__heading">
				<h2>Need to know more? This case study reveals:</h2>
			</div>
			<div class="grid">
				<div class="overcome overcome--1 module">
					<h3>Overcome objection 1</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="stat stat--1 module">
					<h3>Interesting statistic which means XYZ or supporting graphic</h3>
				</div>
				<div class="overcome overcome--2 module">
					<h3>Overcome objection 2</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="stat stat--2 module">
					<h3>Interesting statistic which means XYZ</h3>
				</div>
				<div class="overcome overcome--3 module">
					<h3>Overcome objection 3</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="stat stat--3 module">
					<h3>Interesting statistic which means XYZ</h3>
				</div>
			</div>
		</section>

		<div class="wiggle__show-me wiggle__show-me--mb">
			<!-- not sure what this is supposed to do -->
			<a href="#" class="show-link">
				<span class="medium">Yes! Show me how to xyz</span>
				<span class="small">So I can abc quickly and easily</span>
			</a>
		</div>

		<section class="wiggle__who-we-are">
			<div class="wiggle__heading">
				<h3>Here's who we are</h3>
			</div>
			<div class="grid">
				<div class="box">
					<figure>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/headshot.jpg" class="wiggle__img wiggle__img--who" alt="Photo of Name, Title">
						<figcaption>
							<dl>
								<dt>Name</dt>
								<dd>Title</dd>
							</dl>
						</figcaption>
					</figure>
				</div>
				<div class="box">
					<figure>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/headshot.jpg" class="wiggle__img wiggle__img--who" alt="Photo of Name, Title">
						<figcaption>
							<dl>
								<dt>Name</dt>
								<dd>Title</dd>
							</dl>
						</figcaption>
					</figure>
				</div>
				<div class="box">
					<figure>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/headshot.jpg" class="wiggle__img wiggle__img--who" alt="Photo of Name, Title">
						<figcaption>
							<dl>
								<dt>Name</dt>
								<dd>Title</dd>
							</dl>
						</figcaption>
					</figure>
				</div>
				<div class="box">
					<figure>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/headshot.jpg" class="wiggle__img wiggle__img--who" alt="Photo of Name, Title">
						<figcaption>
							<dl>
								<dt>Name</dt>
								<dd>Title</dd>
							</dl>
						</figcaption>
					</figure>
				</div>
				<div class="box">
					<figure>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/headshot.jpg" class="wiggle__img wiggle__img--who" alt="Photo of Name, Title">
						<figcaption>
							<dl>
								<dt>Name</dt>
								<dd>Title</dd>
							</dl>
						</figcaption>
					</figure>
				</div>
				<div class="box">
					<figure>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/headshot.jpg" class="wiggle__img wiggle__img--who" alt="Photo of Name, Title">
						<figcaption>
							<dl>
								<dt>Name</dt>
								<dd>Title</dd>
							</dl>
						</figcaption>
					</figure>
				</div>
			</div>
		</section>

		<section class="wiggle__section">
			<div class="wiggle__heading">
				<h2>Want to know the best way to xxxx without yyyy?</h2>
			</div>
			<div class="wiggle__show-me">
				<!-- not sure what this is supposed to do -->
				<a href="#" class="show-link">
					<span class="medium">Yes! Show me how to xyz</span>
					<span class="small">So I can abc quickly and easily</span>
				</a>
			</div>
		</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
