### 公众号认证信息
AppID(应用ID):
wxd32cc00984e7629c
AppSecret(应用密钥):
d4216c9c9262f1613dd86193ace34f0b


### 临时 AccessToken
ve4gBiCPGJVjbk3GUFMdTDERw34GGbDnI9xieG78mz_oTRW6t_ZnBXqhiW4fg8XLUGS72_EbUH51Yd78NqOCokWqvdc1aDvfRxUCgkHQILYOYBfAHAWGJ
E7tBrJLQ1-NQ8CCvLZRYIDxA9HNlvUugmm8muEglIPu16G3LLdxUJYrPe_lq4QBZu_0Y11SlEPLbeRM5LynUp_UIV75HOk9ivsGnWpm0WM8MEDbAGAWON
"access_token": "PnSd4H4mRE-qL5tQsNJ106JLQfQqz6omkk_pkRnbTUStwciaruNaiDa_YSHOEP3anxjU7V3SVkfzWHF4L9c4G_K4KBtnEvZIT1e1VIr8hWISGQhAHAVJT",
"access_token": "mXmZ4cYmN7T81QhibIP2c74Xgb46X8RbjFNO2CFEjJ3jIPzj4xefVccK0NbnjsnPrekUcYAEnDVoPLY2Ijdd7C6-co6OTdyuq33ursSXKwYNGSjAIAEXJ",
"access_token": "0_hxoaU9U6gzaJItPe46ymScTgPwjT-LnTt6IA-CWE1rldw00U7QqbDudDylVdUJ0-xsRxXw7WIvAFjZlSHvPsnEXWTi0nkPmhZGHAWiiKkDOCdAJAUFT",
"access_token": "lAxb2dhBCw-myZbr3-rLC83D1gLZSsiDtmP2XeNDzH7l6CHNbfuMDY5m52lOEeKLYUDAIl-ehwr8L8yiFk-UiEXDO4Fk5UkxrzqAm5EZ5vUHFGfAFAWUV",

### POST Json实现
>
$data = array('type' => 'news', 'offset' => '0', 'count' => '1');
$data_string = json_encode($data);
$ACCESS_TOKEN = self::getToken();
$result = file_get_contents("https://api.weixin.qq.com/cgi-bin/material/batchget_material?access_token={$ACCESS_TOKEN}", null, stream_context_create(array(
'http' => array(
'method' => 'POST',
'header' => 'Content-Type: application/json' . "\r\n"
. 'Content-Length: ' . strlen($data_string) . "\r\n",
'content' => $data_string,),
)));
return $result;

###
