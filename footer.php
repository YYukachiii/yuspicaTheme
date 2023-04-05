<?php 
if ( is_active_sidebar( 'sidebar-2' ) || is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) )
{
    echo "If you see this,that means one of three is_active_sidebar functions get true value.";
}
else{
    echo "If you see this, that means all of three is_active_sidebar functions get false value.";
}
?>
