
<?php get_header(); ?> <!-- header.phpを読み込むテンプレートタグ -->
        <article>
          <div class="p-mainvisual p-mainvisual--img-archive"> <!-- flex column center center タテヨコ真ん中 -->
            <h1 class="p-mainvisual__title">Menu:</h1>
            <p class="p-mainvisual__subtitle"><?php single_cat_title(); ?></p> <!-- カテゴリー名を表示 -->
          </div>

          <div class="l-main__wrapper">
            <div class="p-sentence">
              <h2 class="p-sentence__title">小見出しが入ります</h2>
              <p class="p-sentence__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </div>

            <ul>
              <?php if(have_posts()) : // 投稿データがあるか確認
                while(have_posts()) :
                  the_post(); // 投稿データの取得 ?>
                  <li class="p-card">
                    <div class="p-card__img"><?php the_post_thumbnail(); ?></div> <!-- アイキャッチ画像を出力 -->
                    <div class="p-card__content">
                      <h3 class="p-card__content__title"><?php the_title(); ?></h3>
                      <div class="p-card__content__text"><?php the_content('...'); ?></div>
                      <button onclick="location.href='<?php the_permalink(); ?>'" class="c-button p-card__content__button">詳しく見る</button>
                    </div>
                  </li>
                <?php endwhile;
              else : // 投稿データがない場合 ?>
                <p>表示する投稿データがありません</p>
              <?php endif; ?>
            </ul>

            <section class="p-pagenavigation"> <!-- flex row space-between ヨコ並び両端から均等に配置 -->
              <p class="p-pagenavigation__info">page 1/10</p>
              <a href="/" class="p-pagenavigation__prev">&lt;&lt; </a>
              <ul class="p-pagenavigation__pages">
                <li class="p-pagenavigation__pages__current"><a href="/">1</a></li>
                <li><a href="/">2</a></li>
                <li><a href="/">3</a></li>
                <li><a href="/">4</a></li>
                <li><a href="/">5</a></li>
                <li><a href="/">6</a></li>
                <li><a href="/">7</a></li>
                <li><a href="/">8</a></li>
                <li><a href="/">9</a></li>
              </ul>
              <a href="/" class="p-pagenavigation__next"> &gt;&gt;</a>
            </section>

          </div> <!-- .l-main__wrapper -->
        </article>
      </div> <!-- .l-main__body -->

    </main>
<?php get_footer(); ?> <!-- footer.phpを読み込むテンプレートタグ -->


