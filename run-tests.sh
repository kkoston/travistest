#!/bin/sh

install_apache() {
    sudo apt-get -q -y install apache2
    sudo apt-get -q -y install php5-fpm    
}

install_mysql() {
    sudo apt-get -q -y install mysql-server
    gunzip -c build-files/dbdump.sql.gz | mysql -u root 
    
}

install_wordpress() {
    cd /var/www
    sudo rm -rf index.html
    sudo rm -rf wordpress
    sudo svn co http://core.svn.wordpress.org/trunk/
    sudo mv trunk wordpress
    cd wordpress
    sudo cp $B_DIR/build-files/wp-config.php .
    
    cd $B_DIR
}

echo "Setting stuff up..."
# dev instance clone like Travis
if [ -d "/home/vagrant" ]; then
    cd /home/vagrant/travistest
fi

B_DIR=`pwd`

# use non-interactive package installation
export DEBIAN_FRONTEND=noninteractive

# update repos
# !!!!!!!!!!!uncomment!!!!!!!!!!!!!!!uncomment!!!!!!!!!!!!!!!!!!!!uncomment!!!!!!!!!!!!!!!!!       sudo apt-get update

# install components and confugure them
install_apache
install_mysql
install_wordpress

echo "All done!"

exit 0;