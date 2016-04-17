<?php
function first_function($beta)
{
    $b="<ul class=\"nav nav-pills\">";
    foreach ($beta as $key => $value )
    {
        $b.="<li ><a href=\"$key\">$value</a></li>";
    }
    $b.="</ul>";
    //$menu = $mass[""];
    return $b;
}
