### 登录实现
1. 将所有路由放到web中间件中
        Route::group(['middleware' => ['web']], function () {

- 将需要认证的路由放到 `web` 中间件里的
        Route::group(['middleware' => ['auth']], function () {

- 在 ** AuthController.php ** 中添加 ** getLogout **, 如下:
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['logout', 'getLogout']]);
    }

- 添加认证, 注册, 找回密码 **view** 视图
        php artisan make:auth

- 
