<?php
echo "hello php";

$test = pathinfo("http://localhost/index.php");  
print_r($test);  

/*结果如下  
Array  
(  
    [dirname] => http://localhost //url的路径  
    [basename] => index.php  //完整文件名  
    [extension] => php  //文件名后缀  
    [filename] => index //文件名  
)
*/
?>

<?php  
$test = parse_url("http://localhost/index.php?name=tank&sex=1#top");  
print_r($test);  
?>  
<!-- 结果如下  
Array  
(  
    [scheme] => http //使用什么协议  
    [host] => localhost //主机名  
    [path] => /index.php //路径  
    [query] => name=tank&sex=1 // 所传的参数  
    [fragment] => top //后面根的锚点  
) -->

<?php  
$test = basename("http://localhost/index.php?name=tank&sex=1#top");  
echo $test;  
?>  
<!-- 结果如下  
index.php?name=tank&sex=1#top   -->