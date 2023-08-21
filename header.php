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
        <?php get_sidebar(); ?> <!-- sidebar.phpを読み込むテンプレートタグ -->
      </aside>

      <div class="l-main__body">
        <header class="l-header"> <!-- flex column center タテ並び真ん中 -->
          <h1 class="l-header__logo"><a href="./index.html">Hamburger</a></h1>

          <form action="./archive_search.html" class="c-form p-search"> <!-- flex row ヨコ並び -->
            <input type="text" placeholder="" class="c-form__text p-search__text">
            <input type="submit" value="検索" class="c-form__submit p-search__submit">
          </form>
        </header>


