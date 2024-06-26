<?php

declare(strict_types= 1);

namespace Training\LayoutExample\Controller\Layout;

use Magento\Framework\App\ActionInterface;

use \Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface
{
    protected $resultFactory;
    public function __construct(PageFactory $resultFactory){
        $this->resultFactory = $resultFactory;
    }
    public function execute()
    {
        $result =  $this->resultFactory->create();
        // $result->getConfig()->getTitle()->set("Ayush");
        // $result->getLayout()->getBlock('page.main.title')->setPageTitle("Developer");
        return $result;
    }
}
