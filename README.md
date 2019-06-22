# legacy-rp-admin
A web interface written in PHP using Laravel (https://laravel.com/) to help with administrative duties at 
the FiveM server: Legacy Roleplay.

### Contributing
This section describes how you can contribute to **legacy-rp-admin**. It is recommended that you have some experience
with Laravel before trying to contribute. Although beginner friendly, it can be overwhelming to dive right into the code
base.

#### Prerequisites
1. **Node** (https://nodejs.org/en/) and **NPM** (https://www.npmjs.com/get-npm) in order to work with frontend stuff.
2. **Composer** (https://getcomposer.org/download/). This is PHP's most popular and used dependency manager and will
help with bringing in external dependencies to make development easier.
3. **Laravel** (https://laravel.com/docs). As mentioned earlier, this is the framework which the project is built with.

#### Building
Now you are ready to build and run the application. Follow these steps:
1. Clone this repository to get the files locally on your computer.
2. Navigate to the project folder and type ``npm install`` & ``composer install`` to bring in the project's external
dependencies (remember to have the **gmp** extension enabled in your php.ini).
3. Copy the ``/.env.example`` file and rename it to ``.env``. Then change values such as the database configuration to
your own.
4. Migrate to the latest database version. Laravel comes with PHP and Artisan, so all you have to do is run ``php artisan migrate``.
3. Now run ``php artisan serve`` to put the server up.

### Contributors
Some notable contributors are:
- ExpDev07 (https://github.com/ExpDev07; maintainer).
- Sammikins (https://github.com/sammikinsrox/; maintainer).