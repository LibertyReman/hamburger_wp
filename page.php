<?php get_header(); ?> <!-- header.phpを読み込むテンプレートタグ -->
        <article>
          <?php if(have_posts()) : // 投稿データがあるか確認
            while(have_posts()) :
              the_post(); // 投稿データの取得 ?>
              <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <!-- 投稿情報classを追加 -->
                <div class="p-mainvisual p-mainvisual--img-page"> <!-- flex column center center タテヨコ真ん中 -->
                  <h1 class="p-mainvisual__title"><?php the_title(); ?></h1>
                </div>

                <div class="l-main__wrapper">
                  <div class="p-sentence">
                    <?php the_content(); ?> <!-- 本文の出力 -->
                  </div> <!-- .p-sentence -->
                </div> <!-- .l-main__wrapper -->
                </div> <!-- post_class() -->
            <?php endwhile;
          else : // 投稿データがない場合 ?>
            <p>表示する投稿データがありません</p>
          <?php endif; ?>
        </article>
      </div> <!-- .l-main__body -->

    </main>
<?php get_footer(); ?> <!-- footer.phpを読み込むテンプレートタグ -->

