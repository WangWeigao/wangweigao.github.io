## git常规使用
[廖雪峰的官方网站Git教程](http://www.liaoxuefeng.com/wiki/0013739516305929606dd18361248578c67b8067c8c017b000)

### 将仓库中的子目录分离到一个单独的仓库
[参考命令](https://help.github.com/articles/splitting-a-subfolder-out-into-a-new-repository/)
- 克隆仓库
> `git clone https://github.com/YOUR-USERNAME/YOUR-REPOSITORY`
- 切换到要操作的目录的父目录
- 将子目录生成新的仓库
> `git filter-branch --prune-empty --subdirectory-filter YOUR_FOLDER_NAME master`
- 删除原来的关联
> `git remote rm origin`
- 建立新的关联
> `git remote add origin git@github.com:DemoPlus/Sesame.git`
- 推送到远程(并做关联)
> `git push -u origin master`

### 常用命令

#### windows下安装git
[msysgit](http://msysgit.github.io/)是Windows版的Git，下载，然后按默认选项安装即可。

### 配置
$ `git config --global user.name "Your Name"`
$ `git config --global user.email "email@example.com"`

### 删除远程分支
$ `git push origin --delete <branchName>`

### 工作现场
- 保存工作现场
$ `git stash`
- 恢复工作现场
$ `git stash pop`
