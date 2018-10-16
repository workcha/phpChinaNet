<?php
/**
 * Created by PhpStorm.
 * User: chaohui
 * Date: 2018/10/16
 * Time: 18:53
 * Desc: PHP数组转json格式以及json格式转换为数组
 * address: https://mp.weixin.qq.com/s/aZg3GYX-kTFMtDXWusIbDA
 */
$data = ["PHP","JAVA","PYTHON"];
#数组json化
echo json_encode($data);
echo "<br>";
#json化后的类型
echo gettype(json_encode($data));
echo "<br>";
#json化的字符串变回原来的数组
print_r(json_decode(json_encode($data)));