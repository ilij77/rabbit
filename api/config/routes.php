<?php

declare(strict_types=1);

use Api\Http\Action;
use Slim\App;

 $app->get('/', Action\HomeAction::class);

