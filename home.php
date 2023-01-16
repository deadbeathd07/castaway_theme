<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>
<main class="main">
	<div class="container">
		<div class="main__inner">
			<section class="content-module">
				<div class="decor decor_top decor_left">
					<img src="<?php the_field("main_image"); ?>" class="content-module__image" />
				</div>
				<div class="content-module__description">
					<h2 class="title title_primary title_underline title_strong intro__title">
						<?php the_field("main_title"); ?> <span><?php the_field("underline"); ?></span>
						<strong><?php the_field("strong") ?></strong>
					</h2>
					<h6 class="title title_small app-bar__title">Listen on</h6>
					<ul class="app-bar__list">
						<li class="app-bar__item">
							<a class="app-bar__link" href="<?php the_field("spotify_link") ?>" title="Spotify">
								<img src="<?php bloginfo("template_url"); ?>/assets/icons/spotify-icon.svg" alt="Spotify" />
							</a>
						</li>
						<li class="app-bar__item">
							<a class="app-bar__link" href="<?php the_field("pocket_casts_link") ?>">
								<img src="<?php bloginfo("template_url"); ?>/assets/icons/icon_2.svg" alt="app" />
							</a>
						</li>
						<li class="app-bar__item">
							<a class="app-bar__link" href="<?php the_field("soundcloud_link") ?>">
								<img src="<?php bloginfo("template_url"); ?>/assets/icons/icon_3.svg" alt="app" />
							</a>
						</li>
						<li class="app-bar__item">
							<a class="app-bar__link" href="<?php the_field("apple_podcasts_link") ?>">
								<img src="<?php bloginfo("template_url"); ?>/assets/icons/icon_4.svg" alt="app" />
							</a>
						</li>
						<li class="app-bar__item">
							<a class="app-bar__link" href="<?php the_field("overcast_fm_link") ?>">
								<img src="<?php bloginfo("template_url"); ?>/assets/icons/icon_5.svg" alt="app" />
							</a>
						</li>
					</ul>
				</div>
			</section>
			<section class="episodes">
				<div class="episodes__header">
					<h3 class="title title_secondary episodes__title">
						Latest episodes
					</h3>
					<button class="button">View all episodes</button>
				</div>
				<div class="episodes__main">
					<?php
					global $post;

					$myposts = get_posts([
						'numberposts' => 3,
						'categories' => 2,
					]);

					if ($myposts) {
						foreach ($myposts as $post) {
							setup_postdata($post);
					?>
					<div class="card-block">
						<?php the_post_thumbnail(
									array(389, 465),
									array(
										"class" => "card-block__image"
									)
								); ?>
						<div class="card-block__content">
							<?php the_content(); ?>
							<button class="button">View Episode Details</button>
						</div>
					</div>
					<?php
						}
					}
					wp_reset_postdata();
					?>
				</div>
			</section>
			<section class="content-module content-module_reverse">
				<div class="content-module__img-wrapper">
					<img src="<?php the_field("article_image"); ?>" class="content-module__image" />
				</div>
				<div class="content-module__description description">
					<h2 class="title title_secondary title_cap description__title">
						<span><?php the_field("cap"); ?></span>
						<?php the_field("article_title"); ?>
					</h2>
					<p class="description__text">
						<?php the_field("paragraph_1"); ?>
					</p>
					<p class="description__text">
						<?php the_field("paragraph_2"); ?>
					</p>
				</div>
			</section>
			<section class="form-block">
				<h2 class="title title_alter title_cap form-block__title">
					<span><?php the_field("cap_form"); ?></span>
					<?php the_field("title_form"); ?>
				</h2>
				<form class="form-block__form">
					<?php echo do_shortcode('[contact-form-7 id="82" title="Контактная форма"]') ?>
				</form>
			</section>
		</div>
	</div>
</main>
<?php get_footer(); ?>