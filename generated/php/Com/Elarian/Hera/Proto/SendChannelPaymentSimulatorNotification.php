<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: simulator_socket.proto

namespace Com\Elarian\Hera\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>com.elarian.hera.proto.SendChannelPaymentSimulatorNotification</code>
 */
class SendChannelPaymentSimulatorNotification extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string org_id = 1;</code>
     */
    protected $org_id = '';
    /**
     * Generated from protobuf field <code>string app_id = 2;</code>
     */
    protected $app_id = '';
    /**
     * Generated from protobuf field <code>string transaction_id = 5;</code>
     */
    protected $transaction_id = '';
    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentChannel channel = 6;</code>
     */
    protected $channel = 0;
    /**
     * Generated from protobuf field <code>string source = 7;</code>
     */
    protected $source = '';
    /**
     * Generated from protobuf field <code>string destination = 8;</code>
     */
    protected $destination = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue account = 9;</code>
     */
    protected $account = null;
    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.Cash value = 10;</code>
     */
    protected $value = null;
    protected $debit_party;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $org_id
     *     @type string $app_id
     *     @type \Com\Elarian\Hera\Proto\PaymentWalletCounterParty $wallet
     *     @type \Com\Elarian\Hera\Proto\PaymentPurseCounterParty $purse
     *     @type string $transaction_id
     *     @type int $channel
     *     @type string $source
     *     @type string $destination
     *     @type \Google\Protobuf\StringValue $account
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
     * Generated from protobuf field <code>string app_id = 2;</code>
     * @return string
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * Generated from protobuf field <code>string app_id = 2;</code>
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
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentWalletCounterParty wallet = 3;</code>
     * @return \Com\Elarian\Hera\Proto\PaymentWalletCounterParty
     */
    public function getWallet()
    {
        return $this->readOneof(3);
    }

    public function hasWallet()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentWalletCounterParty wallet = 3;</code>
     * @param \Com\Elarian\Hera\Proto\PaymentWalletCounterParty $var
     * @return $this
     */
    public function setWallet($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\PaymentWalletCounterParty::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentPurseCounterParty purse = 4;</code>
     * @return \Com\Elarian\Hera\Proto\PaymentPurseCounterParty
     */
    public function getPurse()
    {
        return $this->readOneof(4);
    }

    public function hasPurse()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentPurseCounterParty purse = 4;</code>
     * @param \Com\Elarian\Hera\Proto\PaymentPurseCounterParty $var
     * @return $this
     */
    public function setPurse($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\PaymentPurseCounterParty::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string transaction_id = 5;</code>
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transaction_id;
    }

    /**
     * Generated from protobuf field <code>string transaction_id = 5;</code>
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
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentChannel channel = 6;</code>
     * @return int
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentChannel channel = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setChannel($var)
    {
        GPBUtil::checkEnum($var, \Com\Elarian\Hera\Proto\PaymentChannel::class);
        $this->channel = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string source = 7;</code>
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Generated from protobuf field <code>string source = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string destination = 8;</code>
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Generated from protobuf field <code>string destination = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setDestination($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue account = 9;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAccount()
    {
        return isset($this->account) ? $this->account : null;
    }

    public function hasAccount()
    {
        return isset($this->account);
    }

    public function clearAccount()
    {
        unset($this->account);
    }

    /**
     * Returns the unboxed value from <code>getAccount()</code>

     * Generated from protobuf field <code>.google.protobuf.StringValue account = 9;</code>
     * @return string|null
     */
    public function getAccountUnwrapped()
    {
        return $this->readWrapperValue("account");
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue account = 9;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAccount($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->account = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Generated from protobuf field <code>.google.protobuf.StringValue account = 9;</code>
     * @param string|null $var
     * @return $this
     */
    public function setAccountUnwrapped($var)
    {
        $this->writeWrapperValue("account", $var);
        return $this;}

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.Cash value = 10;</code>
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
     * Generated from protobuf field <code>.com.elarian.hera.proto.Cash value = 10;</code>
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
    public function getDebitParty()
    {
        return $this->whichOneof("debit_party");
    }

}

