<?php
/**
 * Created by PhpStorm.
 * User: chaohui
 * Date: 2018/10/16
 * Time: 19:02
 * Desc: 删除二维数组重复元素
 * address: https://mp.weixin.qq.com/s/l-AL3DR8a23gPIHgG_nQ-A
 */

function more_array_unique($arr){
    #先把二维数组中的内层数组的键值记录在一维数组中
    foreach ($arr[0] as $k => $v){
        $arr_inner_key[] = $k;
    }
    #在把二维数组的一维数组变成一个字符串，然后组成一个一维数组
    foreach ($arr as $k=>$v) {
        $v = join(",",$v);
        $temp[$k] = $v;
    }
    #去重
    $temp = array_unique($temp);
    #在从一维数组之中
    foreach ($temp as $k=>$v){
        $a = explode(",",$v);
        #array_combine通过合并两个数组来创建一个新数组，其中的一个数组元素为键名，另一个数组元素为键值：
        $arr_after[$k] = array_combine($arr_inner_key,$a);
    }
    return $arr_after;
}
$arr = [
    ['name' => '张三', 'age' => 18],
    ['name' => 'Tom', 'age' => 19],
    ['name' => 'Tom', 'age' => 19],
    ['name' => '张三', 'age' => 50],
    ['name' => '王小二', 'age' => 30],
];
echo "<pre>";
print_r(more_array_unique($arr));