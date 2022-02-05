## Simple API Package For User's IP & Geolocation

1. Create directory for packages

```
    - packages
        - { author }
        - { package-name }
            - src
                - Classes
                - Providers
```

2. Run `composer init` in `/packages/{author}/{package-name}`
3. Update `/packages/{author}/{package-name}/composer.json`

> IpGeo/composer.json
```
{
    "name": "nblkmal/ip-geo",
    "description": "API Package for user's IP & geolocation",
    "license": "MIT",
    "authors": [
        {
            "name": "nblkmal",
            "email": "nblkmal@gmail.com"
        }
    ],
    "require": {
        "php": "^7.4|^8.0",
        "illuminate/contracts": "^8.0"
    },
    "autoload": {
        "psr-4": {
            "Nblkmal\\IpGeo\\": "src"
        }
    },
    "extra": {
        "laravel": {
            "providers": [
                "Nblkmal\\IpGeo\\Providers\\IpGeoServiceProvider"
            ]
        }
    }
}
```

4. Run `composer dump-autoload`
5. Create `IpGeo.php` file in `/packages/{author}/{package-name}/src/Classes`

> IpGeo.php
```
<?php

namespace Nblkmal\IpGeo\Classes;

use Illuminate\Support\Facades\Http;

class IpGeo
{
    public function getIP()
    {
        $data = Http::get('https://api.ipify.org/?format=json');
        $response = $data->object();
        $ip = $response->ip;

        return $ip;
    }
}
```

### Add this package into Laravel Project

1. Open composer.json and manually add this package respository since it is not published yet in Packagist

> composer.json
```
"repositories": [
        {
            "type": "path",
            "url": "./packages/nblkmal/IpGeo"
        }
    ],
```

2. Run `composer install` & `composer require nblkmal/ip-geo`
3. You should see that the package is successfully installed in the project

```
.
.
Discovered Package: nblkmal/ip-geo
Discovered Package: nesbot/carbon
Discovered Package: nunomaduro/collision
Package manifest generated successfully.
77 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
> @php artisan vendor:publish --tag=laravel-assets --ansi --force
No publishable resources for tag [laravel-assets].
Publishing complete.
```

4. Go to `web.php`, add this line of code to test it.

> web.php
```
use Nblkmal\IpGeo\Classes\IpGeo;

Route::get('/test', function () {

    $ip = new IpGeo();
    $user_ip = $ip->getIP();

    return $user_ip;
});
```

>![](/public/images/result.png)

5. Success in using the package. You can check on `getGeolocation()` in the package.

> Currently we are not using service provider as we dont have the need to either use routes or views from the packages