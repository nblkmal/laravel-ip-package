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

1. Open composer.json and add

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

> result
![alt text](result.png)