# Push Notification Service Library

# Installation

```sh
$ composer require KaniRobinson/tpns dev-master
```

# Usage

```php
<?php

require __DIR__.'/vendor/autoload.php';

use TPNS\TPNS;

$tpns = new TPNS();

// Create a Application 
$app = $tpns->app([
    'url' => 'https://facebook.com'
])->create();

// Create a User
$user = $tpns->user([
    'user_id' => '1',
    'key' => $app->result->key,
    'app_id' => $app->result->app_id,
    'token' => '21982198989128jdij9d8nmdbnj3jdu=32did3n'
])->create();

// Create a Push Notification for specific user
$notification = $tpns->notification([
    'token' => $user->result->token,
    'key' => $app->result->key,
    'title' => 'This is a notification title',
    'body' => 'This is the notification body contents!!!',
    'action' => 'FUNC_KEY',
])->create();
```
