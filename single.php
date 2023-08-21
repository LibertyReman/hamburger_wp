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
          <div class="p-mainvisual p-mainvisual--img-single"> <!-- flex column center center タテヨコ真ん中 -->
            <h1 class="p-mainvisual__title">h1 チーズバーガー</h1>
          </div>

          <div class="l-main__wrapper">
            <div class="p-sentence">
              <h2>見出しh2</h2>
              <p>pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。</p>
              <h3>見出しh3</h3>
              <h4>見出しh4</h4>
              <h5>見出しh5</h5>
              <h6>見出しh6</h6>
              <blockquote cite="/">
                <p>Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</p>
                出典元：<cite><a href="/">○○○○○○○○○○○○</a></cite>
              </blockquote>

              <div class="p-sentence__img p-sentence__img--full">
                <img src="img/single-burger1.jpg" alt="バーガー1">
              </div>

              <div class="p-sentence__2rows">
                <div>
                  <img src="img/single-burger2.jpg" alt="バーガー2">
                </div>
                <p>テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
              </div>

              <div class="p-sentence__2rows">
                <p>テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
                <div>
                  <img src="img/single-burger2.jpg" alt="バーガー2">
                </div>
              </div>

              <div class="p-sentence__img">
                <img src="img/single-burger2.jpg"alt="バーガー2">
              </div>

              <div class="p-sentence__griditems">
                <div><img src="img/single-burger2.jpg"alt="バーガー2"></div>
                <div><img src="img/single-burger2.jpg"alt="バーガー2"></div>
                <div><img src="img/single-burger2.jpg"alt="バーガー2"></div>
                <div><img src="img/single-burger2.jpg"alt="バーガー2"></div>
                <div><img src="img/single-burger2.jpg"alt="バーガー2"></div>
                <div><img src="img/single-burger2.jpg"alt="バーガー2"></div>
                <div><img src="img/single-burger2.jpg"alt="バーガー2"></div>
                <div><img src="img/single-burger2.jpg"alt="バーガー2"></div>
                <div><img src="img/single-burger2.jpg"alt="バーガー2"></div>
              </div>

              <ol>
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
                <ol>
                  <li>リスト2リスト2リスト2</li>
                  <li>リスト2リスト2リスト2</li>
                </ol>
              </ol>

              <ol>
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
              </ol>

              <ul>
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
                <ul>
                  <li>リスト2リスト2リスト2</li>
                  <li>リスト2リスト2リスト2</li>
                </ul>
              </ul>

              <ul>
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
              </ul>

              <pre>
            <code>
    &lt;html&gt;
        &lt;head&gt;
        &lt;/head&gt;
        &lt;body&gt;
        &lt;/body&gt;
    &lt;/html&gt;
            </code>
              </pre>

              <table>
                <tr><td width="40%">テーブル</td><td>テーブル</td></tr>
                <tr><td >テーブル</td><td>テーブル</td></tr>
                <tr><td >テーブル</td><td>テーブル</td></tr>
                <tr><td >テーブル</td><td>テーブル</td></tr>
                <tr><td >テーブル</td><td>テーブル</td></tr>
              </table>

              <button>ボタン</button>

              <p><b>boldboldboldboldboldboldbold</b></p>

              <div class="u-mb70"></div>

            </div> <!-- .p-sentence -->
          </div> <!-- .l-main__wrapper -->
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


