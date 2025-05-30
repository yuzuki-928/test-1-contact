# お問い合わせフォーム
## 環境構築
Dockerビルド  
　1.mkdirにてcontactディレクトリを作成  
　2.下層にdocker,nginx,php,data,srcディレクトリとmysql,my.cnf,default.conf,Dockerfile,php.ini,docker-compose.yml,ファイルを作成  
　3.作成したファイルを記述  
　4.docker-compose up -d --build  
  
Laravel環境構築  
　1.docker-compose exec php bash  
　2.composer install  
　3..env.exampleファイルから.envを作成し、環境変数を変更  
　4.views,cssフォルダ内にblade.phpとcssを作成  

## 使用技術(実行環境)
・PHP 7.4  
・Laravel 8.8  
・MySPL 8.0

## ER図
![Image](https://github.com/user-attachments/assets/6b425914-c623-4f2d-b6e2-625aaa73ea79)

## URL
開発環境：http://localhost/  
phpMyAdmin：http://localhost:8080/
