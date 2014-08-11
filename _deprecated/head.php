<!DOCTYPE html>
<html ng-app="app" class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<!-- <link rel="profile" href="http://gmpg.org/xfn/11">
 --><!-- <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"> -->
<script>
	var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
	console.log  ($ajaxurl);
</script>

<?php wp_head(); ?>

</head>


