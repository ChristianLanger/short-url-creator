# Short URL creator

Short URL creator made with Javascript and PHP

### To install and run

Create .htaccess in same dir to add Rewrite Rule for browser´s adress bar

```
RewriteEngine On

RewriteRule ^([0-9a-zA-Z_-]*)$ index.php?id=$1 [NC,L]
```

### Screenshot

![](https://home.uni-leipzig.de/idiv/short-url-creator/screen.png)

