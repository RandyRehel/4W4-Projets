<?php 

function exer1_enqueue(){
    wp_enqueue_style('style', get_stylesheet_uri()); 

}
add_action("wp_enqueue_scripts","exer1_enqueue");


/************************ Enregister le menu ***********************/

function exer1_register_nav_menu(){
    register_nav_menus(array(
    'menu_principal' => __('Menu principal', 'exer1'),
    'menu_footer'=> __( 'Menu Footer', 'exer1')
    ));
}
add_action('after_setup_theme', 'exer1_register_nav_menu', 0);

/**************** Filter les choix de menu principal ********************/
function exer1_filtre_choix_menu($obj_menu){
    //var_dump($obj_menu);
    foreach($obj_menu as $cle => $value)
    {
        //print_r($value);
        $value -> title = substr($value->title,7);
        $value->title = wp_trim_words($value->title, 3, "...");
        //echo $value -> title . "<br>";
    }
    return $obj_menu;
}
add_filter("wp_nav_menu_objects", "exer1_filtre_choix_menu");

?>