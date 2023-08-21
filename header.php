<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta chaarset="utf-8">
    <meta name="viewport" content="width=width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/favicon.ico">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title>ハンバーガーサイト</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="./css/ress.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
  </head>

  <body <?php body_class(); ?>> <!-- 表示するページの種類によってclassを付与 -->
    <main class="l-main">
      <aside>
        <?php get_sidebar(); ?> <!-- sidebar.phpを読み込むテンプレートタグ -->
      </aside>

      <div class="l-main__body">
        <header class="l-header"> <!-- flex column center タテ並び真ん中 -->
          <h1 class="l-header__logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
          <?php get_search_form(); ?> <!-- searchform.phpを読み込むテンプレートタグ -->
        </header>


