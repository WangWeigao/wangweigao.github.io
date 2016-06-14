# 使用队列发送邮件
## 队列依赖 [若使用redis]
Redis: predis/predis ~1.0

## 修改 .env 文件
> /config/mail.php下有各个配置项的说明

    QUEUE_DRIVER   = redis

    REDIS_HOST     = 192.168.1.128
    REDIS_PASSWORD = redis
    REDIS_PORT     = 6379

    MAIL_DRIVER     = log
    MAIL_HOST       = smtp.163.com
    MAIL_PORT       = 25
    MAIL_USERNAME   = XXX@163.com
    MAIL_PASSWORD   = XXX
    MAIL_ENCRYPTION = null

## 基本代码实现
> 任务实例 [实际执行的代码]

```php
<?php
namespace App\Jobs;

use App\User;
use App\Jobs\Job;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendReminderEmail extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $user;

    /**
     * 创建一个新的任务实例
     *
     * @param  User  $user
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * 执行任务
     *
     * @param  Mailer  $mailer
     * @return void
     */
    public function handle(Mailer $mailer)
    {
        $mailer->send('emails.reminder', ['user' => $this->user], function ($m) {
            //
        });
     }
}

```
> 推送上述任务到队列

```php
<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Jobs\SendReminderEmail;
use App\Http\Controllers\Controller;

class UserController extends Controller{
   /**
    * 发送提醒邮件到指定用户
    *
    * @param  Request  $request
    * @param  int  $id
    * @return Response
    */
   public function sendReminderEmail(Request $request, $id)
   {
       $user = User::findOrFail($id);

       $this->dispatch(new SendReminderEmail($user));
   }
}
```

## 队列执行、监听
Artisan 命令 queue:work 包含一个--daemon 选项来强制队列 worker 持续处理任务而不必重
新启动框架。相较于 queue:listen 命令该命令对 CPU 的使用有明显降低：

    php artisan queue:work connection --daemon
    php artisan queue:work connection --daemon --sleep=3
    php artisan queue:work connection --daemon --sleep=3 --tries=3
