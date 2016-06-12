### 1、只保留文件夹, 忽略其中的文件
### 2、把dir中的部分文件忽略

**方法**
在.gitignore文件中
>       
    dir/*
    dir/.gitkeep

在dir文件夹中新建一个.gitkeep空文件（文件名随意，但要和.gitignore中对应，这样这个目录就保留下来了）
如果想让git跟踪其他文件，在.gitignore中继续写
>   
    !dir/xxx.xxx(文件名)

即可达到部分文件本跟踪的效果
