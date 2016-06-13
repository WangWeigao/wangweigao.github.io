# Dingo API

[官方wiki](https://github.com/dingo/api/wiki)
[安装参考](http://blog.onroads.cn/?p=290)
## 安装
1. 使用composer 安装dingo,默认安装到vendor目录下. 执行下面的命令:
> composer require dingo/api:1.0.x@dev
- 编辑config/app.php文件,找到providers部分,添加下面黑色部分.
>   'providers' => [
        Dingo\Api\Provider\LaravelServiceProvider::class
    ]
- 执行下面的命令
> php artisan vendor:publish --provider="Dingo\Api\Provider\LaravelServiceProvider"
- 在.env里添加如下内容:
>   API_VENDOR=ImamaApi
    API_VERSION=v1
    API_PREFIX=api
    API_CONDITIONAL_REQUEST=true
    API_STRICT=false
    API_DEBUG=true
    API_DEFAULT_FORMAT=json
- 在routes.php里添加如下内容:
>   $api = app('api.router');
    $api->version('v1', function ($api) {
        $api->get('users/{id}', 'App\Http\Controllers\UserController@show');
    });
- 创建UserController控制器和show方法
- 访问http://domain.com/api/users/1

## 配置JWT
[配置参考](http://wangxiaofeng.org.cn/blog/Laravel/Laravel-DingoAPI-JWT.html)
1. 安装
> composer require tymon/jwt-auth
2. 编辑config/app.php文件,找到providers部分,添加下面黑色部分.
>   'providers' => [
        \Tymon\JWTAuth\Providers\JWTAuthServiceProvider::class,
    ]
3.
-
-
-
-
-
-
-
-
-
-
-
-
-
-
