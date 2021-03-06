<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: simulator_socket.proto

namespace Com\Elarian\Hera\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>com.elarian.hera.proto.CheckoutPaymentSimulatorNotification</code>
 */
class CheckoutPaymentSimulatorNotification extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string org_id = 1;</code>
     */
    protected $org_id = '';
    /**
     * Generated from protobuf field <code>string customer_id = 2;</code>
     */
    protected $customer_id = '';
    /**
     * Generated from protobuf field <code>string app_id = 3;</code>
     */
    protected $app_id = '';
    /**
     * Generated from protobuf field <code>string transaction_id = 6;</code>
     */
    protected $transaction_id = '';
    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.CustomerNumber customer_number = 7;</code>
     */
    protected $customer_number = null;
    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentChannelNumber channel_number = 8;</code>
     */
    protected $channel_number = null;
    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.Cash value = 9;</code>
     */
    protected $value = null;
    protected $credit_party;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $org_id
     *     @type string $customer_id
     *     @type string $app_id
     *     @type \Com\Elarian\Hera\Proto\PaymentWalletCounterParty $wallet
     *     @type \Com\Elarian\Hera\Proto\PaymentPurseCounterParty $purse
     *     @type string $transaction_id
     *     @type \Com\Elarian\Hera\Proto\CustomerNumber $customer_number
     *     @type \Com\Elarian\Hera\Proto\PaymentChannelNumber $channel_number
     *     @type \Com\Elarian\Hera\Proto\Cash $value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SimulatorSocket::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string org_id = 1;</code>
     * @return string
     */
    public function getOrgId()
    {
        return $this->org_id;
    }

    /**
     * Generated from protobuf field <code>string org_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setOrgId($var)
    {
        GPBUtil::checkString($var, True);
        $this->org_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string customer_id = 2;</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Generated from protobuf field <code>string customer_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string app_id = 3;</code>
     * @return string
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * Generated from protobuf field <code>string app_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentWalletCounterParty wallet = 4;</code>
     * @return \Com\Elarian\Hera\Proto\PaymentWalletCounterParty
     */
    public function getWallet()
    {
        return $this->readOneof(4);
    }

    public function hasWallet()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentWalletCounterParty wallet = 4;</code>
     * @param \Com\Elarian\Hera\Proto\PaymentWalletCounterParty $var
     * @return $this
     */
    public function setWallet($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\PaymentWalletCounterParty::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentPurseCounterParty purse = 5;</code>
     * @return \Com\Elarian\Hera\Proto\PaymentPurseCounterParty
     */
    public function getPurse()
    {
        return $this->readOneof(5);
    }

    public function hasPurse()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentPurseCounterParty purse = 5;</code>
     * @param \Com\Elarian\Hera\Proto\PaymentPurseCounterParty $var
     * @return $this
     */
    public function setPurse($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\PaymentPurseCounterParty::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string transaction_id = 6;</code>
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transaction_id;
    }

    /**
     * Generated from protobuf field <code>string transaction_id = 6;</code>
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
     * Generated from protobuf field <code>.com.elarian.hera.proto.CustomerNumber customer_number = 7;</code>
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
     * Generated from protobuf field <code>.com.elarian.hera.proto.CustomerNumber customer_number = 7;</code>
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
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentChannelNumber channel_number = 8;</code>
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
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentChannelNumber channel_number = 8;</code>
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
     * Generated from protobuf field <code>.com.elarian.hera.proto.Cash value = 9;</code>
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
     * Generated from protobuf field <code>.com.elarian.hera.proto.Cash value = 9;</code>
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
     * @return string
     */
    public function getCreditParty()
    {
        return $this->whichOneof("credit_party");
    }

}

