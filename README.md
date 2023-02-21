[Comments - Feb.21st 2023]
:: This portfolio was created in Oct 2022, just for learning purpose. Although the web site is quite simple, I spent some efforts on deployment to AWS server. 
:: Following materilas for your reference only. 
:: The web site is being continuously updated and more featuers will be created. Will share it separately. 

[Proj Env Config & Server Setting]
Date : 4th Nov 2022
By Jason CJ Chi 

[Version  Conclusion]
Windows 11 + WSL2 
Ubuntu 20.04.5 LTS
Apache2 2.4.42
PHP 8.1.10
Composer 2.4.2
Nodejs 18.9.0
Npm 8.19.2
MySQL 8.0
Laravel 9.3.7
Breeze 1.13


1.Local Development Environement

1.1 Local machine(Windows 11) as CLIENT
1.2 Virtual Host as SERVER : WSL2 + Ubuntu 20.04.5
> Kernel  -WSL2 (Microsoft Windows Subsystem for Linux)
> Linux Distribution : Ubuntu 20.04.5
> Installation and Set Up : 
:: Install WSL -> Enable WSL -> Update WSL2 Linux Kernel -> Install Ubuntu & account setting -> Set default distribution ....  
https://docs.microsoft.com/en-us/windows/wsl/install-manual#step-4---download-the-linux-kernel-update-package
https://learn.microsoft.com/en-us/windows/wsl/setup/environment?source=recommendations

>[ Other Options ]
a.VMWare : Infrastructure -> OS -> Hypervisor -> Guest OS -> BINS/LIBS -> APP1 
b.Docker  : Infrastructure -> OS -> Daemon -> BINS/LIBS -> APP1

1.3 PowerShell (Optional)
https://docs.microsoft.com/en-us/powershell/scripting/learn/ps101/00-introduction?view=powershell-7.2

1.4 Development tools
> IDE :  Visual Studio Code + extensions 
> DB Connection : vs extension
> SSH : Chrome extension - Secure shell
- Install server : sudo apt-get install openssh-server ii.
- Install client : sudo apt-get install openssh-client
- More details : https://phoenixnap.com/kb/ssh-to-connect-to-remote-server-linux-or-windows

2.Databse Installation (MySQL) - On Ubuntu 

#0 Update Package Repository 
sudo apt update
//sudo apt upgrade

#1 Install MySQL Server
sudo apt install mysql-server

#2 Create a new User
-> Login with ROOT (default no password)
sudo service mysql start 
sudo mysql -u ROOT - P ==> just ENTER     
create user ‘chicj’@’localhost’ identifed by ‘PASSWORD’;
grant all privileges on  *.*  to ‘chicj’@’localhost’;
flush privileges;

#3 Change ROOT password (Not performed yet)
-> run DBMS’s Included Security, and set up security configuration.
sudo mysql_secure_installation
/* More details check on https://hevodata.com/learn/installing-mysql-on-ubuntu-20-04/

#4 WARNING of starting server
-> MESSAGE : su: warning: cannot change directory to /nonexistent: No such file or directory
-> CAUSE: Looking for home directory
-> SOLUTION: 
sudo service mysql stop
sudo usermod -d /var/lib/mysql/ mysql     /*amend home directory for USER mysql  */
sudo service mysql start

#5 ERROR - ‘chicj’ CAN NOT login
-> Root cuase NOT found...
-> Alternatively DROP ‘chicj’ and then create NEW ‘jasonchi’


3.Web Server Installation - On Ubuntu 

3.1 > Basic Installation (Apache + PHP + extensions + (MySQL))

#0 Update Repository
sudo apt-get update
sudo apt-get upgrade

#1 Install Apache2
sudo apt-get install apache2

#2 Install PHP
sudo apt install php libapache2-mod-php

#3 Mysql
> Install MYSQL as Step.2
/*When use below command, to check PHP version */
// sudo apt install php-mysql php-gd

#4 Extension
sudo apt-get install php-mbstring
sudo apt-get install zip
sudo apt-get install unzip
sudo apt install php-xml
sudo apt-get install php-curl
sudo apt-get install php-soap
sudo apt-get install php-gd
sudo apt-get install php-zip

>> Recommended extensions from internet : 
 	sudo apt install php8.1-common php8.1-mysql php8.1-xml php8.1-xmlrpc php8.1-curl php8.1-gd php8.1-imagick php8.1-cli php8.1-dev php8.1-imap php8.1-mbstring php8.1-opcache php8.1-soap php8.1-zip php8.1-intl -y

>> Check PHP Extensions : $ PHP -M   OR    $ dpkg -l | grep php | tee packages.txt

#5 Url rewrite
sudo a2enmod rewrite
sudo service apache2 restart

#99. Not executed, but need to know the meaning 
sudo su -s /bin/bash www-data

3.2 > Package Management (Composer + Node + NPM) 
[COMPOSER ]
Composer helps you declare, manage, and install dependencies of PHP projects.
> Install Composer

$ curl -Ss https://getcomposer.org/install | php
$ sudo mv composer.phar /usr/local/bin/composer
$ chmod +x /usr/local/bin/composer
$ composer 

[Node and NPM ]
* NPM stands for Node Package Manager
* Yarn stands for Yet Another Resource Negotiator 
Ref site : https://www.sitepoint.com/yarn-vs-npm/

# Install NPM 
$ sudo apt install npm
$ npm run dev

# Install node.js
$ curl -fsSL https://deb.nodesource.com/setup_18.x | sudo -E bash -
$ sudo apt-get install -y nodejs

4.Laravel Project 

#1 Create Laravel project 
$ composer create-project laravel/laravel XXX (ex: wingsof)

$ cd XXX
$ php artisan serve
Browse local site with : http://localhost:8000

#2 DB connection 
$ Update .env file to change DB_CONNECTOIN as MySQL and Host, ID&PWD

#3 Create Breeze 
# Laravel Breeze : Vue???

$ composer require laravel/breeze --dev
$ php artisan breeze:install vue /or React?

# Ref : 
composer require laravel/ui --dev
php artisan ui --auth

# Migration 
# Create module and migration, using [ php artisan make:model Post -m] 
$ php artisan migrate

	# Eloquent 
$ composer require cviebrock/eloquent-sluggable






5.GIT&GITHUB

# Apply for a GitHub Account - https://github.com/sanyejiji 
# Create a public repository - “firstblog”


# Commans on Ubuntu 
> echo “# w” >> README.md
> git init     //first createit
> git add README.md
> git config --global user.email “xxx@bbb”
> git config --global user.name “sanyeji”

> git add .  // add ALL files, 
> git commit -m “first ...”
> git branch -M main
> git remote add origin https://github.com/sanyejiji/w.git
  -> remote origin already exists...does it mean that the “w.git” is defined GitHub website?
> git push -u origin main 

# When others commit source code 
> git checkout -b freshman    

# Remove config
> rm -rf .git

#Remember password 
> git config --global credential.helper store

6.Deployment 

6.1> AWS Account, IP, Domain, EC2 Instance(Web + DB), Security group, create RSA keypair etc
6.2> Install Web Server, Database (follow #2 & #3)
6.3> Using Git to copy project workspace to /var/www/bestanz directory 
    *** 
- git pull alpha master
6.4> Prepare .env file and copy to project folder ‘bestanz’
> Update DB connection, URL, generate a key (--> php artisan key:generate)
> Git does not copy .env file by default.
6.5> Apache configuration 
> cd /etc/apache2




6.6> Install SSL
> sudo certbot 



> sudo apt install paython3-certbot-apache
> 
> sudo certbot --expand -d bestanz.net,www.bestanz.net 


        ErrorLog /var/www/bestanz/storage/logs/error.log
        CustomLog /var/www/bestanz/storage/logs/access.log combined
  
    
6.7> Login / Register --> 500 SERVER ERROR
[2022-11-03 13:51:30] production.ERROR: Vite manifest not found at: /var/www/bestanz/public/build/manifest.json {"view":{"view":"/var/www/bestanz/resources/views/layouts/guest.blade.php","data":[]},"exception":"[object] (Spatie\\LaravelIgnition\\Exceptions\\ViewException(code: 0): Vite manifest not found at: /var/www/bestanz/public/build/manifest.json at /var/www/bestanz/vendor/laravel/framework/src/Illuminate/Foundation/Vite.php:519)
[stacktrace]

=> Solution : 
> vite build 
> npm run build 




6.8> Permission change and Log directory setting 
6.8.1 change owner
 > cd /var/www/bestanz 
> sudo chown -R www-data:www-data storage

6.8.2 update /config/logging.php file. ‘channels’ => [‘daily’]

        'stack' => [
            'driver' => 'stack',
            'channels' => ['daily'],
            'ignore_exceptions' => false,
        ],

7.Production Server 

> AWS 
> Domain name : www.bestanz.net
> Elapsed IP  (44.XXX.XXX.XXX)
> Security Group (Web 80/443 + SSH 22  )
> EC2 : install Web Server + MySQL database
-->  To change ROOT password for MySQL, AUTH_SOCKETto CACHING_SHA2_PASSWORD  
  * Web server configuration, need to check more!!!
> SSH client connection : 
- Generate Authentication Key
- Using RSA key file + ID : ubuntu; Public key is stored in  /home/ubuntu/.ssh/


<----  End of Document ---->
