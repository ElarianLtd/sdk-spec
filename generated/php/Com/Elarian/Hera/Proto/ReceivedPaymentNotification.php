<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app_socket.proto

namespace Com\Elarian\Hera\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>com.elarian.hera.proto.ReceivedPaymentNotification</code>
 */
class ReceivedPaymentNotification extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string purse_id = 1;</code>
     */
    protected $purse_id = '';
    /**
     * Generated from protobuf field <code>string transaction_id = 2;</code>
     */
    protected $transaction_id = '';
    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.CustomerNumber customer_number = 3;</code>
     */
    protected $customer_number = null;
    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentChannelNumber channel_number = 4;</code>
     */
    protected $channel_number = null;
    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.Cash value = 5;</code>
     */
    protected $value = null;
    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentStatus status = 6;</code>
     */
    protected $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $purse_id
     *     @type string $transaction_id
     *     @type \Com\Elarian\Hera\Proto\CustomerNumber $customer_number
     *     @type \Com\Elarian\Hera\Proto\PaymentChannelNumber $channel_number
     *     @type \Com\Elarian\Hera\Proto\Cash $value
     *     @type int $status
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\AppSocket::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string purse_id = 1;</code>
     * @return string
     */
    public function getPurseId()
    {
        return $this->purse_id;
    }

    /**
     * Generated from protobuf field <code>string purse_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPurseId($var)
    {
        GPBUtil::checkString($var, True);
        $this->purse_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string transaction_id = 2;</code>
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transaction_id;
    }

    /**
     * Generated from protobuf field <code>string transaction_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTransactionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->transaction_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.CustomerNumber customer_number = 3;</code>
     * @return \Com\Elarian\Hera\Proto\CustomerNumber
     */
    public function getCustomerNumber()
    {
        return isset($this->customer_number) ? $this->customer_number : null;
    }

    public function hasCustomerNumber()
    {
        return isset($this->customer_number);
    }

    public function clearCustomerNumber()
    {
        unset($this->customer_number);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.CustomerNumber customer_number = 3;</code>
     * @param \Com\Elarian\Hera\Proto\CustomerNumber $var
     * @return $this
     */
    public function setCustomerNumber($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\CustomerNumber::class);
        $this->customer_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentChannelNumber channel_number = 4;</code>
     * @return \Com\Elarian\Hera\Proto\PaymentChannelNumber
     */
    public function getChannelNumber()
    {
        return isset($this->channel_number) ? $this->channel_number : null;
    }

    public function hasChannelNumber()
    {
        return isset($this->channel_number);
    }

    public function clearChannelNumber()
    {
        unset($this->channel_number);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentChannelNumber channel_number = 4;</code>
     * @param \Com\Elarian\Hera\Proto\PaymentChannelNumber $var
     * @return $this
     */
    public function setChannelNumber($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\PaymentChannelNumber::class);
        $this->channel_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.Cash value = 5;</code>
     * @return \Com\Elarian\Hera\Proto\Cash
     */
    public function getValue()
    {
        return isset($this->value) ? $this->value : null;
    }

    public function hasValue()
    {
        return isset($this->value);
    }

    public function clearValue()
    {
        unset($this->value);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.Cash value = 5;</code>
     * @param \Com\Elarian\Hera\Proto\Cash $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\Cash::class);
        $this->value = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentStatus status = 6;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentStatus status = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Com\Elarian\Hera\Proto\PaymentStatus::class);
        $this->status = $var;

        return $this;
    }

}

