<?php
  //テーマサポート
  add_theme_support('title-tag');   // タイトルタグのサポートを許可
  add_theme_support('post-thumbnails'); // アイキャッチのサポートを追加
  add_theme_support('automatic-feed-links'); // フィードの有効化

  // メニューの追加
  register_nav_menus(array(
    'menu_nav' => 'menu navigation',
    'fixed_nav' => 'fixed page navigation',
  ));

  //タイトル出力
  function hamburger_title($title) {
  if (is_front_page() && is_home()) { //トップページなら
    $title = get_bloginfo('name', 'display');
  } elseif (is_singular()) { //シングルページなら
    $title = single_post_title('', false);
  }
    return $title;
  }
  add_filter('pre_get_document_title', 'hamburger_title');

  // スタイルシートを読み込むタグを出力
  function hamburger_script() {
    wp_enqueue_style('googlefonts', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Roboto:wght@400;700&display=swap', array());
    wp_enqueue_style('ress', get_template_directory_uri() . '/css/ress.css', array());
    wp_enqueue_style('hamburger', get_template_directory_uri() . '/css/hamburger.css', array(), '1.0.0');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0');

    wp_enqueue_script('menu-button', get_template_directory_uri(). '/js/menu-button.js', array('jquery'));
  }
  add_action('wp_enqueue_scripts', 'hamburger_script');



