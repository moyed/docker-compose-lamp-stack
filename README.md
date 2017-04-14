# LAMP Docker

This is an unofficial, open-source and community-driven boilerplate for LAMP based projects that run on Docker-Compose. It's an attempt of standardizing and making it easier to bootstrap LAMP applications ready for development environments. 
The main services included are:

* Apache 2.4
* Mysql 5.6 
* PHP 5.6
* Ubuntu 15.10  Debian jessie


## Requirements

* Install Docker > 1.12
* Install Docker Compose > 1.11

Before anything, you need to make sure you have Docker properly setup in your environment. For that, refer to the official documentation for both Docker and Docker Compose. 

Also, if you're developing on Mac or Windows – yeah, maybe that's the case –, make sure you have Docker Machine properly setup.

## Usage

You are up and running in three simple steps:
```sh
check out latest stable release
$ git checkout $(git describe --abbrev=0 --tags)
$ cd docker-lamp 
$ docker-compose up --build -d 
```

Enjoy!
