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

	<div class="container">
		<div class="row">
		<?
			$posts = new WP_Query(array(
				'post_type' => 'post'
			));?>
				<div class="col-6">
				<?
				$postNumber = 1;
					while ($posts->have_posts())
					{
						$posts->the_post();
						get_template_part('template-parts/content', 'first-post');
						break;
					} ?>
				</div>
				<div class="col-6 row justify-content-between">
				<?
					while($posts->have_posts())
					{
						if($postNumber>4)
						{
							break;
						}
						$posts->the_post();
						get_template_part('template-parts/content', get_post_type());
						$postNumber++;
					}
					wp_reset_query();
					?>
				</div>
		</div>
	</div>

	<div class="previous-reports mb-5">
		<h1>Previous Reports</h1>
		<p>Read past content from the website here.</p>
	</div>

	<div class="container reports-carousel">
	<h2 class="reports-carousel-title">Voice From America</h2>
		<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="row">
					<?
						$carouselPosts = new WP_Query(array(
							'post_type' => 'post'
						));
						$postNumber = 1;
						while($carouselPosts->have_posts())
						{
							$carouselPosts->the_post();
							?>
							<div class="col-4 genPost">
								<a href="<? the_permalink();?>">
									<header class="entry-header">
									<?php our_towns_post_thumbnail('small');
										if (is_singular()) :
											the_title( '<h1 class="entry-title">', '</h1>' );
										else :
											?> <h1><? the_title();?></h1><?
										endif;?>
									</header><!-- .entry-header -->
									<div class="entry-content">
										<? the_excerpt();?>
									</div> <!-- .entry-content -->
								</a>
							</div>
							<?
							if($postNumber === 3)
							{
								break;
							}
							$postNumber++;
						}
					?>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">
					<?
						$postNumber = 1;
						while($carouselPosts->have_posts())
						{
							$carouselPosts->the_post();
							?>
							<div class="col-4 genPost">
								<a href="<? the_permalink();?>">
									<header class="entry-header">
									<?php our_towns_post_thumbnail('small');
										if (is_singular()) :
											the_title( '<h1 class="entry-title">', '</h1>' );
										else :
											?> <h1><? the_title();?></h1><?
										endif;?>
									</header><!-- .entry-header -->
									<div class="entry-content">
										<? the_excerpt();?>
									</div> <!-- .entry-content -->
								</a>
							</div>
							<?
							if($postNumber === 3)
							{
								break;
							}
							$postNumber++;
						}
					?>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">
					<?
						$postNumber = 1;
						while($carouselPosts->have_posts())
						{
							$carouselPosts->the_post();
							?>
							<div class="col-4 genPost">
								<a href="<? the_permalink();?>">
									<header class="entry-header">
									<?php our_towns_post_thumbnail('small');
										if (is_singular()) :
											the_title( '<h1 class="entry-title">', '</h1>' );
										else :
											?> <h1><? the_title();?></h1><?
										endif;?>
									</header><!-- .entry-header -->
									<div class="entry-content">
										<? the_excerpt();?>
									</div> <!-- .entry-content -->
								</a>
							</div>
							<?
							if($postNumber === 3)
							{
								break;
							}
							$postNumber++;
						}
					?>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
			<!-- <a class="carousel-control-prev" href="#mycarousel" id="prevcontrol" role="button" data-slide="prev">
            <span class="" aria-hidden="true"><img class=" " id="prev" src="https://www.ourtownsfoundation.org/wp-content/themes/our-towns/images/carousel-icons/prev.png" alt=""></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#mycarousel" id="nextcontrol" role="button" data-slide="next">
            <span class="" aria-hidden="true"><img class=" " id="next" src="https://www.ourtownsfoundation.org/wp-content/themes/our-towns/images/carousel-icons/next.png" alt=""></span>
            <span class="sr-only">Next</span>
        </a> -->
		</div>
	</div>
</main>

<? get_footer();?>