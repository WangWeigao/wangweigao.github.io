## 添加一个新的远程用户
- 授权并添加用户
    grant all privileges on *.* to m1@"%" identified by "m1" with grant option;

- 修改用户密码
    UPDATE mysql.user SET password=PASSWORD("m1") WHERE User="m1";
