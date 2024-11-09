<?php

use Illuminate\Http\Request;
use Illuminate\Contracts\Http\Kernel;

define('LARAVEL_START', microtime(true));

// Zkontrolujte, zda je aplikace v režimu údržby...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Načtení autoload souboru Composeru...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap aplikace a obsloužení požadavku...
$app = require_once __DIR__.'/../bootstrap/app.php';

// Získejte instanci HTTP kernelu
$kernel = $app->make(Kernel::class);

// Zachytíme aktuální požadavek
$request = Request::capture();

// Obsloužíme požadavek a vrátíme odpověď
$response = $kernel->handle($request);

// Odešleme odpověď zpět klientovi
$response->send();

// Ukončíme požadavek a odpověď (např. logování, úkoly na pozadí)
$kernel->terminate($request, $response);
