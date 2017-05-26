
## LARAVEL SLACK PACKAGE

[![Latest Stable Version](https://poser.pugx.org/goodnesskay/laravel-slack/v/stable)](https://packagist.org/packages/goodnesskay/laravel-slack)
[![License](https://poser.pugx.org/goodnesskay/laravel-slack/license)](https://packagist.org/packages/goodnesskay/laravel-slack)
[![Code Coverage](https://scrutinizer-ci.com/g/goodnesskay/Laravel-Slack/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/goodnesskay/Laravel-Slack/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/goodnesskay/Laravel-Slack/badges/build.png?b=master)](https://scrutinizer-ci.com/g/goodnesskay/Laravel-Slack/build-status/master)

> This package was built for easy integration of automatic Slack invite into your Laravel Project instead of writing codes from scratch or with another programming language.
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
 
 After that, register the Facade in the same `config/app.php` file:
 
 ```
 'aliases' => [
     ...
        'LaravelSlack' => GoodnessKay\LaravelSlack\Facade\LaravelSlack::class,
     ...
 ]
 ```
 
 ## Configure
 Publish the config file `LaravelSlack.php` to config folder,
  the **Views** folder of the package named **Slack** to the `resources/views` folder and `LaravelSlackController.php` to `App\Http\Controller`  folder
 
```
php artisan vendor:publish --provider="GoodnessKay\LaravelSlack\LaravelSlackServiceProvider" 

```

##  How it Works
After following all the information stated above, what next to do are:

**A)** Copy the code below to your `.env` file and make changes to the values.

```
SLACK_TEAM_NAME="Codebag Team"
TEAM_DESCRIPTION="Brief Description of your team. This will be seen publicly"
SLACK_TEAM_URL="https://codebag-team-test.slack.com/"
SLACK_API_TOKEN="apap-2526258373-71328384096-187220289412-01c2c6637bb0d474f39f24e0a79d6e072"
SLACK_TEAM_EMAIL="gtkbrain@gmail.com"

```

**Note:** Make sure you include the quotation mark.

**B)** Copy the code below into your route file  `route/web.php`

```
Route::get('/slack',[
    'uses'=>'LaravelSlackController@slackPage',
    'as'=>'slack'
]);

Route::post('/slack',[
    'uses'=>'LaravelSlackController@sendSlackInvite',
    'as'=>'slack'
]);

```

**C)** Use `php artisan serve` and check your slack invite page on `http://locahost:8000/slack`
 
## Contribute

You can `fork` this package, `contribute` and `submit a pull request`. I will really love it.

##  You want to appreciate me?

You can appreciate me by starring this repository and follow me on [Github](https://github.com/goodnesskay) and [twitter](https://twitter.com/goodnesskayode)!

I love you too.

**Goodness Kayode | Pusher of Codes**


## License

MIT License (MIT).

