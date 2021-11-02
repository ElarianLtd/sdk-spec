<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: payment_model.proto

namespace Com\Elarian\Hera\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>com.elarian.hera.proto.PaymentCounterParty</code>
 */
class PaymentCounterParty extends \Google\Protobuf\Internal\Message
{
    protected $party;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Com\Elarian\Hera\Proto\PaymentPurseCounterParty $purse
     *     @type \Com\Elarian\Hera\Proto\PaymentWalletCounterParty $wallet
     *     @type \Com\Elarian\Hera\Proto\PaymentCustomerCounterParty $customer
     *     @type \Com\Elarian\Hera\Proto\PaymentChannelCounterParty $channel
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PaymentModel::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentPurseCounterParty purse = 1;</code>
     * @return \Com\Elarian\Hera\Proto\PaymentPurseCounterParty
     */
    public function getPurse()
    {
        return $this->readOneof(1);
    }

    public function hasPurse()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentPurseCounterParty purse = 1;</code>
     * @param \Com\Elarian\Hera\Proto\PaymentPurseCounterParty $var
     * @return $this
     */
    public function setPurse($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\PaymentPurseCounterParty::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentWalletCounterParty wallet = 2;</code>
     * @return \Com\Elarian\Hera\Proto\PaymentWalletCounterParty
     */
    public function getWallet()
    {
        return $this->readOneof(2);
    }

    public function hasWallet()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentWalletCounterParty wallet = 2;</code>
     * @param \Com\Elarian\Hera\Proto\PaymentWalletCounterParty $var
     * @return $this
     */
    public function setWallet($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\PaymentWalletCounterParty::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentCustomerCounterParty customer = 3;</code>
     * @return \Com\Elarian\Hera\Proto\PaymentCustomerCounterParty
     */
    public function getCustomer()
    {
        return $this->readOneof(3);
    }

    public function hasCustomer()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentCustomerCounterParty customer = 3;</code>
     * @param \Com\Elarian\Hera\Proto\PaymentCustomerCounterParty $var
     * @return $this
     */
    public function setCustomer($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\PaymentCustomerCounterParty::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentChannelCounterParty channel = 4;</code>
     * @return \Com\Elarian\Hera\Proto\PaymentChannelCounterParty
     */
    public function getChannel()
    {
        return $this->readOneof(4);
    }

    public function hasChannel()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentChannelCounterParty channel = 4;</code>
     * @param \Com\Elarian\Hera\Proto\PaymentChannelCounterParty $var
     * @return $this
     */
    public function setChannel($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\PaymentChannelCounterParty::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getParty()
    {
        return $this->whichOneof("party");
    }

}

