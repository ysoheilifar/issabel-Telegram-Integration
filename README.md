# issabel Send Telegram when Making Call

1. Copy all downloaded file in "/var/www/html" directory on issabel

2. Set "775" or "777" permission to all downloaded files

3. Go to "/var/www/html" directory
 ``` bash script

cd /var/www/html 

```
4. Open "zarbinnetwork_telegram_sendCallinfo.php" and set telegrambot and telegramchatid
```php

$token = "TelegramBot";
$chat_id = "TelegramChatID";

```
5. open /etc/asterisk/extensions_custom.conf create zarbinnetwork context and include it
```
[from-internal-custom]
include => zarbinnetwork

[zarbinnetwork]
exten => _900.,n,AGI(zarbinnetwork_mail.php)
```
