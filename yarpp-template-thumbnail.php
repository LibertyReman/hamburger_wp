<h2 class="p-suggest__title"><i class="fas fa-star"></i> おすすめ商品</h2>
<?php if ( have_posts() ) : ?>
<ul class="c-flex c-flex--wrap">
<?php
  while ( have_posts() ) :
    the_post(); ?>
    <li class="p-card p-card--suggest">
      <div class="p-card__img p-card__img--suggest"><?php the_post_thumbnail(); ?></div> <!-- アイキャッチ画像を出力 -->
      <div class="p-card__content p-card__content--suggest">
        <h3 class="p-card__content__title"><?php the_title(); ?></h3>
        <div class="p-card__content__text">
          <?php
            $content = strip_tags($post->post_content);
            $max_strlen = 50;
            if (mb_strlen($content, 'UTF-8') > $max_strlen) {
              $content = mb_substr($content, 0, $max_strlen, 'UTF-8');
              echo $content . '…';
            } else {
              echo $content;
            }
          ?>
        </div>
        <button onclick="location.href='<?php the_permalink(); ?>'" class="c-button p-card__content__button p-card__content__button--suggest">詳しく見る</button>
      </div>
    </li>
  <?php endwhile; ?>
</ul>
<?php else : ?>
  <p>No related posts.</p>
<?php endif; ?>
