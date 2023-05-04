<?php

function home_url($url = ""){
    $first_letter = substr($url, 0, 1);
    if($first_letter != "/" && $url != ""){
        $url = "/" . $url;
    }
    return HOME_URL . $url;
}