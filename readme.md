# meme-templates

## Require
+ Node.js
+ Webpack
+ Sass
+ Babel [ES6]
+ Docker

## Documentation

### start

```
docker-compose up
```

### end

```
docker-compose down
```

### MySQL

#### RESTORE
```
docker-compose exec mysql bash -i -c 'cd /home & mysql -u mysql_user -pmysql_pw meme < meme.sql'
```  

#### export
```
docker-compose exec mysql bash -i -c 'cd /home & mysqldump -u mysql_user -pmysql_pw meme > meme.sql'
```
