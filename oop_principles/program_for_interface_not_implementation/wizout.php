<?php

class Order{
    public $number;
}

class Shipment{
    public $sendSMS;
    public function __construct(SendSMS $sendSMS)
    {
        $this->sendSMS = $sendSMS;
    }

    public function ship(Order $order)
    {
        return 'N'.$order->number.' is shipped!' . $this->sendSMS->send();
    }


}

class SendSMS{

    public function send()
    {
        return 'sms is sent';
    }
}

$order = new Order();
$order->number = 2;

$sms = new SendSMS();
$shipment = new Shipment($sms);
echo $shipment->ship($order);