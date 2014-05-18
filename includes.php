<?php

function menu_active($name){
    $page = isset($_GET['page']) ? trim($_GET['page']) : '';    
    if($page == $name){
        return 'active';
    }     
    return '';
}