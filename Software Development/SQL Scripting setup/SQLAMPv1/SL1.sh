#sudo apt-get update
#sudo apt-get upgrade -y 

#sudo apt-get install mysql-server python-mysqldb -y 

#sudo apt-get install apache2 -y
#a2enmod rewrite


#nano /etc/apache2/apache2.conf 
#	
#			<Directory /var/www/>
#			Options Indexes
#			FollowSymLinks
#			AllowOverride All
#			Require all granted
#			</Directory>
#	
#	systemctl restart apache2


#apt-get install php libapache2-mod-php -y
#
#
#apt-get install phpmyadmin -y
#

sudo su 
#Enter below here manually
#mysql -u root -p
#GRANT ALL ON *.* TO 'nodered' @'192.168.1.%' IDENTIFIED BY 'nodered' with grant option;