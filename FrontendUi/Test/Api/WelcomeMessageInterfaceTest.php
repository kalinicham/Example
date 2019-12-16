<?php

namespace Example\FrontendUi\Test\Api;

use Magento\Framework\Webapi\Rest\Request;
use Magento\TestFramework\TestCase\WebapiAbstract;

class WelcomeMessageInterfaceTest extends WebapiAbstract
{
    public function testExecute()
    {
        $serviceInfo = [
                'rest' => [
                    'resourcePath' => '/V1/helloworld',
                    'httpMethod' => Request::HTTP_METHOD_GET,
                ],
            ];

        $response = $this->_webApiCall($serviceInfo);

        $this->assertTrue($response == "Hello World!");
    }
}
