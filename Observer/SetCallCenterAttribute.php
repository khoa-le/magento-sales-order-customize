<?php


namespace Khoaln\Sales\Observer;


class SetCallCenterAttribute implements \Magento\Framework\Event\ObserverInterface
{
    /**
     * @param \Magento\Framework\Event\Observer $observer
     * @return $this
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        /** @var \Magento\Sales\Model\Order $order */
        $order = $observer->getEvent()->getOrder();
        //Try to set initial to demo data
        $order->setCallCenterId(1);
        return $this;
    }
}
