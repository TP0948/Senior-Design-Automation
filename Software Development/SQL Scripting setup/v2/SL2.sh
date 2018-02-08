sudo su 
#Enter below here manually
#mysql -u root -p
#GRANT ALL ON *.* TO 'nodered' @'192.168.1.%' IDENTIFIED BY 'nodered' with grant option;


rm -f /etc/mysql/mariadb.cnf
cp "/home/pi/Desktop/SQLAMP/mariadb.cnf" /etc/mysql/mariadb.cnf

Sudo /etc/init.d/mysql restart
