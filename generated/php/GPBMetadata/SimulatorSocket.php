<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: simulator_socket.proto

namespace GPBMetadata;

class SimulatorSocket
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\CommonModel::initOnce();
        \GPBMetadata\MessagingModel::initOnce();
        \GPBMetadata\PaymentModel::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
simulator_socket.protocom.elarian.hera.protogoogle/protobuf/wrappers.protocommon_model.protomessaging_model.protopayment_model.proto"�
SimulatorToServerCommandQ
receive_message (26.com.elarian.hera.proto.ReceiveMessageSimulatorCommandH Q
receive_payment (26.com.elarian.hera.proto.ReceivePaymentSimulatorCommandH \\
update_payment_status (2;.com.elarian.hera.proto.UpdatePaymentStatusSimulatorCommandH B
entry"�
ReceiveMessageSimulatorCommand
customer_number (	F
channel_number (2..com.elarian.hera.proto.MessagingChannelNumber9
parts (2*.com.elarian.hera.proto.InboundMessageBody0

session_id (2.google.protobuf.StringValue*
cost (2.com.elarian.hera.proto.Cash+
duration (2.google.protobuf.Duration"�
ReceivePaymentSimulatorCommand
transaction_id (	D
channel_number (2,.com.elarian.hera.proto.PaymentChannelNumber
customer_number (	+
value (2.com.elarian.hera.proto.Cash5
status (2%.com.elarian.hera.proto.PaymentStatus"t
#UpdatePaymentStatusSimulatorCommand
transaction_id (	5
status (2%.com.elarian.hera.proto.PaymentStatus"~
SimulatorToServerCommandReply
status (
description (	8
message (2\'.com.elarian.hera.proto.OutboundMessage"�
ServerToSimulatorNotificationP
send_message (28.com.elarian.hera.proto.SendMessageSimulatorNotificationH U
make_voice_call (2:.com.elarian.hera.proto.MakeVoiceCallSimulatorNotificationH a
send_customer_payment (2@.com.elarian.hera.proto.SendCustomerPaymentSimulatorNotificationH _
send_channel_payment (2?.com.elarian.hera.proto.SendChannelPaymentSimulatorNotificationH X
checkout_payment (2<.com.elarian.hera.proto.CheckoutPaymentSimulatorNotificationH B
entry"$
"ServerToSimulatorNotificationReply"�
 SendMessageSimulatorNotification
org_id (	
customer_id (	

message_id (	?
customer_number (2&.com.elarian.hera.proto.CustomerNumberF
channel_number (2..com.elarian.hera.proto.MessagingChannelNumber8
message (2\'.com.elarian.hera.proto.OutboundMessage"�
"MakeVoiceCallSimulatorNotification
org_id (	
customer_id (	

session_id (	?
customer_number (2&.com.elarian.hera.proto.CustomerNumberF
channel_number (2..com.elarian.hera.proto.MessagingChannelNumber"�
(SendCustomerPaymentSimulatorNotification
org_id (	
customer_id (	
app_id (	C
wallet (21.com.elarian.hera.proto.PaymentWalletCounterPartyH A
purse (20.com.elarian.hera.proto.PaymentPurseCounterPartyH 
transaction_id (	?
customer_number (2&.com.elarian.hera.proto.CustomerNumberD
channel_number (2,.com.elarian.hera.proto.PaymentChannelNumber+
value	 (2.com.elarian.hera.proto.CashB
debit_party"�
\'SendChannelPaymentSimulatorNotification
org_id (	
app_id (	C
wallet (21.com.elarian.hera.proto.PaymentWalletCounterPartyH A
purse (20.com.elarian.hera.proto.PaymentPurseCounterPartyH 
transaction_id (	7
channel (2&.com.elarian.hera.proto.PaymentChannel
source (	
destination (	-
account	 (2.google.protobuf.StringValue+
value
 (2.com.elarian.hera.proto.CashB
debit_party"�
$CheckoutPaymentSimulatorNotification
org_id (	
customer_id (	
app_id (	C
wallet (21.com.elarian.hera.proto.PaymentWalletCounterPartyH A
purse (20.com.elarian.hera.proto.PaymentPurseCounterPartyH 
transaction_id (	?
customer_number (2&.com.elarian.hera.proto.CustomerNumberD
channel_number (2,.com.elarian.hera.proto.PaymentChannelNumber+
value	 (2.com.elarian.hera.proto.CashB
credit_partybproto3'
        , true);

        static::$is_initialized = true;
    }
}

