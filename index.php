<?php
header('Content-type: text/html; charset=utf-8');
ini_set("error_reporting", "E_ALL & ~E_NOTICE");

echo "Hi，Webhooks！By 小傅哥<br/>";

echo "<br/><a href='https://www.aliyun.com/minisite/goods?taskPkg=1111ydsrwb&pkgSid=11388&recordId=1033318&userCode=is4kfbdt'>新用户购买服务器优惠活动🔥</a>";
echo "webhook 测试！";
echo "webhook 测试2！";
echo "<br/>webhook 测试3！";

echo '<br/>测试：输出项目路径和用户目录：<br/>';

exec("cd ~ && cd - && cd -", $output);

echo '<pre>';
echo print_r($output);
echo '</pre>';