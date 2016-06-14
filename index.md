

# 在CentOS6.6中
## 安装PHP5.6
按链接向导安装PHP5.6(发现可以安装PHP7了)

![](http://placekitten.com/g/550/450 "First of two kittens")
![](http://placekitten.com/g/550/450 "Second of two kittens")
> https://www.mojowill.com/geek/howto-install-php-5-4-5-5-or-5-6-on-centos-6-and-centos-7/  
`需要在remi.repo中开启[remi-php56]`

## 安装PHP-FPM(5.6)
> yum install php-fpm -y

---
## 安装Nginx
在nginx官网链接：
> http://nginx.org/en/linux_packages.html#stable  

下载rpm包后安装，自动生成repo源
> http://nginx.org/packages/centos/6/noarch/RPMS/nginx-release-centos-6-0.el6.ngx.noarch.rpm

安装nginx 1.8.0  
> yum install nginx -y

---
## 配置Nginx

1. 新建 /data/html/ 目录  
- 在 /etc/nginx/ 下新建 vhost目录   
- 对每个虚拟主机配置单独的配置文件

配置文件如下（可参考）：
<pre>
server {
        listen       80;
        server_name sesame.vps;
        root /data/html/sesame;
        index index.html index.php;
        access_log  /var/log/nginx/sesame.access.log main;
        error_log   /var/log/nginx/sesame.error.log error;
        ###########################################隐藏index.php
        location / {
                if (!-e $request_filename) {
                        ###一级目录下
                        #rewrite ^/(.*)$ /index.php/$1 last;  
                        ###域名下的二级目录
                        rewrite ^/laravel_LTS/public/(.*)$ /laravel_LTS/public/index.php/$1 last;
                }
        }
        ##########################################pathinfo 模式
        location ~ \.php($|/) {
            fastcgi_pass   127.0.0.1:9000;
            fastcgi_index  index.php;
            fastcgi_split_path_info ^(.+\.php)(.*)$;
            fastcgi_param   PATH_INFO $fastcgi_path_info;
            fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
            include        fastcgi_params;
        }
}
</pre>

---

## 查看所需扩展是否安装
1. PHP 版本  >= 5.5.9
- PHP 扩展：OpenSSL
- PHP 扩展：PDO
- PHP 扩展：Mbstring
- PHP 扩展：Tokenizer
通过在网站的根目录下建立index.PHP

<code php>
<?PHP phpinfo(); ?>
</code>  
查看是否含有上述扩展
安装中发现缺少Mbstring扩展，安装此扩展：
> yum install php-mbstring -y

---
## 安装opcache
> yum install php-opcache -y  
查看是否成功  
> phpinfo();里可以看到相关配置


---
## 安装MySQL
1. 配置Yum源，需要登录下载rpm：
> https://dev.mysql.com/downloads/repo/yum/  

2. 安装mysql-server
> yum install mysql-community-server -y

3. 设置密码
 - 会生成一个root用户的随机密码，密码在错误日志里`/var/log/mysqld.log`
> grep password  /var/log/mysqld.log  --color=auto

 - 找到密码后进入mysql终端里，更改密码（有复杂度要求）
> set password=password('Admin123!@#');

 - 添加新用户，并设置权限
> grant all privileges on *.* to admin@“%” identified by 'password' with grant option
