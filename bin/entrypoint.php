#!/usr/bin/env php
<?php

require_once __DIR__ . "/../vendor/autoload.php";

use FluxMailApi\Adapter\Server\Server;

Server::new()
    ->init();
