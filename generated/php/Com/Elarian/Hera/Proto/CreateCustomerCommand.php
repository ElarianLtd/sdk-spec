<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app_socket.proto

namespace Com\Elarian\Hera\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>com.elarian.hera.proto.CreateCustomerCommand</code>
 */
class CreateCustomerCommand extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.CustomerNumber customer_number = 1;</code>
     */
    protected $customer_number = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Com\Elarian\Hera\Proto\CustomerNumber $customer_number
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\AppSocket::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.CustomerNumber customer_number = 1;</code>
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
     * Generated from protobuf field <code>.com.elarian.hera.proto.CustomerNumber customer_number = 1;</code>
     * @param \Com\Elarian\Hera\Proto\CustomerNumber $var
     * @return $this
     */
    public function setCustomerNumber($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\CustomerNumber::class);
        $this->customer_number = $var;

        return $this;
    }

}

