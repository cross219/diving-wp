<?php
function enqueue_custom_assets()
{

	// Google Fonts
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;700&family=Noto+Serif+JP:wght@400;700&display=swap', false);

	// CSS
	wp_enqueue_style('custom-style', get_theme_file_uri('/assets/css/style.css'), false);

	// JavaScript
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', true);
	wp_enqueue_script('jquery-inview', get_theme_file_uri('/assets/js/jquery.inview.min.js'), array('jquery'), true);
	wp_enqueue_style('swiper-style', 'https://unpkg.com/swiper@8/swiper-bundle.min.css', false);
	wp_enqueue_script('swiper-script', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', true);
	wp_enqueue_script('custom-script', get_theme_file_uri('/assets/js/script.js'), array('jquery'), true);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_assets');

function my_setup()
{
	add_theme_support('post-thumbnails'); /* アイキャッチ */
	add_theme_support('automatic-feed-links'); /* RSSフィード */
	add_theme_support('title-tag'); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action('after_setup_theme', 'my_setup');


//抜粋を85文字に変更
function custom_excerpt_length($length)
{
	return 85;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);


//コンタクトフォーム キャンペーン ドロップダウンリスト
function custom_get_select_values($values, $options, $args)
{
	if (in_array('GetOccupation', $options)) {
		// データを取得する
		$args = array(
			'post_type' => 'campaign',
			'posts_per_page' => -1,
		);
		$custom_posts = get_posts($args);
		if ($custom_posts) {
			$values = array();
			foreach ($custom_posts as $post) {
				$values[] = $post->post_title;
			}
		}
	}
	return $values;
}
add_filter('wpcf7_form_tag_data_option', 'custom_get_select_values', 10, 3);

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
	return false;
}

function is_parent_slug()
{
	global $post;
	if ($post->post_parent) {
		$post_data = get_post($post->post_parent);
		return $post_data->post_name;
	}
}

function getPostViews($postID)
{
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if ($count == '') {
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
		return '0 PV';
		// return '0 View';
	}
	return $count . ' PV';
	// return $count.'Views';
}

function setPostViews($postID)
{
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if ($count == '') {
		$count = 0;
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
	} else {
		$count++;
		update_post_meta($postID, $count_key, $count);
	}
}
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


//表示件数を設定

function my_pre_get_posts($query)
{
	if (is_admin() || !$query->is_main_query()) {
		return;
	}
	if ($query->is_post_type_archive('campaign')) {
		// カスタム投稿タイプ「news」の場合
		$query->set('posts_per_page', 4);
	}
	if ($query->is_post_type_archive('voice')) {
		// カスタム投稿タイプ「news」の場合
		$query->set('posts_per_page', 6);
	}
}
add_action('pre_get_posts', 'my_pre_get_posts');

