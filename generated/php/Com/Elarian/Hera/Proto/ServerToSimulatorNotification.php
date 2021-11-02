<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: simulator_socket.proto

namespace Com\Elarian\Hera\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>com.elarian.hera.proto.ServerToSimulatorNotification</code>
 */
class ServerToSimulatorNotification extends \Google\Protobuf\Internal\Message
{
    protected $entry;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Com\Elarian\Hera\Proto\SendMessageSimulatorNotification $send_message
     *     @type \Com\Elarian\Hera\Proto\MakeVoiceCallSimulatorNotification $make_voice_call
     *     @type \Com\Elarian\Hera\Proto\SendCustomerPaymentSimulatorNotification $send_customer_payment
     *     @type \Com\Elarian\Hera\Proto\SendChannelPaymentSimulatorNotification $send_channel_payment
     *     @type \Com\Elarian\Hera\Proto\CheckoutPaymentSimulatorNotification $checkout_payment
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SimulatorSocket::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.SendMessageSimulatorNotification send_message = 1;</code>
     * @return \Com\Elarian\Hera\Proto\SendMessageSimulatorNotification
     */
    public function getSendMessage()
    {
        return $this->readOneof(1);
    }

    public function hasSendMessage()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.SendMessageSimulatorNotification send_message = 1;</code>
     * @param \Com\Elarian\Hera\Proto\SendMessageSimulatorNotification $var
     * @return $this
     */
    public function setSendMessage($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\SendMessageSimulatorNotification::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.MakeVoiceCallSimulatorNotification make_voice_call = 2;</code>
     * @return \Com\Elarian\Hera\Proto\MakeVoiceCallSimulatorNotification
     */
    public function getMakeVoiceCall()
    {
        return $this->readOneof(2);
    }

    public function hasMakeVoiceCall()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.MakeVoiceCallSimulatorNotification make_voice_call = 2;</code>
     * @param \Com\Elarian\Hera\Proto\MakeVoiceCallSimulatorNotification $var
     * @return $this
     */
    public function setMakeVoiceCall($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\MakeVoiceCallSimulatorNotification::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.SendCustomerPaymentSimulatorNotification send_customer_payment = 3;</code>
     * @return \Com\Elarian\Hera\Proto\SendCustomerPaymentSimulatorNotification
     */
    public function getSendCustomerPayment()
    {
        return $this->readOneof(3);
    }

    public function hasSendCustomerPayment()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.SendCustomerPaymentSimulatorNotification send_customer_payment = 3;</code>
     * @param \Com\Elarian\Hera\Proto\SendCustomerPaymentSimulatorNotification $var
     * @return $this
     */
    public function setSendCustomerPayment($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\SendCustomerPaymentSimulatorNotification::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.SendChannelPaymentSimulatorNotification send_channel_payment = 4;</code>
     * @return \Com\Elarian\Hera\Proto\SendChannelPaymentSimulatorNotification
     */
    public function getSendChannelPayment()
    {
        return $this->readOneof(4);
    }

    public function hasSendChannelPayment()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.SendChannelPaymentSimulatorNotification send_channel_payment = 4;</code>
     * @param \Com\Elarian\Hera\Proto\SendChannelPaymentSimulatorNotification $var
     * @return $this
     */
    public function setSendChannelPayment($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\SendChannelPaymentSimulatorNotification::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.CheckoutPaymentSimulatorNotification checkout_payment = 5;</code>
     * @return \Com\Elarian\Hera\Proto\CheckoutPaymentSimulatorNotification
     */
    public function getCheckoutPayment()
    {
        return $this->readOneof(5);
    }

    public function hasCheckoutPayment()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.CheckoutPaymentSimulatorNotification checkout_payment = 5;</code>
     * @param \Com\Elarian\Hera\Proto\CheckoutPaymentSimulatorNotification $var
     * @return $this
     */
    public function setCheckoutPayment($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\CheckoutPaymentSimulatorNotification::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getEntry()
    {
        return $this->whichOneof("entry");
    }

}

