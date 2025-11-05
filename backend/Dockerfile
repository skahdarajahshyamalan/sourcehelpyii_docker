FROM yiisoftware/yii2-php:7.4-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Change document root for Apache
RUN sed -i -e 's|/app/web|/app/backend/web|g' /etc/apache2/sites-available/000-default.conf

# Allow .htaccess overrides
RUN echo '<Directory /app/backend/web>' >> /etc/apache2/sites-available/000-default.conf && \
    echo '    Options Indexes FollowSymLinks' >> /etc/apache2/sites-available/000-default.conf && \
    echo '    AllowOverride All' >> /etc/apache2/sites-available/000-default.conf && \
    echo '    Require all granted' >> /etc/apache2/sites-available/000-default.conf && \
    echo '</Directory>' >> /etc/apache2/sites-available/000-default.conf