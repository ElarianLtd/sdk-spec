<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app_socket.proto

namespace Com\Elarian\Hera\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>com.elarian.hera.proto.SendMessageCommand</code>
 */
class SendMessageCommand extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.CustomerNumber customer_number = 1;</code>
     */
    protected $customer_number = null;
    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.MessagingChannelNumber channel_number = 2;</code>
     */
    protected $channel_number = null;
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
     *     @type \Com\Elarian\Hera\Proto\CustomerNumber $customer_number
     *     @type \Com\Elarian\Hera\Proto\MessagingChannelNumber $channel_number
     *     @type \Com\Elarian\Hera\Proto\OutboundMessage $message
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

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.MessagingChannelNumber channel_number = 2;</code>
     * @return \Com\Elarian\Hera\Proto\MessagingChannelNumber
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
     * Generated from protobuf field <code>.com.elarian.hera.proto.MessagingChannelNumber channel_number = 2;</code>
     * @param \Com\Elarian\Hera\Proto\MessagingChannelNumber $var
     * @return $this
     */
    public function setChannelNumber($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\MessagingChannelNumber::class);
        $this->channel_number = $var;

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

