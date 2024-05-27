<?php

namespace Tests\Feature;

use Tests\TestCase;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\WebDriverBy;

class SeleniumRegistrationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_register()
    {
        $host = 'http://localhost:4444/wd/hub'; // this is the default
        $options = new ChromeOptions();
        $options->addArguments(array(
        '--disable-infobars', '--ignore-certificate-errors', '--test-type', '--allow-running-insecure-content', '--window-size=1920,1080',
        ));
        $caps = DesiredCapabilities::chrome();
        $caps->setCapability(ChromeOptions::CAPABILITY, $options);

        $driver = RemoteWebDriver::create(
            $host, 
            $caps
        );

        $driver->get("http://127.0.0.1:8000");




        $this->assertTrue(true); // This is a dummy for now
    }
}

// PHP-Selenium cheatsheet: https://gist.github.com/aczietlow/7c4834f79a7afd920d8f