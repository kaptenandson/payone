<?php

namespace Pyz\Zed\Offer;

use Spryker\Zed\Customer\Communication\Plugin\OfferCustomerHydratorPlugin;

class OfferDependencyProvider extends \Spryker\Zed\Offer\OfferDependencyProvider
{
    /**
     * @return array
     */
    protected function getOfferHydratorPlugins(): array
    {
        return [
            new OfferCustomerHydratorPlugin()
        ];
    }
}