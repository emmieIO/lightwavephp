<?php

require_once __DIR__ . '/../bootstrap/app.php';
require_once __DIR__ . '/../routes/web.php';

app('router')->dispatch();
