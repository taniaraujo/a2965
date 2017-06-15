<?php get_header(); ?>

			<div id="content">
				<div id="inner-content" class="wrap cf">
					
					<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">
						
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
							<div class="main-content-area">
								<header class="article-header">
										<h2 class="entry-title single-title post-title" itemprop="headline"><?php the_title(); ?></h2>
								</header> <?php // end article header ?>
								<section class="entry-content cf" itemprop="articleBody">
									<?php the_content(); 

									wp_link_pages( array(
								      'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'fitspiration' ) . '</span>',
								      'after'       => '</div>',
								      'link_before' => '<span>',
								      'link_after'  => '</span>',
								    ) );

									?>
								</section>
							</div>

							<?php if ( comments_open() || get_comments_number() ) : ?>
								<div class="below-content-area">
									<?php comments_template(); ?>
								</div>
							<?php endif; ?>

							</article> <?php // end article ?>

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php esc_html_e( 'Oops, Post Not Found!', 'fitspiration' ); ?></h1>
										<p><?php esc_html_e( 'Uh Oh. Something is missing. Try double checking things.', 'fitspiration' ); ?></p>
									</header>
							</article>

						<?php endif; ?>

					</div>

					<?php get_sidebar('page'); ?>

				</div>

			</div>

<?php get_footer(); ?>