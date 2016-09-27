# laravel-paytpv
Payment module of PAYTPV BankStore IFRAME/FULLSCREEN/XML/JET for Laravel 5.x

#set-up
composer require core45/laravel-paytpv @dev

edit Laravel's conf/app.php and add:
in section:
Application Service Providers...

	Core45\Paytpv\PaytpvServiceProvider::class,

and in Class Aliases

	'Paytpv' => Core45\Paytpv\PaytpvFacade::class,
