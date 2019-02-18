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

			<header id="anchor-pagetop" class="entry-header namespace-block">
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

				<div class="spacer s2"></div>
				<div id="trigger1">scroll-trans</div>
				<br>
				<br>
				<br>
				<br>
				<br>

				<div id="pin1" style="position: fixed; top: 300px; left: 0; background-color: rgba(255,167,57,0.2);">
					<p>Stay where you are.</p>
					<a href="#" class="viewsource"> (at least for a while)</a>
				</div>
				<br>
				<div class="spacer s2"></div>
				<script>

					$(function() {

						var w = $(window).width();
						if (w > 768) {
							var Pin = $('#pin1');

							$(window).scroll(function () {
								if ($(this).scrollTop() <= 800) {
//									Pin.fadeOut();
									Pin.css({
										'position':'fixed',
										'top':300
//										'width':'100%',
									});
								}else if ($(this).scrollTop() > 800){
									Pin.css({
										'position':'absolute',
										'top':1100
//										'width':'100%',
									});
								}
							});
						}
					});
			</script>
			</div>

			<div>

				<h3>nav</h3>

				<div class="nav-Header-1">

					control-by-position & opacity

				<nav id="site-navigation" class="sw-Navigation position-relative main-navigation" role="navigation">

					<button class="menu-toggle menu-toggle-1" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '', 'xearts-official' ); ?>
						<i></i>
						<i></i>
						<i></i>
						<span class="text-closed">MENU</span>
						<span class="text-opened">CLOSE</span>

					</button>
					<ul class="sw-Navigation_List-control-by-position">
						<li class="sw-Navigation_Item"><a href="#dummy">step1</a></li>
						<li class="sw-Navigation_Item"><a href="#dummy">step2</a></li>
						<li class="sw-Navigation_Item"><a href="#dummy">step3</a></li>
						<li class="sw-Navigation_Item"><a href="#dummy">step4</a></li>
					</ul>
				</nav>

			</div>

				<script>
					jQuery(function($) {
						"use strict";

						function setUpSpToggleMenu() {
							var $header = $('.nav-Header-1');
							var $toggle = $('.menu-toggle-1');

							$toggle.click(function(e){
								e.preventDefault();
								if ($header.hasClass('sw-Header-Open')) {
									$header.removeClass('sw-Header-Open');
									$header.removeClass('toggled');
//								}else if($header.hasClass('toggled')) {

								}else {
									$header.addClass('sw-Header-Open');
									$header.addClass('toggled');

								}
							})
						}

						setUpSpToggleMenu();
					});
				</script>


				<div  style="margin-top: 45px;" class="nav-Header-2">

					control-by-display

					<nav id="site-navigation" class="sw-Navigation position-relative main-navigation" role="navigation">

						<button class="menu-toggle menu-toggle-2" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '', 'xearts-official' ); ?>
							<i></i>
							<i></i>
							<i></i>
							<span class="text-closed">MENU</span>
							<span class="text-opened">CLOSE</span>

						</button>
						<ul class="sw-Navigation_List-control-by-display">
							<li class="sw-Navigation_Item"><a href="#dummy">step1</a></li>
							<li class="sw-Navigation_Item"><a href="#dummy">step2</a></li>
							<li class="sw-Navigation_Item"><a href="#dummy">step3</a></li>
							<li class="sw-Navigation_Item"><a href="#dummy">step4</a></li>
						</ul>
					</nav>

				</div>

	<script>
				jQuery(function($) {
				"use strict";

				function setUpSpToggleMenu() {
				var $header = $('.nav-Header-2');
				var $toggle = $('.menu-toggle-2');

				$toggle.click(function(e){
				e.preventDefault();
				if ($header.hasClass('sw-Header-Open-display')) {
					$header.removeClass('sw-Header-Open-display');
					$header.removeClass('toggled');

					} else {
					$header.addClass('sw-Header-Open-display');
					$header.addClass('toggled');

				}
				})
				}

				setUpSpToggleMenu();
				});
	</script>

				<div style="margin-top: 45px;" class="nav-Header-3">

					control-by-slidein

					<nav id="site-navigation" class="sw-Navigation position-relative main-navigation" role="navigation">

						<button class="menu-toggle menu-toggle-3" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '', 'xearts-official' ); ?>
							<i></i>
							<i></i>
							<i></i>
							<span class="text-closed">MENU</span>
							<span class="text-opened">CLOSE</span>

						</button>
						<ul class="sw-Navigation_List-control-by-slidein">
							<li class="sw-Navigation_Item"><a href="#dummy">step1</a></li>
							<li class="sw-Navigation_Item"><a href="#dummy">step2</a></li>
							<li class="sw-Navigation_Item"><a href="#dummy">step3</a></li>
							<li class="sw-Navigation_Item"><a href="#dummy">step4</a></li>
						</ul>
					</nav>

				</div>

				<script>
					jQuery(function($) {
						"use strict";

						function setUpSpToggleMenu() {
							var $header = $('.nav-Header-3');
							var $toggle = $('.menu-toggle-3');

							$toggle.click(function(e){
								e.preventDefault();
								if ($header.hasClass('sw-Header-Open-slidein')) {
									$header.removeClass('sw-Header-Open-slidein');
								} else {
									$header.addClass('sw-Header-Open-slidein');
								}
							})
						}

						setUpSpToggleMenu();
					});
				</script>


				<div style="margin-top: 45px;" class="nav-Header-4">

					control-by-modal

					<nav id="site-navigation" class="sw-Navigation position-relative main-navigation" role="navigation">
					<button class="recommend-Anchor modaal menu-toggle menu-toggle-4" aria-controls="primary-menu" aria-expanded="false" href="#modal-nav"
						 data-modaal-custom-class="modal-nav"
						 data-modaal-width="350">
							<i></i>
							<i></i>
							<i></i>
							<span class="text-closed">MENU</span>
							<span class="text-opened">CLOSE</span>

					</button>
					<ul id="modal-nav" class="modal-Template sw-Navigation_List-control-by-modal">
<!--							<ul class="sw-Navigation_List-control-by-modal">-->
								<li class="sw-Navigation_Item"><a href="#dummy">step1</a></li>
								<li class="sw-Navigation_Item"><a href="#dummy">step2</a></li>
								<li class="sw-Navigation_Item"><a href="#dummy">step3</a></li>
								<li class="sw-Navigation_Item"><a href="#dummy">step4</a></li>
<!--							</ul>-->
					</ul><!--モダール表示　ここまで-->

					</nav>

					<script>
						jQuery(function($) {
							"use strict";

							function setUpSpToggleMenu() {
								var $header = $('.nav-Header-4');
								var $toggle = $('.menu-toggle-4');

								$toggle.click(function(e){
									e.preventDefault();
									if ($header.hasClass('sw-Header-Open-modal')) {
										$header.removeClass('sw-Header-Open-modal');
										$header.removeClass('toggled');
//								}else if($header.hasClass('toggled')) {

									}else {
										$header.addClass('sw-Header-Open-modal');
//										$header.addClass('toggled');

									}
								})
							}

							setUpSpToggleMenu();
						});
					</script>

				</div>

				<hr style="margin-top: 70px;">

				<h3 id="top" class="namespace-block">	コンテンツ１- プルダウン-</h3>

				<!-- 自作のjsファイルと外部ファイルを読み込み -->

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

				<div id="textslide" class="namespace-block">
					<h3>コンテンツ2 -横からのスライド -<i class="fa fa-angle-up" aria-hidden="true"></i></h3>

					<!--  cssのみでanimationを実装　-->

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
					<figure><img src="<?php bloginfo('template_directory');?>/images/walk-640.jpg" alt="image画像"></figure>
				</div>

				<hr>

				<div id="accordion" class="namespace-block">
					<h3>アコーディオン</h3>

					<!--  javascriptのみで実装 (jQueryの読み込みはしていない)　-->

					<span class="accordion-open">コンテンツ4- アコーディオン - <i class="fas fa-arrow-circle-down"></i><small>(開く)</small></span>

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

						<small class="accordion-close">閉じる<i class="fas fa-times-circle"></i></small>
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

					<!--
						function.phpでjQuery(ScrollMagic)を読み込み、javascriptを作成
					　-->

					<p class="">本文4、本文4、本文4、本文4、本文4、本文4、</p>
					<figure><img src="<?php bloginfo('template_directory');?>/images/tea-plantation-640.jpg" alt="image画像"></figure>
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

				<div id="modal" class="namespace-block">
					<h3>コンテンツ６-モーダル - </h3>
					<p>モーダルを実装</p>

					<!--
						参考：http://bashalog.c-brains.jp/17/02/28-103000.php
								 https://on-ze.com/archives/6971
								 <link rel="stylesheet" href="//cdn.jsdelivr.net/modaal/0.3.1/css/modaal.min.css">
								 <script src="//cdn.jsdelivr.net/modaal/0.3.1/dist/js/modaal.min.js">
					 -->

					<script>
						(function($){

							// モーダルのデフォルト設定を変更する
							$.fn.modaal.options.overlay_opacity = 0.6;
						})(jQuery);
					</script>

					<a class="recommend-Anchor modaal"  href="#modal-Recommend"
						 data-modaal-custom-class="modal-Recommend"
						 data-modaal-width="540">
						モーダル表示（売るなら今です）
					</a>
					<div id="modal-Recommend" class="modal-Template">
						<div>
							<p class="">売るなら今です！</p>
						</div>

						<div class="">
							<p class="">
								商品の価格は、発売後、<br>
								毎週値下がりしてしまいます。<br>
								今が最高値の可能性が高いです。<br>
								<span class="">売るなら今です！</span><br>
							</p>
							<p class="">ぜひこのまま<br>買取お申し込みにお進みください。</p>
						</div>

						<div class="">
							<button type="submit" class="btn btn-block form-Button">
								<i class="fas fa-chevron-circle-left form-Button_Icon form-Button_Icon-prev"></i>
								申込に戻る
							</button>
						</div>
					</div><!--モダール表示　（売るなら今です）ここまで-->

					<script>
						$(document).separationPopup();
					</script>

				</div>

				<hr>

				<div id="slick" class="namespace-block">
					<h3>
						slickを実装
					</h3>

					<!--
          	function.phpでjQuery,ダウンロードしたslickのjsファイルとcssファイル(_slick.scssと_slick-theme.scss)を読み込みをした上で、カスタマイズ
          	http://kenwheeler.github.io/slick/
        　-->

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

				<section class="top-MainImage">

					<ul>
						<li>
							<img src="<?php echo get_theme_file_uri('images/dirt-road-1280.jpg')?>" alt="">
						</li>
						<li>
							<img src="<?php echo get_theme_file_uri('images/sunrise-1280.jpg')?>" alt="">
						</li>
						<li>
							<img src="<?php echo get_theme_file_uri('images/dirt-road-1920.jpg')?>" alt="">
						</li>
						<li>
							<img src="<?php echo get_theme_file_uri('images/snowman-1920.jpg')?>" alt="">
						</li>
						<li>
							<img src="<?php echo get_theme_file_uri('images/road-1920.jpg')?>" alt="">
						</li>
					</ul>
					<script>
						jQuery(function($){
							$('.top-MainImage ul').slick({
								autoplay: true,
								arrows: false,
								fade: true
							});
						});
					</script>

				</section><!-- /.top-MainImage-->


				<div>

					スマートスクロール

					<!-- jsで実装 -->

					<script>
						$(function(){
							// #で始まるリンクをクリックしたら実行されます
							$('a[href^="#"]').click(function() {
								// スクロールの速度
								var speed = 400; // ミリ秒で記述
								var href= $(this).attr("href");
								var target = $(href == "#" || href == "" ? 'html' : href);
								var position = target.offset().top;
								$('body,html').animate({scrollTop:position}, speed, 'swing');
								return false;
							});
						});
					</script>

					<ul>
						<li class="underLine-animation">
							<a href="#top">topへ戻る</a>
						</li>
						<li class="underLine-animation">
							<a href="#textslide">横からのスライドへ</a>
						</li>
						<li class="underLine-animation">
							<a href="#accordion">アコーディオンへ</a>
						</li>
						<li class="underLine-animation">
							<a href="#modal">モーダルへ</a>
						</li>
						<li class="underLine-animation">
							<a href="#slick">slickへ</a>
						</li>
					</ul>

				</div>

				<hr>

				<h3 id="tab">タブ</h3>

				<!-- function.php で jsファイルを読み込み -->

				<ul class="service-Tab js_tab">
					<li class="js_tab1 js_tab_color js_tab_current_color">タブ１ Well hello there</li>
					<li class="js_tab2 js_tab_color">タブ２</li>
				</ul>

				<div class="js_tab_content js_tab_current_content js_tab_content-1">
					タブ１のコンテンツ
				</div>

				<div class="js_tab_content js_tab_content-2">
					タブ2のコンテンツ
				</div>

				<hr>

				<h3 id="hover">hover時にtrancelateの動きをcssで実装</h3>

				<div class="hover-Trance-parent">

						<figure>
							<img src="<?php bloginfo('template_directory') ;?>/images/dance-640.jpg" alt="">
						</figure>

						<p class="hover-Trance-mask">
							　Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						</p>

				</div>



				<hr>

				<ul class="hover-Scale-parent">
					<li class="hover-Scale">
						<img src="<?php bloginfo('template_directory');?>/images/pencil-640.jpg">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</li>

					<li class="hover-Scale">
						<img src="<?php bloginfo('template_directory');?>/images/dance-640.jpg">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</li>

					<li class="hover-Scale">
						<img src="<?php bloginfo('template_directory');?>/images/business-640.jpg">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</li>

				</ul>

				<hr>

				<h3 id="tween">jQueryTweenでtrancelate</h3>

				<!-- function.php で読み込みをして、カスタマイズ -->

				<div class="tween-box box green"></div>
				<div class="tween-box box orange"></div>
				<div class="tween-box box grey"></div>
				<div class="tween-box box pink"></div>

				<div class="tween-animArea">
					<div class="tween-animItem" id="anim"></div>
				</div>
				<p><button id="start" class="btn btn-info">アニメーション実行</button></p>

				<a href="https://greensock.com/get-started-js" style="display: block;"><small>greensock.com --orginalDoc--</small></a>
				<a href="https://lab.sonicmoov.com/markup/animation-library-tweenmaxjs/" style="display: block;"><small>使い方の例 -- ブログ--</small></a>
				<a href="https://createkt.com/scrollmagic/"><small>応用（参考程度）</small></a>

				<script>

					$('#start').on('click', function(){
//						TweenMax.to('#anim', 2, {left:'200px'});
						TweenMax.to('#anim',2, {
							left: '200px',
							repeat: 5,
							yoyo: true
						});

						var tl = new TimelineMax({repeat:0, repeatDelay:1});

						//add 3 tweens that will play in direct succession.
						tl.to(".green", 1, {x:200});
						tl.to(".orange", 1, {x:200, scale:0.2});
						tl.to(".grey", 1, {x:200, scale:2, y:20});

					});

				</script>

				<hr>

<!--				<div class="">-->
					<figure class="trance-parent">
						<img class="transform-translateX" src="<?php bloginfo('template_directory');?>/images/board-640.jpg" width="300" height="205">
					</figure>

					<figure class="trance-parent">
						<img class="transform-translateZ" src="<?php bloginfo('template_directory');?>/images/dance-640.jpg" width="300" height="205">
					</figure>

					<div class="trance-parent">
					<figure class="">
						<img class="transform-translateXYZ" src="<?php bloginfo('template_directory');?>/images/laptop-640.jpg" width="300" height="205">
					</figure>

						<figure class="">
							<img class="trance-delay transform-translateX" src="<?php bloginfo('template_directory');?>/images/pencil-640.jpg" width="300" height="205">
						</figure>
				</div>


					<figure class="trance-parent">
						<img class="transform-transrotateZ" src="<?php bloginfo('template_directory');?>/images/tea-plantation-640.jpg" width="300" height="205">
					</figure>

				<div class="trance-parent">

					<figure>
						<img class="transform-transrotateXYZ" src="<?php bloginfo('template_directory');?>/images/walk-640.jpg" width="300" height="205">
					</figure>


					<figure>
						<img class="trance-delay transform-arrange" src="<?php bloginfo('template_directory');?>/images/dance-640.jpg" width="300" height="205">
					</figure>
				</div>

			</div>



			<footer>

				<!--
  				<script>で動きを記述して、フッターmenuをfade-in表示
				  *function.php で 読み込みをしているjsファイル(nav-show.js)はmouseover時の動き
				 -->

				<div class="footer-button">

					<ul class="footer-nav">
						<li><a href="#tab">タブ</a></li>
						<li><a href="#hover">hover</a></li>
						<li><a href="#tween">tween</a></li>
						<li>step4</li>
					</ul>
					<button id="fadeInFix_AnchorTopButton">
						<a href="#anchor-pagetop">

		<!--					<img src="--><?php //bloginfo('template_directory'); ?><!--/images/common/page-top.png" alt=""><br>-->
							ページTOPへ
						</a>
					</button>
				</div>
			</footer>


		</main><!-- #main -->
	</section><!-- #primary -->

<script>
	$(function() {

		var w =$(window).width();
		if (w > 768){
			var topBtn = $('#fadeInFix_AnchorTopButton');
			topBtn.hide();
			//スクロールが100に達したらボタン表示

			$(window).scroll(function () {
				if ($(this).scrollTop() > 100) {
					topBtn.fadeIn();
				} else {
					topBtn.fadeOut();
				}
			});
		}

		//スクロールしてトップ
		topBtn.click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 500);
			return false;
		});
	});
</script>
<?php
get_footer();
