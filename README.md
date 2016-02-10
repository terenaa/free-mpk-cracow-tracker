# Free MPK Cracow Tracker
Get a text message when MPK in Cracow is free for drivers

Requirements:
* PHP >= 5.3.2
* [terenaa\SmsGateway](https://github.com/terenaa/sms-gateway)

## Installation

```bash
git clone https://github.com/terenaa/free-mpk-cracow-tracker.git
cd free-mpk-cracow-tracker/
composer update
```

Copy an example config file (config/config.ini.example) and fill with correct values

## Examples

```php
require_once __DIR__ . '/vendor/autoload.php';

use \terenaa\FreeMPK\FreeMPK;

$mpk = new FreeMPK();
$mpk->run(true);
```
