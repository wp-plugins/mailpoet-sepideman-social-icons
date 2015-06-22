<?php
/**
 * Plugin Name: Mailpoet Sepideman Social Icons
 * Plugin URI: http://plugins.sepideman.com/sepideman-mailpoet-social-icons
 * Description: Add more social icons to Mailpoet Plugin, افزودن شبکه های اجتماعی بیشتر به افزونه Mailpoet
 * Version: 1.0.2
 * Author: زرتشت سپیدمان
 * Author URI: http://www.ZartoshtSepideman.com
 * License: GPLv2
 * Tags: Mailpoet, Social, plugin, subscribe, Sepideman, خبرنامه, شبکه های اجتماعی, افزونه
 */
if ( ! defined( 'ABSPATH' ) ) {die();}

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( !is_plugin_active('wysija-newsletters/index.php') ){
	deactivate_plugins( plugin_basename( __FILE__ ) );
}

function sepideman_mailpoet_social_icons_folder() {
    $upload = wp_upload_dir();
    $upload_dir = $upload['basedir'];
    $upload_dir = $upload_dir . '/wysija/bookmarks/medium/';
	
	$bookmarks_dir = $upload_dir . '001-sepideman';
    if (! is_dir($bookmarks_dir)) {mkdir( $bookmarks_dir, 0755 );}
	
	$socials = array('blogger.png' ,'blurb.png' ,'bookmarks.png' ,'cloudup.png' ,'delicious.png' ,'deviantart.png' ,'digg.png' ,'dropbox.png' ,'facebook.png' ,'flickr.png' ,'github.png' ,'google.png' ,'hi5.png' ,'instagram.png' ,'linkedin.png' ,'livejournal.png' ,'mail.png' ,'myspace.png' ,'odnoklassniki.png' ,'orkut.png' ,'pengyou.png' ,'picasa.png' ,'pinterest.png' ,'qzone.png' ,'reddit.png' ,'renren.png' ,'rss.png' ,'scribd.png' ,'sina.png' ,'slideshare.png' ,'soundcloud.png' ,'stumbleupon.png' ,'technorati.png' ,'tencent.png' ,'tumblr.png' ,'twitter.png' ,'ubuntuone.png' ,'vimeo.png' ,'vine.png' ,'vkontakte.png' ,'windowslive.png' ,'xing.png' ,'yfrog.png' ,'youtube.png');
	
	foreach ( $socials as $social ){
		if ( ! is_dir( $bookmarks_dir . '/' . $social ) ) {
			copy( plugins_url( 'images/icons/medium/001-sepideman/' . $social, __FILE__ ), $bookmarks_dir . '/' . $social );
		}
	}
	
	
}
 
register_activation_hook( __FILE__, 'sepideman_mailpoet_social_icons_folder' );

add_action('media_upload_standard', 'sepideman_mailpoet_social_icons');
function sepideman_mailpoet_social_icons($tab) {
    if (class_exists('WYSIJA') && $tab == 'bookmarks') {
 
        $add_networks = array(
            'blogger' => array(
                'label' => 'Blogger',
                'url' => null,
                'placeholder' => null
             ),
            'blurb' => array(
                'label' => 'Blurb',
                'url' => null,
                'placeholder' => null
             ),
            'delicious' => array(
                'label' => 'Delicious',
                'url' => null,
                'placeholder' => null
             ),
            'cloudup' => array(
                'label' => 'Cloudup',
                'url' => null,
                'placeholder' => null
             ),
            'digg' => array(
                'label' => 'Digg',
                'url' => null,
                'placeholder' => null
             ),
            'deviantart' => array(
                'label' => 'DeviantART',
                'url' => null,
                'placeholder' => null
             ),
            'dropbox' => array(
                'label' => 'Dropbox',
                'url' => null,
                'placeholder' => null
             ),
            'github' => array(
                'label' => 'GitHub',
                'url' => null,
                'placeholder' => null
             ),
            'flickr' => array(
                'label' => 'Flickr',
                'url' => null,
                'placeholder' => null
             ),
            'Hi5' => array(
                'label' => 'Hi5',
                'url' => null,
                'placeholder' => null
             ),
            'instagram' => array(
                'label' => 'Instagram',
                'url' => null,
                'placeholder' => null
             ),
            'myspace' => array(
                'label' => 'Myspace',
                'url' => null,
                'placeholder' => null
             ),
            'livejourbal' => array(
                'label' => 'LiveJournal',
                'url' => null,
                'placeholder' => null
             ),
            'orkut' => array(
                'label' => 'Orkut',
                'url' => null,
                'placeholder' => null
             ),
            'odnoklassniki' => array(
                'label' => 'Odnoklassniki',
                'url' => null,
                'placeholder' => null
             ),
            'picasa' => array(
                'label' => 'Picasa',
                'url' => null,
                'placeholder' => null
             ),
            'pengyou' => array(
                'label' => 'Pengyou',
                'url' => null,
                'placeholder' => null
             ),
            'qzone' => array(
                'label' => 'Qzone',
                'url' => null,
                'placeholder' => null
             ),
            'pinterest' => array(
                'label' => 'Pinterest',
                'url' => null,
                'placeholder' => null
             ),
            'renren' => array(
                'label' => 'Renren',
                'url' => null,
                'placeholder' => null
             ),
            'reddit' => array(
                'label' => 'Reddit',
                'url' => null,
                'placeholder' => null
             ),
            'slideshare' => array(
                'label' => 'SlideShare',
                'url' => null,
                'placeholder' => null
             ),
            'scribd' => array(
                'label' => 'Scribd',
                'url' => null,
                'placeholder' => null
             ),
            'soundcloud' => array(
                'label' => 'SoundCloud',
                'url' => null,
                'placeholder' => null
             ),
            'stumbleupon' => array(
                'label' => 'StumbleUpon',
                'url' => null,
                'placeholder' => null
             ),
            'tencent' => array(
                'label' => 'Tencent',
                'url' => null,
                'placeholder' => null
             ),
            'technorati' => array(
                'label' => 'Technorati',
                'url' => null,
                'placeholder' => null
             ),
            'tumbler' => array(
                'label' => 'Tumbler',
                'url' => null,
                'placeholder' => null
             ),
            'twitter' => array(
                'label' => 'Twitter',
                'url' => null,
                'placeholder' => null
             ),
            'vimeo' => array(
                'label' => 'Vimeo',
                'url' => null,
                'placeholder' => null
             ),
            'ububutu_one' => array(
                'label' => 'Ubunutu One',
                'url' => null,
                'placeholder' => null
             ),
            'vkontakte' => array(
                'label' => 'Vkontakte',
                'url' => null,
                'placeholder' => null
             ),
            'vine' => array(
                'label' => 'Vine',
                'url' => null,
                'placeholder' => null
             ),
            'live' => array(
                'label' => 'Live',
                'url' => null,
                'placeholder' => null
             ),
            'weibo' => array(
                'label' => 'Weibo',
                'url' => null,
                'placeholder' => null
             ),
            'yfrog' => array(
                'label' => 'YFrog',
                'url' => null,
                'placeholder' => null
             ),
            'xing' => array(
                'label' => 'Xing',
                'url' => null,
                'placeholder' => null
             ),
            'mail' => array(
                'label' => 'Mail',
                'url' => null,
                'placeholder' => null
             ),
            'youtube' => array(
                'label' => 'Youtube',
                'url' => null,
                'placeholder' => null
             ),
            'rss' => array(
                'label' => 'RSS',
                'url' => null,
                'placeholder' => null
             ),
         );
 
        $wys = WYSIJA::get('campaigns', 'controller');
 
        $model_config = WYSIJA::get('config', 'model');
        $urls = $model_config->getValue('social_bookmarks');
 
        foreach ($add_networks as $network => $values) {
            if (isset($urls[$network]) and strlen(trim($urls[$network])) > 0) {
                $add_networks[$network]['url'] = $urls[$network];
            }
        }
 
        $wys->data['networks'] = array_merge($wys->data['networks'], $add_networks);
 
        add_action('admin_print_scripts', 'sepideman_mailpoet_bookmarks_js');
    }
}

function sepideman_mailpoet_bookmarks_js() {
    wp_deregister_script( 'wysija-autoinc-newsletter-admin-campaigns-bookmarks-js' );
    wp_register_script( 'wysija-autoinc-newsletter-admin-campaigns-bookmarks-js', plugins_url( 'js/admin-campaigns-bookmarks.js', __FILE__), array('jquery') );
	wp_enqueue_script( 'wysija-autoinc-newsletter-admin-campaigns-bookmarks-js');
}

?>