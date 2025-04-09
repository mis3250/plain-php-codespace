FROM mcr.microsoft.com/devcontainers/base:ubuntu-22.04
# ARG DEBIAN_FRONTEND=noninteractive # This is no longer strictly necessary for Ubuntu, but won't hurt.
USER root
COPY php.ini /tmp

RUN apt-get update -yq
    # Add updated php sources (Ondřej Surý's PPA works well for Ubuntu too)
RUN apt-get install curl -yq
RUN curl -sSL https://packages.sury.org/php/README.txt | bash -x
RUN apt-get update -yq
    # Install some common packages
RUN apt-get install git imagemagick nano openssh-server sqlite3 wget unzip -yq
    # Fix ImageMagick PDF policy (path is the same in Ubuntu for ImageMagick 6)
RUN sed -i 's/<policy domain="coder" rights="none" pattern="PDF" \/>/<policy domain="coder" rights="read|write" pattern="PDF" \/>/g' /etc/ImageMagick-6/policy.xml
    # Install PHP CLI with some extensions for Drupal development
RUN apt-get install php8.3-dev -yq
RUN apt-get install php8.3-apcu php8.3-curl php8.3-gd php8.3-imagick php8.3-mbstring php8.3-sqlite3 php8.3-zip php8.3-intl -yq
RUN pear config-set php_ini /etc/php/8.3/cli/php.ini
RUN pecl install xdebug
RUN cat /tmp/php.ini >> /etc/php/8.3/cli/php.ini
    # Install NodeJS LTS (keeping it commented out as in the original)
# RUN curl -sL https://deb.nodesource.com/setup_lts.x | bash
# RUN apt-get install nodejs -yq
    # Install Composer
RUN wget https://getcomposer.org/installer
RUN php installer --install-dir=/usr/local/bin --filename=composer
