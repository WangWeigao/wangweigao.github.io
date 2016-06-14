# RESTful API
## 认识 REST & API
- 简单透过HTTP网址来取得或控制资源
- 前后端分离的时代
- AJAX & SPA & Mobile
- 了解SOAP后你会更爱REST
- 世界主流趋势
## 选择一个适合你的语言及框架
## AWS 架构规划布局
## REST API 踩雷心得
## Q&A
## Planing a REST API
- 先了解前端的需求
- 规划End Point 即URI

## 登录
- 使用token
    - 时效性30分钟或是6个小时
    - 让前端写到header里

## 经验分享
- CORS
    - 跨站提出HTTP的Request时会报错
        - 在Header里加：Access-Control-Allow-Origin
        - 在Header里加：Access-Control-Allow-Method
    -使用barryvdh/laravel-cors
- OAuth2
    - 前端处理OAuth2授权后将Token传给后端，后端再以Token Access Facebook API进行资料验证
- Pagination
    - 前端通过API将页码和每页数据量传给后端，后端回传数据
- Error Response
    - API 千万不可发生 500 Error， 前端或移动端会直接闪退，所以必须TryCatch
    - 有handle到Error时，要定Error Code回200的Json信息给前端，如：{"status":"error", "msg":"user not found"}
    - 错误要记到Logfile
- Security
    - SQL injection => 尽量使用ORM与资料验证
    - XSS => 资料验证Laravel有强大的validation
    - DDoS => 善用快取(类似memcache), 负载均衡, 剩下的交给AWS和祈祷
    - 被Try => API要做权限管控
        - 一般使用者只可以取得自己相关的资料
        - 尽量使用HTTPS防止资料被侧录
        - Token的时间长短管控
看一下使用起来到底如何有没有什么不方便的就是画面太透明了不是太方便不实际性还好了就是这个样子了也没有什么特别需要注意的地方也就是还好了
问题还是不错了算是很好了
