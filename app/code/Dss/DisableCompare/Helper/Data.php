<?php

declare(strict_types=1);

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
namespace Dss\DisableCompare\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{

    /**
     * Data ScopeInterface
     */
    public function isEnabled()
    {
        return $this->scopeConfig->isSetFlag(
            'disable_compare/general/enable',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}
