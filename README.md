# ci4-crud
CRUD Pagination CodeIgniter 4

> https://cacan.id/crud-pagination-codeigniter-4

![000](https://user-images.githubusercontent.com/51890752/92338584-936b2c80-f0db-11ea-9fe1-5df66fee418e.jpg)

# Cara Penggunaan:

## Clone dari GitHub:
    - Dari Document_Root Web Server Clone menggunakan perintah berikut:
    - git clone https://github.com/blogcacanid/ci4-crud.git

# Testing
Jalankan CodeIgniter 4 dengan menggunakan perintah berikut:
php spark serve

Kemudian buka browser dan ketikkan URL http://localhost:8080/pegawai

## List Data

![001](https://user-images.githubusercontent.com/51890752/92338601-9fef8500-f0db-11ea-95d3-c18a7afc1128.jpg)

## Add Record

![002](https://user-images.githubusercontent.com/51890752/92338611-ad0c7400-f0db-11ea-8455-b1ba71367cf0.jpg)

## View Record

![003](https://user-images.githubusercontent.com/51890752/92338622-beee1700-f0db-11ea-9bc3-449a6deeaf98.jpg)

## Edit Record

![004](https://user-images.githubusercontent.com/51890752/92338626-c7dee880-f0db-11ea-9d27-909d2304a0a5.jpg)


# CodeIgniter 4 Framework

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible, and secure. 
More information can be found at the [official site](http://codeigniter.com).

This repository holds the distributable version of the framework,
including the user guide. It has been built from the 
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [the announcement](http://forum.codeigniter.com/thread-62615.html) on the forums.

The user guide corresponding to this version of the framework can be found
[here](https://codeigniter4.github.io/userguide/). 


## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!
The user guide updating and deployment is a bit awkward at the moment, but we are working on it!

## Repository Management

We use Github issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script. 
Problems with it can be raised on our forum, or as issues in the main repository.

## Contributing

We welcome contributions from the community.

Please read the [*Contributing to CodeIgniter*](https://github.com/codeigniter4/CodeIgniter4/blob/develop/contributing.md) section in the development repository.

## Server Requirements

PHP version 7.2 or higher is required, with the following extensions installed: 

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)



