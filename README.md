# guide-webhooks - 自动部署博客，教程文档

- 详细文档：[https://mp.weixin.qq.com/s/VtTHUfyiITNSoGy052jkXQ](https://mp.weixin.qq.com/s/VtTHUfyiITNSoGy052jkXQ)
- 视频教程：[https://www.bilibili.com/video/BV11S4y1d7hS/](https://www.bilibili.com/video/BV11S4y1d7hS/)

## 操作步骤

1. 安装Git：`yum -y install git`
2. 开启php.ini配置模块中的 exec、shell_exec
3. 开启www：`www:x:1000:1000::/home/www:/sbin/nologin` = `bin/bash`
4. 切换 www 用户
5. 生产公钥：ssh-keygen -t rsa -C "你自己的邮箱.com" 确认3次
6. 配置公钥：https://github.com/settings/ssh/new 
7. 克隆站点：`git@github.com:fuzhengwei/guide-webhooks.git`
8. 配置 webhooks，在Github对应的代码库上
# webhook
