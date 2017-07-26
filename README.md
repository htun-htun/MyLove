# MyLove

This is a project for my girlfriend, Geevenchy.

## Install

* Clone this repo
* Move this project to your `Apache http server`
* Creating MySQL Database `login` and create tables `members` and `loginAttempts`:

```mysql
CREATE TABLE `members` (
  `id` char(23) NOT NULL,
  `username` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `mod_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `loginAttempts` (
  `IP` varchar(20) NOT NULL,
  `Attempts` int(11) NOT NULL,
  `LastLogin` datetime NOT NULL,
  `Username` varchar(65) DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
```

* Setup your MySQL at `login/dbconf.php`:

```php
//DATABASE CONNECTION VARIABLES
$host = "localhost"; // Host name
$username = "user"; // Mysql username
$password = "password"; // Mysql password
$db_name = "login"; // Database name
```

* Sign up at `login/signup.php`
* Create directory `timeline` at root, put your pictures and write your `timeline3.json` for timeline, for [example](https://timeline.knightlab.com/docs/json-format.html).
* Write your `menu.json` in the `smartMenu` folder, for `SmartMenu`. Like this:

```json
[
  {
    "restaurant": "Mcdonald",
    "food": "Hamburger"
  },
  {
    "restaurant": "KFC",
    "food": "Chicken"
  }
]
```

* and so on...

## Features

* support login
* Home with timeline
* Smart Menu

## Comming soon

* Draw & Guess

# Acknowledgements

[Bootstrap Table](https://github.com/wenzhixin/bootstrap-table)

[drawingboard.js](http://leimi.github.io/drawingboard.js)

[love.hackerzhou.me](https://github.com/hackerzhou/Love)

[PHP-Login](https://github.com/fethica/PHP-Login)

[TimelineJS3](https://github.com/NUKnightLab/TimelineJS3)

