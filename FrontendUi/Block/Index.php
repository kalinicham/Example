<?php

namespace Example\FrontendUi\Block;

use Example\ExampleApi\Api\WelcomeMessage;
use Magento\Framework\View\Element\Template;

class Index extends \Magento\Framework\View\Element\Template
{
    protected $message;

    /**
     * Index constructor.
     * @param Template\Context $context
     * @param WelcomeMessage $message
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        WelcomeMessage $message,
        array $data = []
    ) {
        $this->message = $message;
        parent::__construct($context, $data);
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message->execute();
    }
}
