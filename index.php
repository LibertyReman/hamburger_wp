
<?php get_header(); ?> <!-- header.phpを読み込むテンプレートタグ -->
        <article>
          <div class="p-mainvisual"> <!-- flex column center center タテヨコ真ん中 -->
            <h1 class="p-mainvisual__title">ダミーサイト</h1>
          </div>

          <div class="l-main__wrapper">
            <ul class="l-main__wrapper__flex"> <!-- flex column/row -->
              <li class="p-content p-content--img-takeout"> <!-- flex column space-between タテ並び両端から均等に配置 -->
                <a class="c-flex c-flex--column-spacebetween" href="<?php echo esc_url(home_url('/category/takeout')); ?>">
                  <h2 class="p-content__title">Take Out</h2>
                  <div class="p-content__boxes">
                    <dl class="p-content__box">
                      <dt class="p-content__box__title">Take OUT</dt>
                      <dd class="p-content__box__text">当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています</dd>
                    </dl>
                    <dl class="p-content__box">
                      <dt class="p-content__box__title">Take OUT</dt>
                      <dd class="p-content__box__text">当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています</dd>
                    </dl>
                  </div>
                </a>
              </li>

              <li class="p-content p-content--img-eatin"> <!-- flex column space-between タテ並び両端から均等に配置 -->
                <a class="c-flex c-flex--column-spacebetween" href="<?php echo esc_url(home_url('/category/eatin')); ?>">
                  <h2 class="p-content__title">Eat In</h2>
                  <div class="p-content__boxes">
                    <dl class="p-content__box">
                      <dt class="p-content__box__title">Eat In</dt>
                      <dd class="p-content__box__text">店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです</dd>
                    </dl>
                    <dl class="p-content__box">
                      <dt class="p-content__box__title">Eat In</dt>
                      <dd class="p-content__box__text">店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです</dd>
                    </dl>
                  </div>
                </a>
              </li>
            </ul>
          </div>

          <section class="p-access">
            <h3 class="p-access__title">見出しが入ります</h3>
            <p class="p-access__text">
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p>
            <div class="p-access__layer"></div>
            <iframe class="p-access__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7583025823956!2d139.742899862583!3d35.65832608111563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1689603330352!5m2!1sja!2sjp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </section>

        </article>
      </div> <!-- .l-main__body -->

    </main>
<?php get_footer(); ?> <!-- footer.phpを読み込むテンプレートタグ -->

