# Short URL creator

Short URL creator made with Javascript and PHP

### To install and run

Create .htaccess on same folder to change Rewrite Rule of adress bar

```
RewriteEngine On

RewriteRule ^([0-9a-zA-Z_-]*)$ index.php?id=$1 [NC,L]
```

![](https://home.uni-leipzig.de/idiv/short-url-creator/screen.png)

