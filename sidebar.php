<?php //测试函数的返回值：if内为TRUE
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    echo "is_active_sidebar sidebar-1 get true value.";
}
?>