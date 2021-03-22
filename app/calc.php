<?php

require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';

function getParams(&$x, &$y,&$p)
{
    $x = isset($_REQUEST ['x']) ? $_REQUEST['x'] : null;
    $y = isset($_REQUEST ['y']) ? $_REQUEST['y'] : null;
    $p = isset($_REQUEST ['p']) ? $_REQUEST['p'] : null;
}



function validate(&$x, &$y,&$p, &$messages)
{
    if (!(isset($x) && isset($y) && isset($p))) {
        return false;
    }

    if ($x == "") {
        $messages [] = 'Nie podano kwoty!';
    }
    if ($y == "") {
        $messages [] = 'Nie podano lat!';
    }
    if ($p == "") {
        $messages [] = 'Nie podano oprocentowania!';
    }

    if (count ( $messages ) != 0) return false;
    else{
        return true;
    }

}

function operation(&$x,&$y,&$p,&$messages,&$result)
{
    global $role;

        $x = intval($x);
        $y = intval($y);
        $p = intval($p);

            if($role=='admin') {
                $result = $x + $x * $p / (12 * $y);
                $result = intval($result);
            }else{
                $messages[] = 'Tylko admin moze odejmowac';
            }


}

$x = null;
$y = null;
$p = null;
$result = null;
$messages = array();

getParams($x, $y, $p);

if(validate($x, $y,$p,$messages)) {
    operation($x, $y, $p, $messages, $result);
}

include 'calc_view.php';