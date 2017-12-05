# laravel-maintenance
Use Laravel with the plugin maintenance

1. [Features](#features)
2. [Installation](#installation)
3. [Usage](#usage)

----

<a id="features"></a>
## Features
- Add Maintenance Gestion in your application

<a id="installation"></a>
## Installation

In your project base directory run

	composer require "bluemountainteam/maintenance":"master@dev"
	
To bring up the config file run, if you want to customize

Edit `config/app.php` and add the service provider within the `providers` array.

	'providers' => array(
		...
		BlueMountainTeam\LaravelGestionmaintenance\GestionmaintenanceServiceProvider::class,
		
Then

	php artisan vendor:publish
	php artisan migrate


<a id="usage"></a>
## Usage
Middleware

Add `\BlueMountainTeam\LaravelGestionmaintenance\Middleware\MaintenanceMiddleware::class` in $middlewareGroups -> 'web' in app/kernel.php

View for login : @include('vendor.maintenances._maintenance_login')

View for header : @include('vendor.maintenances._maintenance_header')

Views extends by default this layout blade template : @extends('layouts.app')

The views have javascript libraries dependencies, you have to expose these functions from one of your helpers file :

       getDatePicker();
       getValidate();
       getClockPicker();




