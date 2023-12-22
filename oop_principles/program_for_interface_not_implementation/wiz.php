<?php

// compile time

class Order
{
    public $number;
}

class Shipment
{
    public $sendable;

    // now Shipment class is not aware of notification type (thanks to the Sendable interface)
    // if we want to send both tg and SMS notification, just add second parameters to construct below and add also runtime:
    // $sendable2 = new SendSMS();
    // $shipment = new Shipment($sendable, $sendable2);
    public function __construct(Sendable $sendable)
    {
        $this->sendable = $sendable;
    }

    public function ship(Order $order)
    {
        return 'N' . $order->number . ' is shipped!' . $this->sendable->send();
    }
}

interface Sendable
{

    public function send();
}

class SendSMS implements Sendable
{

    public function send()
    {
        return 'sms is sent';
    }
}

class SendTelegram implements Sendable
{

    public function send()
    {
        return 'notification is sent via tg';
    }
}


// run time

$order = new Order();
$order->number = 2;

//now, it's enough to change $sendable type to send notification.
//e.g: $sendable = new SendSMS();
$sendable = new SendTelegram();
$shipment = new Shipment($sendable);
echo $shipment->ship($order);
