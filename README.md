# ProfitTrailer & Feeder bundle

This package contatins ProfitTrailer and PT-Feeder. Run `php setup.php` to
replace sensitive credentials from .env to setting files.


## Usage

Copy .env.example to .env and fill up the settings.

Run `composer install` to download dependencies.

Run `php setup.php` and check if settings are properly updated.


## Running the programmes

```
pm2 start ProfitTrailer/pm2-ProfitTrailer.json
pm2 start Feeder/pm2-PT-Feeder.json

pm2 save
pm2 startup
```


## Links

ProfitTrailer: https://github.com/taniman/profit-trailer
ProfitTrailer Wiki: https://wiki.profittrailer.io/doku.php

PT-Feeder: https://github.com/mehtadone/PTFeeder
PT-Feeder Wiki: https://github.com/mehtadone/PTFeeder/wiki


## Support

We do not provide support now. Use at own risk.
