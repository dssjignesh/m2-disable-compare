<?php
/**
 * Digit Software Solutions..
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 *
 * @category   Dss
 * @package    Dss_DisableCompare
 * @author     Extension Team
 * @copyright Copyright (c) 2024 Digit Software Solutions. ( https://digitsoftsol.com )
 */

 namespace Dss\DisableCompare\Observer;

 use Dss\DisableCompare\Helper\Data as ModuleHelper;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class LayoutLoadBefore implements ObserverInterface
{
    /**
     * LayoutLoadBefore constructor.
     * @var ModuleHelper
     * @param ModuleHelper $moduleHelper
     */
 
    public function __construct(protected ModuleHelper $moduleHelper)
    {
    }
 
    /**
     * ModuleHelper observer
     *
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
        $disableCompare = $this->moduleHelper->isEnabled();
        if ($disableCompare) {
            $layout = $observer->getData('layout');
            $layout->getUpdate()->addHandle('remove_compare_products');
        }
    }
}
