#!/bin/sh

install_apache() {
    sudo apt-get -q -y install apache2
    
}

install_mysql() {
    sudo apt-get -q -y install mysql-server
}

install_wordpress() {
    cd /var/www
    rm -rf index.html
    
    svn co http://core.svn.wordpress.org/trunk/
    mv trunk wordpress
    
    cd $B_DIR
}

B_DIR=`pwd`

echo "Setting stuff up..."

# use non-interactive package installation
export DEBIAN_FRONTEND=noninteractive

# update repos
sudo apt-get update

# install components and confugure them
install_apache
install_mysql
install_wordpress

echo "All done!"

exit 0;