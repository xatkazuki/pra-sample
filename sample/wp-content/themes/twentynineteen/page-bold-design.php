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

get_header('bold-dsn');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

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

			<div class="boldDsn-Header_Wrapper">
				<header class="boldDsn-Header">
					<a class="boldDsn-Header_Anchor-main" href="#dummy"><img src="<?php bloginfo('template_directory') ;?>/images/bold-dsn/ubuntu-640.png" alt="awwards"><small style="display: inline-block;position: relative; top: -80px; left: 8px;">click!</small></a>

					<div class="boldDsn-Header_TitleWrapper">
						<span class="boldDsn-Header_SubTitle">THE Sample PRAC TICE</span>
						<h2 class="boldDsn-Header_Title">BOLD DSN</h2>
					</div>

					<div class="boldDsn-Header_Anchor-sub">
						<a class="boldDsn-Header_Text">
							Thank you for comming<br>
							<span class="boldDsn-Header_Text-bold">This is Dummy link!!</span>
						</a>
					</div>
				</header>
			</div>

			<div class="boldDsn-Header_BgEdge"></div>

			<div class="boldDsn_BodyMain">
				<section class="boldDsn-Section boldDsn-Section-welcome">

					<header class="boldDsn-Section_Title">
						<h2 class="boldDsn-Section_Title">
							<span class="boldDsn-Text_UnderLine-pink">Good morning</span><br>
							<span class="boldDsn-Text_UnderLine-pink">make yourself at home</span>
						</h2>

					</header>

					<div class="boldDsn-Section_Content boldDsn-Section_Content-2Rows">
<!--						<img src="--><?php //bloginfo('template_directory');?><!--/images/" >-->
						<div class="boldDsn-Section_Content-half">
							<p class="boldDsn-Text_Width-465 boldDsn-Text boldDsn-Text-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						</div>
						<div class="boldDsn-Section_Content-half">
							<p class="boldDsn-Text_Width-465 boldDsn-Text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

							<p class="boldDsn-Text_Width-465 boldDsn-Text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						</div>

					</div>

				</section> <!-- /.welcome -->

				<section class="boldDsn-Section boldDsn-Section-about">

					<ul class="boldDsn-Section_Content boldDsn-Section_Content-quarter boldDsn-Content_List">

						<li class="boldDsn-Content_ListItem">
							<a href="#dummy">
							<figure class="boldDsn-Content_ImgItem-lg"><img src="<?php bloginfo('template_directory') ;?>/images/bold-dsn/dirt-road-1280.jpg"></figure>
							<div class="boldDsn-Content_BodyItem boldDsn-Content_BodyItem-pinkred">
								<h3>Hi! about Me</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							</div>
							</a>
						</li>
						<li class="boldDsn-Content_ListItem">
							<a href="#dummy">
								<figure class="boldDsn-Content_ImgItem-sm"><img src="<?php bloginfo('template_directory') ;?>/images/bold-dsn/zil-castle-1280.jpg"></figure>
								<div class="boldDsn-Content_BodyItem boldDsn-Content_BodyItem-darkblue">
									<h3>Hi! about Me</h3>
									<p class="boldDsn-Text_Width-240">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div>
							</a>
						</li>
						<li class="boldDsn-Content_ListItem">
							<a href="#dummy">
							<figure class="boldDsn-Content_ImgItem-sm"><img src="<?php bloginfo('template_directory') ;?>/images/bold-dsn/desirable-2670728_1280.jpg"></figure>
								<div class="boldDsn-Content_BodyItem boldDsn-Content_BodyItem-darkblue">
									<h3>Hi! about Me</h3>
									<p class="boldDsn-Text_Width-240">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div>
							</a>
						</li>
						<li class="boldDsn-Content_ListItem">
							<a href="#dummy">
								<figure class="boldDsn-Content_ImgItem-lg"><img src="<?php bloginfo('template_directory') ;?>/images/bold-dsn/road-1920.jpg"></figure>
								<div class="boldDsn-Content_BodyItem boldDsn-Content_BodyItem-oceanblue">
									<h3>Hi! about Me</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div>
							</a>
						</li>

					</ul>

					<div class="boldDsn-Anchor">
						<hr class="boldDsn-Hr">
						<a class="boldDsn-Anchor_Text-about boldDsn-Anchor_Border-skyblue" href="#dummy"> click me -more-</a>
					</div>

					</section><!-- /.about -->

				<section class="boldDsn-Section boldDsn-Section-caseStudy">

					<header class="boldDsn-Section_Header">
						<h2 class="boldDsn-Section_Title-casestudy"><img src="<?php bloginfo('template_directory') ;?>/images/bold-dsn/creative-commons-640.png"></h2>
					</header>

					<div class="boldDsn-Section_Content boldDsn-top-delta">
						<p class="boldDsn-Text-lg boldDsn-Text-thin">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text
						</p>
						<div>
							<a class="boldDsn-Anchor_Text-caseStudy boldDsn-Anchor_Border-orange" href="#dummy"> click me -more-</a>
						</div>
					</div>
				</section> <!-- /.case_study -->

				<section class="boldDsn-Section">

					<div class="boldDsn-Section_Content">

						<ul class="boldDsn-Content_List-news">

							<li class="boldDsn-Content_ListItem-news">
								<a href="#dummy">
									<figure><img src="<?php bloginfo('template_directory') ;?>/images/bold-dsn/business-640.jpg"></figure>
									<h3 class="boldDsn-Text boldDsn-Text-bold boldDsn-Text-red"> about Me</h3>
									<p class="boldDsn-Text-lg">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</a>
							</li>

							<li class="boldDsn-Content_ListItem-news">
								<a href="#dummy">
									<figure><img src="<?php bloginfo('template_directory') ;?>/images/bold-dsn/board-640.jpg"></figure>
									<h3 class="boldDsn-Text boldDsn-Text-bold boldDsn-Text-red">Hi! about Me</h3>
									<p class="boldDsn-Text-lg">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</a>
							</li>

							<li class="boldDsn-Content_ListItem-news">
								<a href="#dummy">
									<figure><img src="<?php bloginfo('template_directory') ;?>/images/bold-dsn/laptop-640.jpg"></figure>
									<h3 class="boldDsn-Text boldDsn-Text-bold boldDsn-Text-red">Hi! about Me</h3>
									<p class="boldDsn-Text-lg">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</a>
							</li>
						</ul>

					</div>

				</section> <!-- /.news -->

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
