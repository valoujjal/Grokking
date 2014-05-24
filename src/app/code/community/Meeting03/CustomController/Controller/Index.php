<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Meeting02
 * @package     Meeting02_RedirectToRoot
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Assign a redirect before routing home
 *
 * @category    Meeting02
 * @package     Meeting02_RewriteOrder
 */
class Meeting02_RedirectRoot_Model_Observer
{
    /**
     * Assign a redirect before routing home
     *
     * @param Varien_Event_Observer $observer
     * @return Meeting02_RedirectRoot_Model_Observer
     */
    public function cmsControllerRouterMatchBefore(Varien_Event_Observer $observer)
    {
        $condition = $observer->getEvent()->getCondition();
        if ($condition->getIdentifier() === 'home') {
            $condition->setRedirectUrl(Mage::getBaseUrl());
        }
        return $this;
    }
}