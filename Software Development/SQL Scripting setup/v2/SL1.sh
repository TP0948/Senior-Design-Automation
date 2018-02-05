sudo apt-get update
sudo apt-get upgrade -y 

sudo apt-get install mysql-server python-mysqldb -y 
sudo apt-get install apache2 -y
a2enmod rewrite

rm -f /etc/apache2apache2.conf
cp "/home/pi/Desktop/SQLAMP/apache2.conf" /etc/apache2/apache2.conf
	
systemctl restart apache2


apt-get install php libapache2-mod-php -y
apt-get install phpmyadmin -y


rm -f /etc/mysql/mariadb.cnf
cp "/home/pi/Desktop/SQLAMP/mariadb.cnf" /etc/mysql/mariadb.cnf



