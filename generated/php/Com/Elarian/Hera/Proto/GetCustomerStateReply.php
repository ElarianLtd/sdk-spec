<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app_socket.proto

namespace Com\Elarian\Hera\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>com.elarian.hera.proto.GetCustomerStateReply</code>
 */
class GetCustomerStateReply extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>.com.elarian.hera.proto.CustomerStateReplyData data = 3;</code>
     */
    protected $data = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $status
     *     @type string $description
     *     @type \Com\Elarian\Hera\Proto\CustomerStateReplyData $data
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
     * Generated from protobuf field <code>.com.elarian.hera.proto.CustomerStateReplyData data = 3;</code>
     * @return \Com\Elarian\Hera\Proto\CustomerStateReplyData
     */
    public function getData()
    {
        return isset($this->data) ? $this->data : null;
    }

    public function hasData()
    {
        return isset($this->data);
    }

    public function clearData()
    {
        unset($this->data);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.CustomerStateReplyData data = 3;</code>
     * @param \Com\Elarian\Hera\Proto\CustomerStateReplyData $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\CustomerStateReplyData::class);
        $this->data = $var;

        return $this;
    }

}

