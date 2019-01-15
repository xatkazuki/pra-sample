<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main namespace-Main">

<!--			--><?php
//
//			/* Start the Loop */
//			while ( have_posts() ) :
//				the_post();
//
//				get_template_part( 'template-parts/content/content', 'page' );
//
//				// If comments are open or we have at least one comment, load up the comment template.
//				if ( comments_open() || get_comments_number() ) {
//					comments_template();
//				}
//
//			endwhile; // End of the loop.
//			?>

			<header class="entry-header namespace-block">
				<?php
				if ( is_sticky() && is_home() && ! is_paged() ) {
					printf( '<span class="sticky-post">%s</span>', _x( 'Featured', 'post', 'twentynineteen' ) );
				}
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
				endif;
				?>
			</header><!-- .entry-header -->

			<div>

				<h3 class="namespace-block">	コンテンツ１- プルダウン-</h3>
				<div>
					<ul class="dropdown">
						<li><a href="#">テキスト1</a></li>
						<li>
							<a href="#">テキスト2</a>
							<ul>
								<li><a href="#">b1</a></li>
								<li><a href="#">b1</a></li>
							</ul>
						</li>
						<li>
							<a href="#">テキスト3</a>
							<ul>
								<li><a href="#">c1</a></li>
								<li><a href="#">c1</a></li>
							</ul>
						</li>
						<li><a href="#">テキスト4</a></li>
						<li><a href="#">テキスト5</a></li>
					</ul>
				</div>

				<hr>

				<div class="namespace-block">
					<h3>コンテンツ2 -横からのスライド -</h3>
					<p class="text-slide_FromRight">
						本文２、本文２、本文２、本文２、本文２、本文２<br>
						本文２、本文２、本文２、本文２、本文２、本文２<br>
						本文２、本文２、本文２、本文２、本文２、本文２<br>
						本文２、本文２、本文２、本文２、本文２、本文２<br>
					</p>

					<p class="text-slide_FromLeft transition-delay-1">
						少し遅れて右から,,,本文２、本文２、本文２、本文２、本文２、本文２<br>
						少し遅れて右から,,,本文２、本文２、本文２、本文２、本文２、本文２<br>
						少し遅れて右から,,,本文２、本文２、本文２、本文２、本文２、本文２<br>
						少し遅れて右から,,,本文２、本文２、本文２、本文２、本文２、本文２<br>
					</p>
				</div>

				<hr>

				<div class="namespace-block">
					<h3 class="arrow-delta-title">コンテンツ3 -下つき三角を簡単なcssで表現 -</h3>
					<p>本文３　本文３　本文３　本文３</p>
					<figure><img src="" alt="image画像"></figure>
				</div>

				<hr>

				<div class="namespace-block">
					<h3>アコーディオン</h3>

					<span class="accordion-open">コンテンツ4- アコーディオン - (開く)</span>

					<div class="accordion-content">
						<ul>
							<li>
								<p>テキスト1</p>
								<p>説明１説明１</p>

							</li>
							<li>
								テキスト2
								<p>説明2説明2</p>
							</li>
							<li>
								テキスト3
								<p>説明３説明３</p>
							</li>
							<li>
								テキスト4
								<p>説明４説明４</p>
							</li>
							<li>
								テキスト5
								<p>説明５説明５</p>
							</li>
						</ul>

						<small class="accordion-close">閉じるx</small>
					</div>
				</div>

				<script>
				jQuery(function($) {
					$('.accordion-open').click(function (e) {
						var $hide_content = $('.accordion-content');

						$($hide_content).slideToggle(500);

//						if($('i', this).hasClass('fa-chevron-circle-down')){
//							$('i', this).removeClass('fa-chevron-circle-down').addClass('fa-times-circle');
//						}else{
//							$('i', this).addClass('fa-chevron-circle-down').removeClass('fa-times-circle');
//						}
					});

					$('.accordion-close').click(function (e) {
						var $hide_content = $('.accordion-content');

						$($hide_content).slideToggle(500);

//						if($('i', this).hasClass('fa-chevron-circle-down')){
//							$('i', this).removeClass('fa-chevron-circle-down').addClass('fa-times-circle');
//						}
					});
				});

				</script>

				<!-- アコーディオンここまで -->

				<hr>

				<div class="animate-on-70 namespace-block">
					<h3>コンテンツ５ -ふわっと浮き出る - </h3>
					<p class="">本文4、本文4、本文4、本文4、本文4、本文4、</p>
					<figure><img src="" alt="image画像"></figure>
					<p>本文5、本文5、本文5、本文5、本文5、本文5、</p>
				</div>

				<script>
					jQuery(function($) {
						var controller = new ScrollMagic.Controller({globalSceneOptions: {duration: 500}});

						$('.animate-on-70').each(function () {
							new ScrollMagic.Scene({triggerElement: this, triggerHook: 0.7})
								.on("start", function (event) {

									var element = event.target.triggerElement();

									$(element).toggleClass('animate-active');
									// $(element).toggleClass("concept-Animation_LeftToRight");

								})
								.addTo(controller);
						});
					});
				</script>

				<!-- ふわっと浮き出るAnimationここまで -->

				<hr>

				<div class="namespace-block">
					<h3>コンテンツ６-モーダル - </h3>
					<p>モーダルを実装</p>
				</div>

				<hr>

				<div class="namespace-block">
					<h3 class="">
						slickを実装
					</h3>

					<ul class="slick_List">
						<li>
							<img src="<?php echo get_template_directory_uri()?>/images/asset1.jpg" alt="">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri()?>/images/asset2.png" alt="">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri()?>/images/asset3.png" alt="">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri()?>/images/asset4.png" alt="">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri()?>/images/asset5.png" alt="">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri()?>/images/asset6.png" alt="">
						</li>

					</ul>

				</div><!-- slick -->
				<script>
					jQuery(function($){
						$('.slick_List').slick({
							infinite: true,
							slidesToScroll: 1,
							slidesToShow: 3,
							centerPadding: '20px',
							dots: true,
							arrows: true,
							centerMode: true,
							responsive: [
								{
									breakpoint: 768,
									settings: {
										centerMode: true,
										centerPadding: '20px',
										slidesToShow: 2
									}
								},
								{
									breakpoint: 480,
									settings: {
										arrows: false,
										centerMode: true,
										centerPadding: '20px',
										slidesToShow: 1
									}
								}
							]

						});
					});
				</script>


			</div>


		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
