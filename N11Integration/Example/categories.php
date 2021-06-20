<?php
// bi kaç örnek

use N11Integration\Client;

// api bağlantısı
$client = new Client();
$client->setApiKey('xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx');
$client->setApiPassword('xxxxxxxxxxxxxxxx');


// üst seviye kategoriler
$client->category->getTopLevelCategories();
// bir üst seviye kategori için
$client->category->getParentCategory();
// bir alt seviye kategori için
$client->category->getSubCategories();