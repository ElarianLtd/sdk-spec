<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app_socket.proto

namespace Com\Elarian\Hera\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>com.elarian.hera.proto.AppToServerCommand</code>
 */
class AppToServerCommand extends \Google\Protobuf\Internal\Message
{
    protected $entry;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Com\Elarian\Hera\Proto\GenerateAuthTokenCommand $generate_auth_token
     *     @type \Com\Elarian\Hera\Proto\CreateCustomerCommand $create_customer
     *     @type \Com\Elarian\Hera\Proto\GetCustomerStateCommand $get_customer_state
     *     @type \Com\Elarian\Hera\Proto\AdoptCustomerStateCommand $adopt_customer_state
     *     @type \Com\Elarian\Hera\Proto\AddCustomerReminderCommand $add_customer_reminder
     *     @type \Com\Elarian\Hera\Proto\AddCustomerReminderTagCommand $add_customer_reminder_tag
     *     @type \Com\Elarian\Hera\Proto\CancelCustomerReminderCommand $cancel_customer_reminder
     *     @type \Com\Elarian\Hera\Proto\CancelCustomerReminderTagCommand $cancel_customer_reminder_tag
     *     @type \Com\Elarian\Hera\Proto\UpdateCustomerTagCommand $update_customer_tag
     *     @type \Com\Elarian\Hera\Proto\DeleteCustomerTagCommand $delete_customer_tag
     *     @type \Com\Elarian\Hera\Proto\UpdateCustomerSecondaryIdCommand $update_customer_secondary_id
     *     @type \Com\Elarian\Hera\Proto\DeleteCustomerSecondaryIdCommand $delete_customer_secondary_id
     *     @type \Com\Elarian\Hera\Proto\UpdateCustomerMetadataCommand $update_customer_metadata
     *     @type \Com\Elarian\Hera\Proto\DeleteCustomerMetadataCommand $delete_customer_metadata
     *     @type \Com\Elarian\Hera\Proto\LeaseCustomerAppDataCommand $lease_customer_app_data
     *     @type \Com\Elarian\Hera\Proto\UpdateCustomerAppDataCommand $update_customer_app_data
     *     @type \Com\Elarian\Hera\Proto\DeleteCustomerAppDataCommand $delete_customer_app_data
     *     @type \Com\Elarian\Hera\Proto\SendMessageCommand $send_message
     *     @type \Com\Elarian\Hera\Proto\SendMessageTagCommand $send_message_tag
     *     @type \Com\Elarian\Hera\Proto\ReplyToMessageCommand $reply_to_message
     *     @type \Com\Elarian\Hera\Proto\UpdateMessagingConsentCommand $update_messaging_consent
     *     @type \Com\Elarian\Hera\Proto\InitiatePaymentCommand $initiate_payment
     *     @type \Com\Elarian\Hera\Proto\CustomerActivityCommand $customer_activity
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\AppSocket::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.GenerateAuthTokenCommand generate_auth_token = 1;</code>
     * @return \Com\Elarian\Hera\Proto\GenerateAuthTokenCommand
     */
    public function getGenerateAuthToken()
    {
        return $this->readOneof(1);
    }

    public function hasGenerateAuthToken()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.GenerateAuthTokenCommand generate_auth_token = 1;</code>
     * @param \Com\Elarian\Hera\Proto\GenerateAuthTokenCommand $var
     * @return $this
     */
    public function setGenerateAuthToken($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\GenerateAuthTokenCommand::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.CreateCustomerCommand create_customer = 2;</code>
     * @return \Com\Elarian\Hera\Proto\CreateCustomerCommand
     */
    public function getCreateCustomer()
    {
        return $this->readOneof(2);
    }

    public function hasCreateCustomer()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.CreateCustomerCommand create_customer = 2;</code>
     * @param \Com\Elarian\Hera\Proto\CreateCustomerCommand $var
     * @return $this
     */
    public function setCreateCustomer($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\CreateCustomerCommand::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.GetCustomerStateCommand get_customer_state = 3;</code>
     * @return \Com\Elarian\Hera\Proto\GetCustomerStateCommand
     */
    public function getGetCustomerState()
    {
        return $this->readOneof(3);
    }

    public function hasGetCustomerState()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.GetCustomerStateCommand get_customer_state = 3;</code>
     * @param \Com\Elarian\Hera\Proto\GetCustomerStateCommand $var
     * @return $this
     */
    public function setGetCustomerState($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\GetCustomerStateCommand::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.AdoptCustomerStateCommand adopt_customer_state = 4;</code>
     * @return \Com\Elarian\Hera\Proto\AdoptCustomerStateCommand
     */
    public function getAdoptCustomerState()
    {
        return $this->readOneof(4);
    }

    public function hasAdoptCustomerState()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.AdoptCustomerStateCommand adopt_customer_state = 4;</code>
     * @param \Com\Elarian\Hera\Proto\AdoptCustomerStateCommand $var
     * @return $this
     */
    public function setAdoptCustomerState($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\AdoptCustomerStateCommand::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.AddCustomerReminderCommand add_customer_reminder = 5;</code>
     * @return \Com\Elarian\Hera\Proto\AddCustomerReminderCommand
     */
    public function getAddCustomerReminder()
    {
        return $this->readOneof(5);
    }

    public function hasAddCustomerReminder()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.AddCustomerReminderCommand add_customer_reminder = 5;</code>
     * @param \Com\Elarian\Hera\Proto\AddCustomerReminderCommand $var
     * @return $this
     */
    public function setAddCustomerReminder($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\AddCustomerReminderCommand::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.AddCustomerReminderTagCommand add_customer_reminder_tag = 6;</code>
     * @return \Com\Elarian\Hera\Proto\AddCustomerReminderTagCommand
     */
    public function getAddCustomerReminderTag()
    {
        return $this->readOneof(6);
    }

    public function hasAddCustomerReminderTag()
    {
        return $this->hasOneof(6);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.AddCustomerReminderTagCommand add_customer_reminder_tag = 6;</code>
     * @param \Com\Elarian\Hera\Proto\AddCustomerReminderTagCommand $var
     * @return $this
     */
    public function setAddCustomerReminderTag($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\AddCustomerReminderTagCommand::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.CancelCustomerReminderCommand cancel_customer_reminder = 7;</code>
     * @return \Com\Elarian\Hera\Proto\CancelCustomerReminderCommand
     */
    public function getCancelCustomerReminder()
    {
        return $this->readOneof(7);
    }

    public function hasCancelCustomerReminder()
    {
        return $this->hasOneof(7);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.CancelCustomerReminderCommand cancel_customer_reminder = 7;</code>
     * @param \Com\Elarian\Hera\Proto\CancelCustomerReminderCommand $var
     * @return $this
     */
    public function setCancelCustomerReminder($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\CancelCustomerReminderCommand::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.CancelCustomerReminderTagCommand cancel_customer_reminder_tag = 8;</code>
     * @return \Com\Elarian\Hera\Proto\CancelCustomerReminderTagCommand
     */
    public function getCancelCustomerReminderTag()
    {
        return $this->readOneof(8);
    }

    public function hasCancelCustomerReminderTag()
    {
        return $this->hasOneof(8);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.CancelCustomerReminderTagCommand cancel_customer_reminder_tag = 8;</code>
     * @param \Com\Elarian\Hera\Proto\CancelCustomerReminderTagCommand $var
     * @return $this
     */
    public function setCancelCustomerReminderTag($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\CancelCustomerReminderTagCommand::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.UpdateCustomerTagCommand update_customer_tag = 9;</code>
     * @return \Com\Elarian\Hera\Proto\UpdateCustomerTagCommand
     */
    public function getUpdateCustomerTag()
    {
        return $this->readOneof(9);
    }

    public function hasUpdateCustomerTag()
    {
        return $this->hasOneof(9);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.UpdateCustomerTagCommand update_customer_tag = 9;</code>
     * @param \Com\Elarian\Hera\Proto\UpdateCustomerTagCommand $var
     * @return $this
     */
    public function setUpdateCustomerTag($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\UpdateCustomerTagCommand::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.DeleteCustomerTagCommand delete_customer_tag = 10;</code>
     * @return \Com\Elarian\Hera\Proto\DeleteCustomerTagCommand
     */
    public function getDeleteCustomerTag()
    {
        return $this->readOneof(10);
    }

    public function hasDeleteCustomerTag()
    {
        return $this->hasOneof(10);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.DeleteCustomerTagCommand delete_customer_tag = 10;</code>
     * @param \Com\Elarian\Hera\Proto\DeleteCustomerTagCommand $var
     * @return $this
     */
    public function setDeleteCustomerTag($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\DeleteCustomerTagCommand::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.UpdateCustomerSecondaryIdCommand update_customer_secondary_id = 11;</code>
     * @return \Com\Elarian\Hera\Proto\UpdateCustomerSecondaryIdCommand
     */
    public function getUpdateCustomerSecondaryId()
    {
        return $this->readOneof(11);
    }

    public function hasUpdateCustomerSecondaryId()
    {
        return $this->hasOneof(11);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.UpdateCustomerSecondaryIdCommand update_customer_secondary_id = 11;</code>
     * @param \Com\Elarian\Hera\Proto\UpdateCustomerSecondaryIdCommand $var
     * @return $this
     */
    public function setUpdateCustomerSecondaryId($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\UpdateCustomerSecondaryIdCommand::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.DeleteCustomerSecondaryIdCommand delete_customer_secondary_id = 12;</code>
     * @return \Com\Elarian\Hera\Proto\DeleteCustomerSecondaryIdCommand
     */
    public function getDeleteCustomerSecondaryId()
    {
        return $this->readOneof(12);
    }

    public function hasDeleteCustomerSecondaryId()
    {
        return $this->hasOneof(12);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.DeleteCustomerSecondaryIdCommand delete_customer_secondary_id = 12;</code>
     * @param \Com\Elarian\Hera\Proto\DeleteCustomerSecondaryIdCommand $var
     * @return $this
     */
    public function setDeleteCustomerSecondaryId($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\DeleteCustomerSecondaryIdCommand::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.UpdateCustomerMetadataCommand update_customer_metadata = 13;</code>
     * @return \Com\Elarian\Hera\Proto\UpdateCustomerMetadataCommand
     */
    public function getUpdateCustomerMetadata()
    {
        return $this->readOneof(13);
    }

    public function hasUpdateCustomerMetadata()
    {
        return $this->hasOneof(13);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.UpdateCustomerMetadataCommand update_customer_metadata = 13;</code>
     * @param \Com\Elarian\Hera\Proto\UpdateCustomerMetadataCommand $var
     * @return $this
     */
    public function setUpdateCustomerMetadata($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\UpdateCustomerMetadataCommand::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.DeleteCustomerMetadataCommand delete_customer_metadata = 14;</code>
     * @return \Com\Elarian\Hera\Proto\DeleteCustomerMetadataCommand
     */
    public function getDeleteCustomerMetadata()
    {
        return $this->readOneof(14);
    }

    public function hasDeleteCustomerMetadata()
    {
        return $this->hasOneof(14);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.DeleteCustomerMetadataCommand delete_customer_metadata = 14;</code>
     * @param \Com\Elarian\Hera\Proto\DeleteCustomerMetadataCommand $var
     * @return $this
     */
    public function setDeleteCustomerMetadata($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\DeleteCustomerMetadataCommand::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.LeaseCustomerAppDataCommand lease_customer_app_data = 15;</code>
     * @return \Com\Elarian\Hera\Proto\LeaseCustomerAppDataCommand
     */
    public function getLeaseCustomerAppData()
    {
        return $this->readOneof(15);
    }

    public function hasLeaseCustomerAppData()
    {
        return $this->hasOneof(15);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.LeaseCustomerAppDataCommand lease_customer_app_data = 15;</code>
     * @param \Com\Elarian\Hera\Proto\LeaseCustomerAppDataCommand $var
     * @return $this
     */
    public function setLeaseCustomerAppData($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\LeaseCustomerAppDataCommand::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.UpdateCustomerAppDataCommand update_customer_app_data = 16;</code>
     * @return \Com\Elarian\Hera\Proto\UpdateCustomerAppDataCommand
     */
    public function getUpdateCustomerAppData()
    {
        return $this->readOneof(16);
    }

    public function hasUpdateCustomerAppData()
    {
        return $this->hasOneof(16);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.UpdateCustomerAppDataCommand update_customer_app_data = 16;</code>
     * @param \Com\Elarian\Hera\Proto\UpdateCustomerAppDataCommand $var
     * @return $this
     */
    public function setUpdateCustomerAppData($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\UpdateCustomerAppDataCommand::class);
        $this->writeOneof(16, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.DeleteCustomerAppDataCommand delete_customer_app_data = 17;</code>
     * @return \Com\Elarian\Hera\Proto\DeleteCustomerAppDataCommand
     */
    public function getDeleteCustomerAppData()
    {
        return $this->readOneof(17);
    }

    public function hasDeleteCustomerAppData()
    {
        return $this->hasOneof(17);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.DeleteCustomerAppDataCommand delete_customer_app_data = 17;</code>
     * @param \Com\Elarian\Hera\Proto\DeleteCustomerAppDataCommand $var
     * @return $this
     */
    public function setDeleteCustomerAppData($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\DeleteCustomerAppDataCommand::class);
        $this->writeOneof(17, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.SendMessageCommand send_message = 18;</code>
     * @return \Com\Elarian\Hera\Proto\SendMessageCommand
     */
    public function getSendMessage()
    {
        return $this->readOneof(18);
    }

    public function hasSendMessage()
    {
        return $this->hasOneof(18);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.SendMessageCommand send_message = 18;</code>
     * @param \Com\Elarian\Hera\Proto\SendMessageCommand $var
     * @return $this
     */
    public function setSendMessage($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\SendMessageCommand::class);
        $this->writeOneof(18, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.SendMessageTagCommand send_message_tag = 19;</code>
     * @return \Com\Elarian\Hera\Proto\SendMessageTagCommand
     */
    public function getSendMessageTag()
    {
        return $this->readOneof(19);
    }

    public function hasSendMessageTag()
    {
        return $this->hasOneof(19);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.SendMessageTagCommand send_message_tag = 19;</code>
     * @param \Com\Elarian\Hera\Proto\SendMessageTagCommand $var
     * @return $this
     */
    public function setSendMessageTag($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\SendMessageTagCommand::class);
        $this->writeOneof(19, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.ReplyToMessageCommand reply_to_message = 20;</code>
     * @return \Com\Elarian\Hera\Proto\ReplyToMessageCommand
     */
    public function getReplyToMessage()
    {
        return $this->readOneof(20);
    }

    public function hasReplyToMessage()
    {
        return $this->hasOneof(20);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.ReplyToMessageCommand reply_to_message = 20;</code>
     * @param \Com\Elarian\Hera\Proto\ReplyToMessageCommand $var
     * @return $this
     */
    public function setReplyToMessage($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\ReplyToMessageCommand::class);
        $this->writeOneof(20, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.UpdateMessagingConsentCommand update_messaging_consent = 21;</code>
     * @return \Com\Elarian\Hera\Proto\UpdateMessagingConsentCommand
     */
    public function getUpdateMessagingConsent()
    {
        return $this->readOneof(21);
    }

    public function hasUpdateMessagingConsent()
    {
        return $this->hasOneof(21);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.UpdateMessagingConsentCommand update_messaging_consent = 21;</code>
     * @param \Com\Elarian\Hera\Proto\UpdateMessagingConsentCommand $var
     * @return $this
     */
    public function setUpdateMessagingConsent($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\UpdateMessagingConsentCommand::class);
        $this->writeOneof(21, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.InitiatePaymentCommand initiate_payment = 22;</code>
     * @return \Com\Elarian\Hera\Proto\InitiatePaymentCommand
     */
    public function getInitiatePayment()
    {
        return $this->readOneof(22);
    }

    public function hasInitiatePayment()
    {
        return $this->hasOneof(22);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.InitiatePaymentCommand initiate_payment = 22;</code>
     * @param \Com\Elarian\Hera\Proto\InitiatePaymentCommand $var
     * @return $this
     */
    public function setInitiatePayment($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\InitiatePaymentCommand::class);
        $this->writeOneof(22, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.CustomerActivityCommand customer_activity = 23;</code>
     * @return \Com\Elarian\Hera\Proto\CustomerActivityCommand
     */
    public function getCustomerActivity()
    {
        return $this->readOneof(23);
    }

    public function hasCustomerActivity()
    {
        return $this->hasOneof(23);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.CustomerActivityCommand customer_activity = 23;</code>
     * @param \Com\Elarian\Hera\Proto\CustomerActivityCommand $var
     * @return $this
     */
    public function setCustomerActivity($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\CustomerActivityCommand::class);
        $this->writeOneof(23, $var);

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

