<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\Payone\Communication\Plugin\Oms\Command;

use Generated\Shared\Transfer\PayoneCaptureTransfer;
use Generated\Shared\Transfer\PayonePaymentTransfer;
use Orm\Zed\Sales\Persistence\SpySalesOrder;
use Spryker\Zed\Oms\Business\Util\ReadOnlyArrayObject;
use Spryker\Zed\Oms\Communication\Plugin\Oms\Command\CommandByOrderInterface;

/**
 * @method \SprykerEco\Zed\Payone\Communication\PayoneCommunicationFactory getFactory()
 * @method \SprykerEco\Zed\Payone\Business\PayoneFacadeInterface getFacade()
 */
class CancelCommandPlugin extends AbstractPayonePlugin implements CommandByOrderInterface
{
    /**
     * @api
     *
     * @param array $orderItems
     * @param \Orm\Zed\Sales\Persistence\SpySalesOrder $orderEntity
     * @param \Spryker\Zed\Oms\Business\Util\ReadOnlyArrayObject $data
     *
     * @return array
     */
    public function run(array $orderItems, SpySalesOrder $orderEntity, ReadOnlyArrayObject $data)
    {
        $captureTransfer = new PayoneCaptureTransfer();

        $paymentTransfer = new PayonePaymentTransfer();
        $paymentTransfer->setFkSalesOrder($orderEntity->getSpyPaymentPayones()->getFirst()->getFkSalesOrder());
        $captureTransfer->setPayment($paymentTransfer);
        $captureTransfer->setAmount(0);
        $captureTransfer->setOrder($this->getOrderTransfer($orderEntity));

        $this->getFacade()->capturePayment($captureTransfer);

        return [];
    }
}
