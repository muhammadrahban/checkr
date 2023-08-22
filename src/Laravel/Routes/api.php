<?php

Route::post('checkr/webhook', ['middleware' => 'checkr_webhook', 'uses' => 'Muhammadrahban\\Checkr\\Laravel\\Http\\Controllers\\CheckrController@handleWebhook']);
