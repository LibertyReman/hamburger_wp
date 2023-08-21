<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta chaarset="utf-8">
    <meta name="viewport" content="width=width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/favicon.ico">
    <meta name="description" content="サイトの説明文が入ります">
    <title>ハンバーガーサイト</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="./css/ress.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
  </head>

  <body>
    <main class="l-main">
      <aside>
        <div class="p-gmenu"> <!-- flex row flex-end ヨコ並び右端 -->
          <button class="p-gmenu__menu-opbtn js-menu-button">
            <span>Menu</span>
          </button>

          <div class="p-gmenu__layer"></div>
          <div class="p-gmenu__content"> <!-- flex column flex-end タテ並び右端 -->
            <button class="p-gmenu__content__menu-clbtn js-menu-button">
              <span>Close</span>
            </button>

            <h2  class="p-gmenu__content__title">Menu</h2>

            <ul>
              <li>
                <a href="/">バーガー</a>
                <ul>
                  <li><a href="/">ハンバーガー</a></li>
                  <li><a href="./archive.html">チーズバーガー</a></li>
                  <li><a href="/">テリヤキバーガー</a></li>
                  <li><a href="/">アボカドバーガー</a></li>
                  <li><a href="/">フィッシュバーガー</a></li>
                  <li><a href="/">ベーコンバーガー</a></li>
                  <li><a href="/">チキンバーガー</a></li>
                </ul>
              </li>

              <li>
                <a href="/">サイド</a>
                <ul>
                  <li><a href="/">ポテト</a></li>
                  <li><a href="/">サラダ</a></li>
                  <li><a href="/">ナゲット</a></li>
                  <li><a href="/">コーン</a></li>
                </ul>
              </li>

              <li>
                <a href="/">ドリンク</a>
                <ul>
                  <li><a href="/">コーラ</a></li>
                  <li><a href="/">ファンタ</a></li>
                  <li><a href="/">オレンジ</a></li>
                  <li><a href="/">アップル</a></li>
                  <li><a href="/">紅茶（Ice/Hot）</a></li>
                  <li><a href="/">コーヒー（Ice/Hot）</a></li>
                </ul>
              </li>

            </ul>
          </div> <!-- .p-gmenu__content -->
        </div> <!-- .p-gmenu -->
      </aside>

      <div class="l-main__body">
        <header class="l-header"> <!-- flex column center タテ並び真ん中 -->
          <h1 class="l-header__logo"><a href="./index.html">Hamburger</a></h1>

          <form action="./archive_search.html" class="c-form p-search"> <!-- flex row ヨコ並び -->
            <input type="text" placeholder="" class="c-form__text p-search__text">
            <input type="submit" value="検索" class="c-form__submit p-search__submit">
          </form>
        </header>

        <article>
          <div class="p-mainvisual"> <!-- flex column center center タテヨコ真ん中 -->
            <h1 class="p-mainvisual__title">ダミーサイト</h1>
          </div>

          <div class="l-main__wrapper">
            <ul class="l-main__wrapper__flex"> <!-- flex column/row -->
              <li class="p-content p-content--img-takeout"> <!-- flex column space-between タテ並び両端から均等に配置 -->
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
              </li>

              <li class="p-content p-content--img-eatin"> <!-- flex column space-between タテ並び両端から均等に配置 -->
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

    <footer class="l-footer">
      <ul class="l-footer__info"> <!-- flex row center ヨコ並び真ん中-->
        <li class="l-footer__info__list"><a href="./page.html">ショップ情報</a></li>
        <li class="l-footer__info__list"><a href="./page.html">ヒストリー</a></li>
      </ul>

      <p class="p-copyright">Copyright: RaiseTech</p> <!-- flex row center ヨコ並び真ん中-->
    </footer>
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/menu-button.js"></script>
  </body>

</html>


