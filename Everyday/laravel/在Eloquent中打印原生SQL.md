## 打印原生SQL
[参考链接](http://www.cnblogs.com/wicub/p/4819464.html)
1. 导入DB类
`use DB;`
- 启用日志打印
`DB::connection()->enableQueryLog();`
- 执行查询语句

- 打印SQL
`var_dump(DB::getQueryLog());`
