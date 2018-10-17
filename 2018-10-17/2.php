<?php
/**
 * Created by PhpStorm.
 * User: chaohui
 * Date: 2018/10/17
 * Time: 22:50
 * Desc: PHP上传视频
 * address: https://mp.weixin.qq.com/s/u09Mu7ZJJE-doAb8hNjWQQ
 */

$upfile = $_FILES['upfile'];

/**
 * @param $files
 * @param string $path
 * @param array $imagesExt
 */
function upload_file($files, $path="./upload", $imagesExt=['jpg', 'png', 'jpeg', 'gif', 'mp4']){
    //判断是否文件
    if (@$files['error'] == 00){
        //判断文件类型
        #获取文件扩展名
        $ext = strtolower(pathinfo(@$files['name'], PATHINFO_EXTENSION));
        if (!in_array($ext,$imagesExt)){
            return "非法文件类型";
        }
        //判断是否存在上传到的目录
        if (!is_dir($path)){
            mkdir($path, 0777,true);
        }
        # 生成唯一的文件名,microtime() 函数返回当前 Unix 时间戳的微秒数。
        # uniqid() 函数基于以微秒计的当前时间，生成一个唯一的 ID
        # 组合使用不错
        $fileName = md5(uniqid(microtime(true),true)) . '.' . $ext;
        $destName = $path . "/" . $fileName;
        if (!move_uploaded_file($files['tmp_name'],$destName)){
            return "文件上传失败！";
        }
        return "文件上传成功!";
    }else{
        switch (@$files['error']){
            case 1:
                echo "上传的文件超过了 php.ini 中upload_max_filesize 选项限制的值";
                break;
            case 2:
                echo "上传文件的超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值";
                break;
            case 3:
                echo "文件只有部分被上传";
                break;
            case 4:
                echo "没有文件被上传";
                break;
            case 6:
            case 7:
                echo "系统错误";
                break;
        }
    }
}
echo upload_file($upfile);
?>

