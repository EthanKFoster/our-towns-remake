<? get_header();?>


<main class="homepage">
	<div class="banner" style="background: url('<? echo get_theme_file_uri('/images/towns-banner.png');?>'); background-size: cover; background-position: top right; background-repeat: no-repeat;">
			<div class="blue-diagonal" style="background: url('<? echo get_theme_file_uri('/images/blue-diagonal.png');?>')">
				<div class="banner-text-container">
					<h1 class="banner__title">
						American <span class="mustardYellow">Re</span>newal <br> Starts Here
					</h1>
					<p class="banner-text">Welcome to the site for the Our Towns Civic Foundation, devoted to connecting and supporting those leading today's American renewal, from the ground up. Please join us to become part of this movement.</p>
				</div>
			</div>
	</div>

	<div class="separator">
		<div class="line-s"></div>
			<h2>Reports</h2>
		<div class="line-e"></div>
	</div>

	<div class="homeReports">
	<?
		if (have_posts())
		{
			$postNumber = 1;
			if (is_home() && !is_front_page())
			{
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?
			} ?>

			<div class="postOne">
			<?
				while (have_posts())
				{
					the_post();
					get_template_part('template-parts/content', 'first-post');
					echo $postNumber;
					break;
				} ?>
			</div>
			<div class="genPosts">
			<?
				while(have_posts())
				{
					if($postNumber === 1)
					{
						$postNumber++;
						continue;
					}
					the_post();
					get_template_part('template-parts/content', get_post_type());
					echo $postNumber++;
					if($postNumber>5)break;
				} ?>
			</div>
		<?
			the_posts_navigation();
		}
		else
		{
			get_template_part( 'template-parts/content', 'none' );
		}
		?>
	</div>
</main>



<? get_footer();?>