<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app_socket.proto

namespace Com\Elarian\Hera\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>com.elarian.hera.proto.DeleteCustomerAppDataCommand</code>
 */
class DeleteCustomerAppDataCommand extends \Google\Protobuf\Internal\Message
{
    protected $customer;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *     @type \Com\Elarian\Hera\Proto\CustomerNumber $customer_number
     *     @type \Com\Elarian\Hera\Proto\IndexMapping $secondary_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\AppSocket::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string customer_id = 1;</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->readOneof(1);
    }

    public function hasCustomerId()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>string customer_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.CustomerNumber customer_number = 2;</code>
     * @return \Com\Elarian\Hera\Proto\CustomerNumber
     */
    public function getCustomerNumber()
    {
        return $this->readOneof(2);
    }

    public function hasCustomerNumber()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.CustomerNumber customer_number = 2;</code>
     * @param \Com\Elarian\Hera\Proto\CustomerNumber $var
     * @return $this
     */
    public function setCustomerNumber($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\CustomerNumber::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.IndexMapping secondary_id = 3;</code>
     * @return \Com\Elarian\Hera\Proto\IndexMapping
     */
    public function getSecondaryId()
    {
        return $this->readOneof(3);
    }

    public function hasSecondaryId()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.IndexMapping secondary_id = 3;</code>
     * @param \Com\Elarian\Hera\Proto\IndexMapping $var
     * @return $this
     */
    public function setSecondaryId($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\IndexMapping::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomer()
    {
        return $this->whichOneof("customer");
    }

}

