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

        $driver->get("http://127.0.0.1:8000/register");

        $nameInput = $driver->findElement(WebDriverBy::id("name")); 
        if($nameInput) 
        {
            $nameInput->sendKeys("TestUser");
        }

        $emailInput = $driver->findElement(WebDriverBy::id("email")); 
        if($emailInput) 
        {
            $emailInput->sendKeys("user@test.com");
        }

        $passInput = $driver->findElement(WebDriverBy::id("password")); 
        if($passInput) 
        {
            $passInput->sendKeys("password");
        }

        $pass2Input = $driver->findElement(WebDriverBy::id("password_confirmation")); 
        if($pass2Input) 
        {
            $pass2Input->sendKeys("password");
        }

        $submitButton = $driver->findElement(WebDriverBy::tagName("button")); 
        if($submitButton) 
        {
            $submitButton->submit();
        }

        sleep(3);

        $title = $driver->findElement(WebDriverBy::tagName("h2"))->getText(); 

        $driver->quit();

        $this->assertEquals('Dashboard', $title);
    }
}

// PHP-Selenium cheatsheet: https://gist.github.com/aczietlow/7c4834f79a7afd920d8f