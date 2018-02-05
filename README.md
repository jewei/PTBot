# ProfitTrailer & Feeder bundle

This package contains latest version of ProfitTrailer and PT-Feeder. Also
including free/public settings.

The purpose of this project is to make it easier to deploy settings and update
the bots to latest version.

Sensitive credentials i.e. API key/secret are store in .env file and please do
not commit this file to repository.

Simply run `php setup.php` to update credentials from .env to setting files.


## Requirement

1. PHP version > 7.0 and Composer to run the credential script.
2. Java 8 to run Profit Trailer.
3. .NET SDK to run Feeder (optional).
4. PM2 process manager to keep programmes running (optional).
5. Git to manage and switch branches/settings (optional).

This bundle is optimized for Linux OS environment.


## Usage

Git clone this repository, `git clone https://github.com/jewei/PTBot.git /opt/PTBot`.

Copy `.env.example` to .`env` and fill up the settings.

Run `composer install` to download dependencies.

Run `php setup.php` to update/overwrite setting files.


## Running the programmes

```
cd /opt/PTBot/ProfitTrailer
pm2 start pm2-ProfitTrailer.json

cd /opt/PTBot/Feeder
pm2 start pm2-PT-Feeder.json

pm2 save
pm2 startup
```

Once PM2 are saved, you can just simply run `pm2 restart all` in future.

To watch the logs, run `pm2 logs`.


## Running on other settings

Settings are keep in branches. Master branch is the original factory settings.

To use other settings, for example, `git checkout crypto-crow-settings`.


## Links

- ProfitTrailer - https://github.com/taniman/profit-trailer
- ProfitTrailer Wiki - https://wiki.profittrailer.io/doku.php
- PT-Feeder - https://github.com/mehtadone/PTFeeder
- PT-Feeder Wiki - https://github.com/mehtadone/PTFeeder/wiki


## Support

You can tip me to keep the [settings](https://github.com/jewei/PTBot/branches)
updated and [support](https://github.com/jewei/PTBot/issues/new).

- BTC `14H7Ue2pL8vs9zEqjiw8YrkTQKjgiqLSGC`
- ETH `0xDBEE8fBfAbb6aCC8058C72D674C6D9BfFA3f3030`

Please also tip the settings creators/maintainers.
