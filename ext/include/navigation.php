<?php 
/**
* 数字分页函数
* 因为wordpress默认仅仅提供简单分页
* 所以要实现数字分页，需要自定义函数
* @Param int $range            数字分页的宽度
* @Return string|empty        输出分页的HTML代码        
*/
function chart_pagenavi( $range = 4 ) {
    global $paged,$wp_query;
    if ( !$max_page ) {
        $max_page = $wp_query->max_num_pages;
    }
    if( $max_page >=1 ) {
        echo "<ul class='fancy pagination'>"; 
        if( !$paged ){
            $paged = 1;
        }
        if( $paged != 1 ) {
            echo "<li><a href='".get_pagenum_link(1) ."' title='跳转到首页'>«</a></li>";
        }
        // previous_posts_link('上一页');
        if ( $max_page >$range ) {
            if( $paged <$range ) {
                for( $i = 1; $i <= ($range +1); $i++ ) {
                    echo "<li ";
                    if($i==$paged) echo " class='active'";
                    echo "><a href='".get_pagenum_link($i) ."'>$i</a></li>";
                }
            }elseif($paged >= ($max_page -ceil(($range/2)))){
                for($i = $max_page -$range;$i <= $max_page;$i++){
                    echo "<li ";
                    if($i==$paged) echo " class='active'";
                    echo "><a href='".get_pagenum_link($i) ."'>$i</a></li>";
                    }
                }elseif($paged >= $range &&$paged <($max_page -ceil(($range/2)))){
                    for($i = ($paged -ceil($range/2));$i <= ($paged +ceil(($range/2)));$i++){
                        echo "<li ";
                    if($i==$paged) echo " class='active'";
                    echo "><a href='".get_pagenum_link($i) ."'>$i</a></li>";
                    }
                }
            }else{
                for($i = 1;$i <= $max_page;$i++){
                    echo "<li ";
                    if($i==$paged) echo " class='active'";
                    echo "><a href='".get_pagenum_link($i) ."'>$i</a></li>";
                }
            }
        // next_posts_link('下一页');
        if($paged != $max_page){
            echo "<li><a href='".get_pagenum_link($max_page) ."' title='跳转到最后一页'>»</a></li>";
        }
        // echo '<span>共['.$max_page.']页</span>';
        echo "</ul>\n";  
    }
}
?>
