<?php global $post;
$alp_num = get_option('zox_alp_num');
$postsCount = $alp_num;
if(!is_single())
	return;

$currentCategories = get_the_category();

if(!$currentCategories)
	return;

$relatedPosts = get_posts(array(
	'category' => $currentCategories[0]->cat_ID,
	'posts_per_page' => ($postsCount>0 ? $postsCount-1 : $postsCount),
	'exclude' => $post->ID,
	));

if(!$relatedPosts)
	return;

?>
<div class="alp-related-posts-wrapper">
	<div class="alp-related-posts">
		<?php echo getPostHTML($post, true); ?>
			<div class="alp-advert">
				<?php $zox_alp_ad = get_option('zox_alp_ad'); if ($zox_alp_ad) { ?>
					<span class="zox-ad-label"><?php esc_html_e( 'Advertisement', 'zoxpress' ); ?></span>
					<?php $zox_alp_ad = get_option('zox_alp_ad'); if ($zox_alp_ad) { echo do_shortcode(html_entity_decode($zox_alp_ad)); } ?>
				<?php } ?>
			</div>
		<?php foreach($relatedPosts as $relatedPost) echo getPostHTML($relatedPost); ?>
	</div><!--alp-related-posts-->
</div><!--alp-related-posts-wrapper-->