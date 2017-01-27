# What's on Saigon

## Development Setup Guide

### prerequisites

* NodeJs 6.x.x

* Have `Yarn` installed. See (https://yarnpkg.com/en/docs/install)

* Add `export PATH="$PATH:$(yarn global bin)" `to your `~/.bash_profile`

* Have `gulp` installed at global level with `yarn add global gulp`

### October CMS

* Have the project hosted on local Apache server and accessible at `http://localhost/whatsonsaigon/`.

* ave a mysql database named `whatsonsaigon` created. Have user `whatsonsaigon` with password `whatsonsaigon` accessible to the database with the same name.

* Open terminal, `cd` to the root of the project.

* run `php artisan october:up` to create tables.

### Semantic UI

* Open terminal, `cd` to the root of the project.

* Run `npm run semantic-build` to build semantic UI.

### react

* Open terminal, `cd` to the root of the project.

* Enter `yarn` command to pull external dependencies. This might take a while.

* Enter `gulp`. This should start the development server and watching files at `themes/default/assets/scripts` to recompile.

* The react development server should now be started at `http://localhost:5000`.

* Enjoy coding!

## Urls

Backend url: `http://localhost/whatsonsaigon/backend/urbn8/wos/eventcategories` username/pass: `admin/admin`

## October CMS Minimum System Requirements

October CMS has a few system requirements:

* PHP 5.5.9 or higher
* PDO PHP Extension
* cURL PHP Extension
* MCrypt PHP Extension
* ZipArchive PHP Library
* GD PHP Library

As of PHP 5.5, some OS distributions may require you to manually install the PHP JSON extension.
When using Ubuntu, this can be done via ``apt-get install php5-json``.
