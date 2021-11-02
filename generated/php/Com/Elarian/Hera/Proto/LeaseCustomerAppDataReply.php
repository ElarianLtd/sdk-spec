<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app_socket.proto

namespace Com\Elarian\Hera\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>com.elarian.hera.proto.LeaseCustomerAppDataReply</code>
 */
class LeaseCustomerAppDataReply extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool status = 1;</code>
     */
    protected $status = false;
    /**
     * Generated from protobuf field <code>string description = 2;</code>
     */
    protected $description = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue customer_id = 3;</code>
     */
    protected $customer_id = null;
    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.DataMapValue value = 4;</code>
     */
    protected $value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $status
     *     @type string $description
     *     @type \Google\Protobuf\StringValue $customer_id
     *     @type \Com\Elarian\Hera\Proto\DataMapValue $value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\AppSocket::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool status = 1;</code>
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>bool status = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkBool($var);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue customer_id = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCustomerId()
    {
        return isset($this->customer_id) ? $this->customer_id : null;
    }

    public function hasCustomerId()
    {
        return isset($this->customer_id);
    }

    public function clearCustomerId()
    {
        unset($this->customer_id);
    }

    /**
     * Returns the unboxed value from <code>getCustomerId()</code>

     * Generated from protobuf field <code>.google.protobuf.StringValue customer_id = 3;</code>
     * @return string|null
     */
    public function getCustomerIdUnwrapped()
    {
        return $this->readWrapperValue("customer_id");
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue customer_id = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Generated from protobuf field <code>.google.protobuf.StringValue customer_id = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCustomerIdUnwrapped($var)
    {
        $this->writeWrapperValue("customer_id", $var);
        return $this;}

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.DataMapValue value = 4;</code>
     * @return \Com\Elarian\Hera\Proto\DataMapValue
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
     * Generated from protobuf field <code>.com.elarian.hera.proto.DataMapValue value = 4;</code>
     * @param \Com\Elarian\Hera\Proto\DataMapValue $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\DataMapValue::class);
        $this->value = $var;

        return $this;
    }

}

