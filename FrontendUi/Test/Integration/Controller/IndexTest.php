<?php

namespace Example\FrontendUi\Test\Controller;

use Magento\TestFramework\Request;
use Magento\TestFramework\TestCase\AbstractController;

class IndexTest extends AbstractController
{
    public function testIndexAction()
    {
        $this->getRequest()->setMethod(Request::METHOD_GET);
        $this->dispatch('helloworld/index/index');
        $this->assertSame(200, $this->getResponse()->getHttpResponseCode());
//        $this->assertRedirect();
    }
}
