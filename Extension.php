<?php

namespace Bolt\Extension\PB90\PHPSessions;

use Bolt\Application;
use Bolt\BaseExtension;

class Extension extends BaseExtension
{
    public function initialize()
    {
        $this->addCss('assets/extension.css');
        $this->addJavascript('assets/start.js', true);
    }

    public function getName()
    {
        return "PHPSessions";
    }

    protected function registerTwigFunctions()
    {
        return [
            'test'    => 'testFunction'
        ];
    }


    public function testFunction()
    {
        return console.log('test');
    }
}
