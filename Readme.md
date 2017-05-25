## LARAVEL SLACK PACKAGE
This package was built for easy integration of automatic Slack invite into your Laravel Project instead of writing codes from scratch or with another programming language.
If your web project is built on Laravel and you need to handle Automatic Slack Invite, this package makes that job seamless. Enjoy!!!


## Requirement

- [PHP](https://php.net) 5.6+ 
- [Composer](https://getcomposer.org)

## Installation
To install into your project, run the command below in your terminal.

```
composer require goodnesskay/laravel-slack
```

Once the package is done being installed, register the service provider. Open `config/app.php` and add the following to the `providers` key.

 ```
 GoodnessKay\LaravelSlack\LaravelSlackServiceProvider::class
 ```
