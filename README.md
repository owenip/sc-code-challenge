# Giphy API Wrapper

A package that make request to Giphy API

### Composer
```
php
“require”: {
    ...
    "owen/sc-code-challenge": "*",
    
}
```
AND run 
```
compsoer install
```

### Quick Example
Search for Stickers
```php
require_once __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload

use Giphy\GiphyApi;
GiphyApi::searchStickers(${Your Giphy API_key}, 'cheeseburgers', 2);
```