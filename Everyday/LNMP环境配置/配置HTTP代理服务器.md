### 配置HTTP代理服务器
1. 安装"Bitvise SSh Client"配置'username', 'password', 和Service选项卡里的"SOCKS/HTTP Proxy Forwarding"
2. 安装*__Privoxy__*
3. 下载安装完成后，在privoxy的主界面中选择“Options”—>”Edit Main Configuration” ，之后会打开一个txt文档，在最后面追加两行代码，如下：
> listen-address 127.0.0.1:8118  
> forward-socks5 / 127.0.0.1:7070 .

4. 别忘了7070后有个小点。 7070是代理软件MyEntunnel的端口，8181是自己设置的，不要和其它端口有冲突，自己可以换个的。
5. 之后在windows中设置全局代理就OK了

### GFW防火墙屏蔽VPN《可查看有哪些VPN厂商可选择》
《环球时报》英文版1月23日发文称，中国防火墙开始屏蔽外国VPN服务。VPN供应商Astrill上周通知用户，由于防火墙的升级，使用IPSec、L2TP/IPSec和PPTP协议的设备无法访问它的服务。另一家VPN服务商VPN Tech Runo本月早些时候称，从去年12月31日开始它的很多IP地址已被屏蔽，部分地区使用L2TP协议的用户也连接不了它的服务器。而免费VPN服务商fqrouter也在本月8日正式宣布关闭其VPN服务。路透社表示，StrongVPN和Goden Frog公司的相关服务也受到影响。StrongVPN在它的官方博客表示，它的某些伺服器无法为中国用户提供服务，Golden Frog则声称，它的VPN服务过去几天受到的干扰加剧。Golden Frog总裁Sunday Yokubaitis坦言：“我们和其他VPN服务供应商本周(这里指上周)受到的攻击是前所未有的，比以往都更加复杂。”
