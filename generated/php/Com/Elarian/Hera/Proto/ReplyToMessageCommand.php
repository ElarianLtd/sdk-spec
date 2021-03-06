<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app_socket.proto

namespace Com\Elarian\Hera\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>com.elarian.hera.proto.ReplyToMessageCommand</code>
 */
class ReplyToMessageCommand extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string customer_id = 1;</code>
     */
    protected $customer_id = '';
    /**
     * Generated from protobuf field <code>string message_id = 2;</code>
     */
    protected $message_id = '';
    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.OutboundMessage message = 3;</code>
     */
    protected $message = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *     @type string $message_id
     *     @type \Com\Elarian\Hera\Proto\OutboundMessage $message
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
        return $this->customer_id;
    }

    /**
     * Generated from protobuf field <code>string customer_id = 1;</code>
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
     * Generated from protobuf field <code>string message_id = 2;</code>
     * @return string
     */
    public function getMessageId()
    {
        return $this->message_id;
    }

    /**
     * Generated from protobuf field <code>string message_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMessageId($var)
    {
        GPBUtil::checkString($var, True);
        $this->message_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.OutboundMessage message = 3;</code>
     * @return \Com\Elarian\Hera\Proto\OutboundMessage
     */
    public function getMessage()
    {
        return isset($this->message) ? $this->message : null;
    }

    public function hasMessage()
    {
        return isset($this->message);
    }

    public function clearMessage()
    {
        unset($this->message);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.OutboundMessage message = 3;</code>
     * @param \Com\Elarian\Hera\Proto\OutboundMessage $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\OutboundMessage::class);
        $this->message = $var;

        return $this;
    }

}

