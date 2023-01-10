    <footer class="footer">
    	<div class="container">
    		<div class="footer__inner">
    			<div class="footer__section">
    				<div class="logo app-bar__title">
    					<?php the_custom_logo(); ?>
    				</div>
    				<ul class="app-bar__list">
    					<li class="app-bar__item">
    						<a class="app-bar__link app-bar__link_svg" href="<?php the_field("instagram_link"); ?>">
    							<object class="app-bar__icon"
    								data="<?php bloginfo("template_url"); ?>/assets/icons/instagram-icon.svg" type="image/svg+xml">
    							</object>
    						</a>
    					</li>
    					<li class="app-bar__item">
    						<a class="app-bar__link app-bar__link_svg" href="<?php the_field("twitter_link"); ?>">
    							<object class="app-bar__icon" data="<?php bloginfo("template_url"); ?>/assets/icons/twitter-icon.svg"
    								type="image/svg+xml">
    							</object>
    						</a>
    					</li>
    					<li class="app-bar__item">
    						<a class="app-bar__link app-bar__link_svg" href="<?php the_field("facebook_link"); ?>">
    							<object class="app-bar__icon" data="<?php bloginfo("template_url"); ?>/assets/icons/facebook-icon.svg"
    								type="image/svg+xml">
    							</object>
    						</a>
    					</li>
    				</ul>
    			</div>
    			<div class="footer__section">
    				<?php wp_nav_menu([
							"theme_location" => "footer-menu",
						]) ?>
    			</div>
    			<div class="footer__section">
    				<?php wp_nav_menu([
							"theme_location" => "extra-menu",
						]) ?>
    			</div>
    			<ul class="footer__section app-bar__list">
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
    	</div>
    </footer>
    <?php wp_footer(); ?>
    </div>
    </body>

    </html>