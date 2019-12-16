<?php
namespace Example\ExampleImplement\Model;

use Example\ExampleApi\Api\WelcomeMessage;

class HelloWorld implements WelcomeMessage
{
    const MESSAGE = 'Hello World!';
    /**
     * Returns greeting message to user
     * @return string Greeting message
     */
    public function execute()
    {
        return self::MESSAGE;
    }
}
