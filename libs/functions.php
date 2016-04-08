<?php
function get_header($substring = ''){
    if($substring !=null){
        require_once(ABSPATH . '/view/header-'.$substring.'.php');
    } else {
        require_once(ABSPATH . '/view/header.php');
    }
}

function get_footer($substring = ''){
    if($substring !=null){
        require_once(ABSPATH . '/view/footer-'.$substring.'.php');
    } else {
        require_once(ABSPATH . '/view/footer.php');
    }
}

function get_sidebar($substring = ''){
    if($substring !=null){
        if(file_exists(ABSPATH . '/view/sidebar-'.$substring.'.php')){
            require_once(ABSPATH . '/view/sidebar-'.$substring.'.php');
        }
    } else {
        require_once(ABSPATH . '/view/sidebar.php');
    }
}

function get_theme_dir(){
    return THEME_URL;
}

function as_number($val){
    $numberAsString = number_format($val, 2);
    return $numberAsString;
}