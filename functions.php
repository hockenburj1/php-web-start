<?php 

function jesse(){
    echo 'jesse!';
}

function clean($string) {
    return strip_tags($string);
}

function get ($key) {
    if (isset($_GET[$key])) {
        return clean($_GET[$key]);
    }
    
    else {
        return '';
    }
}

function post ($key) {
    if (isset($_POST[$key])) {
        return clean($_POST[$key]);
    }
    
    else {
        return '';
    }
}

function data($var) {
    if(strpos($var, '->') !== true) {
        $strings = explode('->', $var);
        $string = $strings[0];
        $property = $strings[1];
    }
    
    global ${$var};
    $string = ${$var};
    
    return $string->name;
    if(!empty($string))
        return $string;
    else 
        return '';
}

function get_sql($sqlName) {
    return file_get_contents("sql/$sqlName.sql");
}

function snippet($string, $characters) {
    if(strlen($string) <= $characters) {
        return $string;
    }
    
    $string = substr($string, 0, $characters);
    $string .= '...';
    return $string;
}