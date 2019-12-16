<?php

namespace Example\FrontendUi\Test\Integration\Block;

use Example\FrontendUi\Block\Index;
use Magento\TestFramework\Helper\Bootstrap;
use PHPUnit\Framework\TestCase;

class MessageTest extends TestCase
{
    /**
     * @var Index
     */
    private $object;

    protected function setUp()
    {
        parent::setUp();
        $objectManager = Bootstrap::getObjectManager();
        $this->object = $objectManager->get(Index::class);
    }

    public function testGetMessage()
    {
        $expectedMessage = "Hello World!";
        $actualMessage = $this->object->getMessage();

        $this->assertStringMatchesFormat('Hello %a', $actualMessage, 'Does not match the format string');
        $this->assertEquals($expectedMessage, $actualMessage);
    }
}
