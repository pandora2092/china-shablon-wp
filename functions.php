<?php
/**
 * china functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package china
 */

add_action('wp_enqueue_scripts', 'theme_styles');
add_action('wp_enqueue_scripts', 'theme_scripts');
add_action( 'after_setup_theme', 'Mymenu');
add_action( 'init', 'register_post_types' );
add_action('widgets_init', 'register_my_widgets');

add_action('init', function() {
  add_rewrite_rule('(.?.+?)/page/?([0-9]{1,})/?$', 'index.php?pagename=$matches[1]&paged=$matches[2]', 'top');
});

function register_post_types(){
	register_post_type('heis', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Вуз',
			'singular_name'      => 'Вуз',
			'add_new'            => 'Добавить вуз',
			'add_new_item'       => 'Добавление вуза',
			'edit_item'          => 'Редактирование вуза', 
			'new_item'           => 'Новый вуз',
			'view_item'          => 'Смотреть вуз', 
			'search_items'       => 'Искать вуз', 
			'not_found'          => 'Не найдено', 
			'not_found_in_trash' => 'Не найдено в корзине', 
			'parent_item_colon'  => '',
			'menu_name'          => 'Вузы', 
		),
		'description'         => 'Это вузы',
		'public'              => true,
		'publicly_queryable'  => true, 
		'exclude_from_search' => false, 
		'show_ui'             => true, 
		'show_in_menu'        => true, 
		'show_in_admin_bar'   => true, 
		'show_in_nav_menus'   => true, 
		'show_in_rest'        => true, 
		'rest_base'           => 4, 
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		'hierarchical'        => false,
		'supports'            => array('title','editor','thumbnail','excerpt'), 
		'taxonomies'          => array(''),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

	register_post_type('program', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Программа',
			'singular_name'      => 'Программы',
			'add_new'            => 'Добавить программу',
			'add_new_item'       => 'Добавление программы',
			'edit_item'          => 'Редактирование программы', 
			'new_item'           => 'Новая программа',
			'view_item'          => 'Смотреть программу', 
			'search_items'       => 'Искать программу', 
			'not_found'          => 'Не найдено', 
			'not_found_in_trash' => 'Не найдено в корзине', 
			'parent_item_colon'  => '',
			'menu_name'          => 'Программы', 
		),
		'description'         => 'Это программы',
		'public'              => true,
		'publicly_queryable'  => true, 
		'exclude_from_search' => false, 
		'show_ui'             => true, 
		'show_in_menu'        => true, 
		'show_in_admin_bar'   => true, 
		'show_in_nav_menus'   => true, 
		'show_in_rest'        => true, 
		'rest_base'           => 4, 
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		'hierarchical'        => false,
		'supports'            => array('title','editor','thumbnail','excerpt'), 
		'taxonomies'          => array('programs'),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

	register_post_type('news', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Новость',
			'singular_name'      => 'Новости',
			'add_new'            => 'Добавить новость',
			'add_new_item'       => 'Добавление новости',
			'edit_item'          => 'Редактирование новости', 
			'new_item'           => 'Новая новость',
			'view_item'          => 'Смотреть новость', 
			'search_items'       => 'Искать новость', 
			'not_found'          => 'Не найдено', 
			'not_found_in_trash' => 'Не найдено в корзине', 
			'parent_item_colon'  => '',
			'menu_name'          => 'Новости', 
		),
		'description'         => 'Это новости',
		'public'              => true,
		'publicly_queryable'  => true, 
		'exclude_from_search' => false, 
		'show_ui'             => true, 
		'show_in_menu'        => true, 
		'show_in_admin_bar'   => true, 
		'show_in_nav_menus'   => true, 
		'show_in_rest'        => true, 
		'rest_base'           => 4, 
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		'hierarchical'        => false,
		'supports'            => array('title','editor','thumbnail','excerpt'), 
		'taxonomies'          => array(''),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

	register_post_type('review', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Отзыв',
			'singular_name'      => 'Отзывы',
			'add_new'            => 'Добавить отзыв',
			'add_new_item'       => 'Добавление отзыва',
			'edit_item'          => 'Редактирование отзыва', 
			'new_item'           => 'Новый отзыв',
			'view_item'          => 'Смотреть отзыв', 
			'search_items'       => 'Искать отзыв', 
			'not_found'          => 'Не найдено', 
			'not_found_in_trash' => 'Не найдено в корзине', 
			'parent_item_colon'  => '',
			'menu_name'          => 'Отзывы', 
		),
		'description'         => 'Это отзывы',
		'public'              => true,
		'publicly_queryable'  => true, 
		'exclude_from_search' => false, 
		'show_ui'             => true, 
		'show_in_menu'        => true, 
		'show_in_admin_bar'   => true, 
		'show_in_nav_menus'   => true, 
		'show_in_rest'        => true, 
		'rest_base'           => 4, 
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		'hierarchical'        => false,
		'supports'            => array('title','editor','thumbnail','excerpt'), 
		'taxonomies'          => array('reviews'),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}

add_action('init', 'create_taxonomy');

function create_taxonomy(){
	register_taxonomy('programs', array('program'), array(
		'label'                 => '',
		'labels'                => array(
			'name'              => 'Программы',
			'singular_name'     => 'Программы',
			'search_items'      => 'Найти программу',
			'all_items'         => 'Все программы',
			'view_item '        => 'Посмотреть программу',
			'parent_item'       => 'Родительская программа',
			'parent_item_colon' => 'Родительская программа:',
			'edit_item'         => 'Изменить программу',
			'update_item'       => 'Обновить программу',
			'add_new_item'      => 'Добавить программу',
			'new_item_name'     => 'Новое имя программы',
			'menu_name'         => 'Типы программ',
		),
		'description'           => 'Используемые программы', 
		'public'                => true,
		'publicly_queryable'    => null, 
		'hierarchical'          => false,
		'rewrite'               => true
	) );

	register_taxonomy('reviews', array('review'), array(
		'label'                 => '',
		'labels'                => array(
			'name'              => 'Категорию отзывов',
			'singular_name'     => 'Категория отзыва',
			'search_items'      => 'Найти категорию отзыва',
			'all_items'         => 'Все категории отзывов',
			'view_item '        => 'Посмотреть категорию отзывов',
			'parent_item'       => 'Родительская категория отзывов',
			'parent_item_colon' => 'Родительская категория отзывов:',
			'edit_item'         => 'Изменить категорию отзывов',
			'update_item'       => 'Обновить категорию отзывов',
			'add_new_item'      => 'Добавить категорию отзывов',
			'new_item_name'     => 'Новое имя категории отзывов',
			'menu_name'         => 'Категории отзывов',
		),
		'description'           => 'Используемые категории отзывов', 
		'public'                => true,
		'publicly_queryable'    => null, 
		'hierarchical'          => false,
		'rewrite'               => true
	) );
}

function my_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml';
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);

function register_my_widgets(){
	register_sidebar( array(
		'name'          => 'Left Sidebar',
		'id'            => "left_sidebar",
		'description'   => 'Описание сайдбара',
		'class'         => '',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h5 class="widgettitle">',
		'after_title'   => "</h5>\n"
	) );
}

function Mymenu() {
  register_nav_menu('top', 'Меню в шапке');
  register_nav_menu('aside', 'Боковое меню');
  register_nav_menu('bottom', 'Нижнее меню');
  register_nav_menu('social', 'Нижнее с соцсетями');
  register_nav_menu('rewiews', 'Боковое меню отзывов');
  add_theme_support( 'post-thumbnails', array('post', 'heis') );
  add_image_size( 'post_thumb', 1300, 500, true );
  add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
      function my_navigation_template( $template, $class ){
      return '
      <div class="pagination" role="navigation">
	     <ul>%3$s</ul>
	  </div>';
   }
}


function wp_breadcrumbs() {

  /* Настройки*/
  $text['home'] = 'Главная'; // текст ссылки "Главная"
  $text['category'] = 'Архив рубрики "%s"'; // текст для страницы рубрики
  $text['search'] = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
  $text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега
  $text['author'] = 'Статьи автора %s'; // текст для страницы автора
  $text['404'] = 'Ошибка 404'; // текст для страницы 404
  $text['page'] = 'Страница %s'; // текст 'Страница N'
  $text['cpage'] = 'Страница комментариев %s'; // текст 'Страница комментариев N'
	$sep = '/'; // разделитель между "крошками"
  $wrap_before = '<div class="breadcrumbs">'; // открывающий тег обертки
  $wrap_after = '</div><!-- .breadcrumbs -->'; // закрывающий тег обертки
  
  $sep_before = '<span class="sep">'; // тег перед разделителем
  $sep_after = '</span>'; // тег после разделителя
  $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
  $show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
  $show_current = 1; // 1 - показывать название текущей страницы, 0 - не показывать
  $before = '<span class="page-name">'; // тег перед текущей "крошкой"
  $after = '</span>'; // тег после текущей "крошки"
 

  global $post;
  $home_link = home_url('/');
  $link_before = '<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">';
  $link_after = '</span>';
  $link_attr = ' itemprop="url"';
  $link_in_before = '<span itemprop="title">';
  $link_in_after = '</span>';
  $link = $link_before . '<a href="%1$s"' . $link_attr . '>' . $link_in_before . '%2$s' . $link_in_after . '</a>' . $link_after;
  $frontpage_id = get_option('page_on_front');
  $parent_id = $post->post_parent;
  $sep = ' ' . $sep_before . $sep . $sep_after . ' ';

  if (is_home() || is_front_page()) {

    if ($show_on_home) echo $wrap_before . '<a href="' . $home_link . '">' . $text['home'] . '</a>' . $wrap_after;

  } else {

    echo $wrap_before;
    if ($show_home_link) echo sprintf($link, $home_link, $text['home']);

    if ( is_category() ) {
      $cat = get_category(get_query_var('cat'), false);
      if ($cat->parent != 0) {
        $cats = get_category_parents($cat->parent, TRUE, $sep);
        $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
        $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
        if ($show_home_link) echo $sep;
        echo $cats;
      }
      if ( get_query_var('paged') ) {
        $cat = $cat->cat_ID;
        echo $sep . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_current) echo $sep . $before . sprintf($text['category'], single_cat_title('', false)) . $after;
      }

    } elseif ( is_search() ) {
      if (have_posts()) {
        if ($show_home_link && $show_current) echo $sep;
        if ($show_current) echo $before . sprintf($text['search'], get_search_query()) . $after;
      } else {
        if ($show_home_link) echo $sep;
        echo $before . sprintf($text['search'], get_search_query()) . $after;
      }

    } elseif ( is_day() ) {
      if ($show_home_link) echo $sep;
      echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $sep;
      echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F'));
      if ($show_current) echo $sep . $before . get_the_time('d') . $after;

    } elseif ( is_month() ) {
      if ($show_home_link) echo $sep;
      echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y'));
      if ($show_current) echo $sep . $before . get_the_time('F') . $after;

    } elseif ( is_year() ) {
      if ($show_home_link && $show_current) echo $sep;
      if ($show_current) echo $before . get_the_time('Y') . $after;

    } elseif ( is_single() && !is_attachment() ) {
      if ($show_home_link) echo $sep;
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        printf($link, $home_link . '/' . $slug['slug'] . '/', $post_type->labels->singular_name);
        if ($show_current) echo $sep . $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        $cats = get_category_parents($cat, TRUE, $sep);
        if (!$show_current || get_query_var('cpage')) $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
        $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
        echo $cats;
        if ( get_query_var('cpage') ) {
          echo $sep . sprintf($link, get_permalink(), get_the_title()) . $sep . $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
        } else {
          if ($show_current) echo $before . get_the_title() . $after;
        }
      }


    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      if ( get_query_var('paged') ) {
        echo $sep . sprintf($link, get_post_type_archive_link($post_type->name), $post_type->label) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_current) echo $sep . $before . $post_type->label . $after;
      }

    } elseif ( is_attachment() ) {
      if ($show_home_link) echo $sep;
      $parent = get_post($parent_id);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      if ($cat) {
        $cats = get_category_parents($cat, TRUE, $sep);
        $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
        echo $cats;
      }
      printf($link, get_permalink($parent), $parent->post_title);
      if ($show_current) echo $sep . $before . get_the_title() . $after;

    } elseif ( is_page() && !$parent_id ) {
      if ($show_current) echo $sep . $before . get_the_title() . $after;

    } elseif ( is_page() && $parent_id ) {
      if ($show_home_link) echo $sep;
      if ($parent_id != $frontpage_id) {
        $breadcrumbs = array();
        while ($parent_id) {
          $page = get_page($parent_id);
          if ($parent_id != $frontpage_id) {
            $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
          }
          $parent_id = $page->post_parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);
        for ($i = 0; $i < count($breadcrumbs); $i++) {
          echo $breadcrumbs[$i];
          if ($i != count($breadcrumbs)-1) echo $sep;
        }
      }
      if ($show_current) echo $sep . $before . get_the_title() . $after;

    } elseif ( is_tag() ) {
      if ( get_query_var('paged') ) {
        $tag_id = get_queried_object_id();
        $tag = get_tag($tag_id);
        echo $sep . sprintf($link, get_tag_link($tag_id), $tag->name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_current) echo $sep . $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
      }

    } elseif ( is_author() ) {
      global $author;
      $author = get_userdata($author);
      if ( get_query_var('paged') ) {
        if ($show_home_link) echo $sep;
        echo sprintf($link, get_author_posts_url($author->ID), $author->display_name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_home_link && $show_current) echo $sep;
        if ($show_current) echo $before . sprintf($text['author'], $author->display_name) . $after;
      }

    } elseif ( is_404() ) {
      if ($show_home_link && $show_current) echo $sep;
      if ($show_current) echo $before . $text['404'] . $after;

    } elseif ( has_post_format() && !is_singular() ) {
      if ($show_home_link) echo $sep;
      echo get_post_format_string( get_post_format() );
    }

    echo $wrap_after;

  }
} 

function theme_styles() {
	wp_enqueue_style('animate', get_template_directory_uri() . '/libs/animate.css/animate.css');
	wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/libs/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css');
	wp_enqueue_style('owl.theme.default', get_template_directory_uri() . '/libs/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css');
	wp_enqueue_style('zebra_accordion', get_template_directory_uri() . '/libs/jQuery-Lightweight-Accordion-Plugin-Zebra-Accordion/dist/zebra_accordion.min.css');
	wp_enqueue_style('hamburgers', get_template_directory_uri() . '/libs/hamburgers-master/dist/hamburgers.min.css');
	wp_enqueue_style('jquery.fancybox', get_template_directory_uri() . '/libs/fancybox-master/dist/jquery.fancybox.min.css');
	wp_enqueue_style('jquery.formstyler', get_template_directory_uri() . '/libs/jQueryFormStyler-master/dist/jquery.formstyler.css');
	wp_enqueue_style('jquery.formstyler.theme', get_template_directory_uri() . '/libs/jQueryFormStyler-master/dist/jquery.formstyler.theme.css');
	wp_enqueue_style('styles', get_stylesheet_uri());
	wp_enqueue_style('main', get_template_directory_uri() . '/css/main.min.css');

};

function theme_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/libs/jquery/dist/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'jquery.easeScroll', get_template_directory_uri() . '/libs/jquery.easeScroll/jquery.easeScroll.js', ['jquery'], null, true);
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/libs/WOW-master/dist/wow.min.js', ['jquery'], null, true);
	wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/libs/OwlCarousel2-2.3.4/dist/owl.carousel.min.js', ['jquery'], null, true);
	wp_enqueue_script( 'zebra_accordion', get_template_directory_uri() . '/libs/jQuery-Lightweight-Accordion-Plugin-Zebra-Accordion/dist/zebra_accordion.min.js', ['jquery'], null, true);
	wp_enqueue_script( 'jquery.fancybox', get_template_directory_uri() . '/libs/fancybox-master/dist/jquery.fancybox.min.js', ['jquery'], null, true);
	wp_enqueue_script( 'jquery.inputmask.bundle', get_template_directory_uri() . '/libs/Inputmask-3.x/dist/jquery.inputmask.bundle.min.js', ['jquery'], null, true);
	wp_enqueue_script( 'inputmask.phone.extensions', get_template_directory_uri() . '/libs/Inputmask-3.x/dist/inputmask.phone.extensions.min.js', ['jquery'], null, true);
	wp_enqueue_script( 'inputmask.phone.extensions', get_template_directory_uri() . '/libs/Inputmask-3.x/dist/inputmask.phone.extensions.min.js', ['jquery'], null, true);
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', ['jquery'], null, true);
}


if ( ! function_exists( 'china_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function china_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on china, use a find and replace
		 * to change 'china' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'china', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'china_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'china_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function china_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'china_content_width', 640 );
}
add_action( 'after_setup_theme', 'china_content_width', 0 );



/**
 * Enqueue scripts and styles.
 */
function china_scripts() {
	wp_enqueue_style( 'china-style', get_stylesheet_uri() );

	wp_enqueue_script( 'china-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'china-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'china_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

