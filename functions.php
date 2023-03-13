<?php 
    function styles(){
        wp_enqueue_style("normalize", get_theme_file_uri("/build/normalize.css"));
        wp_enqueue_style("global", get_theme_file_uri("/build/style-index.css")); 
        wp_enqueue_style("estilos", get_theme_file_uri("/build/index.css"));  
        wp_enqueue_script("js-main",get_theme_file_uri("/build/index.js"),array("jquery"),array('jquery'),'1.0',true);
        wp_enqueue_style("awesomefonts","//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");  
        wp_enqueue_style("fonts","//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i");  
          
          
        
    }

    add_action("wp_enqueue_scripts","styles");



    function addOptions(){
        add_theme_support("title-tag");
    }

    add_action("after_setup_theme","addOptions");
?>