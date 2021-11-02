<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app_socket.proto

namespace Com\Elarian\Hera\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>com.elarian.hera.proto.ServerToAppCustomerNotification</code>
 */
class ServerToAppCustomerNotification extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>string customer_id = 3;</code>
     */
    protected $customer_id = '';
    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.DataMapValue app_data = 4;</code>
     */
    protected $app_data = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 5;</code>
     */
    protected $created_at = null;
    protected $entry;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $org_id
     *     @type string $app_id
     *     @type string $customer_id
     *     @type \Com\Elarian\Hera\Proto\DataMapValue $app_data
     *     @type \Google\Protobuf\Timestamp $created_at
     *     @type \Com\Elarian\Hera\Proto\ReminderNotification $reminder
     *     @type \Com\Elarian\Hera\Proto\MessagingSessionStartedNotification $messaging_session_started
     *     @type \Com\Elarian\Hera\Proto\MessagingSessionRenewedNotification $messaging_session_renewed
     *     @type \Com\Elarian\Hera\Proto\MessagingSessionEndedNotification $messaging_session_ended
     *     @type \Com\Elarian\Hera\Proto\MessagingConsentUpdateNotification $messaging_consent_update
     *     @type \Com\Elarian\Hera\Proto\ReceivedMessageNotification $received_message
     *     @type \Com\Elarian\Hera\Proto\MessageStatusNotification $message_status
     *     @type \Com\Elarian\Hera\Proto\SentMessageReactionNotification $sent_message_reaction
     *     @type \Com\Elarian\Hera\Proto\ReceivedPaymentNotification $received_payment
     *     @type \Com\Elarian\Hera\Proto\PaymentStatusNotification $payment_status
     *     @type \Com\Elarian\Hera\Proto\WalletPaymentStatusNotification $wallet_payment_status
     *     @type \Com\Elarian\Hera\Proto\CustomerActivityNotification $customer_activity
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\AppSocket::initOnce();
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
     * Generated from protobuf field <code>string customer_id = 3;</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Generated from protobuf field <code>string customer_id = 3;</code>
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
     * Generated from protobuf field <code>.com.elarian.hera.proto.DataMapValue app_data = 4;</code>
     * @return \Com\Elarian\Hera\Proto\DataMapValue
     */
    public function getAppData()
    {
        return isset($this->app_data) ? $this->app_data : null;
    }

    public function hasAppData()
    {
        return isset($this->app_data);
    }

    public function clearAppData()
    {
        unset($this->app_data);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.DataMapValue app_data = 4;</code>
     * @param \Com\Elarian\Hera\Proto\DataMapValue $var
     * @return $this
     */
    public function setAppData($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\DataMapValue::class);
        $this->app_data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 5;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreatedAt()
    {
        return isset($this->created_at) ? $this->created_at : null;
    }

    public function hasCreatedAt()
    {
        return isset($this->created_at);
    }

    public function clearCreatedAt()
    {
        unset($this->created_at);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.ReminderNotification reminder = 6;</code>
     * @return \Com\Elarian\Hera\Proto\ReminderNotification
     */
    public function getReminder()
    {
        return $this->readOneof(6);
    }

    public function hasReminder()
    {
        return $this->hasOneof(6);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.ReminderNotification reminder = 6;</code>
     * @param \Com\Elarian\Hera\Proto\ReminderNotification $var
     * @return $this
     */
    public function setReminder($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\ReminderNotification::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.MessagingSessionStartedNotification messaging_session_started = 7;</code>
     * @return \Com\Elarian\Hera\Proto\MessagingSessionStartedNotification
     */
    public function getMessagingSessionStarted()
    {
        return $this->readOneof(7);
    }

    public function hasMessagingSessionStarted()
    {
        return $this->hasOneof(7);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.MessagingSessionStartedNotification messaging_session_started = 7;</code>
     * @param \Com\Elarian\Hera\Proto\MessagingSessionStartedNotification $var
     * @return $this
     */
    public function setMessagingSessionStarted($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\MessagingSessionStartedNotification::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.MessagingSessionRenewedNotification messaging_session_renewed = 8;</code>
     * @return \Com\Elarian\Hera\Proto\MessagingSessionRenewedNotification
     */
    public function getMessagingSessionRenewed()
    {
        return $this->readOneof(8);
    }

    public function hasMessagingSessionRenewed()
    {
        return $this->hasOneof(8);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.MessagingSessionRenewedNotification messaging_session_renewed = 8;</code>
     * @param \Com\Elarian\Hera\Proto\MessagingSessionRenewedNotification $var
     * @return $this
     */
    public function setMessagingSessionRenewed($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\MessagingSessionRenewedNotification::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.MessagingSessionEndedNotification messaging_session_ended = 9;</code>
     * @return \Com\Elarian\Hera\Proto\MessagingSessionEndedNotification
     */
    public function getMessagingSessionEnded()
    {
        return $this->readOneof(9);
    }

    public function hasMessagingSessionEnded()
    {
        return $this->hasOneof(9);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.MessagingSessionEndedNotification messaging_session_ended = 9;</code>
     * @param \Com\Elarian\Hera\Proto\MessagingSessionEndedNotification $var
     * @return $this
     */
    public function setMessagingSessionEnded($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\MessagingSessionEndedNotification::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.MessagingConsentUpdateNotification messaging_consent_update = 10;</code>
     * @return \Com\Elarian\Hera\Proto\MessagingConsentUpdateNotification
     */
    public function getMessagingConsentUpdate()
    {
        return $this->readOneof(10);
    }

    public function hasMessagingConsentUpdate()
    {
        return $this->hasOneof(10);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.MessagingConsentUpdateNotification messaging_consent_update = 10;</code>
     * @param \Com\Elarian\Hera\Proto\MessagingConsentUpdateNotification $var
     * @return $this
     */
    public function setMessagingConsentUpdate($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\MessagingConsentUpdateNotification::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.ReceivedMessageNotification received_message = 11;</code>
     * @return \Com\Elarian\Hera\Proto\ReceivedMessageNotification
     */
    public function getReceivedMessage()
    {
        return $this->readOneof(11);
    }

    public function hasReceivedMessage()
    {
        return $this->hasOneof(11);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.ReceivedMessageNotification received_message = 11;</code>
     * @param \Com\Elarian\Hera\Proto\ReceivedMessageNotification $var
     * @return $this
     */
    public function setReceivedMessage($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\ReceivedMessageNotification::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.MessageStatusNotification message_status = 12;</code>
     * @return \Com\Elarian\Hera\Proto\MessageStatusNotification
     */
    public function getMessageStatus()
    {
        return $this->readOneof(12);
    }

    public function hasMessageStatus()
    {
        return $this->hasOneof(12);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.MessageStatusNotification message_status = 12;</code>
     * @param \Com\Elarian\Hera\Proto\MessageStatusNotification $var
     * @return $this
     */
    public function setMessageStatus($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\MessageStatusNotification::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.SentMessageReactionNotification sent_message_reaction = 13;</code>
     * @return \Com\Elarian\Hera\Proto\SentMessageReactionNotification
     */
    public function getSentMessageReaction()
    {
        return $this->readOneof(13);
    }

    public function hasSentMessageReaction()
    {
        return $this->hasOneof(13);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.SentMessageReactionNotification sent_message_reaction = 13;</code>
     * @param \Com\Elarian\Hera\Proto\SentMessageReactionNotification $var
     * @return $this
     */
    public function setSentMessageReaction($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\SentMessageReactionNotification::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.ReceivedPaymentNotification received_payment = 14;</code>
     * @return \Com\Elarian\Hera\Proto\ReceivedPaymentNotification
     */
    public function getReceivedPayment()
    {
        return $this->readOneof(14);
    }

    public function hasReceivedPayment()
    {
        return $this->hasOneof(14);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.ReceivedPaymentNotification received_payment = 14;</code>
     * @param \Com\Elarian\Hera\Proto\ReceivedPaymentNotification $var
     * @return $this
     */
    public function setReceivedPayment($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\ReceivedPaymentNotification::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentStatusNotification payment_status = 15;</code>
     * @return \Com\Elarian\Hera\Proto\PaymentStatusNotification
     */
    public function getPaymentStatus()
    {
        return $this->readOneof(15);
    }

    public function hasPaymentStatus()
    {
        return $this->hasOneof(15);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentStatusNotification payment_status = 15;</code>
     * @param \Com\Elarian\Hera\Proto\PaymentStatusNotification $var
     * @return $this
     */
    public function setPaymentStatus($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\PaymentStatusNotification::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.WalletPaymentStatusNotification wallet_payment_status = 16;</code>
     * @return \Com\Elarian\Hera\Proto\WalletPaymentStatusNotification
     */
    public function getWalletPaymentStatus()
    {
        return $this->readOneof(16);
    }

    public function hasWalletPaymentStatus()
    {
        return $this->hasOneof(16);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.WalletPaymentStatusNotification wallet_payment_status = 16;</code>
     * @param \Com\Elarian\Hera\Proto\WalletPaymentStatusNotification $var
     * @return $this
     */
    public function setWalletPaymentStatus($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\WalletPaymentStatusNotification::class);
        $this->writeOneof(16, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.CustomerActivityNotification customer_activity = 17;</code>
     * @return \Com\Elarian\Hera\Proto\CustomerActivityNotification
     */
    public function getCustomerActivity()
    {
        return $this->readOneof(17);
    }

    public function hasCustomerActivity()
    {
        return $this->hasOneof(17);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.CustomerActivityNotification customer_activity = 17;</code>
     * @param \Com\Elarian\Hera\Proto\CustomerActivityNotification $var
     * @return $this
     */
    public function setCustomerActivity($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\CustomerActivityNotification::class);
        $this->writeOneof(17, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getEntry()
    {
        return $this->whichOneof("entry");
    }

}

