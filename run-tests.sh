#!/bin/sh
sudo apt-get update
sudo apt-get install -y git puppet
mkdir /srv
cd /srv/ && sudo git clone https://github.com/Automattic/vip-quickstart .
sudo /srv/bin/vip-init --server --domain=localhost

echo "All done!"


exit 0;