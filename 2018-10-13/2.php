<?php
/**
 * Created by PhpStorm.
 * User: chaohui
 * Date: 2018/10/13
 * Time: 19:28
 * desc: 无限级分类之下拉列表--php
 * 此处我就拿我做过的微博的用户名做个下拉框
 */

$link = mysqli_connect("localhost","root","root","weibo");


function getList($sex = 1, &$result = array(), $space = 0){
    global $link;
    if (mysqli_connect_errno($link))
    {
        echo "连接 MySQL 失败: " . mysqli_connect_error();
    }
    $sql = "select * from mr_user where sex = $sex";
    $res = mysqli_query($link,$sql);
    while ($row = mysqli_fetch_assoc($res)){
        //str_repeat 重复括号里的字符串，后面跟的是次数
        $row['username'] = str_repeat('&nbsp;', $space) . '|--' . $row['username'];
        $result[] = $row;
    }
    return $result;
}

$rs = getList();//使用方法
echo "<pre/>";

echo "<select>";
foreach ($rs as $k => $v) {
    echo "<option value =>{$v['username']}</option>";
}
echo "</select>";

?>