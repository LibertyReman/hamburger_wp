<?php get_header(); ?> <!-- header.phpを読み込むテンプレートタグ -->
        <article>
          <?php if(have_posts()) : // 投稿データがあるか確認
            while(have_posts()) :
              the_post(); // 投稿データの取得 ?>
              <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <!-- 投稿情報classを追加 -->
                <div class="p-mainvisual p-mainvisual--img-single" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                  <h1 class="p-mainvisual__title"><?php the_title(); ?></h1>
                </div>

                <div class="l-main__wrapper">
                  <div class="p-sentence">
                    <?php the_content(); ?> <!-- 本文の出力 -->
                    <?php wp_link_pages(); ?> <!--  ページ送りの出力 -->
                    <div class="p-sentence__suggest">
                      <h2><i class="fas fa-star"></i> おすすめ情報</h2>
                      <?php 
                        $suggest_link = get_post_meta($post->ID, 'suggest_link', true);
                        $suggest_title = get_post_meta($post->ID, 'suggest_title', true);
                        if($suggest_title and $suggest_link) : // おすすめタイトルとリンクがある場合
                          echo '<a href="', esc_url($suggest_link), '">', esc_html($suggest_title), '</a>';
                        elseif($suggest_title and $suggest_link = " ") : // おすすめタイトルのみある場合
                          echo '<p>', esc_html($suggest_title), '</p>';
                        else :
                          $category = get_the_category();
                          $link = $category[2]->term_id ? $category[2]->term_id :  $category[0]->term_id;
                          echo '<a href="', get_category_link($link), '">ブログのトップページへ</a>';
                        endif;
                      ?>
                    </div>
                  </div>
                </div>
              </div> <!-- post_class() -->
            <?php endwhile;
          else : // 投稿データがない場合 ?>
            <p>表示する投稿データがありません</p>
          <?php endif; ?>
        </article>
      </div> <!-- .l-main__body -->

    </main>
<?php get_footer(); ?> <!-- footer.phpを読み込むテンプレートタグ -->

