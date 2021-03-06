<?php

namespace Bolt\Extension\PB90\PHPSessions\Tests;

use Bolt\Tests\BoltUnitTest;
use Bolt\Extension\PB90\PHPSessions\Extension;

/**
 * Ensure that the ExtensionName extension loads correctly.
 *
 */
class ExtensionTest extends BoltUnitTest
{
    public function testExtensionRegister()
    {
        $app = $this->getApp();
        $extension = new Extension($app);
        $app['extensions']->register( $extension );
        $name = $extension->getName();
        $this->assertSame($name, 'PHPSessions');
        $this->assertSame($extension, $app["extensions.$name"]);
    }
}
