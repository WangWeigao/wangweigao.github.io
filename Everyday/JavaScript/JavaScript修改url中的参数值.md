```
//para_name 参数名称 para_value 参数值 url所要更改参数的网址
function setUrlParam(para_name, para_value) {
    var strNewUrl = new String();
    var strUrl = new String();
    var url = new String();
    url= window.location.href;
    strUrl = window.location.href;
    //alert(strUrl);
    if (strUrl.indexOf("?") != -1) {
        strUrl = strUrl.substr(strUrl.indexOf("?") + 1);
        //alert(strUrl);
        if (strUrl.toLowerCase().indexOf(para_name.toLowerCase()) == -1) {
            strNewUrl = url + "&" + para_name + "=" + para_value;
            window.location = strNewUrl;
            //return strNewUrl;
        } else {
            var aParam = strUrl.split("&");
            //alert(aParam.length);
            for (var i = 0; i < aParam.length; i++) {
                if (aParam[i].substr(0, aParam[i].indexOf("=")).toLowerCase() == para_name.toLowerCase()) {
                    aParam[i] = aParam[i].substr(0, aParam[i].indexOf("=")) + "=" + para_value;
                }
            }
            strNewUrl = url.substr(0, url.indexOf("?") + 1) + aParam.join("&");
            //alert(strNewUrl);
            window.location = strNewUrl;
            //return strNewUrl;
        }
    } else {
        strUrl += "?" + para_name + "=" + para_value;
        //alert(strUrl);
        window.location=strUrl;
    }
}
```
