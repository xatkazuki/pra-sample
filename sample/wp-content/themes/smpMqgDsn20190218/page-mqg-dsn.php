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

			<header class="mqg-Section mqg-Hero"><!-- hero -->

				<ul class="mqg-Hero_List slick_List">
          <li class="mqg-Hero_ListItem">
            <span>text-copyPhrase</span>
<!--            <figure class="mqg-Hero_BgImg">-->
<!--              <img src="--><?php //bloginfo('template_directory');?><!--/images/mqg-dsn/dirt-road-1280.jpg" alt="">-->
<!--            </figure>-->
          </li>
          <li class="mqg-Hero_ListItem">
            <span>text-copyPhrase-2nd</span>
<!--            <figure class="mqg-Hero_BgImg">-->
<!--              <img src="--><?php //bloginfo('template_directory');?><!--/images/mqg-dsn/road-1920.jpg" alt="">-->
<!--            </figure>-->
          </li>
          <li class="mqg-Hero_ListItem">
            <span>text-copyPhrase-3rd</span>
<!--            <figure class="mqg-Hero_BgImg">-->
<!--              <img src="--><?php //bloginfo('template_directory');?><!--/images/mqg-dsn/snowman-1920.jpg" alt="">-->
<!--            </figure>-->
          </li>
          <li class="mqg-Hero_ListItem">
            <span>text-copyPhrase-4th</span>
<!--            <figure class="mqg-Hero_BgImg">-->
<!--              <img src="--><?php //bloginfo('template_directory');?><!--/images/mqg-dsn/sunrise-1280.jpg" alt="">-->
<!--            </figure>-->
          </li>
        </ul>

        <div id="vegas-slide"></div>

				<button class="btn btn-outline-dark mqg-Btn-heroHere">CLICK HERE<span class="mqg-Btn_Text-plus">+</span></button>

				<button class="btn btn-outline-dark mqg-Btn-clickBtn"> CLICK  BUTTON + </button>

				<figure class="mqg-Hero_HotItem">
					<img src="" alt="">
					<figcaption class="mqg-Hero_ItemName">
						<span class="mqg-Hero_ItemCategory">item-category</span>
						商品タイトル
					</figcaption>
				</figure>

			</header>


			<section class="mqg-Section mqg-SeasonItem"><!-- season-item -->
				<div class="mqg-SeasonItem_Body">
					<span class="mqg-Text mqg-Text-red mqg-Text-sm">BigCategory</span>
					<h2 class="mqg-Section_Title mqg-Section_Title-seasonalItem">SEASONALITM</h2>
					<span class="mqg-Section_SubTitle mqg-Section_SubTitle-seasonalItem">TheamsHere</span>
					<p class="mqg-Text-sm">このセクションのディスクリプションとなるようなテキストが簡単に入ります。クリックして下層ページにリンクしてもらい詳細ページへと繋がっていきます。このセクションのディスクリプションとなるようなテキストが簡単に入ります。クリックして下層ページにリンクしてもらい詳細ページへと繋がっていきます。このセクションのディスクリプションとなるようなテキストが簡単に入ります。クリックして下層ページにリンクしてもらい詳細ページへと繋がっていきます。</p>
					<div class="mqg-Anchor-js">
           <a class="mqg-Anchor-js mqg-Anchor_Text mqg-Anchor_Line-under mqg-Anchor-Animation" href="#dummy">CLICK-MORE- <span class="mqg-Anchor_Text mqg-Anchor_Text-red"> > </span></a>
          </div>
        </div>

				<figure class="mqg-SeasonItem_Img">
					<img src="<?php bloginfo('template_directory');?>/images/mqg-dsn/snowman-1920.jpg" alt="">
				</figure>
			</section>

      <script>
        $(function() {
          $(".mqg-Anchor-js").mouseover(function() {
//            var num = $(".js_tab li").index(this);
//            $(".js_tab_content").removeClass('js_tab_current_content');
            $(".mqg-Anchor-js .mqg-Anchor_Text").addClass('mqg-Anchor-AnimationOn');

            $(this).addClass('mqg-Anchor-AnimationOn');
          });

          $(".mqg-Anchor-js").mouseout(function() {
//            var num = $(".js_tab li").index(this);
//            $(".js_tab_content").removeClass('js_tab_current_content');
            $(".mqg-Anchor-js .mqg-Anchor_Text").removeClass('mqg-Anchor-AnimationOn');

            $(this).removeClass('mqg-Anchor-AnimationOn');
          });
        });
      </script>

			<section class="mqg-Section mqg-BeautyItem"><!-- beauty-item -->

				<header class="mqg-Section-Header">
					<h2 class="mqg-Section_Title">HERE<br>BEUTYTOPICS</h2>
				</header>

				<div class="mqg-Section-Content">
					<ul class="mqg-BeautyItem_List">
						<li class="mqg-BeautyItem_ListItem">
							<figure class="mqg-BeautyItem_Img">
								<img src="" alt="化粧品の写真">
							</figure>
							<time class="mqg-Text mqg-Text-sm mqg-Text-red">2019.2.21</time>
							<div class="mqg-Mark_New-beautyItem">NEW</div>

							<div>
								<time class="mqg-BeautyItem_Time mqg-Text mqg-Text-sm mqg-Text_Time-uniqu">01/21</time>
								<span class="mqg-Text mqg-Text-sm mqg-Text-red">CATEGORY</span>
								<p class="mqg-Text mqg-Text-sm">最初のテキストを抜粋で表示します。最初のテキストを抜粋で表示します。最初のテキストを抜粋で表示します。</p>
								<a class="mqg-Anchor_Text" href="#dummy">CLICK-MORE- <span class="mqg-Anchor_Text-red"> > </span></a>
							</div>
						</li>

						<li class="mqg-BeautyItem_ListItem" style="background-color: beige">
							<figure class="mqg-BeautyItem_Img">
								<img src="" alt="化粧品の写真">
							</figure>
							<time class="mqg-Text mqg-Text-sm mqg-Text-red">2019.2.21</time>
							<div class="mqg-Mark_New-beautyItem">NEW</div>

							<div>
								<time class="mqg-BeautyItem_Time mqg-Text mqg-Text-sm mqg-Text_Time-uniqu">01/21</time>
								<span class="mqg-Text mqg-Text-sm mqg-Text-red">CATEGORY</span>
								<p class="mqg-Text mqg-Text-sm">最初のテキストを抜粋で表示します。最初のテキストを抜粋で表示します。最初のテキストを抜粋で表示します。</p>
								<a class="mqg-Anchor_Text" href="#dummy">CLICK-MORE- <span class="mqg-Anchor_Text-red"> > </span></a>
							</div>
						</li>

						<li class="mqg-BeautyItem_ListItem">
							<figure class="mqg-BeautyItem_Img">
								<img src="" alt="化粧品の写真">
							</figure>
							<time class="mqg-Text mqg-Text-sm mqg-Text-red">2019.2.21</time>
							<div class="mqg-Mark_New-beautyItem">NEW</div>

							<div>
								<time class="mqg-BeautyItem_Time mqg-Text mqg-Text-sm mqg-Text_Time-uniqu">01/21</time>
								<span class="mqg-Text mqg-Text-sm mqg-Text-red">CATEGORY</span>
								<p class="mqg-Text mqg-Text-sm">最初のテキストを抜粋で表示します。最初のテキストを抜粋で表示します。最初のテキストを抜粋で表示します。</p>
								<a class="mqg-Anchor_Text" href="#dummy">CLICK-MORE- <span class="mqg-Anchor_Text-red"> > </span></a>
							</div>
						</li>

						<li class="mqg-BeautyItem_ListItem" style="background-color: beige">
							<figure class="mqg-BeautyItem_Img">
								<img src="" alt="化粧品の写真">
							</figure>
							<time class="mqg-Text mqg-Text-sm mqg-Text-red">2019.2.21</time>
							<div class="mqg-Mark_New-beautyItem">NEW</div>

							<div>
								<time class="mqg-BeautyItem_Time mqg-Text mqg-Text-sm mqg-Text_Time-uniqu">01/21</time>
								<span class="mqg-Text mqg-Text-sm mqg-Text-red">CATEGORY</span>
								<p class="mqg-Text mqg-Text-sm">最初のテキストを抜粋で表示します。最初のテキストを抜粋で表示します。最初のテキストを抜粋で表示します。</p>
								<a class="mqg-Anchor_Text" href="#dummy">CLICK-MORE- <span class="mqg-Anchor_Text-red"> > </span></a>
							</div>
						</li>

						<li class="mqg-BeautyItem_ListItem">
							<figure class="mqg-BeautyItem_Img">
								<img src="" alt="化粧品の写真">
							</figure>
							<time class="mqg-Text mqg-Text-sm mqg-Text-red">2019.2.21</time>
							<div class="mqg-Mark_New-beautyItem">NEW</div>

							<div>
								<time class="mqg-BeautyItem_Time mqg-Text mqg-Text-sm mqg-Text_Time-uniqu">01/21</time>
								<span class="mqg-Text mqg-Text-sm mqg-Text-red">CATEGORY</span>
								<p class="mqg-Text mqg-Text-sm">最初のテキストを抜粋で表示します。最初のテキストを抜粋で表示します。最初のテキストを抜粋で表示します。</p>
								<a class="mqg-Anchor_Text" href="#dummy">CLICK-MORE- <span class="mqg-Anchor_Text-red"> > </span></a>
							</div>
						</li>

						<li class="mqg-BeautyItem_ListItem" style="background-color: beige">
							<figure class="mqg-BeautyItem_Img">
								<img src="" alt="化粧品の写真">
							</figure>
							<time class="mqg-Text mqg-Text-sm mqg-Text-red">2019.2.21</time>
							<div class="mqg-Mark_New-beautyItem">NEW</div>

							<div>
								<time class="mqg-BeautyItem_Time mqg-Text mqg-Text-sm mqg-Text_Time-uniqu">01/21</time>
								<span class="mqg-Text mqg-Text-sm mqg-Text-red">CATEGORY</span>
								<p class="mqg-Text mqg-Text-sm">最初のテキストを抜粋で表示します。最初のテキストを抜粋で表示します。最初のテキストを抜粋で表示します。</p>
								<a class="mqg-Anchor_Text" href="#dummy">CLICK-MORE- <span class="mqg-Anchor_Text-red"> > </span></a>
							</div>
						</li>
					</ul>
				</div><!-- /.mqg-Section-Content -->

			</section>

			<section class="mqg-Section mqg-BeautyItem"><!-- special-item -->
				<div class="mqg-SubSection"><!-- 本文左寄り -->
					<div class="mqg-SubSection_Inner"><!-- width:780px -->

						<div class="mqg-SubSection_Body mqg-SubSection_Inner-left"><!-- right -->
							<div class="mqg-SubSection_Header">
								<span class="mqg-Text mqg-Text-sm mqg-Text-red">BigCategory</span>
								<h2 class="mqg-SubSection_Title">THIS<br>SUBSECTION'S<br>MAINTITLE</h2>
							</div>

							<div class="mqg-SubSection_Content">
								<p class="mqg-Text">
									このセクションのディスクリプションとなるようなテキストが簡単に入ります。
								</p>
								<button class="mqg-Btn mqg-Btn-black mqg-Text">CLICK-MORE- ></button>
							</div><!-- /.mqg-SubSection_Content -->
						</div><!-- /.mqg-SubSection_Body --><!-- right -->

						<figure class="mqg-SubSection_Img mqg-SubSection_Inner-right">
							<img src="" alt="">
						</figure>
					</div>	<!-- /.mqg-SubSection_Inner -->
				</div> <!-- /.mqg-SubSection -->

				<div class="mqg-SubSection"><!-- 本文右寄り -->
					<div class="mqg-SubSection_Inner"><!-- width:780px -->

						<div class="mqg-SubSection_Body mqg-SubSection_Inner-right"><!-- right -->
							<div class="mqg-SubSection_Header">
								<span class="mqg-Text mqg-Text-sm mqg-Text-red">BigCategory</span>
								<h2 class="mqg-SubSection_Title">THIS<br>SUBSECTION'S<br>MAINTITLE</h2>
							</div>

							<div class="mqg-SubSection_Content">
								<p class="mqg-Text">
									このセクションのディスクリプションとなるようなテキストが簡単に入ります。
								</p>
								<button class="mqg-Btn mqg-Btn-black mqg-Text">CLICK-MORE- ></button>
							</div><!-- /.mqg-SubSection_Content -->
						</div><!-- /.mqg-SubSection_Body --><!-- right -->

						<figure class="mqg-SubSection_Img mqg-SubSection_Inner-left">
							<img src="" alt="">
						</figure>
					</div>	<!-- /.mqg-SubSection_Inner -->

				</div>

				<div class="mqg-SubSection"><!-- 本文左寄り -->
					<div class="mqg-SubSection_Inner"><!-- width:780px -->

						<div class="mqg-SubSection_Body mqg-SubSection_Inner-left"><!-- right -->
							<div class="mqg-SubSection_Header">
								<span class="mqg-Text mqg-Text-sm mqg-Text-red">BigCategory</span>
								<h2 class="mqg-SubSection_Title">THIS<br>SUBSECTION'S<br>MAINTITLE</h2>
							</div>

							<div class="mqg-SubSection_Content">
								<p class="mqg-Text">
									このセクションのディスクリプションとなるようなテキストが簡単に入ります。
								</p>
								<button class="mqg-Btn mqg-Btn-black mqg-Text">CLICK-MORE- ></button>
							</div><!-- /.mqg-SubSection_Content -->
						</div><!-- /.mqg-SubSection_Body --><!-- right -->

						<figure class="mqg-SubSection_Img mqg-SubSection_Inner-right">
							<img src="" alt="">
						</figure>
					</div>	<!-- /.mqg-SubSection_Inner -->

				</div>

			</section>

			<section class="mqg-Section mqg-Trend"><!-- trending-item -->
				<header class="mqg-Section_Header text-center">
					<h2 class="mqg-Section_Title">WRITING<br>TRENDING ITEMS</h2>
				</header>

				<div class="mqg-Section_Content">
					<ul class="mqg-Trend_List">
						<li class="mqg-Trend_ListItem">
							<figure class="mqg-Trend_Img">
								<img src="" alt="化粧品の写真">
							</figure>
							<div class="mqg-Mark_New-bgRed mqg-Mark_New-trendItem">NEW</div>

							<div>
								<span class="mqg-Text mqg-Text-sm mqg-Text-red">CATEGORY</span>
								<h3 class="msg-Text_ItemName">商品の名前</h3>
								<p class="mqg-Text msg-Text-beige">商品の説明のコメントテキスト商品の説明のコメントテキスト商品の説明のコメントテキスト</p>
							</div>
						</li>

						<li class="mqg-Trend_ListItem mqg-Trend_ListItem-alignEnd" style="background-color: pink">
							<figure class="mqg-Trend_Img">
								<img src="" alt="化粧品の写真">
							</figure>
							<div class="mqg-Mark_New-bgRed mqg-Mark_New-trendItem">NEW</div>

							<div>
								<span class="mqg-Text mqg-Text-sm mqg-Text-red">CATEGORY</span>
								<h3 class="msg-Text_ItemName">商品の名前</h3>
								<p class="mqg-Text msg-Text-beige">商品の説明のコメントテキスト商品の説明のコメントテキスト商品の説明のコメントテキスト</p>
							</div>
						</li>

						<li class="mqg-Trend_ListItem">
							<figure class="mqg-Trend_Img">
								<img src="" alt="化粧品の写真">
							</figure>

							<div>
								<span class="mqg-Text mqg-Text-sm mqg-Text-red">CATEGORY</span>
								<h3 class="msg-Text_ItemName">商品の名前</h3>
								<p class="mqg-Text msg-Text-beige">商品の説明のコメントテキスト商品の説明のコメントテキスト商品の説明のコメントテキスト</p>
							</div>
						</li>

						<li class="mqg-Trend_ListItem" style="background-color: pink">
							<figure class="mqg-Trend_Img">
								<img src="" alt="化粧品の写真">
							</figure>
							<div class="mqg-Mark_New-bgRed mqg-Mark_New-trendItem">NEW</div>

							<div>
								<span class="mqg-Text mqg-Text-sm mqg-Text-red">CATEGORY</span>
								<h3 class="msg-Text_ItemName">商品の名前</h3>
								<p class="mqg-Text msg-Text-beige">商品の説明のコメントテキスト商品の説明のコメントテキスト商品の説明のコメントテキスト</p>
							</div>
						</li>

						<li class="mqg-Trend_ListItem mqg-Trend_ListItem-alignEnd">
							<figure class="mqg-Trend_Img">
								<img src="" alt="化粧品の写真">
							</figure>
							<div class="mqg-Mark_bgBlack mqg-Mark_New-trendItem">Limited</div>

							<div>
								<span class="mqg-Text mqg-Text-sm mqg-Text-red">CATEGORY</span>
								<h3 class="msg-Text_ItemName">商品の名前</h3>
								<p class="mqg-Text msg-Text-beige">商品の説明のコメントテキスト商品の説明のコメントテキスト商品の説明のコメントテキスト</p>
							</div>
						</li>

						<li class="mqg-Trend_ListItem" style="background-color: pink">
							<figure class="mqg-Trend_Img">
								<img src="" alt="化粧品の写真">
							</figure>

							<div>
								<span class="mqg-Text mqg-Text-sm mqg-Text-red">CATEGORY</span>
								<h3 class="msg-Text_ItemName">商品の名前</h3>
								<p class="mqg-Text msg-Text-beige">商品の説明のコメントテキスト商品の説明のコメントテキスト商品の説明のコメントテキスト</p>
							</div>
						</li>
					</ul>

				</div>
			</section>

			<section class="mqg-Section mqg-Banner"><!-- blog -->

				<p class="mqg-Text-copyPhrase text-center mqg-Banner_CopyPhrase">copy phrase</p>
				<ul class="mqg-Banner_List">
					<li class="mqg-Banner_Item"><h3 class="mqg-Banner_Title mqg-Text mqg-Text-white mqg-Anchor-TransBorder">our blog</h3></li>
					<li class="mqg-Banner_Item"><h3 class="mqg-Banner_Title mqg-Text mqg-Text-white">catarog</h3></li>
					<li class="mqg-Banner_Item"> <h3 class="mqg-Banner_Title mqg-Text mqg-Text-white">news and information</h3></li>
				</ul>

				<a class="mqg-Anchor_Text-sm mqg-Anchor_Text-red">click -me-</a>
				<span>sns</span>
				<span>icon</span>

			</section>



		</main><!-- #main -->
	</div><!-- #primary -->
	<script>
		jQuery(function($){
			$('.slick_List').slick({
				autoplay: true,
				arrows: false,
        infinite: true,
        autoplaySpeed: 4900,
//				fade: true
			});
		});
	</script>

<?php
get_footer();
