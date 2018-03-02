<!doctype html>
<html lang="en">
<?php get_header(); ?>
<body class=" theme-blue">
	<?php get_template_part( 'ext/include/navbar' );?>
	<?php get_template_part( 'ext/include/sidebar-nav' );?>
    <div class="content">
    	<?php get_template_part( 'ext/include/header-content' );?>
    	<?php get_template_part( 'ext/include/main-content' );?>
    </div>
    <?php get_template_part( 'ext/include/footer-script' );?>
</body>
</html>
