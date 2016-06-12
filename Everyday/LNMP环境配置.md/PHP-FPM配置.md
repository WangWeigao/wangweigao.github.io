**配置文件默认位置:**

    /etc/php-fpm.d/www.conf

中要修改 `user` 和 `group` 为相应的属性

>   Nginx:

    user = nginx
    group = nginx

>   Apache:

    user = apache
    group = apache

---
之前写文件就遇到没有权限的问题
1. 所有目录和文件的用户和属组都是`nginx`
2. WebServer也是`nginx`
3. 文件没有写权限

测试发现
1. 写文件的是`php-fpm`
2. 而不是`WebServer`
