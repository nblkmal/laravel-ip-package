## Simple API Package For User's IP & Geolocation

1. Create directory for packages
    - packages
        - { author }
        - { package-name }
            - src
                - Classes
                - Providers
2. Run `composer init` in `/packages/{author}/{package-name}`
3. Update `/packages/{author}/{package-name}/composer.json`
4. Run `composer dump-autoload`
5. Create `IpGeo.php` file in `/packages/{author}/{package-name}/src/Classes`

### Add this package into Laravel Project

1. Open composer.json and add

```
"repositories": [
        {
            "type": "path",
            "url": "./packages/CustomAuth"
        }
    ],
```