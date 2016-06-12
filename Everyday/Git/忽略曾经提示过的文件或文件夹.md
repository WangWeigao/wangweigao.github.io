### 正确的做法应该是：
1. 删除掉已经上传到git仓库的文件
> git rm --cached logs/xx.log

2. 修改.gitignore文件，忽略掉目标文件

3. 提交修改过的 .gitignore 文件
> git add . && git commit
