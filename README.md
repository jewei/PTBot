# ProfitTrailer & Feeder bundle

This package contains latest version of ProfitTrailer and PT-Feeder.

You can leave sensitive credentials to .env file while update the bots easily.

Run `php setup.php` to replace sensitive credentials from .env to setting files.


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


## Running on other settings

Checkout other branches, `git checkout crypto-crow-settings`.


## Links

- ProfitTrailer - https://github.com/taniman/profit-trailer
- ProfitTrailer Wiki - https://wiki.profittrailer.io/doku.php
- PT-Feeder - https://github.com/mehtadone/PTFeeder
- PT-Feeder Wiki - https://github.com/mehtadone/PTFeeder/wiki
- Setting source - https://github.com/taniman/profit-trailer/issues/712

## Support

We do not provide support now. Use at own risk.

However, the author glady accepts pull request and donation.

- BTC - 14H7Ue2pL8vs9zEqjiw8YrkTQKjgiqLSGC
- ETH - 0xDBEE8fBfAbb6aCC8058C72D674C6D9BfFA3f3030
