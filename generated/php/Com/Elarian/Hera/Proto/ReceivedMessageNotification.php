<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app_socket.proto

namespace Com\Elarian\Hera\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>com.elarian.hera.proto.ReceivedMessageNotification</code>
 */
class ReceivedMessageNotification extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string message_id = 1;</code>
     */
    protected $message_id = '';
    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.CustomerNumber customer_number = 2;</code>
     */
    protected $customer_number = null;
    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.MessagingChannelNumber channel_number = 3;</code>
     */
    protected $channel_number = null;
    /**
     * Generated from protobuf field <code>repeated .com.elarian.hera.proto.InboundMessageBody parts = 4;</code>
     */
    private $parts;
    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue session_id = 5;</code>
     */
    protected $session_id = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue in_reply_to = 6;</code>
     */
    protected $in_reply_to = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $message_id
     *     @type \Com\Elarian\Hera\Proto\CustomerNumber $customer_number
     *     @type \Com\Elarian\Hera\Proto\MessagingChannelNumber $channel_number
     *     @type \Com\Elarian\Hera\Proto\InboundMessageBody[]|\Google\Protobuf\Internal\RepeatedField $parts
     *     @type \Google\Protobuf\StringValue $session_id
     *     @type \Google\Protobuf\StringValue $in_reply_to
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\AppSocket::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string message_id = 1;</code>
     * @return string
     */
    public function getMessageId()
    {
        return $this->message_id;
    }

    /**
     * Generated from protobuf field <code>string message_id = 1;</code>
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
     * Generated from protobuf field <code>.com.elarian.hera.proto.CustomerNumber customer_number = 2;</code>
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
     * Generated from protobuf field <code>.com.elarian.hera.proto.CustomerNumber customer_number = 2;</code>
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
     * Generated from protobuf field <code>.com.elarian.hera.proto.MessagingChannelNumber channel_number = 3;</code>
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
     * Generated from protobuf field <code>.com.elarian.hera.proto.MessagingChannelNumber channel_number = 3;</code>
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
     * Generated from protobuf field <code>repeated .com.elarian.hera.proto.InboundMessageBody parts = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getParts()
    {
        return $this->parts;
    }

    /**
     * Generated from protobuf field <code>repeated .com.elarian.hera.proto.InboundMessageBody parts = 4;</code>
     * @param \Com\Elarian\Hera\Proto\InboundMessageBody[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setParts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Com\Elarian\Hera\Proto\InboundMessageBody::class);
        $this->parts = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue session_id = 5;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getSessionId()
    {
        return isset($this->session_id) ? $this->session_id : null;
    }

    public function hasSessionId()
    {
        return isset($this->session_id);
    }

    public function clearSessionId()
    {
        unset($this->session_id);
    }

    /**
     * Returns the unboxed value from <code>getSessionId()</code>

     * Generated from protobuf field <code>.google.protobuf.StringValue session_id = 5;</code>
     * @return string|null
     */
    public function getSessionIdUnwrapped()
    {
        return $this->readWrapperValue("session_id");
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue session_id = 5;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setSessionId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->session_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Generated from protobuf field <code>.google.protobuf.StringValue session_id = 5;</code>
     * @param string|null $var
     * @return $this
     */
    public function setSessionIdUnwrapped($var)
    {
        $this->writeWrapperValue("session_id", $var);
        return $this;}

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue in_reply_to = 6;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getInReplyTo()
    {
        return isset($this->in_reply_to) ? $this->in_reply_to : null;
    }

    public function hasInReplyTo()
    {
        return isset($this->in_reply_to);
    }

    public function clearInReplyTo()
    {
        unset($this->in_reply_to);
    }

    /**
     * Returns the unboxed value from <code>getInReplyTo()</code>

     * Generated from protobuf field <code>.google.protobuf.StringValue in_reply_to = 6;</code>
     * @return string|null
     */
    public function getInReplyToUnwrapped()
    {
        return $this->readWrapperValue("in_reply_to");
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue in_reply_to = 6;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setInReplyTo($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->in_reply_to = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Generated from protobuf field <code>.google.protobuf.StringValue in_reply_to = 6;</code>
     * @param string|null $var
     * @return $this
     */
    public function setInReplyToUnwrapped($var)
    {
        $this->writeWrapperValue("in_reply_to", $var);
        return $this;}

}

