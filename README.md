## Build a blog with Laravel 11.*
---

### ✨ 2025/05/09

#### 今天运行的命令

- 创建一个新的分支
    ```bash
    git checkout -b static-pages
    ```
  
- 删除无用的页面
    ```bash
    rm resources/views/welcome.blade.php
    ```
  
- 生成静态页面用的控制器
    ```bash
    php artisan make:controller StaticPagesController
    ```
- 生成静态页面用的视图
    ```bash
    php artisan make:view static_pages/home
    php artisan make:view static_pages/help
    php artisan make:view static_pages/about
    ```
    
