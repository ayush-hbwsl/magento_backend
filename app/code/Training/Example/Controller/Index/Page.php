<?php

declare(strict_types= 1);

namespace Training\Example\Controller\Index;

use Magento\Framework\App\ActionInterface;

use \Magento\Framework\View\Result\PageFactory;

class Page implements ActionInterface
{
    protected $pageFactory;
    public function __construct(PageFactory $pageFactory){
        $this->pageFactory = $pageFactory;
    }
    public function execute()
    {
        $page = $this->pageFactory->create();
        $page->getConfig()->getTitle()->set('Ayush');
        return $page;
    }
}
