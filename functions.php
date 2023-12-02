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
    wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.6.1/css/all.css', array(), '5.6.1');
    wp_enqueue_style('ress', get_template_directory_uri() . '/css/ress.css', array());
    wp_enqueue_style('hamburger', get_template_directory_uri() . '/css/hamburger.css', array(), '1.0.0');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0');

    wp_enqueue_script('menu-button', get_template_directory_uri(). '/js/menu-button.js', array('jquery'));
  }
  add_action('wp_enqueue_scripts', 'hamburger_script');

  // カスタムフィールド
  function add_suggestinfo_fields() {
  	add_meta_box(
  		'suggest_info_setting',       // カスタムフィールドブロックに割り当てるID名
  		'おすすめ情報',               // カスタムフィールドのタイトル
  		'insert_suggestinfo_fields',  // 入力エリア挿入関数の指定
  		'post',                       // カスタムフィールドを表示する投稿タイプの指定
  		'normal'                      // カスタムフィールドが表示される場所
  	);
  }
  add_action( 'admin_menu', 'add_suggestinfo_fields' );

  // 入力エリア挿入関数
  function insert_suggestinfo_fields() {
  	global $post;
  	echo 'タイトル： <input type="text" name="suggest_title" value="'.get_post_meta( $post->ID, 'suggest_title', true ).'" size="50" style="margin-bottom: 10px;" />　<br>';
  	echo 'リンク： <input type="url" name="suggest_link" pattern="https://.*" value="'.get_post_meta( $post->ID, 'suggest_link', true ).'" size="50" style="margin-bottom: 10px;" />　<br>';
  }

  // カスタムフィールド値の保存
  function save_custom_fields( $post_id ) {
  	if( !empty( $_POST['suggest_title'] ) ){
  		update_post_meta( $post_id, 'suggest_title', $_POST['suggest_title'] );
  	} else {
  		delete_post_meta( $post_id, 'suggest_title' );
  	}

  	if( !empty( $_POST['suggest_link'] ) ){
  		update_post_meta( $post_id, 'suggest_link', $_POST['suggest_link'] );
  	} else {
  		delete_post_meta( $post_id, 'suggest_link' );
  	}
  }
  add_action( 'save_post', 'save_custom_fields' );


  // カスタム投稿タイプ ニュース を登録
  add_action('init', 'create_post_type');

  function create_post_type() {
    register_post_type(
      'news',
      array(
        'label' => 'ニュース',
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'menu_position' => 5,
        'supports' => array(
          'title',
          'editor',
          'thumbnail',
          'revisions',
        ),
      )
    );

    register_taxonomy(
      'news-cat',
      'news',
      array(
        'label' => 'カテゴリー',
        'hierarchical' => true,
        'public' => true,
        'show_in_rest' => true,
      )
    );

    register_taxonomy(
      'news-tag',
      'news',
      array(
        'label' => 'タグ',
        'hierarchical' => false,
        'public' => true,
        'show_in_rest' => true,
        'update_count_callback' => '_update_post_term_count',
      )
    );
  }

  // アーカイブページに属する記事数を取得
  function get_postno_from_archive() {
    $term = get_queried_object();
    echo $term->count;
  }

