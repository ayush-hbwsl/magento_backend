<?php

declare(strict_types= 1);

namespace Training\LayoutExample\Block\Layout;


use \Magento\Framework\View\Element\Template;

class Index extends Template
{
    protected function _prepareLayout()
    {
        parent::_prepareLayout();

        $pageMainTitle = $this->getLayout()->getBlock('page.main.title');
        if( $pageMainTitle ) {
            $pageMainTitle->setPageTitle('Developer');
        }
    }
    public function getSubTitle()
    {
        return 'Learn Magento Development';
    }

    public function getNodeHtml(){
        return $this->getLayout()->createBlock(Note::class)->toHtml();
    }

}

