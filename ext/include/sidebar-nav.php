<div class="sidebar-nav">
	<ul>
    <?php 
    $nav_menu = wp_get_nav_menu_object('main');
    $menu_items = wp_get_nav_menu_items($nav_menu->term_id);
    $itemArray = array();
    $itemIndex = 0;
    foreach( $menu_items as $item) {
        if($item->menu_item_parent != 0) {
            continue;
        }
        $subItemArray = array();
        $subItemIndex = 0;
        foreach( $menu_items as $subItem) {
            if($subItem->menu_item_parent == $item->ID) {
                $subItemObj = array(
                    'id' => $subItem->ID,
                    'title' => $subItem->title,
                    'url' => $subItem->url,
                    'pId' => $subItem->menu_item_parent,
                    'classes' => $subItem->classes
                );
                $subItemArray[$subItemIndex++] = $subItemObj;
            }
        }
        $itemObj = array(
            'id' => $item->ID,
            'title' => $item->title,
            'url' => $item->url,
            'pId' => $item->menu_item_parent,
            'classes' => $item->classes,
        );
        $itemArray[$itemIndex++] = $itemObj;
        if(count($subItemArray) > 0) {
            ?>
            <li>
                <a data-target=".<?php echo $itemIndex; ?>-menu" class="nav-header" data-toggle="collapse">
                	<?php 
                	if(count($item->classes) > 0) {
                		?>
                		<i class="<?php echo implode(" ", $item->classes);?>"></i>
                		<?php 
                	}
                	?>
                    <?php echo $item->title; ?><i class="fa fa-collapse">
                    </i>
                </a>
    		</li>
            <?php 
            ?><li><ul class="<?php echo $itemIndex; ?>-menu nav nav-list collapse" ><?php
            foreach($subItemArray as $subObj) {
            ?>
            <li><a href="<?php echo $subObj['url']; ?>">
            <span class="fa fa-caret-right"></span>
            <?php echo $subObj['title']; ?></a></li>
            <?php 
            }
            ?></ul></li><?php 
        } else {
            ?>
            <li>
                <a href="<?php echo $item->url; ?>" data-target=".dashboard-menu" class="nav-header" >
                	<?php 
                	if(count($item->classes) > 0) {
                		?>
                		<i class="<?php echo implode(" ", $item->classes);?>"></i>
                		<?php 
                	}
                	?>
                    <?php echo $item->title; ?>
                </a>
    		</li>
            <?php 
        }
    }
    ?>
    </ul>
</div>