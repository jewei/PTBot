# Setup VPS

My VPS choice:
https://www.vultr.com/?ref=7329351


## Setup

```
cd ~
sudo apt update
sudo apt upgrade

curl https://packages.microsoft.com/keys/microsoft.asc | gpg --dearmor > microsoft.gpg
sudo mv microsoft.gpg /etc/apt/trusted.gpg.d/microsoft.gpg
sudo sh -c 'echo "deb [arch=amd64] https://packages.microsoft.com/repos/microsoft-ubuntu-artful-prod artful main" > /etc/apt/sources.list.d/dotnetdev.list'

sudo apt update
sudo apt install default-jdk npm nginx php7.1-cli php7.1-mbstring php7.1-zip composer dotnet-sdk-2.1.4

npm install pm2 -g

java -v
dotnet --version
php --version
composer --version
pm2 --version

dpkg-reconfigure tzdata
reboot

cd /opt
git clone https://github.com/jewei/PTBot.git
git checkout <branch>
cd PTBot
composer install

cd /opt/PTBot/Feeder
pm2 start pm2-PT-Feeder.json
```


## Troubleshooting

> Could not connect to Binance. Has your firewall not got an exception for PT Feeder? Is binance down? Error: A task was canceled.

Add this line to your host file `52.84.14.181 www.binance.com`
