FROM httpd:2.4

# Активируем необходимые модули для работы с PHP-FPM через proxy_fcgi
RUN sed -i 's/#LoadModule proxy_module/LoadModule proxy_module/' /usr/local/apache2/conf/httpd.conf && \
    sed -i 's/#LoadModule proxy_fcgi_module/LoadModule proxy_fcgi_module/' /usr/local/apache2/conf/httpd.conf && \
    sed -i 's/#LoadModule rewrite_module/LoadModule rewrite_module/' /usr/local/apache2/conf/httpd.conf

# Подключаем конфиг виртуального хоста
RUN echo "Include conf/extra/blog.conf" >> /usr/local/apache2/conf/httpd.conf

WORKDIR /var/www/html
