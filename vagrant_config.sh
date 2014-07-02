#!/usr/bin/env bash

echo ">>> Installing Sentora website specific customisations..."

laravel_root_folder="/vagrant"

# Test if Apache or Nginx is installed
nginx -v > /dev/null 2>&1
NGINX_IS_INSTALLED=$?

nginx_root=$(echo "$laravel_root_folder/public" | sed 's/\//\\\//g')

# Change default vhost created
sudo sed -i "s/root \/vagrant/root $nginx_root/" /etc/nginx/sites-available/vagrant
sudo service nginx reload

# Create a new development database...
mysql -u root -proot -e "CREATE DATABASE sentora;"

# Lets change into the application directory ready to run the final bits...
cd $laravel_root_folder

# Lets now install our dependencies...
composer install

# Lets also migrate and seed our development database...
php artisan migrate --seed

# Set permissions on the app/storage directory...
chmod -R 777 /vagrant/app/storage/

echo ">>> Provisioning complete! "
echo ""
echo "You can now access the application at:  http(s)://192.168.33.10"