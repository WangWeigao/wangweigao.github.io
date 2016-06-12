1.  #avarel安装  
[安装composer](https://getcomposer.org/download/)
- 通过 Composer 下载 Laravel 安装程序   [链接](http://laravel-china.org/docs/5.1/installation)  
<code>composer global require "laravel/installer=~1.1"</code>
- 安装Lavarel
<code>laravel new xxx</code>
- 创建项目  
<code>
composer create-project laravel/laravel --prefer-dist my_laravel    
</bode>
my_laravel为 *项目文件夹名称*
- 创建控制器  
<code> php artisan make:controller MyController</code>  
- 启动WEB服务器  
<code>php -S localhost:80 -t my_laravel/public</code>
- 查看路由列表  
<code>php artisan route:list</code>
- 查看Laravel版本号  
<code>php artisan --version</code>
- 配置数据库参数  
`在.env文件中修改`
- 无法将SESSION写入数据库
`??????????????????`

### 开启 composer 中国全量镜像
[中国全量镜像](http://pkg.phpcomposer.com/)
