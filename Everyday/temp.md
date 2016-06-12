*
* jQuery Date Selector Plugin
* 日期联动选择插件
*
* Demo:
$("#calendar").DateSelector({
ctlYearId: <年控件id>,
ctlMonthId: <月控件id>,
ctlDayId: <日控件id>,
defYear: <默认年>,
defMonth: <默认月>,
defDay: <默认日>,
minYear: <最小年|默认为1800年>,
maxYear: <最大年|默认为本年>
});

HTML:<div id="calendar"><SELECT id=idYear></SELECT>年 <SELECT id=idMonth></SELECT>月 <SELECT id=idDay></SELECT>日</div>
*/

示例代码：
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>jQuery多级联动下拉日期选择器-柯乐义</title>
<style>
body{padding:20px;background:#ddd;font:14px/1.7 Arial,"\5b8b\4f53";}
h1,h2,h3{font:bold 36px/1 "\5fae\8f6f\96c5\9ed1";}
h2{font-size:20px;}
h3{font-size:16px;}
fieldset{margin:1em 0;}
fieldset legend{font:bold 14px/2 "\5fae\8f6f\96c5\9ed1";}
a{color:#06f;text-decoration:none;}
a:hover{color:#00f;}

.wrap{width:600px;margin:0 auto;padding:20px 40px;border:2px solid #999;border-radius:8px;background:#fff;box-shadow:0 0 10px rgba(0,0,0,0.5);}
</style>
</head>
<body>
<div class="wrap">
<h1>jQuery多级联动下拉日期选择器</h1>

<h2>示例</h2>
<div id="dateSelector">
<select id="idYear" name="idYear" data=""></select>年
<select id="idMonth" name="idMonth" data="12"></select>月
<select id="idDay" name="idDay" data="1"></select>日
</div>
<a href="http://keleyi.com/a/bjad/42v7nii9.htm" target="_blank">原文</a>
</div>

<script type="text/javascript" src="http://keleyi.com/keleyi/pmedia/jquery/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="http://keleyi.com/keleyi/phtml/jqtexiao/20/keleyi.dateSelector.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
    var myDate = new Date();
    $("#dateSelector").DateSelector({
    ctlYearId: 'idYear',
    ctlMonthId: 'idMonth',
    ctlDayId: 'idDay',
    defYear: myDate.getFullYear(),
    defMonth: (myDate.getMonth() + 1),
    defDay: myDate.getDate(),
    minYear: 1800,
    maxYear: (myDate.getFullYear() + 1)
    });
    });
</script>
</body>
</html>
