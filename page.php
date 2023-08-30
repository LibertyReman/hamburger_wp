<?php get_header(); ?> <!-- header.phpを読み込むテンプレートタグ -->
        <article>
          <div class="p-mainvisual p-mainvisual--img-page"> <!-- flex column center center タテヨコ真ん中 -->
            <h1 class="p-mainvisual__title"><?php echo get_the_title(); ?></h1>
          </div>

          <div class="l-main__wrapper">
            <div class="p-sentence">

              <?php the_content(); ?> <!-- 本文の出力 -->

            </div> <!-- .p-sentence -->
          </div> <!-- .l-main__wrapper -->
        </article>
      </div> <!-- .l-main__body -->

    </main>
<?php get_footer(); ?> <!-- footer.phpを読み込むテンプレートタグ -->

