### 下载
[Cropper 下载地址](https://github.com/fengyuanchen/cropper)

### 配置


### 参考代码
[代码示例](http://finalshares.com/3g-read-run?tid=425&fid=55)

### 降低图片质量
[参考示例](https://developer.mozilla.org/en-US/docs/Web/API/HTMLCanvasElement/toDataURL)
#### Setting image quality with jpegs
<javascript>
    var fullQuality = canvas.toDataURL("image/jpeg", 1.0);  
    `一般用这个就可以`
    var mediumQuality = canvas.toDataURL("image/jpeg", 0.5);  
    var lowQuality = canvas.toDataURL("image/jpeg", 0.1);  
</javascript>
