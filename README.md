# About Project_Mitsubishi

Website built completely from scratch, without using any kind of frameworks or libraries.
Technology used :
- php 7.1
- JavaScript
- HTML/CSS
- MySQL
## Authors

- [@Shadowbeast](https://www.github.com/shadowbeast666)


## License

[MIT](https://choosealicense.com/licenses/mit/)


## Features

- Registration and Login System 
- Input validation
- Adminstartion Panel
- Cross platform


## Run Locally


Make sure you have PHP 7.1 (or above) installed.

```bash
php -v
PHP 7.1.0 (cli) (built: May 4 2016 06:30:45)
```

Make sure you have a local webserver installed installed. For example Apache
```bash
sudo apt install apache2
```



Make sure you have MySQL 5.7 (or above) installed.
```bash
mysql -V
mysql  Ver 16.14 Distrib 5.7.16, for pc-linux-gnu (i686) using readline 5.7
```

Install Phpmyadmin

```bash
  sudo apt-get install phpmyadmin
```

Clone the project

```bash
  git clone https://github.com/shadowbeast666/Project_Mitsubishi
```

Copy the project directory to /var/www/html 

```bash
  sudo cp -R Project_Mitsubishi /var/www/html
```

Import the database

```bash
  mysql -u root -p db < /var/www/html/Project_Mitsubishi/database/db.sql
```

Start the server

```bash
  sudo service apache2 start
```
