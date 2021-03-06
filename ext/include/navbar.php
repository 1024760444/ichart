<!-- Demo page code -->
<script type="text/javascript">
    $(function() {
        var match = document.cookie.match(new RegExp('color=([^;]+)'));
        if(match) var color = match[1];
        if(color) {
            $('body').removeClass(function (index, css) {
                return (css.match (/\btheme-\S+/g) || []).join(' ')
            })
            $('body').addClass('theme-' + color);
        }
        $('[data-popover="true"]').popover({html: true});
    });
</script>
<style type="text/css">
    #line-chart {
        height:300px;
        width:800px;
        margin: 0px auto;
        margin-top: 1em;
    }
    .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover { 
        color: #fff;
    }
</style>
<script type="text/javascript">
    $(function() {
        var uls = $('.sidebar-nav > ul > *').clone();
        uls.addClass('visible-xs');
        $('#main-menu').append(uls.clone());
    });
</script>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="../assets/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
<!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
<!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
<!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
<!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<!--<![endif]-->
<div class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="navbar-brand"><span class="fa fa-paper-plane"></span> <?php bloginfo ( 'name' ); ?> </span></a></div>
<?php 
	if(is_user_logged_in()) {
		$user = wp_get_current_user();
?>
    <div class="navbar-collapse collapse" style="height: 1px;">
      <ul id="main-menu" class="nav navbar-nav navbar-right">
        <li class="dropdown hidden-xs">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span> <?php echo $user->display_name; ?>
                <i class="fa fa-caret-down"></i>
            </a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>wp-admin/">My Account</a></li>
            <li class="divider"></li>
            <li><a tabindex="-1" href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
<?php } else {?>
    <div class="navbar-collapse collapse" style="height: 1px;">
      <ul id="main-menu" class="nav navbar-nav navbar-right">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>wp-admin/">Login</a></li>
      </ul>
    </div>
<?php }?>
  </div>