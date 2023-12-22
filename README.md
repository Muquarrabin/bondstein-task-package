
# Bondstein Task Package

Recruitment Task Package for Bondstein


## Installation

Install package with composer

At first add this lines to composer.json

```
...
"require": {
    ...
    "muquarrabin/bondstein-task-package": "^1.0.0"
},
...
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/muquarrabin/bondstein-task-package"
    }
]
```

Then  run this command
```bash
  composer require muquarrabin/bondstein-task-package
```


## Documentation

Register it in your Laravel project's config/app.php:

```
'providers' => [
    // ...
\Muquarrabin\BondsteinTaskPackage\BondsteinTaskPackageServiceProvider::class
],        
```
Then run this command
```bash
php artisan migrate
```
It will migrate the table.

Now you can browse the package routes on following urls:

- /bondstein-task-package/employees
- /bondstein-task-package/employees/create
- /bondstein-task-package/employees/edit/{id}
- /bondstein-task-package/employees/show/{id}