<?php

1、记录版本
Illuminate\Foundation\Application　　const VERSION = '6.18.43';

2、路由匹配
        location / {
            try_files $uri $uri/ /index.php?$query_string;
        }