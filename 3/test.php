<?php


function strDashedToCamelCase($str)
{
    $arr = explode("-", $str);
    foreach ($arr as &$item) {
        $item = ucfirst($item);
    }

//    foreach ($arr as $key => $item) {
//        $arr[$key] = ucfirst($item);
//    }

    $arr[0] = lcfirst($arr[0]);
    return implode("", $arr);
}


echo strDashedToCamelCase("ornek-bir-statik-route");


//$funcName = "strDashedToCamelCase";
//echo $funcName("ornek-bir-cagirma");


//echo call_user_func("strDashedToCamelCase", "test-parametre");


echo call_user_func_array("strDashedToCamelCase", ["test-hos-bir-kullanim"]);






