<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: payment_model.proto

namespace Com\Elarian\Hera\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>com.elarian.hera.proto.PaymentChannelCounterParty</code>
 */
class PaymentChannelCounterParty extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentChannel channel = 1;</code>
     */
    protected $channel = 0;
    /**
     * Generated from protobuf field <code>int32 channel_code = 2;</code>
     */
    protected $channel_code = 0;
    /**
     * Generated from protobuf field <code>string source = 3;</code>
     */
    protected $source = '';
    /**
     * Generated from protobuf field <code>string destination = 4;</code>
     */
    protected $destination = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue account = 5;</code>
     */
    protected $account = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $channel
     *     @type int $channel_code
     *     @type string $source
     *     @type string $destination
     *     @type \Google\Protobuf\StringValue $account
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PaymentModel::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentChannel channel = 1;</code>
     * @return int
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentChannel channel = 1;</code>
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
     * Generated from protobuf field <code>int32 channel_code = 2;</code>
     * @return int
     */
    public function getChannelCode()
    {
        return $this->channel_code;
    }

    /**
     * Generated from protobuf field <code>int32 channel_code = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setChannelCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->channel_code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string source = 3;</code>
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Generated from protobuf field <code>string source = 3;</code>
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
     * Generated from protobuf field <code>string destination = 4;</code>
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Generated from protobuf field <code>string destination = 4;</code>
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
     * Generated from protobuf field <code>.google.protobuf.StringValue account = 5;</code>
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

     * Generated from protobuf field <code>.google.protobuf.StringValue account = 5;</code>
     * @return string|null
     */
    public function getAccountUnwrapped()
    {
        return $this->readWrapperValue("account");
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue account = 5;</code>
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

     * Generated from protobuf field <code>.google.protobuf.StringValue account = 5;</code>
     * @param string|null $var
     * @return $this
     */
    public function setAccountUnwrapped($var)
    {
        $this->writeWrapperValue("account", $var);
        return $this;}

}

