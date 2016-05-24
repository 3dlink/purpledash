<?PHP 
function remove_submenus() {

    global $submenu;
    unset($submenu['edit.php'][10]); // Removes 'Add New'.

}
add_action('admin_menu', 'remove_submenus');

function hide_that_stuff() {
   
  echo '<style type="text/css">
    #favorite-actions {display:none;}
    .add-new-h2{display:none;}
    .tablenav{display:none;}
    </style>';
}
add_action('admin_head', 'hide_that_stuff');
?>