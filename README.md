# php-pdf-network
Simple php to open file pdf over network shared

Simple Configuration.
-----

In **/etc/sudoers** add the lines....

    #Permissao para o usuario apache executar comandos do root sem senha
    apache ALL=(root) NOPASSWD: /bin/mount
    #Desabilita o requiretty para o usuario apache
    Defaults:apache !requiretty


The library source for read pdf
-----

http://jquery.malsup.com/media/
