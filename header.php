<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>"> <!-- 言語設定を自動的に出力 -->
  <head>
    <meta chaarset="utf-8">
    <meta name="viewport" content="width=width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/common/ico/favicon.ico">
    <?php wp_head(); ?> <!-- 必ず入れる プラグインや情報出力が機能しなくなってしまう -->
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


