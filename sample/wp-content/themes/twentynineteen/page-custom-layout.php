<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package xearts
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<!--			--><?php
//			while ( have_posts() ) : the_post();
//
//				get_template_part( 'template-parts/content', 'page' );
//
//				// If comments are open or we have at least one comment, load up the comment template.
//				if ( comments_open() || get_comments_number() ) :
//					comments_template();
//				endif;
//
//			endwhile; // End of the loop.
//			?>

            <section class="cstomLyout-Section">
                <header class="cstomLyout-Section_Header">
                    <h2 class="cstomLyout-Section_Title">セクションのメインタイトル</h2>
                    <span class="cstomLyout-Section_SubTitle">Englesh-Title</span>
                    <p class="cstomLyout-Section_TitleDscript">どちらをhタグにしてどちらをサブタイトルとして扱うかはページの意図と関わってきます。また、どこまでをHeaderタグのなかに納めるかも意図や構造化によって変わってきます。</p>
                </header>

                <div class="cstomLyout-Section_Content">
                    <div class="cstomLyout-SubSection">
                        <div class="cstomLyout-SubSection_Header cstomLyout-SubSection_Header-content1">
                            <h3 class="cstomLyout-SubSection_Title">サブコンテンツ１のタイトル</h3>
                            <p class="cstomLyout-Subsection_TitleDscript">ディスクリプショントとなるようなテキストが入る。タイトルとは別に補足的に文章が入ることは多いです。</p>
                        </div>
                        <div class="cstomLyout-SubSection_Content cstomLyout-SubSection_Content-1">
                            <p class="cstomLyout-Text">
                                cstomLyout-layoutのサブコンテンツその１のテキスト<br>
                                cstomLyout-layoutのサブコンテンツその１のテキスト<br>
                                cstomLyout-layoutのサブコンテンツその１のテキスト<br>
                            </p>
                        </div>
                    </div><!-- /.SubSection -->

                    <div class="cstomLyout-SubSection">
                        <div class="cstomLyout-SubSection_Header cstomLyout-SubSection_Header-content2">
                            <h3 class="cstomLyout-SubSection_Title">サブコンテンツ２のタイトル</h3>
                            <p>ディスクリプショントとなるようなテキストが入る。タイトルとは別に補足的に文章が入ることは多いです。</p>
                        </div>
                        <div class="cstomLyout-SubSection_Content cstomLyout-SubSection_Content-2">
                            <p>
                                cstomLyout-layoutのサブコンテンツその２のテキスト<br>
                                cstomLyout-layoutのサブコンテンツその２のテキスト<br>
                                cstomLyout-layoutのサブコンテンツその２のテキスト<br>
                            </p>
                        </div>
                    </div><!-- /.SubSection -->
                </div><!-- /.Section_Content -->
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
