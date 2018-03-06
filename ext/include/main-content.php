<div class="main-content">
<div class="row">
    <div class="col-sm-9 main-content">
        <div id="blog-posts">
			<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array(
						'orderby'   => date, 
						'paged' => $paged, 
						'showposts' => 10
				);
				// 下面这一行代码是必须的，不然不能分页
				$arms = array_merge($args, $wp_query->query);
				query_posts($arms);
			?>
			<?php if(have_posts()) : while (have_posts()) : the_post();?>
            <div class="row padding-bottom" id="post-<?php echo $post->ID;?>">
                <div class="col-md-4">
                    <a href="<?php echo $post->guid;?>" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/images/blog/503993_62595320.jpg" class="img-responsive hidden-xs"></a>
                </div>
                <div class="col-md-8">
                    <div class="post-summary">      
                        <h3 style="margin-top: 0px;"><a href="<?php echo $post->guid;?>"><?php echo $post->post_title;?></a></h3>
                        <p class="text-sm"><?php the_time('M d, Y');?></p>
                        <p><?php the_excerpt();?></p>
                        <p><a class="btn btn-default btn-sm" href="<?php echo $post->guid;?>">阅读全文</a></p>
                    </div>
                </div>
            </div>
			<?php endwhile;?>
			<?php endif;?>
        </div>

        <div style="text-align: center;">
            <?php chart_pagenavi(); ?>
        </div>
    </div>


    <div class="col-sm-3 sidebar">
        <div class="widget">
        <h3 style="margin-top: 0px;">Archives</h3>
            <div class="widget-body">
                <ul class="icons list-unstyled">
                    <li><a href="#"><i class="icon-angle-right"></i> June 2014</a></li>
                    <li><a href="#"><i class="icon-angle-right"></i> May 2014</a></li>
                    <li><a href="#"><i class="icon-angle-right"></i> April 2014</a></li>
                    <li><a href="#"><i class="icon-angle-right"></i> March 2014</a></li>
                    <li><a href="#"><i class="icon-angle-right"></i> February 2014</a></li>
                    <li><a href="#"><i class="icon-angle-right"></i> January 2014</a></li>
                    <li><a href="#"><i class="icon-angle-right"></i> December 2013</a></li>
                </ul>
            </div>
        </div>
        <div class="widget">
            <h3>Categories</h3>
            <p class="widget-body">
                <a href="#"><span class="large label tag label-info">Announcements</span></a>
                <a href="#"><span class="large label tag label-info">Company</span></a>
                <a href="#"><span class="large label tag label-info">News</span></a>
                <a href="#"><span class="large label tag label-info">Events</span></a>
                <a href="#"><span class="large label tag label-info">Info</span></a>
                <a href="#"><span class="large label tag label-info">Fun Stuff</span></a>
                <a href="#"><span class="large label tag label-info">News</span></a>
                <a href="#"><span class="large label tag label-info">Events</span></a>
                <a href="#"><span class="large label tag label-info">Company</span></a>
                <a href="#"><span class="large label tag label-info">Events</span></a>
                <a href="#"><span class="large label tag label-info">Company</span></a>
                <a href="#"><span class="large label tag label-info">News</span></a>
                <a href="#"><span class="large label tag label-info">Announcements</span></a>
                <a href="#"><span class="large label tag label-info">Events</span></a>
                <a href="#"><span class="large label tag label-info">Info</span></a>
                <a href="#"><span class="large label tag label-info">Fun Stuff</span></a>
            </p>
        </div>
        <div class="widget">
            <h3>About Us</h3>
            <p class="widget-body">
                We are a small, web based company providing innovative ideas for people and businesses. Our award winning products help people solve problems that they deal with each and every day.
            </p>
        </div>
    </div>
</div>
	<footer>
	<hr>
	<!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
	<p class="pull-right">A <a href="http://www.portnine.com/bootstrap-themes" target="_blank">Free Bootstrap Theme</a> by <a href="http://www.portnine.com" target="_blank">Portnine</a></p>
	<p>Â© 2014 <a href="http://www.portnine.com" target="_blank">Portnine</a></p>
	</footer>
</div>