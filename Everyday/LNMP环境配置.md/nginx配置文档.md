## 常用配置

   server {
           listen       80;
           server_name wechat.demopp.in;
           root /data/html/wechat/public;
           index index.php index.html index.htm;
           access_log  /var/log/nginx/wechat.access.log main;
           error_log   /var/log/nginx/wechat.error.log error;
       location / {
           try_files $uri $uri/ /index.php?$query_string;
 1     }
 1
 1     location ~ \.php$ {
 1         try_files $uri =404;
 1         fastcgi_pass 127.0.0.1:9000;
 1         fastcgi_index index.php;
 1        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
 1         include fastcgi_params;
 1     }
 1
 2 }
