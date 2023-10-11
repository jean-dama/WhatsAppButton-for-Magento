# Magento 2 WhatsApp Chat Button

Este módulo foi criado para fins de estudo, apresentando um ícone flutuante do WhatApp na frente da loja.

# Features:

Frontend

Ícone flutuante do WhatApp no front da loja.

Backend

Set status, phone number and message function under menu Stores > Configuration > General - Contacts Under tabs WhatsApp Chat
Configuração da funcionalidade, número de telefone e mensagem seguindo o seguinte caminho. Lojas > Configuração > Geral

# Instalação:

Download do arquivo.
Unzip o arquivo.

Ao subir o arquivo ficará similar a isso [root]/app/code/WhatsApp/Button

Ative o módulo com os seguintes comandos:

php bin/magento module:enable WhatsApp_Button
php bin/magento setup:upgrade
php bin/magento cache:flush
php bin/magento setup:static-content:deploy
