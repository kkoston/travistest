#!/bin/sh

install_apache() {
    sudo apt-get -q -y install apache2
}

install_mysql() {
    sudo apt-get -q -y install mysql-server
}

install_wordpress() {
    echo "Now, install WP"
}

echo "Setting stuff up..."

export DEBIAN_FRONTEND=noninteractive

sudo apt-get update
install_apache
install_mysql
install_wordpress

echo "All done!"

exit 0;