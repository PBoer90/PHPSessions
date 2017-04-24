<?php

namespace Bolt\Extension\PB90\PHPSessions;

if (isset($app)) {
    $app['extensions']->register(new Extension($app));
}

