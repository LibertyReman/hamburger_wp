
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
                      <div class="p-card__content__text">
                        <?php
                          $content = strip_tags($post->post_content);
                          $max_strlen = 150;
                          if (mb_strlen($content, 'UTF-8') > $max_strlen) {
                            $content = mb_substr($content, 0, $max_strlen, 'UTF-8');
                            echo $content . '…';
                          } else {
                            echo $content;
                          }
                        ?>
                      </div>
                      <button onclick="location.href='<?php the_permalink(); ?>'" class="c-button p-card__content__button">詳しく見る</button>
                    </div>
                  </li>
                <?php endwhile;
              else : // 投稿データがない場合 ?>
                <p>表示する投稿データがありません</p>
              <?php endif; ?>
            </ul>

            <section class="p-pagenavigation"> <!-- flex row space-between ヨコ並び両端から均等に配置 -->
              <?php
                $current_pgae = get_query_var('paged');
                $current_pgae = $current_pgae == 0 ? '1' : $current_pgae;
                $max_pages = $wp_query->max_num_pages;
                echo '<p class="p-pagenavigation__info">page '.$current_pgae .'/'.$max_pages .'</p>';
              ?>

              <?php the_posts_pagination(
                array(
                    'show_all'   => true, // 全てのページを表示
                    'prev_next'  => true, // 「前へ」「次へ」のリンクを表示
                    'prev_text'  => __( '&lt;&lt; '), // 「前へ」リンクのテキスト
                    'next_text'  => __( ' &gt;&gt;'), // 「次へ」リンクのテキスト
                    'type'       => 'list', // 戻り値の指定 (plain/list)
                )
              ); ?>
            </section>

          </div> <!-- .l-main__wrapper -->
        </article>
      </div> <!-- .l-main__body -->

    </main>
<?php get_footer(); ?> <!-- footer.phpを読み込むテンプレートタグ -->


